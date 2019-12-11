<?php 
    // Thực hiện kết nối
    $conn = new mysqli("localhost", "root", "", "CoffeeShop");

    // Font chữ tiếng việt
    $conn->set_charset("UTF8");
    
    // Kiểm tra kết nối

    // Thất bài thì trả về lỗi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Thành công thì trả về kết nối
    return $conn;
?>