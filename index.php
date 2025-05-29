<?php
session_start();

if($_SESSION["admin"]){

}else{
    header("Location: login.php");
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
    <div class="wrapper">
    <h1 class="title">Блог</h1>
    <div class="block_content">
    <ul id="post_list">

    </ul>
    <form action="createPost.php" method="post" class="form">
        <input type="text" placeholder="Введите заголовок" name="title" class="input_title"><br>
        <textarea placeholder="Введите текст" name="textPost"class="input_text"></textarea><br>
        <button type="submit" class="input_btn">Опубликовать</button>
    </form>
    </div>
</div>
    <script src="JS/scrip.js"></script>
</body>

</html>