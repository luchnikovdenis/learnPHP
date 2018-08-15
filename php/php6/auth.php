<?php
require '/lib.php';

$dir = "gallery";
$files = scandir($dir);
$files = delete($files);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
<h1>Привет, <?php echo getUser()?></h1>
<form action="upload.php" method = "post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <input type="file" name ="userfile">
    <input type="submit" value ="Загрузить">
</form>
<br>
<?php for ($i = 0; $i < count($files); $i++) { ?>
    <img src="<?=$dir."/".$files[$i]?>" alt="" />
<?php } ?>
<br>
<br>
<button><a href="logout.php">Exit</a></button>
</body>
</html>


