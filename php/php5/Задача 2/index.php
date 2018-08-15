<?php

function setStyle() {
    return $_COOKIE['style'];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo setStyle() . ".css"; ?>">
    <title>Style</title>
</head>
<body>
    <form action="setting.php" method = "post">
        <input type="submit" name = "color" value = "red">
        <input type="submit" name = "color" value = "yellow">
        <input type="submit" name = "color" value = "blue">
    </form>
    <a href="deleteStyle.php">Сбросить стиль</a>
</body>
</html>
