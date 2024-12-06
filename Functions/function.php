<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<br>";
    function name($name, $age){
        echo "Your name is $name and your age is $age";
    }
    name("Sakthi", 21);

    echo "<hr>";

    function defaultName($name = "Unknown", $age = "Unknown"){
        echo "Your name is $name and your age is $age";
    }

    defaultName("Sakthi", 21); echo "<br>";
    defaultName();

    echo "<hr>";

    function sum($no1, $no2){
        $sum = $no1 + $no2 ;
        return $sum;
    }

    echo "The sum of 21 and 29 is " ;
    echo  sum(21, 29) ;
    ?>
</body>
</html>