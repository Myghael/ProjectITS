<?php
    $server = "localhost";
    $unmae = "root";
    $password = "";
    $db_name = "its_biology";

    $conn = mysqli_connect($server, $unmae, $password, $db_name);

    if(!$conn){
        echo "Connection failed!";
    }
?>