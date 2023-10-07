<!doctype html>
<html lang='en'>
<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    
<h1>Project 1</html>

<h2>Game Mechanics</h2>
<ul>
    <li>Create an array of six options (1-20)</li>
    <li>Randomly choose two options for each player</li>
    <li>Sum the values of the two options for each player</li>
    <li>Compare the sums and determine the winner</li>
</ul>

<h2>Results</h2>
<ul>
    <li>Player A Rolls: <?php echo implode(', ', $results['Player A Rolls']); ?></li>
    <li>Player A Points: <?php echo $results['Player A Points']; ?></li>
    <li>Player B Rolls: <?php echo implode(', ', $results['Player B Rolls']); ?></li>
    <li>Player B Points: <?php echo $results['Player B Points']; ?></li>
    <li>Winner: <?php echo $results['Winner']; ?></li>
</ul>

</body>
</html>