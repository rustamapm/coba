<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

foreach ($_POST['id_penilaian'] as $key => $value) {
	// cek apa sudah ada
	$query_cek = mysqli_query($koneksi, "SELECT * FROM penilaian WHERE id_penilaian = '".$value."'");
	$count_cek = mysqli_num_rows($query_cek);
	if ($count_cek == 0) { // insert
		$query_action = "INSERT INTO penilaian(id_penilaian, nilai, nilaixbobot) VALUES (
						'".$value."',
						'".$_POST['nilai'][$key]."',
						'".$_POST['nilai'][$key] * $_POST['bobot'][$key]."'
						)";

		$action = mysqli_query($koneksi, $query_action);
	}else{ // update
		$query_action = "UPDATE penilaian SET 
						nilai = '".$_POST['nilai'][$key]."',
						nilaixbobot = '".($_POST['nilai'][$key] * $_POST['bobot'][$key])."' 
						WHERE id_penilaian  = '".$value."'
						";
		$action = mysqli_query($koneksi, $query_action);
	}
}


if ($action) {
	header("location:../index.php?page=penilaian&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=penilaian&pesan=gagal");
}
?>