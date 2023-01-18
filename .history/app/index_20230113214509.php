<?php
$mysqli = mysqli_connect('mysql', 'root', 'root');
echo '<div>=======</div>';

if ($mysqli->connect_errno) {
    die('Ошибка соединения: ' . $mysqli->connect_error);
}

echo 'Успешно соединились';
mysqli_close($mysqli);


echo '<div>=======</div>';

phpinfo();