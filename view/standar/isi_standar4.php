<style type="text/css">
	.table thead th {
		vertical-align: middle !important;
	} 
</style>
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<?php 
				if ($_GET['page'] == 'isi_standar4') {
					$readonly = "";
					$judul = "Isi Standar 4";
				}else{
					$readonly = "readonly";
					$judul = "Lihat Standar 4";
				}

				$data = mysqli_query($koneksi, "SELECT * FROM standar4 LIMIT 1");
				$cek = mysqli_num_rows($data);
				if ($cek > 0) {
					$row = mysqli_fetch_assoc($data);
					$act = "update";
					$id = $row['id'];
					$sistem_seleksi_pengembangan = $row['sistem_seleksi_pengembangan'];
					$monitoring_evaluasi = $row['monitoring_evaluasi']; 
					$upaya_dilakukan_ps = $row['upaya_dilakukan_ps'];
				}else{
					$act = "insert";
					$id = "";
					$sistem_seleksi_pengembangan = '';
					$monitoring_evaluasi = '';
					$upaya_dilakukan_ps = '';
				}
				?>
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">
						Standar 4 &nbsp;
						<a href="action/cetak_standar1.php" target="_blank">
							<button class="btn btn-success btn-sm">Cetak Standar 4</button>
						</a>
					</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<div class="card-text">
						</div>
						<form class="form" method="post" action="action/simpan_standar4.php" enctype="multipart/form-data">
							<input type="hidden" name="act" value="<?php echo $act ?>">
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> <?php echo $judul; ?></h4>
								<div class="form-group">
									<label for="companyName">
										4.1 Sistem Seleksi dan Pengembangan<br>
										Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya)
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="sistem_seleksi_pengembangan" value="<?php echo $sistem_seleksi_pengembangan ?>" placeholder="Jelaskan sistem seleksi/perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan untuk menjamin mutu penyelenggaraan program akademik (termasuk informasi tentang ketersediaan pedoman tertulis dan konsistensi pelaksanaannya)" <?php echo $readonly ?>><?php echo $sistem_seleksi_pengembangan ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										4.2 Monitoring dan Evaluasi<br>
										Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya)
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="monitoring_evaluasi" value="<?php echo $monitoring_evaluasi ?>" placeholder="Jelaskan sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan (termasuk informasi tentang ketersediaan pedoman tertulis, dan monitoring dan evaluasi kinerja dosen dalam tridarma serta dokumentasinya)" <?php echo $readonly ?>><?php echo $monitoring_evaluasi ?></textarea>
								</div>

								<div class="form-group">
									<label for="companyName">
										4.3 Dosen Tetap
										<br><br>
										Dosen tetap dalam borang akreditasi BAN-PT adalah dosen yang diangkat dan ditempatkan
										sebagai tenaga tetap pada PT yang bersangkutan; termasuk dosen penugasan Kopertis,
										dan dosen yayasan pada PTS dalam bidang yang relevan dengan keahlian bidang studinya.
										Seorang dosen hanya dapat menjadi dosen tetap pada satu perguruan tinggi, dan
										mempunyai penugasan kerja minimum 36 jam/minggu.
										<br><br>
										Dosen tetap dipilah dalam 2 kelompok, yaitu:<br>
										1. dosen tetap yang bidang keahliannya sesuai dengan PS<br>
										2. dosen tetap yang bidang keahliannya di luar PS<br><br>
										4.3.1 Data dosen tetap yang bidang keahliannya sesuai dengan bidang PS:
									</label>
									<?php 
									$query_1 = "SELECT * FROM standar4_dosen WHERE jenis_dosen = '1' AND type_ps = '1'";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                                <th><center>Aksi</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>NIDN**</center></th>
						                                <th><center>Tgl. Lahir</center></th>
						                                <th><center>Jabatan Akademik***</center></th>
						                                <th><center>Gelar Akademik</center></th>
						                                <th><center>Pendidikan S1, S2, S3*</center></th>
						                                <th><center>Asal PT*</center></th>
						                                <th><center>Bidang Keahlian untuk Setiap Jenjang Pendidikan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_1">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_1">
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_1" onclick="hapus_detail_standar('standar4_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        		<td>
							                        			<input type="hidden" name="id_1u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_1u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="nidn_1u[]" value="<?php echo $row['nidn'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="date" class="form-control input-sm" name="tgl_lahir_1u[]" value="<?php echo $row['tgl_lahir'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jabatan_akademik_1u[]" value="<?php echo $row['jabatan_akademik'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="gelar_akademik_1u[]" value="<?php echo $row['gelar_akademik'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="pendidikan_1u[]" value="<?php echo $row['pendidikan'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="asal_pt_1u[]" value="<?php echo $row['asal_pt'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="bidang_keahlian_1u[]" value="<?php echo $row['bidang_keahlian'] ?>" class="form-control input-sm">
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_1">
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_1"><i class="icon-plus3"></i></span>
						                        		</td>
						                        		<td>
						                        			<input type="text" name="nama_dosen_1[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="nidn_1[]">
						                        		</td>
						                        		<td>
						                        			<input type="date" class="form-control input-sm" name="tgl_lahir_1[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="jabatan_akademik_1[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="gelar_akademik_1[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="pendidikan_1[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="asal_pt_1[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="bidang_keahlian_1[]" class="form-control input-sm">
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>NIDN**</center></th>
						                                <th><center>Tgl. Lahir</center></th>
						                                <th><center>Jabatan Akademik***</center></th>
						                                <th><center>Gelar Akademik</center></th>
						                                <th><center>Pendidikan S1, S2, S3 dan Asal PT*</center></th>
						                                <th><center>Bidang Keahlian untuk Setiap Jenjang Pendidikan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['nidn'] ?></td>
								                                <td><?php echo $row['tgl_lahir'] ?> </td>
								                                <td><?php echo $row['jabatan_akademik'] ?> </td>
								                                <td><?php echo $row['gelar_akademik'] ?> </td>
								                                <td><?php echo $row['pendidikan'].' - '.$row['asal_pt'] ?> </td>
								                                <td><?php echo $row['bidang_keahlian'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>

						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.3.2 Data dosen tetap yang bidang keahliannya di luar bidang PS:
									</label>
									<?php 
									$query_1 = "SELECT * FROM standar4_dosen WHERE jenis_dosen = '1' AND type_ps = '0'";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                                <th><center>Aksi</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>NIDN**</center></th>
						                                <th><center>Tgl. Lahir</center></th>
						                                <th><center>Jabatan Akademik***</center></th>
						                                <th><center>Gelar Akademik</center></th>
						                                <th><center>Pendidikan S1, S2, S3*</center></th>
						                                <th><center>Asal PT*</center></th>
						                                <th><center>Bidang Keahlian untuk Setiap Jenjang Pendidikan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_2">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_2">
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_2" onclick="hapus_detail_standar('standar4_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        		<td>
							                        			<input type="hidden" name="id_2u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_2u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="nidn_2u[]" value="<?php echo $row['nidn'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="date" class="form-control input-sm" name="tgl_lahir_2u[]" value="<?php echo $row['tgl_lahir'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jabatan_akademik_2u[]" value="<?php echo $row['jabatan_akademik'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="gelar_akademik_2u[]" value="<?php echo $row['gelar_akademik'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="pendidikan_2u[]" value="<?php echo $row['pendidikan'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="asal_pt_2u[]" value="<?php echo $row['asal_pt'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="bidang_keahlian_2u[]" value="<?php echo $row['bidang_keahlian'] ?>" class="form-control input-sm">
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_2">
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_2"><i class="icon-plus3"></i></span>
						                        		</td>
						                        		<td>
						                        			<input type="text" name="nama_dosen_2[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="nidn_2[]">
						                        		</td>
						                        		<td>
						                        			<input type="date" class="form-control input-sm" name="tgl_lahir_2[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="jabatan_akademik_2[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="gelar_akademik_2[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="pendidikan_2[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="asal_pt_2[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="bidang_keahlian_2[]" class="form-control input-sm">
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>NIDN**</center></th>
						                                <th><center>Tgl. Lahir</center></th>
						                                <th><center>Jabatan Akademik***</center></th>
						                                <th><center>Gelar Akademik</center></th>
						                                <th><center>Pendidikan S1, S2, S3 dan Asal PT*</center></th>
						                                <th><center>Bidang Keahlian untuk Setiap Jenjang Pendidikan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['nidn'] ?></td>
								                                <td><?php echo $row['tgl_lahir'] ?> </td>
								                                <td><?php echo $row['jabatan_akademik'] ?> </td>
								                                <td><?php echo $row['gelar_akademik'] ?> </td>
								                                <td><?php echo $row['pendidikan'].' - '.$row['asal_pt'] ?> </td>
								                                <td><?php echo $row['bidang_keahlian'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>

						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.3.4 Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya sesuai dengan PS, dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:
									</label>
									<?php 
									$query_1 = "SELECT a.*, b.nama_matkul  FROM standar4_aktivitas_dosen a 
												LEFT JOIN mata_kuliah b ON a.kode_mata_kuliah = b.kode_matkul
												WHERE a.jenis_dosen = '1' AND a.type_ps = '1'";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                                <th><center>Aksi</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>Bidang Keahlian</center></th>
						                                <th><center>Mata Kuliaj</center></th>
						                                <th><center>Jumlah Kelas</center></th>
						                                <th><center>Jumlah Pertemuan yang Direncanakan</center></th>
						                                <th><center>Jumlah Pertemuan yang Dilaksanakan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_3">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_3">
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_3" onclick="hapus_detail_standar('standar4_aktivitas_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        		<td>
							                        			<input type="hidden" name="id_3u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_3u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="bidang_keahlian_3u[]" value="<?php echo $row['bidang_keahlian'] ?>">
							                        		</td>
							                        		<td>
							                        			<select name="kode_mata_kuliah_3u[]" class="form-control input-sm">
							                        				<option value="">- Pilih Matkul -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM mata_kuliah";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['kode_matkul'] ?>" <?php if($row['kode_mata_kuliah'] == $row_tingkat['kode_matkul']) { echo 'selected'; } ?>><?php echo $row_tingkat['nama_matkul'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_kelas_3u[]" value="<?php echo $row['jumlah_kelas'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_rencana_3u[]" value="<?php echo $row['jumlah_pertemuan_rencana'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_laksana_3u[]" value="<?php echo $row['jumlah_pertemuan_laksana'] ?>" class="form-control input-sm">
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_3">
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_3"><i class="icon-plus3"></i></span>
						                        		</td>
						                        		<td>
							                        			<input type="text" name="nama_dosen_3[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="bidang_keahlian_3[]">
							                        		</td>
							                        		<td>
							                        			<select name="kode_mata_kuliah_3[]" class="form-control input-sm">
							                        				<option value="">- Pilih Matkul -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM mata_kuliah";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['kode_matkul'] ?>"><?php echo $row_tingkat['nama_matkul'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_kelas_3[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_rencana_3[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_laksana_3[]" class="form-control input-sm">
							                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>Bidang Keahlian</center></th>
						                                <th><center>Kode Mata Kuliah</center></th>
						                                <th><center>Nama Mata Kuliah</center></th>
						                                <th><center>Jumlah Kelas</center></th>
						                                <th><center>Jumlah Pertemuan yang Direncanakan</center></th>
						                                <th><center>Jumlah Pertemuan yang Dilaksanakan</center></th>
						                            </tr>
						                            <tr>
						                            	<th>(1)</th>
						                            	<th>(2)</th>
						                            	<th>(3)</th>
						                            	<th>(4)</th>
						                            	<th>(5)</th>
						                            	<th>(6)</th>
						                            	<th>(7)</th>
						                            	<th>(8)</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['bidang_keahlian'] ?></td>
								                                <td><?php echo $row['kode_mata_kuliah'] ?> </td>
								                                <td><?php echo $row['nama_matkul'] ?> </td>
								                                <td><?php echo $row['jumlah_kelas'] ?> </td>
								                                <td><?php echo $row['jumlah_pertemuan_rencana'] ?> </td>
								                                <td><?php echo $row['jumlah_pertemuan_laksana'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>

						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.3.5 Tuliskan data aktivitas mengajar dosen tetap yang bidang keahliannya di luar PS, dalam satu tahun akademik terakhir di PS ini dengan mengikuti format tabel berikut:
									</label>
									<?php 
									$query_1 = "SELECT a.*, b.nama_matkul  FROM standar4_aktivitas_dosen a 
												LEFT JOIN mata_kuliah b ON a.kode_mata_kuliah = b.kode_matkul
												WHERE a.jenis_dosen = '1' AND a.type_ps = '0'";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                                <th><center>Aksi</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>Bidang Keahlian</center></th>
						                                <th><center>Mata Kuliah</center></th>
						                                <th><center>Jumlah Kelas</center></th>
						                                <th><center>Jumlah Pertemuan yang Direncanakan</center></th>
						                                <th><center>Jumlah Pertemuan yang Dilaksanakan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_4">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_4">
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_4" onclick="hapus_detail_standar('standar4_aktivitas_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        		<td>
							                        			<input type="hidden" name="id_4u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_4u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="bidang_keahlian_4u[]" value="<?php echo $row['bidang_keahlian'] ?>">
							                        		</td>
							                        		<td>
							                        			<select name="kode_mata_kuliah_4u[]" class="form-control input-sm">
							                        				<option value="">- Pilih Matkul -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM mata_kuliah";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['kode_matkul'] ?>" <?php if($row['kode_mata_kuliah'] == $row_tingkat['kode_matkul']) { echo 'selected'; } ?>><?php echo $row_tingkat['nama_matkul'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_kelas_4u[]" value="<?php echo $row['jumlah_kelas'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_rencana_4u[]" value="<?php echo $row['jumlah_pertemuan_rencana'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_laksana_4u[]" value="<?php echo $row['jumlah_pertemuan_laksana'] ?>" class="form-control input-sm">
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_4">
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_4"><i class="icon-plus3"></i></span>
						                        		</td>
						                        		<td>
							                        			<input type="text" name="nama_dosen_4[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="bidang_keahlian_4[]">
							                        		</td>
							                        		<td>
							                        			<select name="kode_mata_kuliah_4[]" class="form-control input-sm">
							                        				<option value="">- Pilih Matkul -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM mata_kuliah";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['kode_matkul'] ?>"><?php echo $row_tingkat['nama_matkul'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_kelas_4[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_rencana_4[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_laksana_4[]" class="form-control input-sm">
							                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>Bidang Keahlian</center></th>
						                                <th><center>Kode Mata Kuliah</center></th>
						                                <th><center>Nama Mata Kuliah</center></th>
						                                <th><center>Jumlah Kelas</center></th>
						                                <th><center>Jumlah Pertemuan yang Direncanakan</center></th>
						                                <th><center>Jumlah Pertemuan yang Dilaksanakan</center></th>
						                            </tr>
						                            <tr>
						                            	<th>(1)</th>
						                            	<th>(2)</th>
						                            	<th>(3)</th>
						                            	<th>(4)</th>
						                            	<th>(5)</th>
						                            	<th>(6)</th>
						                            	<th>(7)</th>
						                            	<th>(8)</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['bidang_keahlian'] ?></td>
								                                <td><?php echo $row['kode_mata_kuliah'] ?> </td>
								                                <td><?php echo $row['nama_matkul'] ?> </td>
								                                <td><?php echo $row['jumlah_kelas'] ?> </td>
								                                <td><?php echo $row['jumlah_pertemuan_rencana'] ?> </td>
								                                <td><?php echo $row['jumlah_pertemuan_laksana'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>

						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.4 Dosen Tidak Tetap
										<br><br>
										4.4.1 Tuliskan data dosen tidak tetap pada PS dengan mengikuti format tabel berikut:
									</label>
									<?php 
									$query_1 = "SELECT * FROM standar4_dosen WHERE jenis_dosen = '0' AND type_ps = '1'";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                                <th><center>Aksi</center></th>
						                            	<th><center>Nama Dosen Tidak Tetap</center></th>
						                                <th><center>NIDN**</center></th>
						                                <th><center>Tgl. Lahir</center></th>
						                                <th><center>Jabatan Akademik***</center></th>
						                                <th><center>Gelar Akademik</center></th>
						                                <th><center>Pendidikan S1, S2, S3*</center></th>
						                                <th><center>Asal PT*</center></th>
						                                <th><center>Bidang Keahlian untuk Setiap Jenjang Pendidikan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_5">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_5">
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_5" onclick="hapus_detail_standar('standar4_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        		<td>
							                        			<input type="hidden" name="id_5u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_5u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="nidn_5u[]" value="<?php echo $row['nidn'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="date" class="form-control input-sm" name="tgl_lahir_5u[]" value="<?php echo $row['tgl_lahir'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jabatan_akademik_5u[]" value="<?php echo $row['jabatan_akademik'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="gelar_akademik_5u[]" value="<?php echo $row['gelar_akademik'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="pendidikan_5u[]" value="<?php echo $row['pendidikan'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="asal_pt_5u[]" value="<?php echo $row['asal_pt'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="bidang_keahlian_5u[]" value="<?php echo $row['bidang_keahlian'] ?>" class="form-control input-sm">
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_5">
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_5"><i class="icon-plus3"></i></span>
						                        		</td>
						                        		<td>
						                        			<input type="text" name="nama_dosen_5[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="nidn_5[]">
						                        		</td>
						                        		<td>
						                        			<input type="date" class="form-control input-sm" name="tgl_lahir_5[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="jabatan_akademik_5[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="gelar_akademik_5[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="pendidikan_5[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="asal_pt_5[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" name="bidang_keahlian_5[]" class="form-control input-sm">
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>NIDN**</center></th>
						                                <th><center>Tgl. Lahir</center></th>
						                                <th><center>Jabatan Akademik***</center></th>
						                                <th><center>Gelar Akademik</center></th>
						                                <th><center>Pendidikan S1, S2, S3*</center></th>
						                                <th><center>Asal PT*</center></th>
						                                <th><center>Bidang Keahlian untuk Setiap Jenjang Pendidikan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['nidn'] ?></td>
								                                <td><?php echo $row['tgl_lahir'] ?> </td>
								                                <td><?php echo $row['jabatan_akademik'] ?> </td>
								                                <td><?php echo $row['gelar_akademik'] ?> </td>
								                                <td><?php echo $row['pendidikan'] ?> </td>
								                                <td><?php echo $row['asal_pt'] ?> </td>
								                                <td><?php echo $row['bidang_keahlian'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>
						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
		                        	<label>
		                        		* Lampirkan fotokopi ijazah.<br>
		                        		** NIDN : Nomor Induk Dosen Nasional<br>
		                        		*** Dosen yang telah memperoleh sertifikat dosen agar diberi tanda (***)dan fotokopi sertifikatnya agar dilampirkan.
		                        	</label>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.4.2 Tuliskan data aktivitas mengajar dosen tidak tetap pada satu tahun terakhir di PS ini dengan mengikuti format tabel berikut:
									</label>
									<?php 
									$query_1 = "SELECT a.*, b.nama_matkul  FROM standar4_aktivitas_dosen a 
												LEFT JOIN mata_kuliah b ON a.kode_mata_kuliah = b.kode_matkul
												WHERE a.jenis_dosen = '0' AND a.type_ps = '1'";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                                <th><center>Aksi</center></th>
						                            	<th><center>Nama Dosen Tidak Tetap</center></th>
						                                <th><center>Bidang Keahlian</center></th>
						                                <th><center>Mata Kuliah</center></th>
						                                <th><center>Jumlah Kelas</center></th>
						                                <th><center>Jumlah Pertemuan yang Direncanakan</center></th>
						                                <th><center>Jumlah Pertemuan yang Dilaksanakan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_6">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_6">
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_6" onclick="hapus_detail_standar('standar4_aktivitas_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        		<td>
							                        			<input type="hidden" name="id_6u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_6u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="bidang_keahlian_6u[]" value="<?php echo $row['bidang_keahlian'] ?>">
							                        		</td>
							                        		<td>
							                        			<select name="kode_mata_kuliah_6u[]" class="form-control input-sm">
							                        				<option value="">- Pilih Matkul -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM mata_kuliah";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['kode_matkul'] ?>" <?php if($row['kode_mata_kuliah'] == $row_tingkat['kode_matkul']) { echo 'selected'; } ?>><?php echo $row_tingkat['nama_matkul'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_kelas_6u[]" value="<?php echo $row['jumlah_kelas'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_rencana_6u[]" value="<?php echo $row['jumlah_pertemuan_rencana'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_laksana_6u[]" value="<?php echo $row['jumlah_pertemuan_laksana'] ?>" class="form-control input-sm">
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_6">
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_6"><i class="icon-plus3"></i></span>
						                        		</td>
						                        		<td>
							                        			<input type="text" name="nama_dosen_6[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="bidang_keahlian_6[]">
							                        		</td>
							                        		<td>
							                        			<select name="kode_mata_kuliah_6[]" class="form-control input-sm">
							                        				<option value="">- Pilih Matkul -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM mata_kuliah";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['kode_matkul'] ?>"><?php echo $row_tingkat['nama_matkul'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_kelas_6[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_rencana_6[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" name="jumlah_pertemuan_laksana_6[]" class="form-control input-sm">
							                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Dosen Tetap</center></th>
						                                <th><center>Bidang Keahlian</center></th>
						                                <th><center>Kode Mata Kuliah</center></th>
						                                <th><center>Nama Mata Kuliah</center></th>
						                                <th><center>Jumlah Kelas</center></th>
						                                <th><center>Jumlah Pertemuan yang Direncanakan</center></th>
						                                <th><center>Jumlah Pertemuan yang Dilaksanakan</center></th>
						                            </tr>
						                            <tr>
						                            	<th>(1)</th>
						                            	<th>(2)</th>
						                            	<th>(3)</th>
						                            	<th>(4)</th>
						                            	<th>(5)</th>
						                            	<th>(6)</th>
						                            	<th>(7)</th>
						                            	<th>(8)</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['bidang_keahlian'] ?></td>
								                                <td><?php echo $row['kode_mata_kuliah'] ?> </td>
								                                <td><?php echo $row['nama_matkul'] ?> </td>
								                                <td><?php echo $row['jumlah_kelas'] ?> </td>
								                                <td><?php echo $row['jumlah_pertemuan_rencana'] ?> </td>
								                                <td><?php echo $row['jumlah_pertemuan_laksana'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>

						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.5 Upaya Peningkatan Sumber Daya Manusia (SDM) dalam tiga tahun terakhir
										<br><br>
										4.5.1 Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)
									</label>
									<?php 
									$query_1 = "SELECT * FROM standar4_tenagaahli_pembicara";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                            	<th><center>Nama Tenaga Ahli/Pakar</center></th>
						                                <th><center>Nama dan Judul Kegiatan</center></th>
						                                <th><center>Waktu Pelaksanaan</center></th>
						                                <th><center>Aksi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_7">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_7">
							                        		<td>
							                        			<input type="hidden" name="id_7u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_tenaga_7u[]" value="<?php echo $row['nama_tenaga'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="nama_judul_7u[]" value="<?php echo $row['nama_judul'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="date" class="form-control input-sm" name="waktu_pelaksanaan_7u[]" value="<?php echo $row['waktu_pelaksanaan'] ?>">
							                        		</td>
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_7" onclick="hapus_detail_standar('standar4_tenagaahli_pembicara',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_7">
						                        		<td>
						                        			<input type="text" name="nama_tenaga_7[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="nama_judul_7[]">
						                        		</td>
						                        		<td>
						                        			<input type="date" class="form-control input-sm" name="waktu_pelaksanaan_7[]">
						                        		</td>
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_7"><i class="icon-plus3"></i></span>
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Tenaga Ahli/Pakar</center></th>
						                                <th><center>Nama dan Judul Kegiatan</center></th>
						                                <th><center>Waktu Pelaksanaan</center></th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_tenaga'] ?></td>
								                                <td><?php echo $row['nama_judul'] ?></td>
								                                <td><?php echo $row['waktu_pelaksanaan'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>
						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.5.2 Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap)
									</label>
									<?php 
									$query_1 = "SELECT * FROM standar4_peningkatan_kemampuan_ps";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                            	<th><center>Nama Dosen</center></th>
						                                <th><center>Jenjang Pendidikan Lanjut</center></th>
						                                <th><center>Bidang Studi</center></th>
						                                <th><center>Perguruan Tinggi</center></th>
						                                <th><center>Negara</center></th>
						                                <th><center>Tahun Mulai Studi</center></th>
						                                <th><center>Aksi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_8">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_8">
							                        		<td>
							                        			<input type="hidden" name="id_8u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_8u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jenjang_pendidikan_lanjut_8u[]" value="<?php echo $row['jenjang_pendidikan_lanjut'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="bidang_studi_8u[]" value="<?php echo $row['bidang_studi'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="perguruan_tinggi_8u[]" value="<?php echo $row['perguruan_tinggi'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="negara_8u[]" value="<?php echo $row['negara'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="tahun_mulai_8u[]" value="<?php echo $row['tahun_mulai'] ?>">
							                        		</td>
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_8" onclick="hapus_detail_standar('standar4_peningkatan_kemampuan_ps',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_8">
						                        		<td>
						                        			<input type="text" name="nama_dosen_8[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jenjang_pendidikan_lanjut_8[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="bidang_studi_8[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="perguruan_tinggi_8[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="negara_8[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="tahun_mulai_8[]">
						                        		</td>
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_8"><i class="icon-plus3"></i></span>
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th><center>No.</center></th>
						                            	<th><center>Nama Dosen</center></th>
						                                <th><center>Jenjang Pendidikan Lanjut</center></th>
						                                <th><center>Bidang Studi</center></th>
						                                <th><center>Perguruan Tinggi</center></th>
						                                <th><center>Negara</center></th>
						                                <th><center>Tahun Mulai Studi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['jenjang_pendidikan_lanjut'] ?></td>
								                                <td><?php echo $row['bidang_studi'] ?> </td>
								                                <td><?php echo $row['perguruan_tinggi'] ?> </td>
								                                <td><?php echo $row['negara'] ?> </td>
								                                <td><?php echo $row['tahun_mulai'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>
						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.5.3. Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/lokakarya/penataran/workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri
									</label>
									<?php 
									$query_1 = "SELECT a.*, b.jenis FROM standar4_kegiatan_dosen_tetap a
												LEFT JOIN jenis_kegiatan b ON a.id_jenis_kegiatan = b.id";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                            	<th><center>Nama Dosen</center></th>
						                                <th><center>Jenis Kegiatan*</center></th>
						                                <th><center>Tempat</center></th>
						                                <th><center>Waktu</center></th>
						                                <th><center>Sebagai</center></th>
						                                <th><center>Aksi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_9">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_9">
							                        		<td>
							                        			<input type="hidden" name="id_9u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_9u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<select name="id_jenis_kegiatan_9u[]" class="form-control input-sm">
							                        				<option value="">- Pilih Jenis -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM jenis_kegiatan";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['id'] ?>" <?php if($row['id_jenis_kegiatan'] == $row_tingkat['id']) { echo 'selected'; } ?>><?php echo $row_tingkat['jenis'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="tempat_9u[]" value="<?php echo $row['tempat'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="date" class="form-control input-sm" name="waktu_9u[]" value="<?php echo $row['waktu'] ?>">
							                        		</td>
							                        		<td>
							                        			<select name="sebagai_9u[]" class="form-control input-sm">
							                        				<option value="">- Pilih Sebagai -</option>
							                        				<option value="0" <?php if($row['sebagai'] == '0') { echo 'selected'; } ?>>Penyaji</option>
							                        				<option value="1" <?php if($row['sebagai'] == '1') { echo 'selected'; } ?>>Peserta</option>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_9" onclick="hapus_detail_standar('standar4_kegiatan_dosen_tetap',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_9">
						                        		<td>
						                        			<input type="text" name="nama_dosen_9[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<select name="id_jenis_kegiatan_9[]" class="form-control input-sm">
						                        				<option value="">- Pilih Jenis -</option>
											                  	<?php
											                  	$query_tingkat = "SELECT * FROM jenis_kegiatan";
										                    	$data2 = mysqli_query($koneksi, $query_tingkat);
										                    	while ($row_tingkat = mysqli_fetch_array($data2))
																{ ?>
											                  	<option value="<?php echo $row_tingkat['id'] ?>"><?php echo $row_tingkat['jenis'] ?></option>
											                  	<?php } ?>
						                        			</select>
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="tempat_9[]">
						                        		</td>
						                        		<td>
						                        			<input type="date" class="form-control input-sm" name="waktu_9[]">
						                        		</td>
						                        		<td>
						                        			<select name="sebagai_9[]" class="form-control input-sm">
						                        				<option value="">- Pilih Sebagai -</option>
						                        				<option value="0">Penyaji</option>
						                        				<option value="1">Peserta</option>
						                        			</select>
							                        	</td>
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_9"><i class="icon-plus3"></i></span>
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th rowspan="2">No</th>
						                            	<th rowspan="2"><center>Nama Dosen</center></th>
						                                <th rowspan="2"><center>Jenis Kegiatan*</center></th>
						                                <th rowspan="2"><center>Tempat</center></th>
						                                <th rowspan="2"><center>Waktu</center></th>
						                                <th colspan="2"><center>Sebagai</center></th>
						                            </tr>
						                            <tr>
						                            	<th>Penyaji</th>
						                            	<th>Peserta</th>
						                            </tr>
						                            <tr>
						                            	<th></th>
						                            	<th>(1)</th>
						                            	<th>(2)</th>
						                            	<th>(3)</th>
						                            	<th>(4)</th>
						                            	<th>(5)</th>
						                            	<th>(6)</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['jenis'] ?></td>
								                                <td><?php echo $row['tempat'] ?> </td>
								                                <td><?php echo $row['waktu'] ?> </td>
								                                <td><?php echo ($row['sebagai']=='0')?'Y':'N' ?></td>
								                                <td><?php echo ($row['sebagai']=='1')?'Y':'N' ?></td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>
						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.5.4 Sebutkan pencapaian prestasi/reputasi dosen (misalnya prestasi dalam pendidikan, penelitian dan pelayanan/pengabdian kepada masyarakat).
									</label>
									<?php 
									$query_1 = "SELECT a.*, b.tingkat FROM standar4_prestasi_dosen a
												LEFT JOIN tingkat_prestasi b ON a.id_tingkat = b.id";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                            	<th><center>Nama Dosen</center></th>
						                                <th><center>Prestasi yang Dicapai*</center></th>
						                                <th><center>Waktu Pencapaian</center></th>
						                                <th><center>Tingkat (Lokal, Nasional, Internasional)</center></th>
						                                <th><center>Aksi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_10">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_10">
							                        		<td>
							                        			<input type="hidden" name="id_10u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_10u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="prestasi_10u[]" value="<?php echo $row['waktu_pencapaian'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="waktu_pencapaian_10u[]" value="<?php echo $row['waktu_pencapaian'] ?>">
							                        		</td>
							                        		<td>
							                        			<select name="id_tingkat_10u[]" class="form-control input-sm">
							                        				<option value="">- Pilih Tingkat -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM tingkat_prestasi";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['id'] ?>" <?php if($row['id_tingkat'] == $row_tingkat['id']) { echo 'selected'; } ?>><?php echo $row_tingkat['tingkat'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_10" onclick="hapus_detail_standar('standar4_prestasi_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_10">
						                        		<td>
						                        			<input type="text" name="nama_dosen_10[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="prestasi_10[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="waktu_pencapaian_10[]">
						                        		</td>
						                        		<td>
						                        			<select name="id_tingkat_10[]" class="form-control input-sm">
						                        				<option value="">- Pilih Tingkat -</option>
											                  	<?php
											                  	$query_tingkat = "SELECT * FROM tingkat_prestasi";
										                    	$data2 = mysqli_query($koneksi, $query_tingkat);
										                    	while ($row_tingkat = mysqli_fetch_array($data2))
																{ ?>
											                  	<option value="<?php echo $row_tingkat['id'] ?>"><?php echo $row_tingkat['tingkat'] ?></option>
											                  	<?php } ?>
						                        			</select>
						                        		</td>
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_10"><i class="icon-plus3"></i></span>
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th rowspan="2">No</th>
						                            	<th><center>Nama Dosen</center></th>
						                                <th><center>Prestasi yang Dicapai*</center></th>
						                                <th><center>Waktu Pencapaian</center></th>
						                                <th><center>Tingkat (Lokal, Nasional, Internasional)</center></th>
						                            </tr>
						                            <tr>
						                            	<th>(1)</th>
						                            	<th>(2)</th>
						                            	<th>(3)</th>
						                            	<th>(4)</th>
						                            	<th>(5)</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['waktu_pencapaian'] ?></td>
								                                <td><?php echo $row['tingkat'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>
						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.5.5 Sebutkan keikutsertaan dosen tetap dalam organisasi keilmuan atau organisasi profesi.
									</label>
									<?php 
									$query_1 = "SELECT a.*, b.tingkat FROM standar4_keikutsertaan_dosen a
												LEFT JOIN tingkat_prestasi b ON a.id_tingkat = b.id";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                            	<th><center>Nama Dosen</center></th>
						                                <th><center>Nama Organisasi Keilmuan atau Organisasi Profesi</center></th>
						                                <th><center>Kurun Waktu</center></th>
						                                <th><center>Tingkat (Lokal, Nasional, Internasional)</center></th>
						                                <th><center>Aksi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_11">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_11">
							                        		<td>
							                        			<input type="hidden" name="id_11u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_dosen_11u[]" value="<?php echo $row['nama_dosen'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="nama_organisasi_11u[]" value="<?php echo $row['nama_organisasi'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="kurun_waktu_11u[]" value="<?php echo $row['kurun_waktu'] ?>">
							                        		</td>
							                        		<td>
							                        			<select name="id_tingkat_11u[]" class="form-control input-sm">
							                        				<option value="">- Pilih Tingkat -</option>
												                  	<?php
												                  	$query_tingkat = "SELECT * FROM tingkat_prestasi";
											                    	$data2 = mysqli_query($koneksi, $query_tingkat);
											                    	while ($row_tingkat = mysqli_fetch_array($data2))
																	{ ?>
												                  	<option value="<?php echo $row_tingkat['id'] ?>" <?php if($row['id_tingkat'] == $row_tingkat['id']) { echo 'selected'; } ?>><?php echo $row_tingkat['tingkat'] ?></option>
												                  	<?php } ?>
							                        			</select>
							                        		</td>
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_11" onclick="hapus_detail_standar('standar4_keikutsertaan_dosen',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_11">
						                        		<td>
						                        			<input type="text" name="nama_dosen_11[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="nama_organisasi_11[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="kurun_waktu_11[]">
						                        		</td>
						                        		<td>
						                        			<select name="id_tingkat_11[]" class="form-control input-sm">
						                        				<option value="">- Pilih Tingkat -</option>
											                  	<?php
											                  	$query_tingkat = "SELECT * FROM tingkat_prestasi";
										                    	$data2 = mysqli_query($koneksi, $query_tingkat);
										                    	while ($row_tingkat = mysqli_fetch_array($data2))
																{ ?>
											                  	<option value="<?php echo $row_tingkat['id'] ?>"><?php echo $row_tingkat['tingkat'] ?></option>
											                  	<?php } ?>
						                        			</select>
						                        		</td>
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_11"><i class="icon-plus3"></i></span>
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th rowspan="2">No</th>
						                            	<th><center>Nama Dosen</center></th>
						                                <th><center>Nama Organisasi Keilmuan atau Organisasi Profesi</center></th>
						                                <th><center>Kurun Waktu</center></th>
						                                <th><center>Tingkat (Lokal, Nasional, Internasional)</center></th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <tr>
						                            	<th>(1)</th>
						                            	<th>(2)</th>
						                            	<th>(3)</th>
						                            	<th>(4)</th>
						                            	<th>(5)</th>
						                            </tr>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_dosen'] ?></td>
								                                <td><?php echo $row['nama_organisasi'] ?></td>
								                                <td><?php echo $row['kurun_waktu'] ?> </td>
								                                <td><?php echo $row['tingkat'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>
						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.6 Tenaga Kependidikan <br><br>
										4.6.1 Tuliskan data tenaga kependidikan yang ada di PS, Jurusan, Fakultas atau PT yang melayani mahasiswa PS dengan mengikuti format tabel berikut: 
									</label>
									<?php 
									$query_1 = "SELECT * FROM standar4_tenaga_pendidikan";
		                        	$data = mysqli_query($koneksi, $query_1);
		                        	$count_data = mysqli_num_rows($data);

									if ($_GET['page'] == 'isi_standar4') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                            	<th rowspan="2"><center>Jenis Tenaga Kependidikan</center></th>
						                                <th colspan="8"><center>Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir</center></th>
						                                <th rowspan="2"><center>Unit Kerja</center></th>
						                            </tr>
						                            <tr>
						                            	<th>S3</th>
						                            	<th>S2</th>
						                            	<th>S1</th>
						                            	<th>D4</th>
						                            	<th>D3</th>
						                            	<th>D2</th>
						                            	<th>D1</th>
						                            	<th>SMA/SMK</th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload_12">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload_12">
							                        		<td>
							                        			<input type="hidden" name="id_12u[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="jenis_tenaga_12u[]" value="<?php echo $row['jenis_tenaga'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_s3_12u[]" value="<?php echo $row['jumlah_s3'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_s2_12u[]" value="<?php echo $row['jumlah_s2'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_s1_12u[]" value="<?php echo $row['jumlah_s1'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_d4_12u[]" value="<?php echo $row['jumlah_d4'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_d3_12u[]" value="<?php echo $row['jumlah_d3'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_d2_12u[]" value="<?php echo $row['jumlah_d2'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_d1_12u[]" value="<?php echo $row['jumlah_d1'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="jumlah_sma_smk_12u[]" value="<?php echo $row['jumlah_sma_smk'] ?>">
							                        		</td>
							                        		<td>
							                        			<input type="text" class="form-control input-sm" name="unit_kerja_12u[]" value="<?php echo $row['unit_kerja'] ?>">
							                        		</td>
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_12" onclick="hapus_detail_standar('standar4_tenaga_pendidikan',<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload_12">
						                        		<td>
						                        			<input type="text" name="jenis_tenaga_12[]" class="form-control input-sm">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_s3_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_s2_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_s1_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_d4_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_d3_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_d2_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_d1_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="jumlah_sma_smk_12[]">
						                        		</td>
						                        		<td>
						                        			<input type="text" class="form-control input-sm" name="unit_kerja_12[]">
						                        		</td>
						                        		<td>
						                        			<span class="btn btn-success btn-sm add_button_12"><i class="icon-plus3"></i></span>
						                        		</td>
						                        	</tr>
						                        </tbody>
											</table>
										</div>
		                        	<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                            	<th rowspan="2">No</th>
						                            	<th rowspan="2"><center>Jenis Tenaga Kependidikan</center></th>
						                                <th colspan="8"><center>Jumlah Tenaga Kependidikan dengan Pendidikan Terakhir</center></th>
						                                <th rowspan="2"><center>Unit Kerja</center></th>
						                            </tr>
						                            <tr>
						                            	<th>S3</th>
						                            	<th>S2</th>
						                            	<th>S1</th>
						                            	<th>D4</th>
						                            	<th>D3</th>
						                            	<th>D2</th>
						                            	<th>D1</th>
						                            	<th>SMA/SMK</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                        	<tr>
						                        		<th>(1)</th>
						                        		<th>(2)</th>
						                        		<th>(3)</th>
						                        		<th>(4)</th>
						                        		<th>(5)</th>
						                        		<th>(6)</th>
						                        		<th>(7)</th>
						                        		<th>(8)</th>
						                        		<th>(9)</th>
						                        		<th>(10)</th>
						                        		<th>(11)</th>
						                        	</tr>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['jenis_tenaga'] ?></td>
								                                <td><?php echo $row['jumlah_s3'] ?></td>
								                                <td><?php echo $row['jumlah_s2'] ?> </td>
								                                <td><?php echo $row['jumlah_s1'] ?> </td>
								                                <td><?php echo $row['jumlah_d4'] ?> </td>
								                                <td><?php echo $row['jumlah_d3'] ?> </td>
								                                <td><?php echo $row['jumlah_d2'] ?> </td>
								                                <td><?php echo $row['jumlah_d1'] ?> </td>
								                                <td><?php echo $row['jumlah_sma_smk'] ?> </td>
								                                <td><?php echo $row['unit_kerja'] ?> </td>
								                            </tr>
								                        <?php $no++; } 
								                    } else { ?>
								                    	<tr>
								                    		<td colspan="5"><center>Data Tidak Tersedia.</center></td>
								                    	</tr>
								                    <?php } ?>
						                        </tbody>
						                    </table>
						                </div>
		                        	<?php } ?>
		                        	<br>
		                        	<label>
		                        		*Hanya yang memiliki pendidikan formal dalam bidang perpustakaan
		                        	</label>
								</div>
								<br>
								<div class="form-group">
									<label for="companyName">
										4.6.2 Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir.
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="upaya_dilakukan_ps" value="<?php echo $upaya_dilakukan_ps ?>" placeholder="Jelaskan upaya yang telah dilakukan PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan, dalam hal pemberian kesempatan belajar/pelatihan, pemberian fasilitas termasuk dana, dan jenjang karir." <?php echo $readonly ?>><?php echo $upaya_dilakukan_ps ?></textarea>
								</div>

								<h5 class="form-section"><i class="icon-clipboard4"></i> Dokumen Pendukung</h5>
								<!-- <span class="btn btn-success btn-sm" type="button" id="tambah_dokumen" onclick="tambah_dokumen('3','Standar 4')">Upload Dokumen Pendukung</span> -->
								<?php 
								$query_dokumen = "SELECT * FROM dokumen_pendukung WHERE id_standar = 4";
	                        	$data = mysqli_query($koneksi, $query_dokumen);
	                        	$count_data = mysqli_num_rows($data);
								?>
									<?php if ($_GET['page'] == 'isi_standar4') { 
										?>
										<div class="div_upload">
											<?php if ($count_data > 0) { 
												while ($row = mysqli_fetch_array($data))
												{ ?>
													<div class="row content_upload">
														<div class="col-md-4">
															<div class="form-group">
																<label for="projectinput1">Dokumen</label>
																<input type="hidden" name="id_dokumenu[]" value="<?php echo $row['id'] ?>">
																<input type="file" class="form-control input-sm" name="dokumenu[]">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="projectinput2">Keterangan</label>
																<input type="text" id="projectinput2" class="form-control input-sm" placeholder="Keterangan Dokumen" name="keteranganu[]" value="<?php echo $row['keterangan'] ?>">
															</div>
														</div>
														<div class="col-md-4">
															<div class="form-group">
																<label for="projectinput2">&nbsp;</label><br>
																<a href="<?php echo $row['path_dokumen'] ?>" target="_blank">
																	<span class="btn btn-warning btn-sm"><i class="icon-android-download"></i></span>
																</a>
																<a onclick="hapus_dokumen(<?php echo $row['id'] ?>)">
																	<span class="btn btn-danger btn-sm remove_button"><i class="icon-minus3"></i></span>
																</a>
															</div>
														</div>
													</div>
												<?php } 
											} ?>
											<!-- CHECK TO DATABASE EXIST APA TIDAK -->
											<div class="row content_upload">
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput1">Dokumen</label>
														<input type="file" class="form-control input-sm" name="dokumen[]">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">Keterangan</label>
														<input type="text" id="projectinput2" class="form-control input-sm" placeholder="Keterangan Dokumen" name="keterangan[]">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">&nbsp;</label><br>
														<span class="btn btn-success btn-sm add_button"><i class="icon-plus3"></i></span>
													</div>
												</div>
											</div>
										</div>
									<?php }else{ ?>
										<div class="table-responsive">
						                    <table class="table table-hover mb-0">
						                        <thead>
						                            <tr>
						                                <th>No</th>
						                                <th>Nama Dokumen</th>
						                                <th>Keterangan</th>
						                                <th>Aksi</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
								                            <tr>
								                                <th scope="row"><?php echo $no; ?></th>
								                                <td><?php echo $row['nama_dokumen'] ?></td>
								                                <td><?php echo $row['keterangan'] ?></td>
								                                <td>
								                                	<a href="<?php echo $row['path_dokumen'] ?>" target="_blank">
								                                		<button type="button" class="btn btn-warning btn-sm"><i class="icon-download4"></i></button>
								                                	</a>
								                                	<?php if ($_GET['page'] == 'isi_standar4') { ?>	
								                                	<a href="action/delete_dokumen.php?id=<?php echo $row['id'].'-'.$row['id_standar'] ?>">
									                                	<button type="button" class="btn btn-danger btn-sm"><i class="icon-trash-o"></i></button>
									                                </a>
								                                	<?php } ?>
								                                </td>
								                            </tr>

														<?php $no++; }
						                        	}else{ ?>
						                        		<tr>
						                        			<td colspan="4"><center>Dokumen tidak terseida.</center></td>
						                        		</tr>
						                        	<?php } ?>
						                        </tbody>
						                    </table>
						                </div>
									<?php } ?>
							</div>

							<div class="form-actions">
								<a href="index.php?page=standar2">
									<button type="button" class="btn btn-warning mr-1">
										<i class="icon-cross2"></i> Cancel
									</button>
								</a>
								<?php if ($_GET['page'] == 'isi_standar4') { ?>
									<button type="submit" class="btn btn-primary">
										<i class="icon-check2"></i> Save
									</button>
								<?php } ?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade text-xs-left" id="modal_tambah_prestasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel1">Tambah Prestasi <span id="span_standar_type"></span></h4>
        </div>
        <form class="form" action="action/tambah_prestasi.php" id="form_prestasi" method="post">
          <div class="modal-body">
              <div class="form-body">
                <div class="form-group">
                  <label for="projectinput8">Nama Kegiatan</label>
                  <input class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan">
                </div>
                <div class="form-group">
                  <label for="projectinput8">Waktu Penyelenggaraan</label>
                  <input type="date" id="issueinput4" class="form-control" name="waktu" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Waktu Penyelenggaraan">
                </div>
                <div class="form-group">
                  <label for="projectinput8">Tingat</label>
                  <select id="id_tingkat" name="id_tingkat" class="form-control">
	                  	<option value="">-- Pilih Tingkat -- </option>
	                  	<?php
	                  	$query_tingkat = "SELECT * FROM tingkat_prestasi";
                    	$data = mysqli_query($koneksi, $query_tingkat);
                    	$count_data = mysqli_num_rows($data);
                    	while ($row = mysqli_fetch_array($data))
						{ ?>
	                  	<option value="<?php echo $row['id'] ?>"><?php echo $row['tingkat'] ?></option>
	                  	<?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="projectinput8">Prestasi yang Dicapai</label>
                  <textarea id="projectinput8" rows="2" class="form-control" name="prestasi" placeholder="Keterangan"></textarea>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="button" onclick="form_prestasi_submit()" class="btn btn-outline-primary">Save</button>
          </div>
        </form>
      </div>
      </div>
    </div>
</section>
<script type="text/javascript">
	
	$(document).ready(function(){
	    $(document).on('click', '.add_button', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload:first'),
	            currentEntry = $(this).parents('.content_upload:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload:not(:last) .add_button')
	            .removeClass('add_button').addClass('remove_button_presentasi3')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button', function(e)
	    {
	        $(this).parents('.content_upload:first').remove();
	        e.preventDefault();
	        return false;
	    });


	    $(document).on('click', '.add_button_1', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_1:first'),
	            currentEntry = $(this).parents('.content_upload_1:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_1:not(:last) .add_button_1')
	            .removeClass('add_button_1').addClass('remove_button_1')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_1', function(e)
	    {
	        $(this).parents('.content_upload_1:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_2', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_2:first'),
	            currentEntry = $(this).parents('.content_upload_2:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_2:not(:last) .add_button_2')
	            .removeClass('add_button_2').addClass('remove_button_2')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_2', function(e)
	    {
	        $(this).parents('.content_upload_2:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_3', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_3:first'),
	            currentEntry = $(this).parents('.content_upload_3:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_3:not(:last) .add_button_3')
	            .removeClass('add_button_3').addClass('remove_button_3')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_3', function(e)
	    {
	        $(this).parents('.content_upload_3:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_4', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_4:first'),
	            currentEntry = $(this).parents('.content_upload_4:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_4:not(:last) .add_button_4')
	            .removeClass('add_button_4').addClass('remove_button_4')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_4', function(e)
	    {
	        $(this).parents('.content_upload_4:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_5', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_5:first'),
	            currentEntry = $(this).parents('.content_upload_5:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_5:not(:last) .add_button_5')
	            .removeClass('add_button_5').addClass('remove_button_5')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_5', function(e)
	    {
	        $(this).parents('.content_upload_5:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_6', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_6:first'),
	            currentEntry = $(this).parents('.content_upload_6:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_6:not(:last) .add_button_6')
	            .removeClass('add_button_6').addClass('remove_button_6')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_6', function(e)
	    {
	        $(this).parents('.content_upload_6:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_7', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_7:first'),
	            currentEntry = $(this).parents('.content_upload_7:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_7:not(:last) .add_button_7')
	            .removeClass('add_button_7').addClass('remove_button_7')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_7', function(e)
	    {
	        $(this).parents('.content_upload_7:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_8', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_8:first'),
	            currentEntry = $(this).parents('.content_upload_8:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_8:not(:last) .add_button_8')
	            .removeClass('add_button_8').addClass('remove_button_8')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_8', function(e)
	    {
	        $(this).parents('.content_upload_8:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_9', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_9:first'),
	            currentEntry = $(this).parents('.content_upload_9:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_9:not(:last) .add_button_9')
	            .removeClass('add_button_9').addClass('remove_button_9')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_9', function(e)
	    {
	        $(this).parents('.content_upload_9:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_10', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_10:first'),
	            currentEntry = $(this).parents('.content_upload_10:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_10:not(:last) .add_button_10')
	            .removeClass('add_button_10').addClass('remove_button_10')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_10', function(e)
	    {
	        $(this).parents('.content_upload_10:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_11', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_11:first'),
	            currentEntry = $(this).parents('.content_upload_11:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_11:not(:last) .add_button_11')
	            .removeClass('add_button_11').addClass('remove_button_11')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_11', function(e)
	    {
	        $(this).parents('.content_upload_11:first').remove();
	        e.preventDefault();
	        return false;
	    });

	    $(document).on('click', '.add_button_12', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload_12:first'),
	            currentEntry = $(this).parents('.content_upload_12:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload_12:not(:last) .add_button_12')
	            .removeClass('add_button_12').addClass('remove_button_12')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_12', function(e)
	    {
	        $(this).parents('.content_upload_12:first').remove();
	        e.preventDefault();
	        return false;
	    });
	});
	
	function tambah_prestasi(){
		$('#modal_tambah_prestasi').modal('show');
	}

	function form_prestasi_submit()
	{
		document.getElementById("form_prestasi").submit();
	}

	function hapus_detail_standar(table, id)
	{
        $.ajax({
            type: "POST",
            url: 'action/hapus_detail_standar.php',
            data: {id:id, table:table},
            success: function(data){
              console.log(data);
            }
        });
	}

</script>