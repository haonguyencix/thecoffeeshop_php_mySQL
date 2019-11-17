<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "CoffeeShop");
mysqli_set_charset($link, 'UTF8');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO users (username, fullname, password, gender, email) VALUES ('$username', '$fullname' , '$password', '$gender', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully! <a href='http://localhost/register/table.php'>Go to user management page</a>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>