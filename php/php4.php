<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>

<p>Превратите получившийся сумматор в калькулятор с четырьмя операциями:
    сложение, вычитание, умножение, деление. Не забудьте обработать деление на
    ноль!
    Выбор операции можно осуществлять с помощью тега select.</p>

<form action="" method="post">
    <input type="text" name="a" placeholder="Введите число">
    <select name="math">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="b" placeholder="Введите число">
    <button name="do">=</button>
    <p style="display: inline"><?php calculate(); ?></p>
</form>

<?php
function calculate()
{
    if (isset($_POST["do"])) {
        switch ($_POST["math"]) {
            case '+':
                echo $_POST["a"] + $_POST["b"];
                break;
            case '-':
                echo $_POST["a"] - $_POST["b"];
                break;
            case '*':
                echo $_POST["a"] * $_POST["b"];
                break;
            case '/':
                if($_POST["b"] != 0){
                echo $_POST["a"] / $_POST["b"];
                } else {
                    echo "Делить на ноль нельзя";
                }
                break;
        }
    }
}
?>

<p>Создайте калькулятор, который будет определять тип выбранной пользователем
    операции, ориентируясь на нажатую кнопку. Данные, введённые пользователем в поля, должны сохраняться и выводиться
    вместе с результатом вычисления.</p>

<form action="" method="post">
    <input type="text" name="c"  value = "<?php echo $_POST["c"]; ?>">
    <p style="display: inline"> <?php echo $_POST["action"]; ?> </p>
    <input type="text" name="d"  value = "<?php echo $_POST["d"]; ?>">
    <p style="display: inline"> = <?php calc(); ?></p><br>
    <input type = "submit" name = "action" value = "+"></input>
    <input type = "submit" name = "action" value = "-"></input>
    <input type = "submit" name = "action" value = "*"></input>
    <input type = "submit" name = "action" value = "/"></input>
</form>

<?php
function calc()
{
    if (isset($_POST["action"])) {
        switch ($_POST["action"]) {
            case '+':
                echo $_POST["c"] + $_POST["d"];
                break;
            case '-':
                echo $_POST["c"] - $_POST["d"];
                break;
            case '*':
                echo $_POST["c"] * $_POST["d"];
                break;
            case '/':
                if($_POST["d"] != 0){
                    echo $_POST["c"] / $_POST["d"];
                } else {
                    echo "Делить на ноль нельзя";
                }
                break;
        }
    }
}
?>

</body>
</html>