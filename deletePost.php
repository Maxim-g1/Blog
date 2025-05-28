<?php
require 'db.php';

if (isset($_GET['id'])) {
    
    $id = mysqli_real_escape_string($connection, $_GET['id']);
    
    $query = "DELETE FROM posts_list WHERE id='$id'";
    
    $result = mysqli_query($connection, $query);
    
}
mysqli_close($connection);
