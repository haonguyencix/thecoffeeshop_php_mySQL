<?php
// Create connection
$conn = include('./config/connection.php');
 
// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_POST['username']);
$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$password = md5($_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

// Kiểm tra đã nhập đầy đủ thông tin chưa
if (!$username || !$fullname || !$password || !$email) {
    echo "Nhập bị thiếu rồi!";
    exit;
}
 
// Attempt insert query execution
$sql1 = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";

$result1 = $conn->query($sql1);

if($result1->num_rows > 0){
    echo "Tài khoản hoặc email có rồi!";
    exit;
} else{
    $sql2 = "INSERT INTO users (username, fullname, password, email) VALUES ('$username', '$fullname' , '$password', '$email')";
    
    $result2 = $conn->query($sql2);

    if ($result2){
        echo "Đăng kí thành công!";
    } else {
        echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
    }
}
 
// Close connection
$conn->close();    
?>