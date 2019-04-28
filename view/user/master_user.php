<!-- Hoverable rows start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List User</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
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
                    <button class="btn btn-success btn-sm" onclick="tambah_user()">Tambah User</button>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query_dokumen = "SELECT a.*, b.nama_role
                                                    FROM users a
                                                    INNER JOIN role b ON a.role = b.id";
                                $data = mysqli_query($koneksi, $query_dokumen);
                                $count_data = mysqli_num_rows($data);
                                if ($count_data > 0) {
                                    $no = 1;
                                    while ($row = mysqli_fetch_array($data))
                                    { ?>
                                        <tr>
                                            <td scope="row"><?php echo $no; ?></td>
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php echo $row['nama_role'] ?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" onclick="edit_user(<?php echo $row['id'] ?>)"><i class="icon-download4"></i></button>
                                                <a href="action/delete_user.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Yakin hapus User ini?');">
                                                    <button type="button" class="btn btn-danger btn-sm"><i class="icon-trash-o"></i></button>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php $no++; }
                                }else{ ?>
                                    <tr>
                                        <td colspan="4"><center>User tidak terseida.</center></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade text-xs-left" id="modal_tambah_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel1">Tambah User <span id="span_standar_type"></span></h4>
    </div>
    <form class="form" method="post" id="form_user" action="action/simpan_user.php" enctype="multipart/form-data">
      <div class="modal-body">
          <div class="form-body">
            <div class="form-group">
              <label for="projectinput8">Username</label>
              <input type="hidden" name="act_user" id="act_user">
              <input type="hidden" name="id_user" id="id_user">
              <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
              <label for="projectinput8">Password <span id="ganti_password" style="font-style: italic;font-size: 12px;">*Isi Jika Password akan diganti</span></label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
              <label for="projectinput8">Role</label>
              <select class="form-control" name="role" id="role">
                  <option value="">-- Pilih Role --</option>
                  <?php 
                    $query = mysqli_query($koneksi, "SELECT * FROM role");
                    while ($row = mysqli_fetch_array($query))
                    { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['nama_role'] ?></option>
                    <?php } ?>
              </select>
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="form_submit_user()" class="btn btn-outline-primary">Save changes</button>
      </div>
    </form>
  </div>
  </div>
</div>
<!-- Hoverable rows end -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#ganti_password').hide();
    });

    function tambah_user()
    {
        $('#modal_tambah_user').modal('show');
        $('#act_user').val('insert');
        $('#ganti_password').hide();
    }


    function edit_user(id)
    {
        $('#modal_tambah_user').modal('show');
        $('#act_user').val('update');
        $('#ganti_password').show();
        $.ajax({
            type: "POST",
            url: 'action/get_edit_user.php',
            data: {id:id},
            success: function(data){
                var data_user = JSON.parse(data);
                $('#username').val(data_user['username']);
                $('#role').val(data_user['role']);
            }
        });
    }

    function form_submit_user(){
        document.getElementById("form_user").submit();
    }
</script>