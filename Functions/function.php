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
    echo  sum(21, 29);

    // Additional functionality added below:

    echo "<hr>";

    // Function to calculate the difference between two numbers
    function difference($no1, $no2){
        $difference = $no1 - $no2;
        return $difference;
    }

    echo "The difference between 29 and 21 is ";
    echo difference(29, 21);

    echo "<hr>";

    // Function to calculate the product of two numbers
    function product($no1, $no2){
        $product = $no1 * $no2;
        return $product;
    }

    echo "The product of 21 and 29 is ";
    echo product(21, 29);

    echo "<hr>";

    // Function to calculate the division of two numbers
    function division($no1, $no2){
        if ($no2 != 0) {
            $division = $no1 / $no2;
            return $division;
        } else {
            return "Division by zero is not allowed";
        }
    }

    echo "The division of 29 by 7 is ";
    echo division(29, 7); // You can test with other values as well

    echo "<hr>";

    // Function to find the maximum of two numbers
    function maximum($no1, $no2){
        if ($no1 > $no2) {
            return $no1;
        } else {
            return $no2;
        }
    }

    echo "The maximum of 21 and 29 is ";
    echo maximum(21, 29);

    echo "<hr>";

    // Function to check if a number is even or odd
    function evenOrOdd($number){
        if ($number % 2 == 0) {
            return "$number is even.";
        } else {
            return "$number is odd.";
        }
    }

    echo evenOrOdd(21); echo "<br>";
    echo evenOrOdd(28);

    echo "<hr>";

    // Function to convert a temperature from Celsius to Fahrenheit
    function celsiusToFahrenheit($celsius){
        $fahrenheit = ($celsius * 9/5) + 32;
        return $fahrenheit;
    }

    echo "25°C is equal to " . celsiusToFahrenheit(25) . "°F";

    echo "<hr>";

    // Function to reverse a string
    function reverseString($string){
        return strrev($string);
    }

    echo "Reversed string of 'Sakthi' is " . reverseString("Sakthi");

    echo "<hr>";
?>
</body>
</html>
