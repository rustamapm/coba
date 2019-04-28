<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$act = $_POST['act_user'];

if ($act == 'insert') {
	$query_insert = "INSERT INTO users(username,password,role) 
					VALUES (
					'".$_POST['username']."',
					'".md5($_POST['password'])."',
					'".$_POST['role']."'
					)";
	$action = mysqli_query($koneksi,$query_insert);
}else{
	if (isset($_POST['password']) || ($_POST['password']) != "") {
		$query_update = "UPDATE users 
						SET 
						username = '".$_POST['username']."',
						password = '".md5($_POST['password'])."',
						role = '".$_POST['role']."' 
						WHERE id = '".$_POST['id']."'
						";
	}else{
		$query_update = "UPDATE users 
						SET 
						username = '".$_POST['username']."',
						role = '".$_POST['role']."' 
						WHERE id = '".$_POST['id']."'
						";
	}

	$action = mysqli_query($koneksi, $query_update); 
}

if ($action) {
	header("location:../index.php?page=master_user&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=master_user&pesan=gagal");
}
?>