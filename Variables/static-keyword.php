<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Keyword</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <?php 

    function run(){
        static $x = 0;
        echo $x;
        $x++;
    }

    run();  // First call, x starts from 0
    echo "<br>";

    run();  // Second call, x will be 1
    echo "<br>";

    run();  // Third call, x will be 2
    echo "<br>";

    run();  // Fourth call, x will be 3
    echo "<br>";

    run();  // Fifth call, x will be 4
    echo "<br>";

    run();  // Sixth call, x will be 5
    echo "<br>";

    ?>

</body>
</html>
