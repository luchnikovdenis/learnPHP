<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Циклы и массивы</title>
</head>
<body>

<h2>Задание 1</h2>
<p>С помощью цикла while выведите все числа от 1 до 100, нацело делящиеся на 3</p>

<?php
$i = 1;
while ($i < 100) {
    if ($i % 3 == 0) {
        echo $i . '</br>';
    }
    $i++;
}
?>

<h2>Задание 2</h2>
<p>Напишите функцию, которая создает массив из $n случайных чисел и возвращает его в отсортированном по убыванию
    порядке.</p>
<?php

?>
<?php
function createSort($n)
{
    for($i = 0; $i < $n; $i++) {
        $a[$i] = rand(0,1000);
    }
    arsort($a);
    //var_dump($a);
    return $a;
}

createSort(50);

?>

<h2>Задание 3</h2>
<p>Создайте массив, в котором ключи - названия регионов РФ, значения - массивы городов, входящих в эти регионы. выведите
    на экран в примерно в таком виде:</p>
<ul>Московская область
    <li>Клин</li>
    <li>Реутов</li>
</ul>
<ul>Ярославская область
    <li>Ярославль</li>
    <li>Рыбинск</li>
</ul>
<?php
$arr = ['Московская область' => ['Клин', 'Реутов'], 'Ярославская область' => ['Ярославль', 'Рыбинск']];
//var_dump($arr);
?>
<ul> <?php
    foreach ($arr as $key => $city):
        echo $key;
        foreach ($city as $value):
    ?>
            <li>
                <?php echo $value;?>
            </li>
        <?php  endforeach;?>
    <?php  endforeach;?>
</ul>
</body>
</html>


