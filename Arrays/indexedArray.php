<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <?php
    $name = array("Krish", "Smith", "John");
    echo "First index is " . $name[0] ;
    echo "<br>";

    echo "Second index is " . $name[1] ;
    echo "<br>";

    echo "Third index is " . $name[2] ;
    echo "<br>";  echo "<br>";
    
    echo "Total length of the Array : " . count($name);
    echo "<br>";  echo "<br>";

    $n = count($name);
    for($x = 0; $x < $n; $x++) {
        echo $name[$x];
        echo "<br>";
    }

    ?>
</body>
</html>