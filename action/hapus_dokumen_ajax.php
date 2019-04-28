<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$id = $_POST['id'];
$get_path = mysqli_query($koneksi, "SELECT path_dokumen FROM dokumen_pendukung WHERE id = '".$id."'");
$row = mysqli_fetch_assoc($get_path);
$path = $row['path_dokumen'];
unlink("../".$path);
$query_insert = "DELETE FROM dokumen_pendukung WHERE id = '".$id."'";
$action = mysqli_query($koneksi,$query_insert);

if ($action) {
	echo json_encode("success");
}else{
	echo json_encode("gagal");
}
?>