<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$id = $_POST['id'];
$table = $_POST['table'];

$query_delete = "DELETE FROM $table WHERE id = '".$id."'";
$action = mysqli_query($koneksi,$query_delete);

if ($action) {
	echo json_encode("success");
}else{
	echo json_encode("gagal");
}
?>