<?php
    $path = realpath(dirname(__FILE__));
    require_once $path."../../config/config.php";

    $hostname = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $database = DB_NAME;

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn){
        echo "Error";
    }
?>