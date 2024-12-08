<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitivity</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <p>
    In PHP, all user-defined functions, classes, and keywords (e.g. if, else, while, echo, etc.)are NOT case-sensitive.								
    </p>

    <?php
    echo "Hai <br>"; 
    ECHO "Hello <br>"; 
    eChO "How are you";
    ?>
    <hr>

    <p>
    In PHP, all variables are case-sensitive.				
    </p>

    <?php
    $name = "Sakthi";
    echo "Hai $name<br>"; 
    ECHO "Hello $NAME<br>"; 
    eChO "How are you $Name";
    ?>

</body>
</html>