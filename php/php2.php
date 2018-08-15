<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions&functions</title>
</head>
<body>
<h2>Задача 1</h2>
<p>Изучите понятие «рекурсия», составьте рекурсивную
    функцию вычисления чисел Фибоначчи, проверьте ее
    работу</p>

<?php
function fibi($x)
{
    if ($x <= 3) {
        return $x;
    } else {
        return fibi($x-1) + fibi($x-2);
    }
}
echo fibi(10);
?>

<h2>Задача 2</h2>
<p>Напишите функцию, которая вычисляет доход по
вкладу. В качестве аргумента принимается сумма
вклада, срок в месяцах, годовой процент.
Возвращается сумма вклада по окончанию срока.
</p>

<?php
function calc_income($sum, $months, $percent)
{
    if ($sum > 0 && ($months >= 1 && $months <= 12) && $percent > 0){
        return $sum * $months * $percent / 12 / 100;
    } else {
        echo "Неверно введены данные";
    }

}
echo calc_income(1000000, 8, 3);
?>

<h2>Задача 3</h2>
<p>Напишите функцию, которая принимает на вход два
аргумента – число (1..31) и номер месяца (1..12).
Возвращает правильно сформированную дату на
русском языке. Например: «1 января» или «9 мая»</p>
<?php
function show_date($day, $month)
{
    if (($day < 1 || $day > 31) || ($month < 1 || $month > 12)) {
    	echo "В году 12 месяцев, а в месяце 31 день";
    } else {
    	switch ($month) {
            case 1:
                return $day . ' января';
                break;
            case 2:
                return $day . ' февраля';
                break;
            case 3:
                return $day . ' марта';
                break;
            case 4:
                return $day . ' апреля';
                break;
            case 5:
                return $day . ' мая';
                break;
            case 6:
                return $day . ' июня';
                break;
            case 7:
                return $day . ' июля';
                break;
            case 8:
                return $day . ' августа';
                break;
            case 9:
                return $day . ' сентября';
                break;
            case 10:
                return $day . ' октября';
                break;
            case 11:
                return $day . ' ноября';
                break;
            case 12:
                return $day . ' декабря';
                break;
    	}
    }
}
echo show_date(12, 6);
?>
</body>
</html>

