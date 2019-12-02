<?php

if (isset($_POST['signup'])) 
{
// Create connection
$conn = include('./config/connection.php');
 
// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$fullname = mysqli_real_escape_string($conn, $_REQUEST['fullname']);
$password = md5($_REQUEST['password']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
 
// Attempt insert query execution
$sql1 = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";

$result1 = $conn->query($sql1);

if($result1->num_rows > 0){
?>
    <script>
        swal("Tài khoản hoặc email đã tồn tại", "Vui lòng chọn tài khoản hoặc email khác!", "warning").then(() => {
            window.history.back();
        })
    </script>
<?php    
    exit;
} else{
    $sql2 = "INSERT INTO users (username, fullname, password, gender, email) VALUES ('$username', '$fullname' , '$password', '$gender', '$email')";
    
    $result2 = $conn->query($sql2);

    if ($result2){
?>
    <script>
        swal("Đăng kí thành công", "Bạn có thể đăng nhập rồi", "success").then(() => {
            window.history.back();
        })
    </script>
<?php   
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
 
// Close connection
mysqli_close($conn);    
}
?>