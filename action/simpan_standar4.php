<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

$act = $_POST['act'];

//1
foreach ($_POST['nama_dosen_1'] as $key => $value) {
	if ($value) {
		$query_1 = "INSERT INTO standar4_dosen(nama_dosen,nidn,tgl_lahir,jabatan_akademik,gelar_akademik,pendidikan,asal_pt,bidang_keahlian,jenis_dosen,type_ps) 
						VALUES (
						'".$_POST['nama_dosen_1'][$key]."',
						'".$_POST['nidn_1'][$key]."',
						'".$_POST['tgl_lahir_1'][$key]."',
						'".$_POST['jabatan_akademik_1'][$key]."',
						'".$_POST['gelar_akademik_1'][$key]."',
						'".$_POST['pendidikan_1'][$key]."',
						'".$_POST['asal_pt_1'][$key]."',
						'".$_POST['bidang_keahlian_1'][$key]."',
						'1', '1'
						)";
		$action_1 = mysqli_query($koneksi, $query_1);
	}
}

if (isset($_POST['id_1u'])) {
	foreach ($_POST['id_1u'] as $key => $value) {
		$query_1 = "UPDATE standar4_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_1u'][$key]."',
							nidn = '".$_POST['nidn_1u'][$key]."',
							tgl_lahir = '".$_POST['tgl_lahir_1u'][$key]."',
							jabatan_akademik = '".$_POST['jabatan_akademik_1u'][$key]."',
							gelar_akademik = '".$_POST['gelar_akademik_1u'][$key]."',
							pendidikan = '".$_POST['pendidikan_1u'][$key]."',
							asal_pt = '".$_POST['asal_pt_1u'][$key]."',
							bidang_keahlian = '".$_POST['bidang_keahlian_1u'][$key]."',
							jenis_dosen = '1', 
							type_ps = '1'
							WHERE id = '".$value."'
						";

		$action_1 = mysqli_query($koneksi, $query_1);	
	}
}

//2
foreach ($_POST['nama_dosen_2'] as $key => $value) {
	if ($value) {
		$query_2 = "INSERT INTO standar4_dosen(nama_dosen,nidn,tgl_lahir,jabatan_akademik,gelar_akademik,pendidikan,asal_pt,bidang_keahlian,jenis_dosen,type_ps) 
						VALUES (
						'".$_POST['nama_dosen_2'][$key]."',
						'".$_POST['nidn_2'][$key]."',
						'".$_POST['tgl_lahir_2'][$key]."',
						'".$_POST['jabatan_akademik_2'][$key]."',
						'".$_POST['gelar_akademik_2'][$key]."',
						'".$_POST['pendidikan_2'][$key]."',
						'".$_POST['asal_pt_2'][$key]."',
						'".$_POST['bidang_keahlian_2'][$key]."',
						'1', '0'
						)";
		$action_2 = mysqli_query($koneksi, $query_2);
	}
}

if (isset($_POST['id_2u'])) {
	foreach ($_POST['id_2u'] as $key => $value) {
		$query_2 = "UPDATE standar4_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_2u'][$key]."',
							nidn = '".$_POST['nidn_2u'][$key]."',
							tgl_lahir = '".$_POST['tgl_lahir_2u'][$key]."',
							jabatan_akademik = '".$_POST['jabatan_akademik_2u'][$key]."',
							gelar_akademik = '".$_POST['gelar_akademik_2u'][$key]."',
							pendidikan = '".$_POST['pendidikan_2u'][$key]."',
							asal_pt = '".$_POST['asal_pt_2u'][$key]."',
							bidang_keahlian = '".$_POST['bidang_keahlian_2u'][$key]."',
							jenis_dosen = '1', 
							type_ps = '0'
							WHERE id = '".$value."'
						";

		$action_2 = mysqli_query($koneksi, $query_2);	
	}
}

//3
foreach ($_POST['nama_dosen_3'] as $key => $value) {
	if ($value) {
		$query_3 = "INSERT INTO standar4_aktivitas_dosen(nama_dosen,bidang_keahlian,kode_mata_kuliah,jumlah_kelas,
								jumlah_pertemuan_rencana,jumlah_pertemuan_laksana,jenis_dosen,type_ps) 
						VALUES (
						'".$_POST['nama_dosen_3'][$key]."',
						'".$_POST['bidang_keahlian_3'][$key]."',
						'".$_POST['kode_mata_kuliah_3'][$key]."',
						'".$_POST['jumlah_kelas_3'][$key]."',
						'".$_POST['jumlah_pertemuan_rencana_3'][$key]."',
						'".$_POST['jumlah_pertemuan_laksana_3'][$key]."',
						'1', '1'
						)";
		$action_3 = mysqli_query($koneksi, $query_3);
	}
}

