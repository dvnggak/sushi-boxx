<?php
include 'connection.php';

$order_id = $_POST['order_id'];
$customer = $_POST['customer'];
$contact = $_POST['contact'];
$salmon = $_POST['salmon'];
$shrimp = $_POST['shrimp'];
$octopus = $_POST['octopus'];
$tuna = $_POST['tuna'];
$tamago = $_POST['tamago'];
$wagyu = $_POST['wagyu'];

$query = "UPDATE food SET
            customer = '$customer',
            contact = '$contact',
            salmon = '$salmon',
            shrimp = '$shrimp',
            octopus = '$octopus',
            tuna = '$tuna',
            tamago = '$tamago',
            wagyu = '$wagyu'
        WHERE order_id =  $order_id
        ";

mysqli_query($conn, $query);
header("location:admin_panel.php");

?>
