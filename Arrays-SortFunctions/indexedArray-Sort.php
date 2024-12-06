<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexedArray Sort</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
   <?php
    $age = array(5, 2, 8, 33, 25);

    // Indexed Array - Ascendingly Sorted
    sort($age);
    $n = count($age);

    echo "Indexed Array in Sorted Ascendingly : ";
    for($x = 0; $x < $n; $x++) {
    echo $age[$x];
    echo ", ";
    }
    echo "<br>";

    // Indexed Array - Descendingly Sorted
    rsort($age);
    $n = count($age);

    echo "Indexed Array in Sorted Descendingly : ";
    for($x = 0; $x < $n; $x++) {
    echo $age[$x];
    echo ", ";
    }




   ?>

</body> 
</html>