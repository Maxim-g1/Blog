<?php

$host = "localhost";
$username = "root";
$password = "mysql";
$database = "posts";

// Установить соединение с БД
$connection = new mysqli($host, $username, $password, $database);

// Проверка соединения
if ($connection->connect_error) {
    die("Ошибка подключения " . $connection->connect_error);
}
