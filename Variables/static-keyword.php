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

    run();
    echo "<br>";

    run();
    echo "<br>";

    run();
    echo "<br>";
    ?>
</body>
</html>