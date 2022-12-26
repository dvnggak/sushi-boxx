<?php
include 'connection.php';

if(isset($_GET['order_id'])){
$sql = mysqli_query($conn,"DELETE FROM food WHERE order_id = '$_GET[order_id]'");


}

header("location:admin_panel.php")
?>
