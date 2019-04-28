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
				if ($_GET['page'] == 'isi_standar3') {
					$readonly = "";
					$judul = "Isi Standar 3";
				}else{
					$readonly = "readonly";
					$judul = "Lihat Standar 3";
				}

				$data = mysqli_query($koneksi, "SELECT * FROM standar3 LIMIT 1");
				$cek = mysqli_num_rows($data);
				if ($cek > 0) {
					$row = mysqli_fetch_assoc($data);
					$act = "update";
					$id = $row['id'];
					$hasil_pihak_pengguna = $row['hasil_pihak_pengguna'];
					$tindak_lanjut = $row['tindak_lanjut']; 
					$hasil_aktivitas_himpunan = $row['hasil_aktivitas_himpunan'];
					$rata_waktu_pekerjaan = $row['rata_waktu_pekerjaan'];
					$data_waktu_pekerjaan = $row['data_waktu_pekerjaan'];
					$persen_kerja_sesuai = $row['persen_kerja_sesuai'];
					$data_kerja_sesuai = $row['data_kerja_sesuai'];
					$himpunan_alumni = $row['himpunan_alumni'];
				}else{
					$act = "insert";
					$id = "";
					$hasil_pihak_pengguna = "";
					$tindak_lanjut = ""; 
					$hasil_aktivitas_himpunan = "";
					$rata_waktu_pekerjaan = "";
					$data_waktu_pekerjaan = "";
					$persen_kerja_sesuai = "";
					$data_kerja_sesuai = "";
					$himpunan_alumni = "";
				}
				?>
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Standar 3</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<div class="card-text">
						</div>
						<form class="form" method="post" action="action/simpan_standar3.php" enctype="multipart/form-data">
							<input type="hidden" name="act" value="<?php echo $act ?>">
							<input type="hidden" name="id" value="<?php echo $id ?>">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> <?php echo $judul; ?></h4>
								<div class="form-group">
									<label for="companyName">
										3.1 Profil Mahasiswa dan Lulusan<br>
										3.1.1 Tuliskan data seluruh mahasiswa reguler(1) dan lulusannya dalam lima tahun terakhir dengan mengikuti format table berikut :
									</label>
									<div class="table-responsive">
					                    <table class="table table-hover mb-0">
					                        <thead>
					                            <tr>
					                                <th rowspan="2" style="vertical-align: middle;"><center>Tahun Akademik</center></th>
					                                <th rowspan="2" style="vertical-align: middle;"><center>Daya Tampung</center></th>
					                                <th colspan="2"><center>Jumlah Calon Mahasiswa Reguler</center></th>
					                                <th colspan="2"><center>Jumlah Mahasiswa baru</center></th>
					                                <th colspan="2"><center>Jumlah Total Mahasiswa</center></th>
					                                <th colspan="2"><center>Jumlah Lulusan</center></th>
					                                <th colspan="3"><center>IPK Lulusan Reguler</center></th>
					                                <th colspan="3"><center>Presentase Lulusan Reguler dengan IPK</center></th>
					                            </tr>
					                            <tr>
					                                <th><center>Ikut Seleksi</center></th>
					                                <th><center>Lulus Seleksi</center></th>
					                                <th><center>Reguler bukan Transfer</center></th>
					                                <th><center>Transfer</center></th>
					                                <th><center>Reguler bukan Transfer</center></th>
					                                <th><center>Transfer</center></th>
					                                <th><center>Reguler bukan Transfer</center></th>
					                                <th><center>Transfer</center></th>
					                                <th><center>Min</center></th>
					                                <th><center>Rat</center></th>
					                                <th><center>Mak</center></th>
					                                <th><center><?php echo '< 2,75' ?></center></th>
					                                <th><center><?php echo '2,75-3,50' ?></center></th>
					                                <th><center><?php echo '> 3,50' ?></center></th>
					                            </tr>
					                            <tr>
					                                <th><center>(1)</center></th>
					                                <th><center>(2)</center></th>
					                                <th><center>(3)</center></th>
					                                <th><center>(4)</center></th>
					                                <th><center>(5)</center></th>
					                                <th><center>(6)</center></th>
					                                <th><center>(7)</center></th>
					                                <th><center>(8)</center></th>
					                                <th><center>(9)</center></th>
					                                <th><center>(10)</center></th>
					                                <th><center>(11)</center></th>
					                                <th><center>(12)</center></th>
					                                <th><center>(13)</center></th>
					                                <th><center>(14)</center></th>
					                                <th><center>(15)</center></th>
					                                <th><center>(16)</center></th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                        	<?php 
					                        	$query_311 = "SELECT * FROM standar3_mahasiswa_reguler";
					                        	$data = mysqli_query($koneksi, $query_311);
					                        	$count_data = mysqli_num_rows($data);
					                        	while ($row = mysqli_fetch_array($data))
												{ ?>
						                            <tr>
						                                <th scope="row">
						                                	<?php echo $row['tahun_akademik'] ?>
						                                	<input type="hidden" name="tahun_akademik[]" value="<?php echo $row['tahun_akademik'] ?>">
						                                </th>
						                                <td><input type="text" name="daya_tampung[]" value="<?php echo $row['daya_tampung'] ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="reguler_ikut[]" value="<?php echo (($row['reguler_ikut'] == 0 or $row['reguler_ikut'] == NULL) ? '' : $row['reguler_ikut']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="reguler_lulus[]" value="<?php echo (($row['reguler_lulus'] == 0 or $row['reguler_lulus'] == NULL) ? '' : $row['reguler_lulus']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="baru_reguler[]" value="<?php echo (($row['baru_reguler'] == 0 or $row['baru_reguler'] == NULL) ? '' : $row['baru_reguler']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="baru_transfer[]" value="<?php echo (($row['baru_transfer'] == 0 or $row['baru_transfer'] == NULL) ? '' : $row['baru_transfer']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="total_reguler[]" value="<?php echo (($row['total_reguler'] == 0 or $row['total_reguler'] == NULL) ? '' : $row['total_reguler']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="total_transfer[]" value="<?php echo (($row['total_transfer'] == 0 or $row['total_transfer'] == NULL) ? '' : $row['total_transfer']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="lulusan_reguler[]" value="<?php echo (($row['lulusan_reguler'] == 0 or $row['lulusan_reguler'] == NULL) ? '' : $row['lulusan_reguler']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="lulusan_transfer[]" value="<?php echo (($row['lulusan_transfer'] == 0 or $row['lulusan_transfer'] == NULL) ? '' : $row['lulusan_transfer']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="ipk_min[]" value="<?php echo (($row['ipk_min'] == 0 or $row['ipk_min'] == NULL) ? '' : $row['ipk_min']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="ipk_rat[]" value="<?php echo (($row['ipk_rat'] == 0 or $row['ipk_rat'] == NULL) ? '' : $row['ipk_rat']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="ipk_mak[]" value="<?php echo (($row['ipk_mak'] == 0 or $row['ipk_mak'] == NULL) ? '' : $row['ipk_mak']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="ipk_275[]" value="<?php echo (($row['ipk_275'] == 0 or $row['ipk_275'] == NULL) ? '' : $row['ipk_275']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="ipk_275_350[]" value="<?php echo (($row['ipk_275_350'] == 0 or $row['ipk_275_350'] == NULL) ? '' : $row['ipk_275_350']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="ipk_350[]" value="<?php echo (($row['ipk_350'] == 0 or $row['ipk_350'] == NULL) ? '' : $row['ipk_350']) ?>" class="form-control input-sm"></td>
						                            </tr>
												<?php } ?>
					                        </tbody>
					                    </table>
					                </div>
					                <label>
					                	<br>
					                	Catatan:<br>
					                	TS:Tahun akademik penuh terakhir saat pengisian barang<br>
					                	Min: IPK Minimum; Rat: IPK Rata-rata; Mak: IPK Maksimum<br>
					                	Catatan: <br>
					                	(1) Mahasiswa program reguler adalah mahasiswa yang mengikuti program pendidikan secara penuh waktu (baik kelas pagi, siang, sore, malam, dan di seluruh kampus).<br>
					                	(2) Mahasiswa program non-reguler adalah mahasiswa yang mengikuti program pendidikan secara paruh waktu.<br>
					                	(3) Mahasiswa transfer adalah mahasiswa yang masuk ke program studi dengan mentransfer mata kuliah yang telah diperolehnya dari PS lain, baik dari dalam PT maupun luar PT.
					                </label>
								</div>
								<div class="form-group">
									<label for="companyName">
										3.1.2 Tuliskan data mahasiswa non-reguler(2) dalam lima tahun terakhir dengan mengikuti format tabel berikut:
									</label>
									<div class="table-responsive">
					                    <table class="table table-hover mb-0">
					                        <thead>
					                            <tr>
					                                <th rowspan="2" style="vertical-align: middle;"><center>Tahun Akademik</center></th>
					                                <th rowspan="2" style="vertical-align: middle;"><center>Daya Tampung</center></th>
					                                <th colspan="2"><center>Jumlah Calon Mahasiswa Reguler</center></th>
					                                <th colspan="2"><center>Jumlah Mahasiswa baru</center></th>
					                                <th colspan="2"><center>Jumlah Total Mahasiswa</center></th>
					                            </tr>
					                            <tr>
					                                <th><center>Ikut Seleksi</center></th>
					                                <th><center>Lulus Seleksi</center></th>
					                                <th><center>Non-Reguler</center></th>
					                                <th><center>Transfer</center></th>
					                                <th><center>Non-Reguler</center></th>
					                                <th><center>Transfer</center></th>
					                            </tr>
					                            <tr>
					                                <th><center>(1)</center></th>
					                                <th><center>(2)</center></th>
					                                <th><center>(3)</center></th>
					                                <th><center>(4)</center></th>
					                                <th><center>(5)</center></th>
					                                <th><center>(6)</center></th>
					                                <th><center>(7)</center></th>
					                                <th><center>(8)</center></th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                        	<?php 
					                        	$query_312 = "SELECT * FROM standar3_mahasiswa_non_reguler";
					                        	$data = mysqli_query($koneksi, $query_312);
					                        	$count_data = mysqli_num_rows($data);
					                        	while ($row = mysqli_fetch_array($data))
												{ 
					                        	?>
						                            <tr>
						                                <th scope="row">
						                                	<?php echo $row['tahun_akademik'] ?>
						                                	<input type="hidden" name="tahun_akademik_312[]" value="<?php echo $row['tahun_akademik'] ?>">
						                                </th>
						                                <td><input type="text" name="daya_tampung_312[]" value="<?php echo $row['daya_tampung'] ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="calon_ikut_312[]" value="<?php echo (($row['calon_ikut'] == 0 OR $row['calon_ikut'] == NULL) ? '' : $row['calon_ikut']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="calon_lulus_312[]" value="<?php echo (($row['calon_lulus'] == 0 OR $row['calon_lulus'] == NULL) ? '' : $row['calon_lulus']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="baru_non_reguler_312[]" value="<?php echo (($row['baru_non_reguler'] == 0 OR $row['baru_non_reguler'] == NULL) ? '' : $row['baru_non_reguler']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="baru_transfer_312[]" value="<?php echo (($row['baru_transfer'] == 0 OR $row['baru_transfer'] == NULL) ? '' : $row['baru_transfer']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="total_non_reguler_312[]" value="<?php echo (($row['total_non_reguler'] == 0 OR $row['total_non_reguler'] == NULL) ? '' : $row['total_non_reguler']) ?>" class="form-control input-sm"></td>
						                                <td><input type="text" name="total_transfer_312[]" value="<?php echo (($row['total_transfer'] == 0 OR $row['total_transfer'] == NULL) ? '' : $row['total_transfer']) ?>" class="form-control input-sm"></td>
						                            </tr>
						                        <?php } ?>
					                        </tbody>
					                    </table>
					                </div>
								</div>
								<div class="form-group">
									<label for="companyName">
										3.1.3 Sebutkan pencapaian prestasi/reputasi mahasiswa dalam tiga tahun terakhir di bidang akademik dan non-akademik (misalnya prestasi dalam penelitian dan lomba karya ilmiah, olahraga, dan seni).<br>
									</label>
									<!-- <span class="btn btn-success btn-sm" type="button" id="tambah_prestasi" onclick="tambah_prestasi()">Tambah Prestasi</span>
									<br><br> -->
									<?php
		                            $query_pencapaian = "SELECT a.*, b.tingkat
		                            					FROM pencapaian_mahasiswa_3tahun a
		                            					LEFT JOIN tingkat_prestasi b ON a.id_tingkat = b.id";
		                        	$data = mysqli_query($koneksi, $query_pencapaian);
		                        	$count_data = mysqli_num_rows($data); ?>
		                        	<?php if ($_GET['page'] == 'isi_standar3') { ?>
										<div class="table-responsive">
											<table class="table table-hover mb-0">
												<thead>
						                            <tr>
						                                <th width="30%"><center>Nama Kegiatan</center></th>
						                                <th width="15%"><center>Tingkat (Lokal, Wilayah, Nasional, atau Internasional)</center></th>
						                                <th width="5%"><center>Waktu Penyelenggaraan</center></th>
						                                <th width="35%"><center>Prestasi yang Dicapai</center></th>
						                                <th width="15%"><center>Aksi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody class="div_upload">
						                        	<?php 
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ ?>
							                        	<tr class="content_upload">
							                        		<td>
							                        			<input type="hidden" name="id_pencapaianu[]" value="<?php echo $row['id'] ?>">
							                        			<input type="text" name="nama_kegiatanu[]" value="<?php echo $row['nama_kegiatan'] ?>" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<!-- <input type="text" name="tingkat[]" class="form-control input-sm"> -->
							                        			<select name="id_tingkatu[]" class="form-control input-sm">
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
							                        			<input type="date" class="form-control input-sm" name="waktuu[]" value="<?php echo $row['waktu'] ?>">
							                        		</td>
							                        		<td><input type="text" name="prestasiu[]" value="<?php echo $row['prestasi'] ?>" class="form-control input-sm"></td>
							                        		<td>
							                        			<span class="btn btn-danger btn-sm remove_button_prestasi3" onclick="hapus_prestasi(<?php echo $row['id'] ?>)"><i class="icon-minus3"></i></span>
							                        		</td>
							                        	</tr>
							                        	<?php } ?>
							                        <?php } ?>
							                        <tr class="content_upload">
							                        		<td>
							                        			<input type="text" name="nama_kegiatan[]" class="form-control input-sm">
							                        		</td>
							                        		<td>
							                        			<select name="id_tingkat[]" class="form-control input-sm">
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
							                        			<input type="date" class="form-control input-sm" name="waktu[]">
							                        		</td>
							                        		<td><input type="text" name="prestasi[]" value="<?php echo $row['prestasi'] ?>" class="form-control input-sm"></td>
							                        		<td>
							                        			<span class="btn btn-success btn-sm add_button_prestasi3"><i class="icon-plus3"></i></span>
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
						                                <th><center>No</center></th>
						                                <th><center>Nama Kegiatan dan Waktu Penyelenggaraan</center></th>
						                                <th><center>Tingkat (Lokal, Wilayah, Nasional, atau Internasional)</center></th>
						                                <th><center>Prestasi yang Dicapai</center></th>
						                                <th><center>Aksi</center></th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <tr>
						                            	<th><center>(1)</center></th>
						                            	<th><center>(2)</center></th>
						                            	<th><center>(3)</center></th>
						                            	<th><center>(4)</center></th>
						                            	<th></th>
						                            </tr>
						                            <?php
						                        	if ($count_data > 0) {
							                        	$no = 1;
							                        	while ($row = mysqli_fetch_array($data))
														{ 
														?>
								                            <tr>
								                                <td scope="row"><?php echo $no; ?></td>
								                                <td><?php echo $row['nama_kegiatan'] ?></td>
								                                <td><?php echo $row['tingkat'] ?></td>
								                                <td><?php echo $row['waktu'] ?> </td>
								                                <td>
								                                	<a href="action/delete_pencapaian.php?id=<?php echo $row['id'] ?>">
								                                		<button class="btn btn-danger btn-sm">Hapus</button>
								                                	</a>
								                            	</td>
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
								<div class="form-group">
									<label for="companyName">
										3.1.4 Tuliskan data jumlah mahasiswa reguler tujuh tahun terakhir dengan mengikuti format tabel berikut.<br>
									</label>
									<div class="table-responsive">
					                    <table class="table table-hover mb-0">
					                        <thead>
					                            <tr>
					                                <th rowspan="2"><center>Tahun Masuk</center></th>
					                                <th colspan="7"><center>Jumlah Mahasiswa Reguler per Angkatan pada Tahun*</center></th>
					                                <th rowspan="2"><center>Jumlah Lulusan s.d TS (dari Mahasiswa Reguler)</center></th>
					                            </tr>
					                            <tr>
					                            	<th>TS-6</th>
					                            	<th>TS-5</th>
					                            	<th>TS-4</th>
					                            	<th>TS-3</th>
					                            	<th>TS-2</th>
					                            	<th>TS-1</th>
					                            	<th>TS</th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <tr>
					                            	<th><center>(1)</center></th>
					                            	<th><center>(1)</center></th>
					                            	<th><center>(2)</center></th>
					                            	<th><center>(3)</center></th>
					                            	<th><center>(4)</center></th>
					                            	<th><center>(5)</center></th>
					                            	<th><center>(6)</center></th>
					                            	<th><center>(7)</center></th>
					                            	<th><center>(8)</center></th>
					                            </tr>
					                            <?php
					                            $query_314 = "SELECT * FROM standar3_mahasiswa_reg_7tahun";
					                            $data = mysqli_query($koneksi, $query_314);
					                            $i = 6;
					                        	while ($row = mysqli_fetch_array($data))
												{ ?>
													<tr>
						                                <th scope="row">
						                                	<?php echo $row['tahun_masuk']; ?>
						                                	<input type="hidden" name="tahun_masuk[]" value="<?php echo $row['tahun_masuk'] ?>">
						                                </th>
						                                <td>
						                                	<?php if ($i == 6) { ?>
						                                		<input type="text" class="form-control input-sm" name="jumlah_ts6[]" value="<?php echo $row['jumlah_ts6'] ?>">
						                                	<?php } ?>
						                                </td>
						                                <td>
						                                	<?php if ($i >= 5) { ?>
						                                		<input type="text" class="form-control input-sm" name="jumlah_ts5[]" value="<?php echo $row['jumlah_ts5'] ?>">
						                                	<?php } ?>
						                                </td>
						                                <td>
						                                	<?php if ($i >= 4) { ?>
						                                		<input type="text" class="form-control input-sm" name="jumlah_ts4[]" value="<?php echo $row['jumlah_ts4'] ?>">
						                                	<?php } ?>
						                                </td>
						                                <td>
						                                	<?php if ($i >= 3) { ?>
						                                		<input type="text" class="form-control input-sm" name="jumlah_ts3[]" value="<?php echo $row['jumlah_ts3'] ?>">
						                                	<?php } ?>
						                                </td>
						                                <td>
						                                	<?php if ($i >= 2) { ?>
						                                		<input type="text" class="form-control input-sm" name="jumlah_ts2[]" value="<?php echo $row['jumlah_ts2'] ?>">
						                                	<?php } ?>
						                                </td>
						                                <td>
						                                	<?php if ($i >= 1) { ?>
						                                		<input type="text" class="form-control input-sm" name="jumlah_ts1[]" value="<?php echo $row['jumlah_ts1'] ?>">
						                                	<?php } ?>
						                                </td>
						                                <td>
						                                	<?php if ($i >= 0) { ?>
						                       	         		<input type="text" class="form-control input-sm" name="jumlah_ts[]" value="<?php echo $row['jumlah_ts'] ?>">
						                                	<?php } ?>
						                                </td>
						                                <td>
						                                	<?php if ($i >= 2) { ?>
						                                		<input type="text" class="form-control input-sm" name="jumlah_lulusan[]" value="<?php echo $row['jumlah_lulusan'] ?>">
						                                	<?php } ?>
						                                </td>
						                            </tr>
					                            <?php $i--; } ?>
					                        </tbody>
					                    </table>
					                </div>
								</div>
								<div class="form-group">
									<label for="companyName">
										3.2 Layanan kepada mahasiswa.<br>
										Lengkapilan tabel berikut untuk setiap jenis pelayanan kepada mahasiswa PS.
									</label>
									<div class="table-responsive">
					                    <table class="table table-hover mb-0">
					                        <thead>
					                            <tr>
					                                <th><center>No</center></th>
					                                <th><center>Jenis Pelayanan kepada Mahasiswa</center></th>
					                                <th><center>Bentuk kegiatan, pelaksanaan, dan Hasilnya</center></th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <tr>
					                            	<th><center>(1)</center></th>
					                            	<th><center>(2)</center></th>
					                            	<th><center>(3)</center></th>
					                            </tr>
					                            <?php 
					                            $query_32 = "SELECT * FROM standar3_layanan_mahasiswa";
					                            $data = mysqli_query($koneksi, $query_32);
					                            $count_data = mysqli_num_rows($data);
					                        	if ($count_data > 0) {
						                        	$no = 1;
						                        	while ($row = mysqli_fetch_array($data))
													{ ?>
							                            <tr>
							                                <th scope="row">
							                                	<?php echo $no; ?>
							                                	<input type="hidden" name="id_32[]" value="<?php echo $row['id'] ?>">
							                                </th>
							                                <td>
							                                	<?php echo $row['jenis_pelayanan'] ?>
							                                	<input type="hidden" name="jenis_pelayanan[]" value="<?php echo $row['jenis_pelayanan'] ?>">
							                                </td>
							                                <td>
							                                	<input type="text" class="form-control input-sm" name="kegiatan[]" value="<?php echo $row['kegiatan'] ?>">
							                                </td>
							                            </tr>
													<?php $no++; }
					                        	}else{ ?>
					                        		<tr>
					                        			<td colspan="4"><center>Layanan Mahasiswa tidak tersedia.</center></td>
					                        		</tr>
					                        	<?php } ?>
					                        </tbody>
					                    </table>
					                </div>
								</div>
								<div class="form-group">
									<label for="projectinput8">
										3.3 Evaluasi Lulusan<br><br>
										3.3.1 Evaluasi Kinerja lulusan oleh Pihak Pengguna Lulusan<br>
										Adakah studi pelacakan (tracer study) untuk mendapatkan hasil evaluasi kinerja lulusan dengan pihak pengguna ?
									</label>
									<div class="input-group">
										<label class="display-inline-block custom-control custom-radio ml-1">
											<input type="radio" name="hasil_pihak_pengguna" value="1" <?php if($hasil_pihak_pengguna == "1") echo "checked"; ?> class="custom-control-input">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Ada</span>
										</label>
										<label class="display-inline-block custom-control custom-radio">
											<input type="radio" name="hasil_pihak_pengguna" value="0" <?php if($hasil_pihak_pengguna == "0") echo "checked"; ?> class="custom-control-input">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description ml-0">Tidak Ada</span>
										</label>
									</div>
									<label>Jika ada, uraikan metode, proses dan mekanisme kegiatan studi pelacakan tersebut. Jelaskan pula bentuk tindak lanjut dari hasil kegiatan ini.</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="tindak_lanjut" value="<?php echo $tindak_lanjut ?>" placeholder="bentuk tindak lanjut dari hasil kegiatan ini" <?php echo $readonly ?>><?php echo $tindak_lanjut ?></textarea>
									<br>
									<p>Hasil studi pelacakan dirangkum dalam tabel berikut:</p>
									<p>Nyatakan angka prsentasenya(*) pada kolom yang sesuai.</p>
									<div class="table-responsive">
					                    <table class="table table-hover mb-0">
					                        <thead>
					                            <tr>
					                                <th rowspan="3" style="vertical-align: middle;"><center>No</center></th>
					                                <th rowspan="3" style="vertical-align: middle;"><center>Jenis Kemampuan</center></th>
					                                <th colspan="4"><center>Tanggapan Pihak Pengguna</center></th>
					                                <th rowspan="3"><center>Rencana Tindak Lanjut oleh Program Studi</center></th>
					                            </tr>
					                            <tr>
					                                <th><center>Sangat Baik</center></th>
					                                <th><center>Baik</center></th>
					                                <th><center>Cukup</center></th>
					                                <th><center>Kurang</center></th>
					                            </tr>
					                            <tr>
					                                <th><center>%</center></th>
					                                <th><center>%</center></th>
					                                <th><center>%</center></th>
					                                <th><center>%</center></th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <tr>
					                                <th><center>(1)</center></th>
					                                <th><center>(2)</center></th>
					                                <th><center>(3)</center></th>
					                                <th><center>(4)</center></th>
					                                <th><center>(5)</center></th>
					                                <th><center>(6)</center></th>
					                                <th><center>(7)</center></th>
					                            </tr>
					                            <?php 
					                            $query_studi_pelacakan = "SELECT * FROM standar3_hasil_pelacakan";
					                            $data = mysqli_query($koneksi, $query_studi_pelacakan);
					                            $no = 1;
					                            while ($row = mysqli_fetch_array($data))
													{ ?>
							                            <tr>
							                                <td>
							                                	<?php echo $no ?>
							                                	<input type="hidden" name="id_hasil_pelacakan[]" value="<?php echo $row['id'] ?>">
							                                </td>
							                                <td>
							                                	<?php echo $row['jenis_kemampuan'] ?>
							                                	<input type="hidden" name="jenis_kemampuan[]" value="<?php echo (($row['jenis_kemampuan'] == '' OR $row['jenis_kemampuan'] == NULL) ? '' : $row['jenis_kemampuan']) ?>">
							                                </td>
							                                <td><input type="text" name="tgp_sangat_baik[]" value="<?php echo (($row['tgp_sangat_baik'] == 0 OR $row['tgp_sangat_baik'] == NULL) ? '' : $row['tgp_sangat_baik']) ?>" class="form-control input-sm"></td>
							                                <td><input type="text" name="tgp_baik[]" value="<?php echo (($row['tgp_baik'] == 0 OR $row['tgp_baik'] == NULL) ? '' : $row['tgp_baik']) ?>" class="form-control input-sm"></td>
							                                <td><input type="text" name="tgp_cukup[]" value="<?php echo (($row['tgp_cukup'] == 0 OR $row['tgp_cukup'] == NULL) ? '' : $row['tgp_cukup']) ?>" class="form-control input-sm"></td>
							                                <td><input type="text" name="tgp_kurang[]" value="<?php echo (($row['tgp_kurang'] == 0 OR $row['tgp_kurang'] == NULL) ? '' : $row['tgp_kurang']) ?>" class="form-control input-sm"></td>
							                                <td><input type="text" name="rencana_tindak_lanjut[]" value="<?php echo $row['rencana_tindak_lanjut'] ?>" class="form-control input-sm"></td>
							                            </tr>
													<?php $no++; }
					                            ?>
					                            <?php
					                            $query_total_pelacakan = "SELECT SUM(tgp_sangat_baik) as total_tgp_sangat_baik, SUM(tgp_baik) as total_tgp_baik, SUM(tgp_cukup) as total_tgp_cukup, SUM(tgp_kurang) as total_tgp_kurang FROM standar3_hasil_pelacakan";
					                            $data_total_pelacakan = mysqli_query($koneksi, $query_total_pelacakan);
					                            $row_total_pelacakan = mysqli_fetch_assoc($data_total_pelacakan);
					                            ?>
					                            <tr>
					                            	<td colspan="2"><strong><center>Total</center></strong></td>
					                            	<td><strong><center><?php echo $row_total_pelacakan['total_tgp_sangat_baik'] ?></center></strong></td>
					                            	<td><strong><center><?php echo $row_total_pelacakan['total_tgp_baik'] ?></center></strong></td>
					                            	<td><strong><center><?php echo $row_total_pelacakan['total_tgp_cukup'] ?></center></strong></td>
					                            	<td><strong><center><?php echo $row_total_pelacakan['total_tgp_kurang'] ?></center></strong></td>
					                            	<td>&nbsp;</td>
					                            </tr>
					                        </tbody>
					                    </table>
					                </div>
					                <table>
					                	<tr>
					                		<td>Catatan</td>
					                		<td>:</td>
					                		<td>Sediakan dokumen pendukung pada saat assesmen lapangan</td>
					                	</tr>
					                	<tr>
					                		<td>&nbsp;</td>
					                		<td>&nbsp;</td>
					                		<td>(*) presentase tanggapan pihak pengguna = [(jumlah tanggapan pada peringkat)/jumlah tanggapan yang ada)] x 100</td>
					                	</tr>
					                </table>
								</div>
								<div class="form-group">
									<label for="companyName">
										3.3.2 Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama = <input style="width: 5%;display: inline;" type="text" name="rata_waktu_pekerjaan" value="<?php echo $rata_waktu_pekerjaan; ?>" class="form-control input-sm"> bulan. (Jelaskan bagaimana data ini diperoleh)
									</label>
									<textarea id="projectinput8" rows="3" class="form-control input-sm" name="data_waktu_pekerjaan" placeholder="Jelaskan bagaimana data ini diperoleh" <?php echo $readonly ?>><?php echo $data_waktu_pekerjaan; ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										3.3.3 Persentase lulusan yang bekerja pada bidang yang sesuai dengan keahliannya = <input style="width: 5%;display: inline;" type="text" name="persen_kerja_sesuai" value="<?php echo $persen_kerja_sesuai ?>" class="form-control input-sm"> %. (Jelaskan bagaimana data ini diperoleh)
									</label>
									<textarea id="projectinput8" rows="3" class="form-control input-sm" name="data_kerja_sesuai" placeholder="Upaya untuk peningkatan mutu manajemen" <?php echo $readonly ?>><?php echo $data_kerja_sesuai ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										3.4 Himpunan Alumni <br>
										Jelaskan apakah lulusan program studi memiliki himpunan alumni. Jika memiliki, jelaskan aktivitas dari hasil kegiatan dari himpunan alumni untuk kemajuan program studi dalam kegiatan akademik dan non akdemik, meliputi sumbangan dana, sumbangan fasilitas, keterlibatan dalam kegiatan, pengembangan jejaring, dan penyediaan fasilitas
									</label>
									<br>
									<textarea id="projectinput8" rows="3" class="form-control input-sm" name="himpunan_alumni" placeholder="Upaya untuk peningkatan mutu lulusan" <?php echo $readonly ?>><?php echo $himpunan_alumni ?></textarea>
								</div>
								<h5 class="form-section"><i class="icon-clipboard4"></i> Dokumen Pendukung</h5>
								<!-- <span class="btn btn-success btn-sm" type="button" id="tambah_dokumen" onclick="tambah_dokumen('3','Standar 3')">Upload Dokumen Pendukung</span> -->
								<?php 
								$query_dokumen = "SELECT * FROM dokumen_pendukung WHERE id_standar = 3";
	                        	$data = mysqli_query($koneksi, $query_dokumen);
	                        	$count_data = mysqli_num_rows($data);
								?>
									<?php if ($_GET['page'] == 'isi_standar3') { 
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
								                                	<?php if ($_GET['page'] == 'isi_standar3') { ?>	
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
								<?php if ($_GET['page'] == 'isi_standar3') { ?>
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
	    $(document).on('click', '.add_button_prestasi3', function(e)
	    { 
	        e.preventDefault();
	        var controlForm = $('.div_upload:first'),
	            currentEntry = $(this).parents('.content_upload:first'),
	            newEntry = $(currentEntry.clone()).appendTo(controlForm);

	        newEntry.find('input').val('');
	        controlForm.find('.content_upload:not(:last) .add_button_prestasi3')
	            .removeClass('add_button_prestasi3').addClass('remove_button_prestasi3')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button_prestasi3', function(e)
	    {
	        $(this).parents('.content_upload:first').remove();
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

</script>