if (isset($_POST['id_3u'])) {
	foreach ($_POST['id_3u'] as $key => $value) {
		$query_3 = "UPDATE standar4_aktivitas_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_3u'][$key]."',
							bidang_keahlian = '".$_POST['bidang_keahlian_3u'][$key]."',
							kode_mata_kuliah = '".$_POST['kode_mata_kuliah_3u'][$key]."',
							jumlah_kelas = '".$_POST['jumlah_kelas_3u'][$key]."',
							jumlah_pertemuan_rencana = '".$_POST['jumlah_pertemuan_rencana_3u'][$key]."',
							jumlah_pertemuan_laksana = '".$_POST['jumlah_pertemuan_laksana_3u'][$key]."',
							jenis_dosen = '1', 
							type_ps = '1'
							WHERE id = '".$value."'
						";

		$action_3 = mysqli_query($koneksi, $query_3);	
	}
}

//4
foreach ($_POST['nama_dosen_4'] as $key => $value) {
	if ($value) {
		$query_4 = "INSERT INTO standar4_aktivitas_dosen(nama_dosen,bidang_keahlian,kode_mata_kuliah,jumlah_kelas,
								jumlah_pertemuan_rencana,jumlah_pertemuan_laksana,jenis_dosen,type_ps) 
						VALUES (
						'".$_POST['nama_dosen_4'][$key]."',
						'".$_POST['bidang_keahlian_4'][$key]."',
						'".$_POST['kode_mata_kuliah_4'][$key]."',
						'".$_POST['jumlah_kelas_4'][$key]."',
						'".$_POST['jumlah_pertemuan_rencana_4'][$key]."',
						'".$_POST['jumlah_pertemuan_laksana_4'][$key]."',
						'1', '0'
						)";
		$action_4 = mysqli_query($koneksi, $query_4);
	}
}

if (isset($_POST['id_4u'])) {
	foreach ($_POST['id_4u'] as $key => $value) {
		$query_4 = "UPDATE standar4_aktivitas_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_4u'][$key]."',
							bidang_keahlian = '".$_POST['bidang_keahlian_4u'][$key]."',
							kode_mata_kuliah = '".$_POST['kode_mata_kuliah_4u'][$key]."',
							jumlah_kelas = '".$_POST['jumlah_kelas_4u'][$key]."',
							jumlah_pertemuan_rencana = '".$_POST['jumlah_pertemuan_rencana_4u'][$key]."',
							jumlah_pertemuan_laksana = '".$_POST['jumlah_pertemuan_laksana_4u'][$key]."',
							jenis_dosen = '1', 
							type_ps = '0'
							WHERE id = '".$value."'
						";

		$action_4 = mysqli_query($koneksi, $query_4);	
	}
}

//5
foreach ($_POST['nama_dosen_5'] as $key => $value) {
	if ($value) {
		$query_5 = "INSERT INTO standar4_dosen(nama_dosen,nidn,tgl_lahir,jabatan_akademik,gelar_akademik,pendidikan,asal_pt,bidang_keahlian,jenis_dosen,type_ps) 
						VALUES (
						'".$_POST['nama_dosen_5'][$key]."',
						'".$_POST['nidn_5'][$key]."',
						'".$_POST['tgl_lahir_5'][$key]."',
						'".$_POST['jabatan_akademik_5'][$key]."',
						'".$_POST['gelar_akademik_5'][$key]."',
						'".$_POST['pendidikan_5'][$key]."',
						'".$_POST['asal_pt_5'][$key]."',
						'".$_POST['bidang_keahlian_5'][$key]."',
						'0', '1'
						)";
		$action_5 = mysqli_query($koneksi, $query_5);
	}
}

