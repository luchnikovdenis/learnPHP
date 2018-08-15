<?php

function delete($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
        if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
    }
    return $result;
}

function isUser(){
    return isset($_COOKIE['auth']);
}

function getUser() {
    return $_COOKIE['auth'];
}

function logout() {
    unset($_COOKIE['auth']);
    setcookie('auth', '', time() -86400);
}

function checkLoginPassword($login, $password){
    $users = ['den' => '123', 'denis' => 'qwerty'];
    return isset($users[$login]) && $password == $users[$login];
}

function login($login){
    setcookie('auth', $login, time() +86400);
}