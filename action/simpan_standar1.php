<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$act = $_POST['act'];

if ($act == 'insert') {
	$query_insert = "INSERT INTO standar1(mekanisme_penyusunan,visi,misi,tujuan,strategi_pencapaian,sosialisasi) 
					VALUES (
					'".$_POST['mekanisme_penyusunan']."',
					'".$_POST['visi']."',
					'".$_POST['misi']."',
					'".$_POST['tujuan']."',
					'".$_POST['strategi_pencapaian']."',
					'".$_POST['sosialisasi']."'
					)";
	$action = mysqli_query($koneksi,$query_insert);

}else{
	$query_update = "UPDATE standar1 
					SET 
					mekanisme_penyusunan = '".$_POST['mekanisme_penyusunan']."',
					visi = '".$_POST['visi']."',
					misi = '".$_POST['misi']."',
					tujuan = '".$_POST['tujuan']."',
					strategi_pencapaian = '".$_POST['strategi_pencapaian']."',
					sosialisasi = '".$_POST['sosialisasi']."' 
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
			 			id_standar = '1',
			 			keterangan = '".$_POST['keteranganu'][$k]."' 
			 			WHERE id = '".$_POST['id_dokumenu'][$k]."'
        				";
				$insert = mysqli_query($koneksi, $query);
		}
	}else{
		$query = "UPDATE dokumen_pendukung SET 
		 			id_standar = '1',
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
        				VALUES('".$_FILES['dokumen']['name'][$i]."', '".$path_simpan."', '1', '".$_POST['keterangan'][$i]."')";
				$insert = mysqli_query($koneksi, $query);
		}
	} 	
} 

if ($action) {
	header("location:../index.php?page=isi_standar1&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=isi_standar1&pesan=gagal");
}
?>