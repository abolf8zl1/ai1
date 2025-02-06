<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "first";
$conn = mysqli_connect($hostname, $username, $password , $database);

$user = $_POST['username'];
$pass = $_POST['password'];

if($conn) {
    $query = "SELECT * FROM `members` WHERE `username` = '$user' AND `password` = '$pass'";
    $result = mysqli_query($conn, $query);
}

if ($result->num_rows > 0) {
    session_start();
    $_SESSION['message'] = " 🎀بنااااازمت وارد شدی";
    header('location:index.php');
} else{
    session_start();
    $_SESSION['message'] = "🎀نام کاربری یا رمز عبورت اشتباهه خوشگله ";
    header('location:index.php');
}