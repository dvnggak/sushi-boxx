<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$message = $_POST['message'];

mysqli_query($conn, "INSERT INTO messages VALUES (null,'$name','$email','$category','$message')");
header("location:index.php");
?>