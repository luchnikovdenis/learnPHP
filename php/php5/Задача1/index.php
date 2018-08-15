<?php

function isUser(){
    return isset($_COOKIE['auth']);
}

function getUser() {
    return $_COOKIE['auth'];
}

if (!isUser()) {
    header('Location: /form.html');
    exit;
} else {
    echo Hello . " " . getUser() . "!";
}

?>
<br>
<br>
<br>
<br>
<a href="logout.php">Exit</a>
