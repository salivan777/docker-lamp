<?php
$mysqli = mysqli_connect('mysql', 'root', 'root');

if ($mysqli->connect_errno) {
    die('Ошибка соединения: ' . $mysqli->connect_error);
}

echo 'Успешно соединились';
echo '<div>=======</div>';
mysqli_close($mysqli);


echo '<div>=======</div>';

phpinfo();