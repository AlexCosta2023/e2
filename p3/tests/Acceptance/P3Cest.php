<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class P3Cest
{
    # Establish variables I am using for this codeception test
    private $roundId;
    private $playerARolls;
    private $playerAPoints;
    private $playerBRolls;
    private $playerBPoints;
    private $winner;
    private $timestamp;

    # Testing the gameplay and history save
    public function playGame(AcceptanceTester $I)
    {
        // Go to homepage and click "Roll Dice" to start game
        $I->amOnPage('/');
        $I->click('[test=submit-button]');
        $I->seeElement('[test=results-div]');

        // Grab Round ID number
        $this->roundId = $I->grabTextFrom('[test=roundID]');
        $I->comment('Round ID: ' . $this->roundId);

        // Grab and display the rolls and points for Player A
        $this->playerARolls = $I->grabTextFrom('[test=playerArolls]');
        $this->playerAPoints = $I->grabTextFrom('[test=playerApoints]');
        $I->comment('Player A rolled the following: ' . $this->playerARolls);
        $I->comment('Player A scored the following points: ' . $this->playerAPoints);

        // Grab and display the rolls and points for Player B
        $this->playerBRolls = $I->grabTextFrom('[test=playerBrolls]');
        $this->playerBPoints = $I->grabTextFrom('[test=playerBpoints]');
        $I->comment('Player B rolled the following: ' . $this->playerBRolls);
        $I->comment('Player B scored the following points: ' . $this->playerBPoints);

        // Check who the winner is and display it
        $this->winner = $I->grabTextFrom('[test=winner]');
        $I->comment('The winner is: ' . $this->winner);

        // Check if the game result is saved in the history
        $I->comment('*** HISTORY CHECK ***');
        $I->comment('Time to test that the result was saved into history!');
        $I->amOnPage('/history');
        $I->see('Round #' . $this->roundId);

    }

    # Testing round details feature
    public function viewRoundDetails(AcceptanceTester $I)
    {
        // On the round page of the test run
        $I->comment('*** ROUND DETAIL CHECK ***');
        $I->comment('Time to test that the result round page can be accessed!');
        $I->amOnPage('/round?id=' . $this->roundId);

        // Check if the round details are displayed correctly
        $I->see('Round #' . $this->roundId);
        $I->see('Player A Rolls: ' . $this->playerARolls);
        $I->see('Player A Points: ' . $this->playerAPoints);
        $I->see('Player B Rolls: ' . $this->playerBRolls);
        $I->see('Player B Points: ' . $this->playerBPoints);
        $I->see('Winner: ' . $this->winner);
    }
}
