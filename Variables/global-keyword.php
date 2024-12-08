<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Keyword</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <?php 
    $name="Ram";

    function run(){
        $age = 21;
        global $name;

        echo $name;
        echo "<br>";
        
        echo $age;
        echo "<br>";
       
    }

    run();
    ?>
</body>
</html>