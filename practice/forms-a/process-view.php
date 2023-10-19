<!doctype html>
<html lang='en'>
<head>
    <title></title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>
</head>
<body>
 
    <h1>Results</h1>

    <?php if ($haveAnswer == false) { ?>
        Please enter an answer. [<a href='index.php'>Please try again</a>]
    <?php } elseif ($correct) { ?>
        You got it correct!
    <?php } else { ?>
        Incorrect. [<a href='index.php'>Please try again</a>]
    <?php } ?>
</body>
</html>