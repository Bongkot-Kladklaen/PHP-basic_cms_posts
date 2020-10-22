<?php 
    $path = realpath(dirname(__FILE__));
    require_once $path."../../../database/database.php";
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }

    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn,$sql);

?>