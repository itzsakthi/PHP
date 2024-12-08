<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <a href="get.php?subject=PHP&web=https://www.youtube.com/">$GET</a>
    <br> <br>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php 
    $actualName = $_GET['fname'];
    echo $actualName;
    ?>

</body>
</html>