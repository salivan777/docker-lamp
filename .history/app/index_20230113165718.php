<?php
$mysqli = mysqli_connect('mysql', 'root', 'root');
if (!$mysqli) {
    die('Ошибка соединения: ' . $mysqli->connect_error);
}
echo 'Успешно соединились';
mysqli_close($mysqli);

phpinfo();