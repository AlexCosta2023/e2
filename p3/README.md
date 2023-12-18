# Project 3: 20 Sided Dice Game
+ By: Alex Costa
+ URL: <http://e2p3.alexandercosta.net>

## Project Description

This app is a 20-sided dice game where two players (Player A and Player B) compete against each other. The winner is announced right on the index page and the round result is stored in the game's history.

## Graduate requirement
*x one of the following:*
+ [x] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
+ **Bootstrap:** 
Used for styling the application. [Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
+ **Background Image:** 
Used a dice image as a background to enhance the visual appearance of the application. [Spoonflower](https://www.spoonflower.com/en/shop/20-sided-dice)
+ **PHP Guide:**
Used the PHP Guide to figure out how to generate sessions using PHP for my app. [PHP Guide](https://www.php.net/manual/en/index.php)

## Notes for instructor
Thank you to Susan Buck for her DGMD E-2 course. It's quite clear that there was a lot of effort placed in her videos, explanations, assignments, and the e-2 Notes guide. Valuable resources which I'm sure I will go back to when I start dabbling in PHP at work. Thank you again!

## Codeception testing output
```
root@hes:/var/www/e2/p3# php vendor/bin/codecept run Acceptance --steps
Codeception PHP Testing Framework v5.0.12 https://stand-with-ukraine.pp.ua

Tests.Acceptance Tests (2) ----------------------------------------------------------------------------------------------------------------------
P3Cest: Play game
Signature: Tests\Acceptance\P3Cest:playGame
Test: tests/Acceptance/P3Cest.php:playGame
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 I see element "[test=results-div]"
 I grab text from "[test=roundID]"
 Round ID: 12
 I grab text from "[test=playerArolls]"
 I grab text from "[test=playerApoints]"
 Player A rolled the following: 6, 2
 Player A scored the following points: 8
 I grab text from "[test=playerBrolls]"
 I grab text from "[test=playerBpoints]"
 Player B rolled the following: 18, 20
 Player B scored the following points: 38
 I grab text from "[test=winner]"
 The winner is: Player B
 *** HISTORY CHECK ***
 Time to test that the result was saved into history!
 I am on page "/history"
 I see "Round #12"
 PASSED 

P3Cest: View round details
Signature: Tests\Acceptance\P3Cest:viewRoundDetails
Test: tests/Acceptance/P3Cest.php:viewRoundDetails
Scenario --
 *** ROUND DETAIL CHECK ***
 Time to test that the result round page can be accessed!
 I am on page "/round?id=12"
 I see "Round #12"
 I see "Player A Rolls: 6, 2"
 I see "Player A Points: 8"
 I see "Player B Rolls: 18, 20"
 I see "Player B Points: 38"
 I see "Winner: Player B"
 PASSED 

-------------------------------------------------------------------------------------------------------------------------------------------------
Time: 00:00.336, Memory: 12.00 MB

OK (2 tests, 8 assertions)
```