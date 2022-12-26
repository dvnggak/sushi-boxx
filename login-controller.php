<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'connection.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($conn,"SELECT * FROM admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['name'] = $data['name'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id_login'] = $data['id'];
	header("location:admin_panel.php");
} else {
	header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
?>