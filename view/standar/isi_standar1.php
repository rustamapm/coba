<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<?php 
				if ($_GET['page'] == 'isi_standar1') {
					$readonly = "";
					$judul = "Isi Standar 1";
				}else{
					$readonly = "readonly";
					$judul = "Lihat Standar 1";
				}

				$data = mysqli_query($koneksi, "SELECT * FROM standar1 LIMIT 1");
				$cek = mysqli_num_rows($data);
				if ($cek > 0) {
					$row = mysqli_fetch_assoc($data);
					$act = "update";
					$id = $row['id'];
					$mekanisme_penyusunan = $row['mekanisme_penyusunan'];
					$visi = $row['visi'];
					$misi = $row['misi'];
					$tujuan = $row['tujuan'];
					$strategi_pencapaian = $row['strategi_pencapaian'];
					$sosialisasi = $row['sosialisasi'];
				}else{
					$act = "insert";
					$id = "";
					$mekanisme_penyusunan = "";
					$visi = "";
					$misi = "";
					$tujuan = "";
					$strategi_pencapaian = "";
					$sosialisasi = "";
				}

				?>
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Standar 1</h4>
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
						<div class="controls">
							<form class="form" method="post" action="action/simpan_standar1.php" enctype="multipart/form-data">
								<div class="form-body">
									<h4 class="form-section"><i class="icon-clipboard4"></i> <?php echo $judul; ?></h4>
									<div class="form-group">
										<label for="companyName">1.1.1 Jelaskan mekanisme penyusunan visi, misi, tujuan, dan sasaran program studi, serta pihak-pihak yang dilibatkan</label>
										<input type="hidden" name="act" value="<?php echo $act ?>">
										<input type="hidden" name="id" value="<?php echo $id ?>">
										<textarea id="projectinput8" rows="3" class="form-control" name="mekanisme_penyusunan" placeholder="Jelaskan mekanisme penyusunan visi, misi, tujuan, dan sasaran program studi, serta pihak-pihak yang dilibatkan" <?php echo $readonly ?>><?php echo $mekanisme_penyusunan; ?></textarea>
									</div>
									<div class="form-group">
										<label for="projectinput8">1.1.2 Visi</label>
										<textarea id="projectinput8" rows="3" class="form-control" name="visi" placeholder="Visi" <?php echo $readonly ?>><?php echo $visi; ?></textarea>
									</div>
									<div class="form-group">
										<label for="projectinput8">1.1.3 Misi</label>
										<textarea id="projectinput8" rows="3" class="form-control" name="misi" placeholder="Misi" <?php echo $readonly ?>><?php echo $misi; ?></textarea>
									</div>
									<div class="form-group">
										<label for="projectinput8">1.1.4 Tujuan</label>
										<textarea id="projectinput8" rows="3" class="form-control" name="tujuan" placeholder="Tujuan" <?php echo $readonly ?>><?php echo $tujuan; ?></textarea>
									</div>
									<div class="form-group">
										<label for="projectinput8">1.1.5 Strategi dan Pencapaiannya</label>
										<textarea id="projectinput8" rows="3" class="form-control" name="strategi_pencapaian" placeholder="Strategi dan Pencapaiannya" <?php echo $readonly ?>><?php echo $strategi_pencapaian; ?></textarea>
									</div>
									<div class="form-group">
										<label for="projectinput8">
											1.2.1 Sosialisasi <br>
											Uraikan upaya penyebaran/sosialisasi visi, misi, dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan
										</label>
										<textarea id="projectinput8" rows="3" class="form-control" name="sosialisasi" placeholder="Uraikan upaya penyebaran/sosialisasi visi, misi, dan tujuan program studi serta pemahaman sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan" <?php echo $readonly ?>><?php echo $sosialisasi; ?></textarea>
									</div>
									<h5 class="form-section"><i class="icon-clipboard4"></i> Dokumen Pendukung</h5>
									<?php 
									$query_dokumen = "SELECT * FROM dokumen_pendukung WHERE id_standar = 1";
		                        	$data = mysqli_query($koneksi, $query_dokumen);
		                        	$count_data = mysqli_num_rows($data);
									?>
										<?php if ($_GET['page'] == 'isi_standar1') { 
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
									                                	<?php if ($_GET['page'] == 'isi_standar1') { ?>	
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
									<!-- <?php if($_GET['page'] == 'isi_standar1') { ?>
										<span class="btn btn-success btn-sm" type="button" id="tambah_dokumen" onclick="tambah_dokumen('1','Standar 1')">Upload Dokumen Pendukung</span>
									<?php } ?> -->
								</div>

								<div class="form-actions">
									<a href="index.php?page=standar1">
										<button type="button" class="btn btn-warning mr-1">
											<i class="icon-cross2"></i> Cancel
										</button>
									</a>
									<?php if ($_GET['page'] == 'isi_standar1') { ?>
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
