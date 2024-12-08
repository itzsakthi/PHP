<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 100;
    $b = '100';

    var_dump($a == $b); echo "<br>";
    var_dump($a === $b); echo "<br>";
    var_dump($a != $b); echo "<br>";
    var_dump($a <> $b); echo "<br>";
    var_dump($a !== $b); echo "<br>";
    echo "<br>";
    
    var_dump($a < $b); echo "<br>";
    var_dump($a > $b); echo "<br>";
    var_dump($a <= $b); echo "<br>";
    var_dump($a >= $b); echo "<br>";
    echo "<hr>";

    $a = 1;
    $b = 0;
    var_dump($a and $b); echo "<br>";
    var_dump($a or $b); echo "<br>";
    var_dump($a xor $b); echo "<br>";
    echo "<br>";

    var_dump($a && $b); echo "<br>";
    var_dump($a || $b); echo "<br>";
    var_dump(!$b); echo "<br>";
    
    ?>
</body>
</html>