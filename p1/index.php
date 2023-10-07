<?php

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
    $winner = 'Player A is the winner!';
} elseif ($playerA_sum < $playerB_sum) {
    $winner = 'Player B is the winner!';
} else {
    $winner = 'It is a tie!';
}

// Reporting the results
$results = [
    'Player A Rolls' => $playerA_moves,
    'Player A Points' => $playerA_sum,
    'Player B Rolls' => $playerB_moves,
    'Player B Points' => $playerB_sum,
    'Winner' => $winner,
];

require 'index-view.php';