if (isset($_POST['id_5u'])) {
	foreach ($_POST['id_5u'] as $key => $value) {
		$query_5 = "UPDATE standar4_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_5u'][$key]."',
							nidn = '".$_POST['nidn_5u'][$key]."',
							tgl_lahir = '".$_POST['tgl_lahir_5u'][$key]."',
							jabatan_akademik = '".$_POST['jabatan_akademik_5u'][$key]."',
							gelar_akademik = '".$_POST['gelar_akademik_5u'][$key]."',
							pendidikan = '".$_POST['pendidikan_5u'][$key]."',
							asal_pt = '".$_POST['asal_pt_5u'][$key]."',
							bidang_keahlian = '".$_POST['bidang_keahlian_5u'][$key]."',
							jenis_dosen = '0', 
							type_ps = '1'
							WHERE id = '".$value."'
						";

		$action_5 = mysqli_query($koneksi, $query_5);	
	}
}

//6
foreach ($_POST['nama_dosen_6'] as $key => $value) {
	if ($value) {
		$query_6 = "INSERT INTO standar4_aktivitas_dosen(nama_dosen,bidang_keahlian,kode_mata_kuliah,jumlah_kelas,
								jumlah_pertemuan_rencana,jumlah_pertemuan_laksana,jenis_dosen,type_ps) 
						VALUES (
						'".$_POST['nama_dosen_6'][$key]."',
						'".$_POST['bidang_keahlian_6'][$key]."',
						'".$_POST['kode_mata_kuliah_6'][$key]."',
						'".$_POST['jumlah_kelas_6'][$key]."',
						'".$_POST['jumlah_pertemuan_rencana_6'][$key]."',
						'".$_POST['jumlah_pertemuan_laksana_6'][$key]."',
						'0', '1'
						)";
		$action_6 = mysqli_query($koneksi, $query_6);
	}
}

if (isset($_POST['id_6u'])) {
	foreach ($_POST['id_6u'] as $key => $value) {
		$query_6 = "UPDATE standar4_aktivitas_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_6u'][$key]."',
							bidang_keahlian = '".$_POST['bidang_keahlian_6u'][$key]."',
							kode_mata_kuliah = '".$_POST['kode_mata_kuliah_6u'][$key]."',
							jumlah_kelas = '".$_POST['jumlah_kelas_6u'][$key]."',
							jumlah_pertemuan_rencana = '".$_POST['jumlah_pertemuan_rencana_6u'][$key]."',
							jumlah_pertemuan_laksana = '".$_POST['jumlah_pertemuan_laksana_6u'][$key]."',
							jenis_dosen = '0', 
							type_ps = '1'
							WHERE id = '".$value."'
						";

		$action_6 = mysqli_query($koneksi, $query_6);	
	}
}

//7
foreach ($_POST['nama_tenaga_7'] as $key => $value) {
	if ($value) {
		$query_7 = "INSERT INTO standar4_tenagaahli_pembicara(nama_tenaga,nama_judul,waktu_pelaksanaan) 
						VALUES (
						'".$_POST['nama_tenaga_7'][$key]."',
						'".$_POST['nama_judul_7'][$key]."',
						'".$_POST['waktu_pelaksanaan_7'][$key]."'
						)";
		$action_7 = mysqli_query($koneksi, $query_7);
	}
}

if (isset($_POST['id_7u'])) {
	foreach ($_POST['id_7u'] as $key => $value) {
		$query_7 = "UPDATE standar4_tenagaahli_pembicara 
							SET 
							nama_tenaga = '".$_POST['nama_tenaga_7u'][$key]."',
							nama_judul = '".$_POST['nama_judul_7u'][$key]."',
							waktu_pelaksanaan = '".$_POST['waktu_pelaksanaan_7u'][$key]."'
							WHERE id = '".$value."'
						";

		$action_7 = mysqli_query($koneksi, $query_7);	
	}
}


//8
foreach ($_POST['nama_dosen_8'] as $key => $value) {
	if ($value) {
		$query_8 = "INSERT INTO standar4_peningkatan_kemampuan_ps(nama_dosen,jenjang_pendidikan_lanjut,bidang_studi,perguruan_tinggi,negara,tahun_mulai) 
						VALUES (
						'".$_POST['nama_dosen_8'][$key]."',
						'".$_POST['jenjang_pendidikan_lanjut_8'][$key]."',
						'".$_POST['bidang_studi_8'][$key]."',
						'".$_POST['perguruan_tinggi_8'][$key]."',
						'".$_POST['negara_8'][$key]."',
						'".$_POST['tahun_mulai_8'][$key]."'
						)";
		$action_8 = mysqli_query($koneksi, $query_8);
	}
}

