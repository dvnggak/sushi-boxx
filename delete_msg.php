<?php
include 'connection.php';

if(isset($_GET['msg_id'])){
$sql = mysqli_query($conn,"DELETE FROM messages WHERE msg_id = '$_GET[msg_id]'");


}

header("location:message_panel.php")
?>
