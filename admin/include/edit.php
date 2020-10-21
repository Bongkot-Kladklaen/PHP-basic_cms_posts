<?php 
    $path = realpath(dirname(__FILE__));
    require_once $path."../../database/database.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header('location: ../login.php');
    }

    if($_GET['edit']){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM posts WHERE post_id = '$id'";
        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_array($result)) {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = date('y-m-d');
            $post_keywords = $row['post_keywords'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
        }
    }

    if ($_POST['update']) {
        $id = $_POST['edit_form'];
        $post_title = $_POST['title'];
        $post_date = date('y-m-d');
        $post_author = $_POST['author'];
        $post_keywords = $_POST['keywords'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $image_path_name = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_path_name, "../../img/$post_image");

        $sql = "UPDATE posts SET post_title='$post_title', post_date='$post_date', post_author='$post_author', post_image='$post_image', post_keywords='$post_keywords', post_content='$post_content' WHERE post_id='$id'";
        $result = mysqli_query($conn,$sql);

        if ($result) {
            echo "<script>alert('Post successfully');</script>";
            header("location: view_post.php");
        } else {
            echo "<script>alert('Something wrong');</script>";
        }

    }