if (isset($_POST['id_8u'])) {
	foreach ($_POST['id_8u'] as $key => $value) {
		$query_8 = "UPDATE standar4_peningkatan_kemampuan_ps 
							SET 
							nama_dosen = '".$_POST['nama_dosen_8u'][$key]."',
							jenjang_pendidikan_lanjut = '".$_POST['jenjang_pendidikan_lanjut_8u'][$key]."',
							bidang_studi = '".$_POST['bidang_studi_8u'][$key]."',
							perguruan_tinggi = '".$_POST['perguruan_tinggi_8u'][$key]."',
							negara = '".$_POST['negara_8u'][$key]."',
							tahun_mulai = '".$_POST['tahun_mulai_8u'][$key]."'
							WHERE id = '".$value."'
						";

		$action_8 = mysqli_query($koneksi, $query_8);	
	}
}

//9
foreach ($_POST['nama_dosen_9'] as $key => $value) {
	if ($value) {
		$query_9 = "INSERT INTO standar4_kegiatan_dosen_tetap(nama_dosen,id_jenis_kegiatan,tempat,waktu,sebagai) 
						VALUES (
						'".$_POST['nama_dosen_9'][$key]."',
						'".$_POST['id_jenis_kegiatan_9'][$key]."',
						'".$_POST['tempat_9'][$key]."',
						'".$_POST['waktu_9'][$key]."',
						'".$_POST['sebagai_9'][$key]."'
						)";
		$action_9 = mysqli_query($koneksi, $query_9);
	}
}

if (isset($_POST['id_9u'])) {
	foreach ($_POST['id_9u'] as $key => $value) {
		$query_9 = "UPDATE standar4_kegiatan_dosen_tetap 
							SET 
							nama_dosen = '".$_POST['nama_dosen_9u'][$key]."',
							id_jenis_kegiatan = '".$_POST['id_jenis_kegiatan_9u'][$key]."',
							tempat = '".$_POST['tempat_9u'][$key]."',
							waktu = '".$_POST['waktu_9u'][$key]."',
							sebagai = '".$_POST['sebagai_9u'][$key]."'
							WHERE id = '".$value."'
						";

		$action_9 = mysqli_query($koneksi, $query_9);	
	}
}

//10
foreach ($_POST['nama_dosen_10'] as $key => $value) {
	if ($value) {
		$query_10 = "INSERT INTO standar4_prestasi_dosen(nama_dosen,prestasi,waktu_pencapaian,id_tingkat) 
						VALUES (
						'".$_POST['nama_dosen_10'][$key]."',
						'".$_POST['prestasi_10'][$key]."',
						'".$_POST['waktu_pencapaian_10'][$key]."',
						'".$_POST['id_tingkat_10'][$key]."'
						)";
		$action_10 = mysqli_query($koneksi, $query_10);
	}
}

if (isset($_POST['id_10u'])) {
	foreach ($_POST['id_10u'] as $key => $value) {
		$query_10 = "UPDATE standar4_prestasi_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_10u'][$key]."',
							prestasi = '".$_POST['prestasi_10u'][$key]."',
							waktu_pencapaian = '".$_POST['waktu_pencapaian_10u'][$key]."',
							id_tingkat = '".$_POST['id_tingkat_10u'][$key]."'
							WHERE id = '".$value."'
						";

		$action_10 = mysqli_query($koneksi, $query_10);	
	}
}


//11
foreach ($_POST['nama_dosen_11'] as $key => $value) {
	if ($value) {
		$query_11 = "INSERT INTO standar4_keikutsertaan_dosen(nama_dosen,nama_organisasi,kurun_waktu,id_tingkat) 
						VALUES (
						'".$_POST['nama_dosen_11'][$key]."',
						'".$_POST['nama_organisasi_11'][$key]."',
						'".$_POST['kurun_waktu_11'][$key]."',
						'".$_POST['id_tingkat_11'][$key]."'
						)";
		$action_11 = mysqli_query($koneksi, $query_11);
	}
}

