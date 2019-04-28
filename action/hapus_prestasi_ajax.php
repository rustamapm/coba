<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$id = $_POST['id'];
$query_delete = "DELETE FROM pencapaian_mahasiswa_3tahun WHERE id = '".$id."'";
$action = mysqli_query($koneksi,$query_delete);

if ($action) {
	echo json_encode("success");
}else{
	echo json_encode("gagal");
}
?>