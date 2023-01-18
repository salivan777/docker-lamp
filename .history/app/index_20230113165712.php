<?php
$link = mysqli_connect('mysql', 'root', 'root');
if (!$link) {
    die('Ошибка соединения: ' . $mysqli->connect_error);
}
echo 'Успешно соединились';
mysqli_close($link);

phpinfo();