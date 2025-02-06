<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "first";
$conn = mysqli_connect($hostname, $username, $password , $database);

$name = $_POST['name'];
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if($conn)
    $query = "INSERT INTO `members`(`name`, `username`, `email`, `password`) VALUES ('$name','$user','$email','$pass')";
$result = mysqli_query($conn, $query);

session_start();
$_SESSION['message'] = "ثبت نام موفقیت امیز بود";


if($result)
    header('location:Done.php');


