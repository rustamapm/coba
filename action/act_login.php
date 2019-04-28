<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['role'] = $row['role'];
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:../view/login/login.php?pesan=gagal");
}
?>