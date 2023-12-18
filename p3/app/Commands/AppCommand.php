<?php

namespace App\Commands;
use Faker\Factory;

class AppCommand extends Command
{
    # Start a fresh new 'rounds' table and seed several example games
    public function fresh() {
        $this->migrateDiceGame();
        $this->seedDiceGame();
    }

    # Start a fresh new 'rounds' table
    public function migrateDiceGame()
    {
        $this->app->db()->createTable('rounds', [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'player_a_rolls' => 'VARCHAR(255) NOT NULL',
            'player_a_points' => 'INT NOT NULL',
            'player_b_rolls' => 'VARCHAR(255) NOT NULL',
            'player_b_points' => 'INT NOT NULL',
            'winner' => 'VARCHAR(255) NOT NULL',
            'timestamp' => 'TIMESTAMP'
        ]);
    
        dump('Migration complete');
    }

    # Seed several example games into 'rounds' table using random numbers and Faker
    public function seedDiceGame()
    {
        $faker = Factory::create();
    
        for ($i = 10; $i > 0; $i--) {
            // Generate random rolls for player A and player B
            $player_a_roll1 = rand(1, 20);
            $player_a_roll2 = rand(1, 20);
            $player_b_roll1 = rand(1, 20);
            $player_b_roll2 = rand(1, 20);
            
            // Calculate points
            $player_a_points = $player_a_roll1 + $player_a_roll2;
            $player_b_points = $player_b_roll1 + $player_b_roll2;
            
            // Determine the winner
            $winner = ($player_a_points > $player_b_points) ? 'Player A' : 'Player B';
        
            $this->app->db()->insert('rounds', [
                'player_a_rolls' => "$player_a_roll1, $player_a_roll2",
                'player_a_points' => $player_a_points,
                'player_b_rolls' => "$player_b_roll1, $player_b_roll2",
                'player_b_points' => $player_b_points,
                'winner' => $winner,
                'timestamp' => $faker->dateTimeBetween('-'.$i.' days', 'now')->format('Y-m-d H:i:s')
            ]);
        }
    
        dump('Seeding complete');
    }       
}
