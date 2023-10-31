<!doctype html>
<html lang='en'>
<head>
    <title>Project 2 - 20 Sided Dice Game by Alex Costa</title>
    <meta charset='utf-8'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="static/styles.css">
    <link rel="icon" href="static/favicon.ico" type="image/x-icon">
</head>
<body>

<!-- Background image -->
<div class="bg-image"></div>
    
<div class="container mt-5 content">
    <h1 class="text-center mb-4">Project 2 - 20 Sided Dice Game</h1>

    <div class="text-center mb-4">
        <!-- Form for choosing the number of games to play -->
        <form method='POST' action='process.php'>
            <div class="btn-group d-block mb-3" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="numGames" id="option1" value="5" autocomplete="off">
                <label class="btn btn-outline-primary" for="option1">&#9856; 5 Rolls</label>
                
                <input type="radio" class="btn-check" name="numGames" id="option2" value="10" autocomplete="off">
                <label class="btn btn-outline-primary" for="option2">&#9858; 10 Rolls</label>
                
                <input type="radio" class="btn-check" name="numGames" id="option3" value="25" autocomplete="off">
                <label class="btn btn-outline-primary" for="option3">&#9861; 25 Rolls</label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Play</button>
            </div>
        </form>
    </div>

    <!-- Section explaining the game mechanics and showing game results -->
    <div class="row justify-content-center mb-4">
        <div class="row mb-4">
            <div class="col-md-6 text-center">
                <h2>Game Mechanics</h2>
                1. Create an array of six options (1-20)<br>
                2. Randomly choose two options for each player<br>
                3. Sum the values of the two options for each player<br>
                4. Compare the sums and determine the winner<br>
            </div>
            <!-- Displaying the game results or instructions to start the game -->
            <div class="col-md-6 text-center">
                <h2>Game Results</h2>
                Choose one of the game options and click 'Play' to start!
            </div>
        </div>
    </div>
</div>

</body>
</html>
