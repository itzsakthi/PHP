<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST</title>
    <link rel="icon" href="../img/php.jpg">
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php 
    $actualName = $_POST['fname'];
    echo $actualName;
    ?>
</body>
</html>