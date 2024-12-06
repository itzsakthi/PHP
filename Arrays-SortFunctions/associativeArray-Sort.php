<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Sort</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
   <?php
   $age = array("Andy"=>"50", "Ben"=>"23", "Colan"=>"37");

   echo "<h3>Associative Array - Sorted by value</h3>";

   // Associative Array - Ascendingly Sorted by value
   echo "Associative Array sorted Ascendingly : ";
   echo "<br>";

   asort($age);
   $n = count($age);
   foreach($age as $x=>$x_value) {
    echo "Key = " . $x  . ", " . "Value = " . $x_value ;
    echo "<br>";
   }
   echo "<br>";


   // Associative Array - Descendingly Sorted by value
   echo "Associative Array sorted Descendingly : ";
   echo "<br>";

   arsort($age);
   $n = count($age);
   foreach($age as $x=>$x_value) {
    echo "Key = " . $x  . ", " . "Value = " . $x_value ;
    echo "<br>";
   }

   echo "<hr>";

   echo "<h3>Associative Array - Ascendingly Sorted by key</h3>";

   // Associative Array - Ascendingly Sorted by key
   echo "Associative Array sorted Ascendingly : ";
   echo "<br>";

   ksort($age);
   $n = count($age);
   foreach($age as $x=>$x_value) {
    echo "Key = " . $x  . ", " . "Value = " . $x_value ;
    echo "<br>";
   }
   echo "<br>";


   // Associative Array - Descendingly Sorted by value
   echo "Associative Array sorted Descendingly : ";
   echo "<br>";

   krsort($age);
   $n = count($age);
   foreach($age as $x=>$x_value) {
    echo "Key = " . $x  . ", " . "Value = " . $x_value ;
    echo "<br>";
   }

   ;



   ?>

</body> 
</html>