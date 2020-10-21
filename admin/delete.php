<?php 

    require_once "database/database.php";

    if($_GET['del']){
        $id = $_GET['del'];
        $sql = " DELETE FROM posts WHERE post_id='$id' ";
        
        $result = mysqli_query($conn,$sql);
        if(!$result){
            echo "Error";
        } else {
            header("location: view_post.php");
        }
    }
?>