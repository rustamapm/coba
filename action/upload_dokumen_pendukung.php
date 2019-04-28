<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

// Baca lokasi file sementar dan nama file dari form (fupload)
$id_standar = $_POST['id_standar'];
$lokasi_file = $_FILES['file_dokumen']['tmp_name'];
$nama_file   = $_FILES['file_dokumen']['name'];
// Tentukan folder untuk menyimpan file
$nama_file_simpan = date('YmdHis').'_'.$nama_file;
$folder = "../files/$nama_file_simpan";
$folder_simpan = "files/$nama_file_simpan";
// tanggal sekarang
// $tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  // Masukkan informasi file ke database
  $query = "INSERT INTO dokumen_pendukung (nama_dokumen, path_dokumen, id_standar, keterangan)
            VALUES('".$nama_file."', '".$folder_simpan."', '".$id_standar."', '".$_POST['keterangan_file']."')";
  $insert = mysqli_query($koneksi, $query);
  if ($insert) {
  	header("location:../index.php?page=isi_standar".$id_standar."&pesan=success");
  }else{
  	echo("Error description: " . mysqli_error($koneksi));
  	header("location:../index.php?page=isi_standar".$id_standar."&pesan=gagal");
  }
}
else{
  echo "File gagal di upload";
  header("location:../index.php?page=isi_standar".$id_standar."&pesan=gagal");
}

?>