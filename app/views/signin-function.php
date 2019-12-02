<?php
//Khai báo sử dụng session
session_start();

if (isset($_POST['signin'])) 
{
    // Create connection
    $conn = include('./config/connection.php');
     
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
?>
    <script>
        swal("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu", "Bấm nút OK để trở lại", "warning").then(() => {
            window.history.back();
        })
    </script>
<?php        
        exit;
    }
    
    // mã hóa pasword
    $password = md5($password);
    
    $sql = "SELECT username, password FROM users WHERE username='$username'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows == 0) {
?>
    <script>
        swal("Tên đăng nhập này không tồn tại", "Vui lòng kiểm tra lại", "warning").then(() => {
            window.history.back();
        })
    </script>
<?php        
    exit;
    }

    //Lấy mật khẩu trong database ra
    $row = $result->fetch_assoc();

    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
?>
    <script>
        swal("Mật khẩu không đúng", "Vui lòng nhập lại", "warning").then(() => {
            window.history.back();
        })
    </script>
<?php  
    exit;
    } else {

    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    }
    
    // Close connection
    mysqli_close($conn);
}
?>