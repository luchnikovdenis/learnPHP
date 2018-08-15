<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Название</th>
        <th>Фотография</th>
    </tr>
    <?php foreach ($items as $item) : ?>
    <tr>
        <td> <?php echo $item['title']; ?></td>
        <td><img src="<?php echo $item['path']; ?>" alt="" style="max-width: 200px;"></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="/add.php">Добавить фото</a>

</body>
</html>