<?php

function checkColor($color){
    if (isset($color)) {
        setcookie('style', $color, time() + 86400);
        header('Location: /index.php');
        exit;
    }
}

$color = $_POST['color'];
checkColor($color);
?>



