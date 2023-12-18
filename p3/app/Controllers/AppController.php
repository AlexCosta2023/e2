<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {
        // Start the PHP session if it hasn't already been started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Retrieve the result from the session data
        $result = isset($_SESSION['result']) ? $_SESSION['result'] : null;

        // Fetch rounds history from the database
        $rounds = $this->app->db()->all('rounds');

        // Clear the session data for result
        unset($_SESSION['result']);

        // Return the view with the result data
        return $this->app->view('index', ['result' => $result, 'rounds' => $rounds]);
    }

    public function calculateGameResult()
    {
        // Create an array of six options (1-20)
        $options = range(1, 20);
        shuffle($options);
        $options = array_slice($options, 0, 6);

        // Player A's moves
        $playerA_moves = array_rand(array_flip($options), 2);
        $playerA_sum = array_sum($playerA_moves);

        // Player B's moves
        $playerB_moves = array_rand(array_flip($options), 2);
        $playerB_sum = array_sum($playerB_moves);

        // Determine the winner
        $winner = '';
        if ($playerA_sum > $playerB_sum) {
            $winner = 'Player A';
        } elseif ($playerA_sum < $playerB_sum) {
            $winner = 'Player B';
        } else {
            $winner = 'Tie';
        }

        // Return the result as an associative array
        return [
            'Player A Rolls' => implode(', ', $playerA_moves),
            'Player A Points' => $playerA_sum,
            'Player B Rolls' => implode(', ', $playerB_moves),
            'Player B Points' => $playerB_sum,
            'Winner' => $winner
        ];
    }

    private function saveGameResult($result)
    {
        // Prepare data for database insertion
        $data = [
            'player_a_rolls' => $result['Player A Rolls'],
            'player_a_points' => $result['Player A Points'],
            'player_b_rolls' => $result['Player B Rolls'],
            'player_b_points' => $result['Player B Points'],
            'winner' => $result['Winner'],
            'timestamp' => date('Y-m-d H:i:s')
        ];
    
        // Insert data into 'rounds' table
        $this->app->db()->insert('rounds', $data);
    }    

    public function process() 
    {
        // Do calculateGameResult() to retrieve result
        $result = $this->calculateGameResult();

        // Save the result to the database and get the round ID
        $roundId = $this->saveGameResult($result);       

        // Start the session if it hasn't already been started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Store the result and round ID in session data
        $_SESSION['result'] = $result;
        $_SESSION['roundId'] = $roundId;

        // Redirect to the homepage
        return $this->app->redirect('/', ['roundId' => $roundId]);
    }

    public function history()
    {
        // Fetch rounds history from the database
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', ['rounds' => $rounds]);
    }

    public function round()
    {
        // Retrieve the round ID from the query string
        $id = $_GET['id'] ?? null;
    
        // Making sure $id is valid and must be a number or else: redirect user to homepage
        if ($id === null || !is_numeric($id)) {
            return $this->app->redirect('/');
        }
    
        // Fetch details for a specific round using the provided ID
        $roundDetails = $this->app->db()->findById('rounds', $id);
    
        // Check if round details are found or else: redirect user to homepage
        if (!$roundDetails) {
            return $this->app->redirect('/');
        }
    
        // Return the view with the round details
        return $this->app->view('round', ['roundDetails' => $roundDetails]);
    }
    
}
