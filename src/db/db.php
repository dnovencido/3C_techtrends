<?php
    $server_name = "mysql_db";
    $user_name = "root";
    $password = "root";
    $database_name = "db_blog";

    //Create connection
    $conn = new mysqli($server_name, $user_name, $password, $database_name);
    
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>