<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator - Keuangan STP</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
  <link rel="shortcut icon" href="../assets/dist/img/logo stp-01.png" type="image/x-icon">

  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <?php 
  include '../koneksi.php';
  session_start();
  if($_SESSION['status'] != "administrator_logedin"){
    header("location:../login.php?alert=belum_login");
  }
  ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">

  <style>
    #table-datatable {
      width: 100% !important;
    }
    #table-datatable .sorting_disabled{
      border: 1px solid #f4f4f4;
    }
  </style>
  <div class="wrapper">

  <header class="main-header">
      <a href="index.php" class="logo">
        <span class="logo-mini"><b><i class="fa fa-money"></i></b> </span>
        <span class="logo-lg"><b>SotoPanaz</b>App</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php 
                $id_user = $_SESSION['id'];
                $profil = mysqli_query($koneksi,"select * from master_user where Id_user='$id_user'");
                // $profil = mysqli_fetch_assoc($profil);
                ?>
                <span class="hidden-xs"><?php echo $_SESSION['nama']; ?> - <?php echo $_SESSION['level']; ?></span>
              </a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">
      <div class="user-panel">
          <div align="center">
          <img src="../gambar/user.png" class="img-circle img-responsive" width="100" height="100">
          </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
          <h4 style="color:white;" align="center"><b><?php echo $_SESSION['nama'];?></b></h4>
          <h6 style="color:white;" align="center"><i class="fa fa-circle text-success"></i> Online</h6>
          <li class="header">NAVIGASI</li>

          <li>
            <a href="index.php">
              <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
            </a>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>DATA MASTER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="accordion-collapse collapse show"><a href="divisi.php"><i class="fa fa-circle-o"></i> Data Divisi</a></li>
            <li><a href="user.php"><i class="fa fa-circle-o"></i> Data User</a></li>
            <li><a href="metode.php"><i class="fa fa-circle-o"></i> Data Metode Bayar</a></li>
            <li><a href="dana.php"><i class="fa fa-circle-o"></i> Data Sumber Dana</a></li>
            <li><a href="belanja.php"><i class="fa fa-circle-o"></i> Data Jenis Belanja</a></li>
            <li><a href="pegawai.php"><i class="fa fa-circle-o"></i> Data Pegawai</a></li>
                 <li class="accordion-collapse collapse show"><a href="keterangan.php"><i class="fa fa-circle-o"></i> Data Keterangan</a></li>            
          </ul>
        </li>
        <script>
        $(function () {
          $('.treeview').tree();
        });
        </script>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-briefcase"></i>
              <span>KESEKRETARIATAN</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="surat_masuk.php"><i class="fa fa-circle-o"></i> Data Surat Masuk</a></li>
              <li><a href="surat_keluar.php"><i class="fa fa-circle-o"></i> Data Surat Keluar</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-archive"></i>
              <span>PENGARSIPAN</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="penerimaan.php"><i class="fa fa-circle-o"></i> Arsip SPJ Dokumen penerimaan</a></li>
              <li><a href="tagihan.php"><i class="fa fa-circle-o"></i> Arsip SPJ Dokumen Tagihan</a></li>
              <li><a href="pengeluaran.php"><i class="fa fa-circle-o"></i> Arsip SPJ Dokumen Pengeluaran</a></li>
            </ul>
          </li>

          <!--<li class="treeview">-->
          <!--  <a href="#">-->
          <!--    <i class="fa fa-dollar"></i>-->
          <!--    <span>PENGELUARAN</span>-->
          <!--    <span class="pull-right-container">-->
          <!--      <i class="fa fa-angle-left pull-right"></i>-->
          <!--    </span>-->
          <!--  </a>-->
          <!--  <ul class="treeview-menu" style="display: none;">-->
          <!--    <li><a href="pengeluaran.php"><i class="fa fa-circle-o"></i> Data Pengeluaran</a></li>-->
          <!--  </ul>-->
          <!--</li>-->

          <li class="treeview">
            <a href="#">
              <i class="fa fa-institution"></i>
              <span>PENGELOLAAN KAWASAN</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="barang.php"><i class="fa fa-circle-o"></i> Pengelolaan Aset</a></li>
              <li><a href="agenda.php"><i class="fa fa-circle-o"></i> Pengelolaan Kunjungan</a></li>
            </ul>
          </li>
          
                    <li class="treeview">
            <a href="#">
              <i class="fa fa-wrench"></i>
              <span>LAYANAN TEKNIS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="diklat.php"><i class="fa fa-circle-o"></i> Data Peserta Diklat</a></li>
              <li><a href="inkubator.php"><i class="fa fa-circle-o"></i> Data Peserta Inkubator</a></li>
            </ul>
          </li>
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>INFORMASI HRD</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="database_karyawan.php"><i class="fa fa-circle-o"></i>Database Karyawan</a></li>
              <li><a href="rencana_kinerja.php"><i class="fa fa-circle-o"></i>E-Performance Karyawan</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-print"></i>
              <span>LAPORAN</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="penerimaan_laporan.php"><i class="fa fa-circle-o"></i>Laporan Penerimaan</a></li>
              <li><a href="laporan.php"><i class="fa fa-circle-o"></i>Laporan Pengeluaran</a></li>
              <li><a href="laporan_barang.php"><i class="fa fa-circle-o"></i>Laporan Aset Kawasan</a></li>
              <li><a href="agenda_laporan.php"><i class="fa fa-circle-o"></i>Laporan Agenda Kawasan</a></li>              
              <li><a href="surat_masuk_laporan.php"><i class="fa fa-circle-o"></i>Laporan Surat Masuk</a></li>
              <li><a href="surat_keluar_laporan.php"><i class="fa fa-circle-o"></i>Laporan Surat Keluar</a></li>
              <li><a href="diklat_laporan.php"><i class="fa fa-circle-o"></i>Laporan Peserta Diklat</a></li>
              <li><a href="inkubator_laporan.php"><i class="fa fa-circle-o"></i>Laporan Peserta Inkubator</a></li>          
            </ul>
          </li>
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-area-chart"></i>
              <span>INFOGRAFIS</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="Infografis_kesekretariatan.php"><i class="fa fa-circle-o"></i>Infografis Kesekretariatan</a></li>
              <li><a href="Infografis_arsip.php"><i class="fa fa-circle-o"></i>Infografis Pengarsipan</a></li>
              <li><a href="Infografis_kawasan.php"><i class="fa fa-circle-o"></i>Infografis Pengelolaan Kawasan</a></li>
              <li><a href="infografis_karyawan.php"><i class="fa fa-circle-o"></i>Infografis HRD</a></li>
              <li><a href="agenda.php"><i class="fa fa-circle-o"></i>Infografis Database Karyawan</a></li>
              <li><a href="agenda.php"><i class="fa fa-circle-o"></i>Infografis Kinerha Karyawan</a></li>       
            </ul>
          </li>

          <li>
            <a href="logout.php">
              <i class="fa fa-sign-out"></i> <span>LOGOUT</span>
            </a>
          </li>

          <li class="header">TIME</li>
          <h5 class="text-center" style="color:white;">
            <script type='text/javascript'>

            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;
            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
            //-->
            </script>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
            </style><div id="clock"></div>
            <script type="text/javascript">
            function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
                if (curr_hour < 12) {
                    a_p = "AM";
                } else {
                    a_p = "PM";
                }
                if (curr_hour == 0) {
                    curr_hour = 12;
                }
                if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
             document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            setInterval(showTime, 500);
            </script>
          </h5>
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
