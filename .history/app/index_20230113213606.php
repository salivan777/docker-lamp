<?php
$mysqli = mysqli_connect('mysql', 'root', 'root');

if ($mysqli->connect_errno) {
    die('Ошибка соединения: ' . $mysqli->connect_error);
}

echo 'Успешно соединились';
mysqli_close($mysqli);

phpinfo();

echo '<div></div>';
echo '<div></div>';
echo '<div></div>';