<?php

require '/lib.php';

if (empty($_POST['login']) || empty($_POST['password'])) {
    header('Location:/form.html');
    exit;
}

$login = $_POST['login'];
$password = $_POST['password'];

if (!checkLoginPassword($login, $password)) {
    header('Location:/form.html');
    exit;
}

login($login);
header('Location: /auth.php');
exit;

?>