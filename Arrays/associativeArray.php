<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Indexed Array</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <?php
    $age = array("John"=>"25", "Will" => "30", "Smith"=>"35");
    echo "Age of John is " . $age["John"]; echo "<br>";
    echo "Age of Will is " . $age["Will"]; echo "<br>";
    echo "Age of Smith is " . $age["Smith"]; echo "<br>";

    echo "<br>";

    foreach($age as $x => $x_value) {
        echo $x . "=" . $x_value ;
        echo "<br>";
    }

    ?>
</body>
</html>