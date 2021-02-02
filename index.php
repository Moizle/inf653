

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>INF 653 - GET Assignment</title>
</head>
<body>

<div class = "container">
<?php
    $mode = "dark";
    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    $days = $age * 365;
    define('DAYS_IN_YEAR', $age*365);
    if(empty($firstname) || empty($lastname) || empty($age))
    {
        echo "<h1>Missing required parameters. Please check the URL.</h1>";
    }
    else{
        
        echo "<h1>Hi there! My name is {$firstname} {$lastname}!</h1><br>";
        echo "<p>I am {$age} years old.</p>";

        if($age > 0 && $age < 18)
        {echo "<p>I am not old enough to vote in the United States.</p>";}
        else
        {echo "<p>I am old enough to vote in the United States.</p>";}

        echo "<p>That means I'm at least {$days} days old.</p>";

    }
?>
</div>
    
</body>
</html>