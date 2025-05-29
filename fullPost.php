<?php
require 'db.php';


   if (isset($_GET['id'])) {

$query = "SELECT * FROM posts_list";
$result = mysqli_query($connection, $query);

$postData = [];
while ($row = mysqli_fetch_assoc($result)) {
    
    $postData[] = $row;
}
foreach ($postData as $postItem){
   
    if($postItem["id"]==$_GET['id']){
        $title=$postItem["title"];
        $textPost=$postItem["textPost"];
        $datePost=$postItem["datePost"];

        echo "<div class='wrapper'><p class='title'>$title</p><br> <p class='textPost'>$textPost</p><br> $datePost<br> 
        <div class='blockPost_a'><a class='post_a' href='index.php'>Назад к списку</a></div></div>";
    }
   
};
   }




mysqli_close($connection);
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
</body>
</html>