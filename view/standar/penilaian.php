<!-- Hoverable rows start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Penilaian</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
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
                    <form method="post" action="action/simpan_penilaian.php">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <tr>
                                <td colspan="4"><strong>Rekap Asesmen Kecukupan Borang 3A</strong></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>Jumlah</td>
                                <td>bobot-2</td>
                                <td>Nxbobot2</td>
                            </tr>
                            <?php 
                            $query = mysqli_query($koneksi, "SELECT SUM(nilaixbobot) as jumlah FROM penilaian");
                            $row = mysqli_fetch_assoc($query);
                            $jumlah = $row['jumlah'];
                            ?>
                            <tr>
                                <td>F1</td>
                                <td><?php echo $jumlah ?></td>
                                <td><?php echo '0.75' ?></td>
                                <td><?php echo $jumlah * 0.75 ?></td>
                            </tr>
                        </table>
                        <br>
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Butir Penilaian</th>
                                    <th>Aspek Penilaian</th>
                                    <th>Informasi dari Borang PS</th>
                                    <th>Bobot</th>
                                    <th width="150px">Nilai</th>
                                    <th width="150px">NilaixBobot</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php 
                                    $query_dokumen = "SELECT a.*, b.nilai, b.nilaixbobot
                                                        FROM master_penilaian a
                                                        LEFT JOIN penilaian b ON a.id = b.id_penilaian
                                                    ";
                                    $data = mysqli_query($koneksi, $query_dokumen);
                                    $count_data = mysqli_num_rows($data);
                                    if ($count_data > 0) {
                                        $no = 1;
                                        while ($row = mysqli_fetch_array($data))
                                        { ?>
                                            <tr>
                                                <td scope="row">
                                                    <?php echo $no; ?>
                                                    <input type="hidden" name="id_penilaian[]" value="<?php echo $row['id'] ?>">
                                                </td>
                                                <td><?php echo $row['no_butir_penilaian'] ?></td>
                                                <td><?php echo $row['aspek_penilaian'] ?></td>
                                                <td><?php echo $row['informasi_ps'] ?></td>
                                                <td>
                                                    <strong><?php echo $row['bobot'] ?></strong>
                                                    <input type="hidden" class="form-control" name="bobot[]" value="<?php echo $row['bobot'] ?>">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="nilai[]" value="<?php echo $row['nilai'] ?>">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="nilaixbobot[]" value="<?php echo $row['nilaixbobot'] ?>" readonly>
                                                </td>
                                            </tr>

                                        <?php $no++; }
                                    }else{ ?>
                                        <tr>
                                            <td colspan="7"><center>Data tidak terseida.</center></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                        </table>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-sm">Simpan Penilaian</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hoverable rows end -->