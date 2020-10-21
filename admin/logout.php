<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['error']);

if(!isset($_SESSION['username'])){
    header("location: index.php");
}
?>