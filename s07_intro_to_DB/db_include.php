<?php
    $connection = mysqli_connect('localhost', 'root', '','users');
    if(!$connection){
        die("database connection failed");
    }
?>