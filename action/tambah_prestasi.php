<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$query_insert = "INSERT INTO pencapaian_mahasiswa_3tahun(id_tingkat,nama_kegiatan,waktu,prestasi) 
				VALUES (
				'".$_POST['id_tingkat']."',
				'".$_POST['nama_kegiatan']."',
				'".$_POST['waktu']."',
				'".$_POST['prestasi']."'
				)";
$action = mysqli_query($koneksi,$query_insert);

if ($action) {
	header("location:../index.php?page=isi_standar3&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=isi_standar3&pesan=gagal");
}
?>