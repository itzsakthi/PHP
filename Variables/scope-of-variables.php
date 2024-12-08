<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope of Variables</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <?php 
    $name="Ram";

    function run(){
        $age = 21;

       // echo $name; //This will give an error.
        
        echo $age;
        echo "<br>";
        echo "<br>";
    }

    run();

    echo $name;
    
    echo $age;
    echo "<br>";
    ?>
</body>
</html>