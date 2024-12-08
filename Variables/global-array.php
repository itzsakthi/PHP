<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Array</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <?php 
    $name="Ram";
    $lastName ="kumar";

    function run(){
        
       $GLOBALS['name'] = $GLOBALS['name'] . " " . $GLOBALS['lastName'] ;
       
    }

    run();
    echo $name;
    ?>
</body>
</html>

 
