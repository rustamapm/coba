<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:view/login/login.php");
  }
  ?>
  <head>
    <?php
    include 'action/koneksi.php';
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Project Dashboard - Robust Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style type="text/css">
      .footer {

          height:45px; 
          width: 100%; 
          background-image: none;
          background-repeat: repeat;
          background-attachment: scroll;
          background-position: 0% 0%;
          position: fixed;
          bottom: 0pt;
          left: 0pt;

      }   
    </style>
    <!-- END Custom CSS-->

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- <script src="app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL JS-->
    <script>
      $(document).ready(function () {
            $("#alertlog").show().delay(5000).fadeOut();
         });
    </script>
    <script type="text/javascript">
      function tambah_dokumen(id_standar, standar)
      {
        $('#modal_tambah_dokumen').modal('show');
        $('#span_standar_type').html(standar);
        $('#id_standar').val(id_standar);
      }

      function hapus_dokumen(id)
      {
        $.ajax({
            type: "POST",
            url: 'action/hapus_dokumen_ajax.php',
            data: {id:id},
            success: function(data){
              console.log(data);
            }
        });
      }

      function hapus_prestasi(id)
      {
        $.ajax({
            type: "POST",
            url: 'action/hapus_prestasi_ajax.php',
            data: {id:id},
            success: function(data){
              console.log(data);
            }
        });
      }
    </script>
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img style="max-width: 40%;" alt="branding logo" src="app-assets/images/logo/UNIVERSITAS-MUHAMMADIYAH-JAKARTA.png" data-expand="app-assets/images/logo/UNIVERSITAS-MUHAMMADIYAH-JAKARTA.png" data-collapse="app-assets/images/logo/robust-logo-small.png" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content container-fluid">
          <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
            <ul class="nav navbar-nav">
              <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
              <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
            </ul>
            <ul class="nav navbar-nav float-xs-right">
              
              <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?php echo $_SESSION['username']; ?></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="action/act_logout.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="index.php"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-stack-2"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Standar</span></a>
            <ul class="menu-content">
              <li><a href="index.php?page=standar1" data-i18n="nav.page_layouts.1_column" class="menu-item">Standar 1</a>
              </li>
              <li><a href="index.php?page=standar2" data-i18n="nav.page_layouts.2_columns" class="menu-item">Standar 2</a>
              </li>
              <li><a href="index.php?page=standar3" data-i18n="nav.page_layouts.boxed_layout" class="menu-item">Standar 3</a>
              </li>
              <li><a href="index.php?page=standar4" data-i18n="nav.page_layouts.static_layout" class="menu-item">Standar 4</a>
              </li>
              <li><a href="index.php?page=standar5" data-i18n="nav.page_layouts.static_layout" class="menu-item">Standar 5</a>
              </li>
              <li><a href="index.php?page=standar6" data-i18n="nav.page_layouts.static_layout" class="menu-item">Standar 6</a>
              </li>
              <li><a href="index.php?page=standar7" data-i18n="nav.page_layouts.static_layout" class="menu-item">Standar 7</a>
              </li>
            </ul>
          </li>
          <li class=" nav-item"><a href="index.php?page=penilaian"><i class="icon-briefcase4"></i><span data-i18n="nav.project.main" class="menu-title">Penilaian</span></a>
          </li>
          <li class=" nav-item"><a href="#"><i class="icon-ios-albums-outline"></i><span data-i18n="nav.cards.main" class="menu-title">Pengaturan</span></a>
            <ul class="menu-content">
              <li><a href="index.php?page=master_user" data-i18n="nav.cards.card_bootstrap" class="menu-item">User</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->
          <?php
          if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
              case 'standar1':
              case 'standar2':
              case 'standar3':
              case 'standar4':
              case 'standar5':
              case 'standar6':
              case 'standar7':
                include "view/standar/view_standar.php";
                break;
              case 'penilaian':
                include "view/standar/penilaian.php";
                break;
              case 'isi_standar1':
              case 'lihat_standar1':
                include "view/standar/isi_standar1.php";
                break;
              case 'isi_standar2':
              case 'lihat_standar2':
                include "view/standar/isi_standar2.php";
                break;
              case 'isi_standar3':
              case 'lihat_standar3':
                include "view/standar/isi_standar3.php";
                break;
              case 'isi_standar4':
              case 'lihat_standar4':
                include "view/standar/isi_standar4.php";
                break;
              case 'master_user':
                include "view/user/master_user.php";
                break;
              default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
            }
          }else{
            include "view/home/view_home.php";
          }
          ?>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="modal fade text-xs-left" id="modal_tambah_dokumen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel1">Upload Dokumen Pendukung <span id="span_standar_type"></span></h4>
        </div>
        <form class="form" method="post" id="form_dokumen" action="action/upload_dokumen_pendukung.php" enctype="multipart/form-data">
          <div class="modal-body">
              <div class="form-body">
                <div class="form-group">
                  <label><strong>Pilih File</strong></label>
                  <label id="projectinput7" class="file center-block">
                    <input type="hidden" name="id_standar" id="id_standar">
                    <input type="file" id="file" name="file_dokumen">
                    <span class="file-custom"></span>
                  </label>
                </div>

                <div class="form-group">
                  <label for="projectinput8">Keterangan</label>
                  <textarea id="projectinput8" rows="2" class="form-control" name="keterangan_file" placeholder="Keterangan"></textarea>
                </div>
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="button" onclick="form_submit()" class="btn btn-outline-primary">Save changes</button>
          </div>
        </form>
      </div>
      </div>
    </div>

    <script type="text/javascript">
      function form_submit() {
        document.getElementById("form_dokumen").submit();
      }    
    </script>

    <footer class="footer footer-static footer-light navbar-border">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; <?php echo date('Y'); ?> <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2"></a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>
  </body>
</html>
