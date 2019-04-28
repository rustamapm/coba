<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id = '".$id."'";
$action = mysqli_query($koneksi, $query);

if ($action) {
	header("location:../index.php?page=master_user&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=master_user&pesan=gagal");
}

?>