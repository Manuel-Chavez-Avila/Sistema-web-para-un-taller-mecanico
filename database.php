<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "proyecto";
    $conn = new mysqli($host , $user, $pass, $dbname);
    mysqli_query($conn , "SET character_set_result=utf8");
    if($conn->connect_error){
        die("database Error : " . $conn->connect_error);
    }
?>