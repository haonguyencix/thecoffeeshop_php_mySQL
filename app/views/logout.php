<?php session_start(); 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // xóa session login
}
?>
<a style="font-size: 2rem" href="index.php">Trở về trang chủ</a>
