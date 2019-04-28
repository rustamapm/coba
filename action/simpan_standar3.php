<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$act = $_POST['act'];

// standar3_mahasiswa_reguler
foreach ($_POST['tahun_akademik'] as $key => $value) {
	$query = "UPDATE standar3_mahasiswa_reguler 
				SET 
				daya_tampung = '".$_POST['daya_tampung'][$key]."',
				reguler_ikut = '".$_POST['reguler_ikut'][$key]."',
				reguler_lulus = '".$_POST['reguler_lulus'][$key]."',
				baru_reguler = '".$_POST['baru_reguler'][$key]."',
				baru_transfer = '".$_POST['baru_transfer'][$key]."',
				total_reguler = '".$_POST['total_reguler'][$key]."',
				total_transfer = '".$_POST['total_transfer'][$key]."',
				lulusan_reguler = '".$_POST['lulusan_reguler'][$key]."',
				lulusan_transfer = '".$_POST['lulusan_transfer'][$key]."',
				ipk_min = '".$_POST['ipk_min'][$key]."',
				ipk_rat = '".$_POST['ipk_rat'][$key]."',
				ipk_mak = '".$_POST['ipk_mak'][$key]."',
				ipk_275 = '".$_POST['ipk_275'][$key]."',
				ipk_275_350 = '".$_POST['ipk_275_350'][$key]."',
				ipk_350 = '".$_POST['ipk_350'][$key]."' 
				WHERE tahun_akademik = '".$value."'
			";
	$action_1 = mysqli_query($koneksi, $query);

}

foreach ($_POST['tahun_akademik_312'] as $key => $value) {
	$query = "UPDATE standar3_mahasiswa_non_reguler 
				SET 
				daya_tampung = '".$_POST['daya_tampung_312'][$key]."',
				calon_ikut = '".$_POST['calon_ikut_312'][$key]."',
				calon_lulus = '".$_POST['calon_lulus_312'][$key]."',
				baru_non_reguler = '".$_POST['baru_non_reguler_312'][$key]."',
				baru_transfer = '".$_POST['baru_transfer_312'][$key]."',
				total_non_reguler = '".$_POST['total_non_reguler_312'][$key]."',
				total_transfer = '".$_POST['total_transfer_312'][$key]."' 
				WHERE tahun_akademik = '".$value."'
			";

	$action_2 = mysqli_query($koneksi, $query);
}

// layanan pada mahasiswa
foreach ($_POST['id_32'] as $key => $value) {
	$query = "UPDATE standar3_layanan_mahasiswa 
				SET 
				jenis_pelayanan = '".$_POST['jenis_pelayanan'][$key]."',
				kegiatan = '".$_POST['kegiatan'][$key]."'
				WHERE id = '".$value."'
			";
	$action_4 = mysqli_query($koneksi, $query);
}

// hasil pelacakan 
foreach ($_POST['id_hasil_pelacakan'] as $key => $value) {
	$query = "UPDATE standar3_hasil_pelacakan 
				SET 
				jenis_kemampuan = '".$_POST['jenis_kemampuan'][$key]."',
				tgp_sangat_baik = '".$_POST['tgp_sangat_baik'][$key]."',
				tgp_baik = '".$_POST['tgp_baik'][$key]."',
				tgp_cukup = '".$_POST['tgp_cukup'][$key]."',
				tgp_kurang = '".$_POST['tgp_kurang'][$key]."',
				rencana_tindak_lanjut = '".$_POST['rencana_tindak_lanjut'][$key]."'
				WHERE id = '".$value."'
			";

	$action_5 = mysqli_query($koneksi, $query);	
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
			 			id_standar = '3',
			 			keterangan = '".$_POST['keteranganu'][$k]."' 
			 			WHERE id = '".$_POST['id_dokumenu'][$k]."'
        				";
			$insert = mysqli_query($koneksi, $query);
		}
	}else{
		echo "tidak adaaaa";
		$query = "UPDATE dokumen_pendukung SET 
		 			id_standar = '3',
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
        				VALUES('".$_FILES['dokumen']['name'][$i]."', '".$path_simpan."', '3', '".$_POST['keterangan'][$i]."')";
				$insert = mysqli_query($koneksi, $query);
		}
	} 	
} 

// pencapaian
foreach ($_POST['nama_kegiatan'] as $key => $value) {
	if ($value) {
		$query_insert = "INSERT INTO pencapaian_mahasiswa_3tahun(id_tingkat,nama_kegiatan,waktu,prestasi) 
						VALUES (
						'".$_POST['id_tingkat'][$key]."',
						'".$_POST['nama_kegiatan'][$key]."',
						'".$_POST['waktu'][$key]."',
						'".$_POST['prestasi'][$key]."'
						)";
		$action_pencapaian = mysqli_query($koneksi, $query_insert);
	}
}

// update pencapaian
if (isset($_POST['id_pencapaianu'])) {
	foreach ($_POST['id_pencapaianu'] as $key => $value) {
		$query_update = "UPDATE pencapaian_mahasiswa_3tahun 
							SET 
							id_tingkat = '".$_POST['id_tingkatu'][$key]."',
							nama_kegiatan = '".$_POST['nama_kegiatanu'][$key]."',
							waktu = '".$_POST['waktuu'][$key]."',
							prestasi = '".$_POST['prestasiu'][$key]."'
							WHERE id = '".$value."'
						";

		$action_upt_pencapaian = mysqli_query($koneksi, $query_update);	
	}
}


if ($act == 'insert') {
	$query_insert = "INSERT INTO standar3(hasil_pihak_pengguna,tindak_lanjut,rata_waktu_pekerjaan,data_waktu_pekerjaan,persen_kerja_sesuai,data_kerja_sesuai,himpunan_alumni) 
					VALUES (
					'".$_POST['hasil_pihak_pengguna']."',
					'".$_POST['tindak_lanjut']."',
					'".$_POST['rata_waktu_pekerjaan']."',
					'".$_POST['data_waktu_pekerjaan']."',
					'".$_POST['persen_kerja_sesuai']."',
					'".$_POST['data_kerja_sesuai']."',
					'".$_POST['himpunan_alumni']."'
					)";
	$action = mysqli_query($koneksi,$query_insert);
}else{
	$query_update = "UPDATE standar3 
					SET 
					hasil_pihak_pengguna = '".$_POST['hasil_pihak_pengguna']."',
					tindak_lanjut = '".$_POST['tindak_lanjut']."',
					rata_waktu_pekerjaan = '".$_POST['rata_waktu_pekerjaan']."',
					data_waktu_pekerjaan = '".$_POST['data_waktu_pekerjaan']."',
					persen_kerja_sesuai = '".$_POST['persen_kerja_sesuai']."',
					data_kerja_sesuai = '".$_POST['data_kerja_sesuai']."',
					himpunan_alumni = '".$_POST['himpunan_alumni']."'
					WHERE id = '".$_POST['id']."'
					";
	$action = mysqli_query($koneksi, $query_update); 
}

if ($action) {
	header("location:../index.php?page=isi_standar3&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=isi_standar3&pesan=gagal");
}
?>