if (isset($_POST['id_11u'])) {
	foreach ($_POST['id_11u'] as $key => $value) {
		$query_11 = "UPDATE standar4_keikutsertaan_dosen 
							SET 
							nama_dosen = '".$_POST['nama_dosen_11u'][$key]."',
							nama_organisasi = '".$_POST['nama_organisasi_11u'][$key]."',
							kurun_waktu = '".$_POST['kurun_waktu_11u'][$key]."',
							id_tingkat = '".$_POST['id_tingkat_11u'][$key]."'
							WHERE id = '".$value."'
						";

		$action_11 = mysqli_query($koneksi, $query_11);	
	}
}

//12
foreach ($_POST['jenis_tenaga_12'] as $key => $value) {
	if ($value) {
		$query_12 = "INSERT INTO standar4_tenaga_pendidikan(jenis_tenaga,jumlah_s3,jumlah_s2,jumlah_s1,jumlah_d4,jumlah_d3,jumlah_d2,jumlah_d1,jumlah_sma_smk,unit_kerja) 
						VALUES (
						'".$_POST['jenis_tenaga_12'][$key]."',
						'".$_POST['jumlah_s3_12'][$key]."',
						'".$_POST['jumlah_s2_12'][$key]."',
						'".$_POST['jumlah_s1_12'][$key]."',
						'".$_POST['jumlah_d4_12'][$key]."',
						'".$_POST['jumlah_d3_12'][$key]."',
						'".$_POST['jumlah_d2_12'][$key]."',
						'".$_POST['jumlah_d1_12'][$key]."',
						'".$_POST['jumlah_sma_smk_12'][$key]."',
						'".$_POST['unit_kerja_12'][$key]."'
						)";
		$action_12 = mysqli_query($koneksi, $query_12);
	}
}

if (isset($_POST['id_12u'])) {
	foreach ($_POST['id_12u'] as $key => $value) {
		$query_12 = "UPDATE standar4_tenaga_pendidikan 
							SET 
							jenis_tenaga = '".$_POST['jenis_tenaga_12u'][$key]."',
							jumlah_s3 = '".$_POST['jumlah_s3_12u'][$key]."',
							jumlah_s2 = '".$_POST['jumlah_s2_12u'][$key]."',
							jumlah_s1 = '".$_POST['jumlah_s1_12u'][$key]."',
							jumlah_d4 = '".$_POST['jumlah_d4_12u'][$key]."',
							jumlah_d3 = '".$_POST['jumlah_d3_12u'][$key]."',
							jumlah_d2 = '".$_POST['jumlah_d2_12u'][$key]."',
							jumlah_d1 = '".$_POST['jumlah_d1_12u'][$key]."',
							jumlah_sma_smk = '".$_POST['jumlah_sma_smk_12u'][$key]."',
							unit_kerja = '".$_POST['unit_kerja_12u'][$key]."'
							WHERE id = '".$value."'
						";

		$action_12 = mysqli_query($koneksi, $query_12);	
	}
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
			 			id_standar = '4',
			 			keterangan = '".$_POST['keteranganu'][$k]."' 
			 			WHERE id = '".$_POST['id_dokumenu'][$k]."'
        				";
			$insert = mysqli_query($koneksi, $query);
		}
	}else{
		echo "tidak adaaaa";
		$query = "UPDATE dokumen_pendukung SET 
		 			id_standar = '4',
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
        				VALUES('".$_FILES['dokumen']['name'][$i]."', '".$path_simpan."', '4', '".$_POST['keterangan'][$i]."')";
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
	$query_insert = "INSERT INTO standar4(sistem_seleksi_pengembangan, monitoring_evaluasi, upaya_dilakukan_ps) 
					VALUES (
					'".$_POST['sistem_seleksi_pengembangan']."',
					'".$_POST['monitoring_evaluasi']."',
					'".$_POST['upaya_dilakukan_ps']."'
					)";
	$action = mysqli_query($koneksi,$query_insert);
}else{
	$query_update = "UPDATE standar4 
					SET 
					sistem_seleksi_pengembangan = '".$_POST['sistem_seleksi_pengembangan']."',
					monitoring_evaluasi = '".$_POST['monitoring_evaluasi']."',
					upaya_dilakukan_ps = '".$_POST['upaya_dilakukan_ps']."'
					WHERE id = '".$_POST['id']."'
					";
	$action = mysqli_query($koneksi, $query_update); 
}

if ($action) {
	header("location:../index.php?page=isi_standar4&pesan=success");
}else{
	echo("Error description: " . mysqli_error($koneksi));
	header("location:../index.php?page=isi_standar4&pesan=gagal");
}
?>