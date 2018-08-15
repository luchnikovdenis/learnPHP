<?php

function deleteStyle() {
    unset($_COOKIE['style']);
    setcookie('style', '', time() -86400);
}

deleteStyle();
header('Location: /index.php');
exit;