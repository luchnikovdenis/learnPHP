<?php

function Sql_query($sql)
{
    $link = mysqli_connect(
        'localhost',  /* Хост, к которому мы подключаемся */
        'root',       /* Имя пользователя */
        '',   /* Используемый пароль */
        'test');     /* База данных для запросов по умолчанию */

    if (!$link) {
        printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }

    $ret = [];

    if ($result = mysqli_query($link, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $ret[] = $row;
        }
    }

    return $ret;
}

function Sql_exec($sql)
{
    $link = mysqli_connect(
        'localhost',  /* Хост, к которому мы подключаемся */
        'root',       /* Имя пользователя */
        '',   /* Используемый пароль */
        'test');     /* База данных для запросов по умолчанию */

    if (!$link) {
        printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
    mysqli_query($link, $sql);
}