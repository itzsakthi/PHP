<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a = 30;

    if($a < 40) {
        echo("The given no is less than 40");
    }
    echo "<br>";

    if($a < 20) {
        echo("The given no is less than 20");
    } else {
        echo("The given no is greater than 20");
    }
    echo "<br>";

    if($a < 20) {
        echo("The given no is less than 40");
    } else if ($a < 25){
        echo("The given no is greater than 25");
    } else {
        echo("The given no is greater than 20 and 25");
    }
    echo "<br>";

    $fav = "yellow";

    switch ($fav) {
        case "yellow":
            echo "Yellow is your fav color";
            break;
        case "red":
            echo "red is your fav color";
            break;
        case "green":
            echo "green is your fav color";
            break;
        default:
            echo "Your fav color is not here";
    }


    ?>
</body>
</html>