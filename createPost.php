<?php
require 'db.php';


// isset() - проверяет инициализирована ли переменная (то есть объявлена и не равна NULL)
if (
    isset($_POST['title']) && !empty($_POST['title']) &&
    isset($_POST['textPost']) && !empty($_POST['textPost'])
) {



    // mysqli_real_escape_string -  экранирует специальные символы в строке для использования в SQL-выражении
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $textPost = mysqli_real_escape_string($connection, $_POST['textPost']);
    $date = date("Y-m-d");
    echo "$date";
    // Создание запроса
    $query = "INSERT INTO posts_list(title, textPost, datePost) VALUES ('$title', '$textPost', '$date')";
    // Выполнение запроса

    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: index.php");
        // Если запрос выполнен успешно
    } else {
        echo 'Ошибка при выполнении задачи';
    }
}
// Закрытие соединения БД
mysqli_close($connection);
