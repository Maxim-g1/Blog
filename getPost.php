<?php
require 'db.php';


$query = "SELECT * FROM posts_list ORDER BY datePost ASC";


$result = mysqli_query($connection, $query);

$posts = [];
while ($row = mysqli_fetch_assoc($result)) {

    $posts[] = $row;
}


echo json_encode($posts);

mysqli_close($connection);
