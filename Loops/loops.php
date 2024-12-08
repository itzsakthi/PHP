<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    echo "<h4>While Loop :</h4> ";

    $x = 1;
    while ($x < 3) {
        echo "$x <br>" ;
        $x++;
    }
    echo "<hr>";

    echo "<h4>Do while Loop :</h4> ";
    $x = 6;
    do {
        echo "$x <br>" ;
        $x++;
    }
    while ($x < 3);

    echo "<hr>";

    echo "<h4>For Loop :</h4> ";
    $n = 10;
    for($x = 0; $x < $n; $x++) {
        echo $x . "<br>";
    }
    echo "<hr>";

    echo "<h4>Foreach Loop :</h4> ";
    $color = array("red", "green", "blue", "yellow");
    foreach($color as $x){
        echo "$x <br>";
    }

?>
</body>
</html>