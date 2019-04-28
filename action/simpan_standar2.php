<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$act = $_POST['act'];


if ($act == 'insert') {
	$query_insert = "INSERT INTO standar2(tata_pamong,kepemimpinan,sistem_pengelolaan,isi_umpan_balik_dosen,isi_umpan_balik_mhs,isi_umpan_balik_alumni,isi_umpan_balik_lulusan,tindak_lanjut_dosen, tindak_lanjut_mhs,tindak_lanjut_alumni,tindak_lanjut_lulusan,upaya_animo,upaya_mutu_manajemen,upaya_mutu_lulusan,upaya_kemitraan,upaya_dana_hibah) 
					VALUES (
					'".$_POST['tata_pamong']."',
					'".$_POST['kepemimpinan']."',
					'".$_POST['sistem_pengelolaan']."',
					'".$_POST['isi_umpan_balik_dosen']."',
					'".$_POST['isi_umpan_balik_mhs']."',
					'".$_POST['isi_umpan_balik_alumni']."',
					'".$_POST['isi_umpan_balik_lulusan']."',
					'".$_POST['tindak_lanjut_dosen']."',
					'".$_POST['tindak_lanjut_mhs']."',
					'".$_POST['tindak_lanjut_alumni']."',
					'".$_POST['tindak_lanjut_lulusan']."',
					'".$_POST['upaya_animo']."',
					'".$_POST['upaya_mutu_manajemen']."',
					'".$_POST['upaya_mutu_lulusan']."',
					'".$_POST['upaya_kemitraan']."',
					'".$_POST['upaya_dana_hibah']."'
					)";
	$action = mysqli_query($koneksi,$query_insert);

}else{
	$query_update = "UPDATE standar2 
					SET 
					tata_pamong = '".$_POST['tata_pamong']."',
					kepemimpinan = '".$_POST['kepemimpinan']."',
					sistem_pengelolaan = '".$_POST['sistem_pengelolaan']."',
					isi_umpan_balik_dosen = '".$_POST['isi_umpan_balik_dosen']."',
					isi_umpan_balik_mhs = '".$_POST['isi_umpan_balik_mhs']."',
					isi_umpan_balik_alumni = '".$_POST['isi_umpan_balik_alumni']."',
					isi_umpan_balik_lulusan = '".$_POST['isi_umpan_balik_lulusan']."',
					tindak_lanjut_dosen = '".$_POST['tindak_lanjut_dosen']."',
					tindak_lanjut_mhs = '".$_POST['tindak_lanjut_mhs']."',
					tindak_lanjut_alumni = '".$_POST['tindak_lanjut_alumni']."',
					tindak_lanjut_lulusan = '".$_POST['tindak_lanjut_lulusan']."',
					upaya_animo = '".$_POST['upaya_animo']."',
					upaya_mutu_manajemen = '".$_POST['upaya_mutu_manajemen']."',
					upaya_mutu_lulusan = '".$_POST['upaya_mutu_lulusan']."',
					upaya_kemitraan = '".$_POST['upaya_kemitraan']."',
					upaya_dana_hibah = '".$_POST['upaya_dana_hibah']."'
					WHERE id = '".$_POST['id']."'
					";
	$action = mysqli_query($koneksi, $query_update); 
}


// file edit
$total_update = count($_POST['id_dokumenu']);
for ($k=0; $k < $total_update; $k++) { 
	$tmpFilePath = $_FILES['dokumenu']['tmp_name'][$k];
	if ($tmpFilePath != ""){
		$get_path = mysqli_query($koneksi, "SELECT path_dokumen FROM dokumen_pendukung WHERE id = '".$_POST['id_dokumenu'][$k]."'");
		$row = mysqli_fetch_assoc($get_path);
		$path = $row['path_dokumen'];
		unlink("../".$path);

		$newFilePath = "../files/" . date('YmdHis').'_'.$_FILES['dokumenu']['name'][$k];
		$path_simpan = 'files/'.date('YmdHis').'_'.$_FILES['dokumenu']['name'][$k];
		if(move_uploaded_file($tmpFilePath, $newFilePath)) {
			 $query = "UPDATE dokumen_pendukung SET 
			 			nama_dokumen = '".$_FILES['dokumenu']['name'][$k]."',   
			 			path_dokumen = '".$path_simpan."', 
			 			id_standar = '2',
			 			keterangan = '".$_POST['keteranganu'][$k]."' 
			 			WHERE id = '".$_POST['id_dokumenu'][$k]."'
        				";
				$insert = mysqli_query($koneksi, $query);
		}
	}else{
		$query = "UPDATE dokumen_pendukung SET 
		 			id_standar = '2',
		 			keterangan = '".$_POST['keteranganu'][$k]."' 
		 			WHERE id = '".$_POST['id_dokumenu'][$k]."'
    				";
    	$insert = mysqli_query($koneksi, $query);
	}
}

// for file insert
$total_insert = count($_FILES['dokumen']['name']);
for ($i=0; $i < $total_insert; $i++) { 
	$tmpFilePath = $_FILES['dokumen']['tmp_name'][$i];
	if ($tmpFilePath != ""){
		$newFilePath = "../files/" . date('YmdHis').'_'.$_FILES['dokumen']['name'][$i];
		$path_simpan = 'files/'.date('YmdHis').'_'.$_FILES['dokumen']['name'][$i];
		if(move_uploaded_file($tmpFilePath, $newFilePath)) {
			 $query = "INSERT INTO dokumen_pendukung (nama_dokumen, path_dokumen, id_standar, keterangan)
        				VALUES('".$_FILES['dokumen']['name'][$i]."', '".$path_simpan."', '2', '".$_POST['keterangan'][$i]."')";
				$insert = mysqli_query($koneksi, $query);
		}
	} 	
} 

if ($action) {
	header("location:../index.php?page=isi_standar2&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=isi_standar2&pesan=gagal");
}
?>