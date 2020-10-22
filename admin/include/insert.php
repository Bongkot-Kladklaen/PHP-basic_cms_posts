<?php
    $path = realpath(dirname(__FILE__));
    require_once $path."../../../database/database.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }

    $empty_data = array();

    if (isset($_POST['insert'])) {
        $post_title = $_POST['title'];
        $post_date = date('y-m-d');
        $post_author = $_POST['author'];
        $post_keywords = $_POST['keywords'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $image_path_name = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_path_name, "../../img/$post_image");

        $sql = "INSERT INTO posts (post_title, post_date, post_author, post_image, post_keywords, post_content) 
                VALUES  ('$post_title','$post_date','$post_author','$post_image','$post_keywords','$post_content')";
        $result = mysqli_query($conn,$sql);
        
        if ($result){
            echo "<script>alert('Post successfully');</script>";
        } else {
            echo "<script>alert('Something wrong');</script>";
        }
    }
?>