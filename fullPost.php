<?php
require "db.php";


   

$query = "SELECT * FROM posts_list";
$result = mysqli_query($connection, $query);

$postData = [];
while ($row = mysqli_fetch_assoc($result)) {
    
    $postData[] = $row;
}
foreach ($postData as $postItem){
   
    if($postItem["id"]==$_GET['id']){
        echo $postItem["title"];
        echo $postItem["textPost"];
        echo $postItem["datePost"];

    }
   
};





mysqli_close($connection);