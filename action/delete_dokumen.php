<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$get = explode("-", $_GET['id']);
$id = $get[0];
$id_standar = $get[1];
$get_path = mysqli_query($koneksi, "SELECT path_dokumen FROM dokumen_pendukung WHERE id = '".$id."'");
$row = mysqli_fetch_assoc($get_path);
$path = $row['path_dokumen'];
unlink("../".$path);
$query_insert = "DELETE FROM dokumen_pendukung WHERE id = '".$id."'";
$action = mysqli_query($koneksi,$query_insert);

if ($action) {
	header("location:../index.php?page=isi_standar".$id_standar."&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=isi_standar".$id_standar."&pesan=gagal");
}
?>