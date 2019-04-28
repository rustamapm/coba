<!-- Basic form layout section start -->
<?php
if ($_GET['page'] == 'standar1') {
	$judul = 'Standar 1';
	$keterangan = 'Visi, Misi, Tujuan dan Sasaran serta Strategi Pencapaian';
}else if ($_GET['page'] == 'standar2') {
	$judul = 'Standar 2';
	$keterangan = 'Tata pamong, kepemimpinan, sistem pengelolaan, dan penjaminan mutu';
}else if ($_GET['page'] == 'standar3') {
	$judul = 'Standar 3';
	$keterangan = 'Mahasiswa dan lulusan';
}else if ($_GET['page'] == 'standar4') {
	$judul = 'Standar 4';
	$keterangan = 'Sumberdaya Manusia';
}else if ($_GET['page'] == 'standar5') {
	$judul = 'Standar 5';
	$keterangan = 'Kurikulum, pembelajaran, dan suasana akademik';
}else if ($_GET['page'] == 'standar6') {
	$judul = 'Standar 6';
	$keterangan = 'Pembiayaan, sarana, dan prasarana, serta sistem informasi';
}else if ($_GET['page'] == 'standar7') {
	$judul = 'Standar 7';
	$keterangan = 'Penelitian dan pelayanan/pengabdian kepada masyarakat, dan kerja sama';
}
?>
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form"><?php echo $judul ?></h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<div class="card-text">
							<p><?php echo $judul ?></p>
                           	<p><?php echo $keterangan ?></p>
                           	<a href="index.php?page=lihat_<?php echo $_GET['page'] ?>">
                           		<button class="btn btn-info btn-md">Lihat <?php echo $judul ?></button>
                           	</a>
                           	<a href="index.php?page=isi_<?php echo $_GET['page'] ?>">
                           		<button class="btn btn-success btn-md">Isi <?php echo $judul ?></button>
                           	</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- // Basic form layout section end -->