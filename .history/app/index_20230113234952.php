<?php

declare(strict_types=1);

$mysqli = mysqli_connect('mysql', 'root', 'root');

if ($mysqli->connect_errno) {
    die('Ошибка соединения: ' . $mysqli->connect_error);
}


echo 'Успешно соединились';
mysqli_close($mysqli);
echo '<div>=======</div>';


echo '<div>=======</div>';

phpinfo();
