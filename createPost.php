<?php
require 'db.php';



if (
    isset($_POST['title']) && !empty($_POST['title']) &&
    isset($_POST['textPost']) && !empty($_POST['textPost'])
) {



   
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $textPost = mysqli_real_escape_string($connection, $_POST['textPost']);
    $date = date("Y-m-d");
    echo "$date";
   
    $query = "INSERT INTO posts_list(title, textPost, datePost) VALUES ('$title', '$textPost', '$date')";
    

    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: index.php");
      
    } else {
        echo 'Ошибка при выполнении задачи';
    }
}

mysqli_close($connection);
