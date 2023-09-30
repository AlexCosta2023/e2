<?php

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];

while (count($cards) > 0) {
    $playerCards[] = array_splice($cards, 0, 1)[0]; // Deal a card to player
    if (count($cards) > 0) { // Check if there are any remaining cards left
        $computerCards[] = array_splice($cards, 0, 1)[0]; // Deal one card to computer
    }
}

# Verify results
var_dump($playerCards);
var_dump($computerCards);