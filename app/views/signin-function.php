<?php
//Khai báo sử dụng session
session_start();

    // Create connection
    $conn = include('./config/connection.php');
     
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Sao không chịu nhập gì hết vậy!";
        exit;
    }
    
    // mã hóa pasword
    $password = md5($password);
    
    $sql = "SELECT username, password FROM users WHERE username='$username'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows == 0) {
        echo "Tên đăng nhập này không tồn tại!";
        exit;
    }

    //Lấy mật khẩu trong database ra
    $row = $result->fetch_assoc();

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Sai mật khẩu rồi chời ơi!";
        exit;
    } else {

    //Lưu tên đăng nhập
    $_SESSION['username'] = $row['username'];
        echo "Đăng nhập thành công!";
    }
    
    // Close connection
    mysqli_close($conn);
?>