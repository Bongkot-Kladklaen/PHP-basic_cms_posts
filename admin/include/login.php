<?php 
    $path = realpath(dirname(__FILE__));
    require_once  $path."../../database/database.php";

    session_start();
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password' ";
        $result = mysqli_query($conn,$sql);

        if(empty($username) || empty($password)){
            $_SESSION['error'] = 'empty';
            header("location: ../login.php");
        } else {
            if(mysqli_num_rows($result) > 0){
                $_SESSION['username'] = $username;
                header("location: ../index.php");
                
            } else {
                $_SESSION['error'] = 'error';
                header("location: ../login.php");
            }
        }

    }
?>