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
    <link rel="stylesheet" href="CSS/styll.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapperLogin">
   <h1 class="titleLogin">Вход</h1>
   <form method="POST" class="loginForm">
<input type="text" name="username" placeholder="Логин" class="login"><br>
<input type="password" name="password" placeholder="Пароль" class="password"><br>
<button type="submit" class="loginBtn">Войти</button>
</form> 
</div>
</body>
</html>
