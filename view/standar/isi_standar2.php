<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<?php 
				if ($_GET['page'] == 'isi_standar2') {
					$readonly = "";
					$judul = "Isi Standar 2";
				}else{
					$readonly = "readonly";
					$judul = "Lihat Standar 2";
				}

				$data = mysqli_query($koneksi, "SELECT * FROM standar2 LIMIT 1");
				$cek = mysqli_num_rows($data);
				if ($cek > 0) {
					$row = mysqli_fetch_assoc($data);
					$act = "update";
					$id = $row['id'];
					$tata_pamong = $row['tata_pamong'];
					$kepemimpinan = $row['kepemimpinan'];
					$sistem_pengelolaan = $row['sistem_pengelolaan'];
					$isi_umpan_balik_dosen = $row['isi_umpan_balik_dosen'];
					$isi_umpan_balik_mhs = $row['isi_umpan_balik_mhs'];
					$isi_umpan_balik_alumni = $row['isi_umpan_balik_alumni'];
					$isi_umpan_balik_lulusan = $row['isi_umpan_balik_lulusan'];
					$tindak_lanjut_dosen = $row['tindak_lanjut_dosen'];
					$tindak_lanjut_mhs = $row['tindak_lanjut_mhs'];
					$tindak_lanjut_alumni = $row['tindak_lanjut_alumni'];
					$tindak_lanjut_lulusan = $row['tindak_lanjut_lulusan'];
					$upaya_animo = $row['upaya_animo'];
					$upaya_mutu_manajemen = $row['upaya_mutu_manajemen'];
					$upaya_mutu_lulusan = $row['upaya_mutu_lulusan'];
					$upaya_kemitraan = $row['upaya_kemitraan'];
					$upaya_dana_hibah = $row['upaya_dana_hibah'];
				}else{
					$act = "insert";
					$id = "";
					$tata_pamong = "";
					$kepemimpinan = "";
					$sistem_pengelolaan = "";
					$isi_umpan_balik_dosen = "";
					$isi_umpan_balik_mhs = "";
					$isi_umpan_balik_alumni = "";
					$isi_umpan_balik_lulusan = "";
					$tindak_lanjut_dosen = "";
					$tindak_lanjut_mhs = "";
					$tindak_lanjut_alumni = "";
					$tindak_lanjut_lulusan = "";
					$upaya_animo = "";
					$upaya_mutu_manajemen = "";
					$upaya_mutu_lulusan = "";
					$upaya_kemitraan = "";
					$upaya_dana_hibah = "";
				}

				?>
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Standar 2</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<div class="card-text">
						</div>
						<div id="alertlog">
							<?php
	                        if(isset($_GET['pesan'])){
	                            if($_GET['pesan'] == "gagal"){ ?>
	                                <div class="alert alert-danger mb-2" role="alert">
	                                    <strong>Gagal !</strong> Simpan Data Gagal.
	                                </div>
	                            <?php }else if($_GET['pesan'] == "success"){ ?>
	                                <div class="alert alert-success mb-2" role="alert">
	                                    <strong>Berhasil !</strong> Simpan Data Berhasil.
	                                </div>
	                            <?php }
	                        }
	                        ?>
						</div>
						<form class="form" method="post" action="action/simpan_standar2.php" enctype="multipart/form-data">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-clipboard4"></i> <?php echo $judul; ?></h4>
								<div class="form-group">
									<label for="companyName">
										2.1 Sistem Tata Pamong<br>
										Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk membangun sistem tata pamong yang kredibel, transparan, akuntabel, dan bertanggung jawab dan adil.
									</label>
									<input type="hidden" name="id" value="<?php echo $id ?>">
									<input type="hidden" name="act" value="<?php echo $act ?>">
									<textarea id="projectinput8" rows="3" class="form-control" name="tata_pamong" placeholder="Uraikan secara ringkas sistem dan pelaksanaan tata pamong di Program Studi untuk membangun sistem tata pamong yang kredibel, transparan, akuntabel, dan bertanggung jawab dan adil." <?php echo $readonly ?>><?php echo $tata_pamong ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										2.2 Kepemimpinan<br>
										Jelaskan pola kepemimpinan dalam Program Studi
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="kepemimpinan" placeholder="Jelaskan pola kepemimpinan dalam Program Studi" <?php echo $readonly ?>><?php echo $kepemimpinan ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										2.3 Sistem Pengelolaan<br>
										Sistem pengelolaan fungsional dan operasional program studi mencakup planning, organizing, staffing, leading, controlling dalam kegiatan internal maupun eksternal <br>
										Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="sistem_pengelolaan" placeholder="Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya." <?php echo $readonly ?>><?php echo $sistem_pengelolaan ?></textarea>
								</div>
								<div class="form-group">
									<label for="projectinput8">
										2.5 Umpan Bali <br>
										Apakah program studi telah melakukan kajian tentang proses pembelajaran melalui umpan balik dari dosen, mahasiswa, alumni, dan pengguna lulusan mengenai harapan dan persepsi mereka? Jika Ya, jelaskan isi umpan balik dan tindak lanjutnya.
									</label>
									<div class="table-responsive">
					                    <table class="table table-hover mb-0">
					                        <thead>
					                            <tr>
					                                <th><center>Umpan Balik dari</center></th>
					                                <th><center>Isi Umpan Balik</center></th>
					                                <th><center>Tindak Lanjut</center></th>
					                            </tr>
					                        </thead>
					                        <tbody>
					                            <tr>
					                                <th align="center" scope="row"><center>(1)</center></th>
					                                <th><center>(2)</center></th>
					                                <th><center>(3)</center></th>
					                            </tr>
					                            <tr>
					                                <th scope="row">Dosen</th>
					                                <td><input type="text" name="isi_umpan_balik_dosen" value="<?php echo $isi_umpan_balik_dosen ?>" class="form-control input-sm"></td>
					                                <td><input type="text" name="tindak_lanjut_dosen" value="<?php echo $tindak_lanjut_dosen ?>" class="form-control input-sm"></td>
					                            </tr>
					                            <tr>
					                                <th scope="row">Mahasiswa</th>
					                                <td><input type="text" name="isi_umpan_balik_mhs" value="<?php echo $isi_umpan_balik_mhs ?>" class="form-control input-sm"></td>
					                                <td><input type="text" name="tindak_lanjut_mhs" value="<?php echo $tindak_lanjut_mhs ?>" class="form-control input-sm"></td>
					                            </tr>
					                            <tr>
					                                <th scope="row">Alumni</th>
					                                <td><input type="text" name="isi_umpan_balik_alumni" value="<?php echo $isi_umpan_balik_alumni ?>" class="form-control input-sm"></td>
					                                <td><input type="text" name="tindak_lanjut_alumni" value="<?php echo $tindak_lanjut_alumni ?>" class="form-control input-sm"></td>
					                            </tr>
					                            <tr>
					                                <th scope="row">Pengguna lulusan</th>
					                                <td><input type="text" name="isi_umpan_balik_lulusan" value="<?php echo $isi_umpan_balik_lulusan ?>" class="form-control input-sm"></td>
					                                <td><input type="text" name="tindak_lanjut_lulusan" value="<?php echo $tindak_lanjut_lulusan ?>" class="form-control input-sm"></td>
					                            </tr>
					                        </tbody>
					                    </table>
					                </div>
								</div>
								<div class="form-group">
									<label for="companyName">
										2.6 Keberlanjutan<br>
										Jelaskan upaya untuk menjamin keberlanjutan (sustainability) program studi ini, khususnya dalam hal:
										<br><br>
										a. Upaya untuk peningkatan animo calon mahasiswa
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="upaya_animo" placeholder="Upaya untuk peningkatan animo calon mahasiswa" <?php echo $readonly ?>><?php echo $upaya_animo ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										b. Upaya untuk peningkatan mutu manajemen
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="upaya_mutu_manajemen" placeholder="Upaya untuk peningkatan mutu manajemen" <?php echo $readonly ?>><?php echo $upaya_mutu_manajemen ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										c. Upaya untuk peningkatan mutu lulusan
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="upaya_mutu_lulusan" placeholder="Upaya untuk peningkatan mutu lulusan" <?php echo $readonly ?>><?php echo $upaya_mutu_lulusan ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="upaya_kemitraan" placeholder="Upaya untuk pelaksanaan dan hasil kerjasama kemitraan" <?php echo $readonly ?>><?php echo $upaya_kemitraan ?></textarea>
								</div>
								<div class="form-group">
									<label for="companyName">
										e. Upaya dan prestasi memperoleh dana hibah kompetitif
									</label>
									<textarea id="projectinput8" rows="3" class="form-control" name="upaya_dana_hibah" placeholder="Upaya dan prestasi memperoleh dana hibah kompetitif" <?php echo $readonly ?>><?php echo $upaya_dana_hibah ?></textarea>
								</div>
								<h5 class="form-section"><i class="icon-clipboard4"></i> Dokumen Pendukung</h5>
								<?php 
								$query_dokumen = "SELECT * FROM dokumen_pendukung WHERE id_standar = 2";
	                        	$data = mysqli_query($koneksi, $query_dokumen);
	                        	$count_data = mysqli_num_rows($data);
								?>
									<?php if ($_GET['page'] == 'isi_standar2') { 
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
								                                	<?php if ($_GET['page'] == 'isi_standar2') { ?>	
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
								<?php if ($_GET['page'] == 'isi_standar2') { ?>
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
	            .removeClass('add_button').addClass('remove_button')
	            .removeClass('btn-success').addClass('btn-danger')
	            .html('<i class="icon-minus3"></i>');
	    }).on('click', '.remove_button', function(e)
	    {
	        $(this).parents('.content_upload:first').remove();
	        e.preventDefault();
	        return false;
	    });

	});
</script>
