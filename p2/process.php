<?php

// Retrieve the number of games from POST data
$num_games = $_POST['numGames'] ?? 5; 

// Array to store the results of each game
$overall_results = [];

for ($i = 0; $i < $num_games; $i++) {
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

    // Determine the winner and store results
    $winner = '';
    $playerA_wins = 0;
    $playerB_wins = 0;
    $ties = 0;

    if ($playerA_sum > $playerB_sum) {
        $winner = 'Player A';
        $playerA_wins = 1;
    } elseif ($playerA_sum < $playerB_sum) {
        $winner = 'Player B';
        $playerB_wins = 1;
    } else {
        $winner = 'Tie';
        $ties = 1;
    }

    // Reporting the results
    $overall_results[] = [
        'Game' => $i + 1,
        'Player A Rolls' => $playerA_moves,
        'Player A Points' => $playerA_sum,
        'Player B Rolls' => $playerB_moves,
        'Player B Points' => $playerB_sum,
        'Winner' => $winner,
        'Player A Wins' => $playerA_wins,
        'Player B Wins' => $playerB_wins,
        'Ties' => $ties,
    ];
}

require 'index-view.php';

?>