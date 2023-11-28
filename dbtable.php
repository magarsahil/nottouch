<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "databsefarmer";

    $conn = new mysqli($hostname, $username, $password, $db);

    if($conn->connect_error){
        die("Connection Failed: " .$conn->connect_error);
    }

    $query = "CREATE TABLE user(
        id INT(6)  AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(256) NOT NULL,
        email VARCHAR(256) NOT NULL,
        password VARCHAR(256)

    )";

    if($conn->query($query) == True){
        echo("Table is created sucessfully");
    }
    else{
        echo("Error creating table".$conn->connect_error);
    }
?>
?>