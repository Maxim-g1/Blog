<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Блог</h1>
    <ul id="post_list">

    </ul>
    <form action="createPost.php" method="post">
        <input type="text" placeholder="Введите заголовок" name="title"><br>
        <textarea placeholder="Введите текст" name="textPost"></textarea><br>
        <button type="submit">Опубликовать</button>
    </form>

    <script src="JS/script.js"></script>
</body>

</html>