<?php
//Khai báo sử dụng session
session_start();

if (isset($_POST['dangnhap'])) 
{
    // Create connection
    $conn = include('connection.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $query = "SELECT username, password FROM users WHERE username='$username' and password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 0) {
        echo "Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    die();

    // Close connection
    mysqli_close($conn);
}
?>