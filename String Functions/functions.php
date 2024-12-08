<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions</title>
</head>
<body>
    <?php
    $str = "Sakthi";

    echo strlen($str);
    echo "<br>";

    echo strpos($str, 'k');
    echo "<br>";

    echo trim($str, 'Sai');
    echo "<br>";

    echo "<hr>";

    $str2 = "It is a Festive night";
    print_r(explode(" ",$str2));
    echo "<br>";

    echo substr($str2, 3);
    echo "<br>";

    echo substr($str2, 6);
    echo "<br>";

    echo substr($str2, -5);
    echo "<br>";

    echo "<hr>";

    $str3 = "FizzBuzz";
    print_r(str_split($str3, 2));
    echo "<br>";

    $str4 = "Buzz";
    $str5 = "Buzz";

    echo strcmp($str4, $str5);
    echo "<br>";

    echo strcmp($str3, $str4);
    echo "<br>";

    echo strcmp($str4, $str3);
    echo "<br>";

    $arr = array("rahul", "ram", "jone");
    print_r(str_replace("rahul", "sakthi", $arr));
    echo "<br>";

    $find = array("Raja");
    $replace = array("T");

    $name = array("Sakthivel", "Raja");
    print_r(str_replace($find, $replace, $name));
    

    ?>
</body>
</html>