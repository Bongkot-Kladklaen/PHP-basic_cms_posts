<?php 

    require_once "../database/database.php";

    if($_GET['del']){
        $id = $_GET['del'];
        $sql = " DELETE FROM posts WHERE post_id='$id' ";
        
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Post has been deleted')</script>";
            header("location: view_post.php");
        }
    }
?>