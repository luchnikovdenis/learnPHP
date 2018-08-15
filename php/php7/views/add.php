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
<form action="/add.php" method="post" enctype="multipart/form-data">
    <label for="title">Название</label>
    <input type="text" id="title" name="title"><br>
    <label for="image">Фотография</label>
    <input type="file" id="image" name="image"><br>
    <input type="submit">
</form>
<a href="/index.php">На главную</a>

</body>
</html>