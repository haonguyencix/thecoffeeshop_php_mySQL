<?php 
    $conn = mysqli_connect("localhost", "root", "", "CoffeeShop");
    mysqli_set_charset($conn, 'UTF8');
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
?>