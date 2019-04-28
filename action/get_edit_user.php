<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$id = $_POST['id'];
$query = "SELECT * FROM users WHERE id = '".$id."'";
$data = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($data);

echo json_encode($row);

?>