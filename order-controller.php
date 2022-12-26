<?php
include 'connection.php';

$customer = $_POST['customer'];
$contact = $_POST['contact'];
$salmon = $_POST['salmon'];
$shrimp = $_POST['shrimp'];
$octopus = $_POST['octopus'];
$tuna = $_POST['tuna'];
$tamago = $_POST['tamago'];
$wagyu = $_POST['wagyu'];

mysqli_query($conn, "INSERT INTO food VALUES (null,'$customer','$contact','$salmon','$shrimp','$octopus','$tuna','$tamago','$wagyu')");
header("location:index.php");
?>