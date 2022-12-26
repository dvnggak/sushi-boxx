<?php
include 'connection.php';

$msg_id = $_POST['msg_id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$category = $_POST['category'];
$messages = $_POST['messages'];

mysqli_query($conn,"UPDATE messages SET name='$nama', email='$email', category='$category', message='$messages' WHERE msg_id='$msg_id'");

header("location:message_panel.php");

?>
