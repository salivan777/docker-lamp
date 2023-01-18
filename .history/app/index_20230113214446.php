<?php
$mysqli = mysqli_connect('mysql', 'root', 'root');

if ($mysqli->connect_errno) {
    die('Ошибка соединения: ' . $mysqli->connect_error);
}
phpinfo();

echo 'Успешно соединились';
mysqli_close($mysqli);


echo '<div></div>';
