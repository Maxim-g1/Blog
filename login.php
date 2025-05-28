<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "123") {
        $_SESSION["admin"] = true;
        header("Location: index.php");
        exit;
    } else {
        echo "Неверный логин или пароль!";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST">
<input type="text" name="username" placeholder="Логин">
<input type="password" name="password" placeholder="Пароль">
<button type="submit">Войти</button>
</form> 
</body>
</html>
