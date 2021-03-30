<!DOCTYPE html>
<html lang="en">
<head>
    
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <i class="fa fa-plus-square aria-hidden='true'"></i>
        <div class="sidebar-brand-text mx-3">Admin Apotek</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Home -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Navigasi Obat -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Obat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sunting Obat</h6>
            <a class="collapse-item" href="buttons.html">Obat Kapsul</a>
            <a class="collapse-item" href="cards.html">Obat Tablet</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="prosestampil.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Obat</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <h2>APOTEK MAJU MUNDUR JAYA</h2>
            
            <div class="topbar-divider d-none d-sm-block"></div>


          </ul>

        </nav>
        <!-- End of Topbar -->

         <!-- Begin Page Content -->
         <div class="container-fluid">

<!-- Page Heading -->
        <!-- CONTENT -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
        <!-- Include database -->
<?php
include("database.php");
$db = new Database();
?>
<!-- Menampilkan form beserta isi dari data yang akan diedit -->
<form action="edit.php" method="POST">
  <?php
  foreach($db->editMysql($_GET['namaObat']) as $d){
  ?>  
<table style = 'margin : auto;'>
<center><h3>EDIT DATA OBAT</h3><br/>
  <tr>
    <td>Nama Obat</td>
<td>
	<div class='form-group'>
	<input type="text" style="width:300px" class="form-control" name="namaobat" value="<?php echo $d['namaObat']?>">
  </div>
<td>
 </tr>
 <tr>
    <td>Jenis Obat</td>
<td>
	<div class='form-group'>
	<input type="text" style="width:300px" class="form-control" name="jenisobat" value="<?php echo $d['jenisObat']?>">
  </div>
<td>
 </tr>
 <tr>
    <td>Stok Obat</td>
<td>
	<div class='form-group'>
	<input type="text" style="width:300px" class="form-control" name="stokobat" value="<?php echo $d['jumlahStok']?>">
  </div>
<td>
 </tr>
 <tr>
    <td>Harga Beli(Rp.)</td>
<td>
	<div class='form-group'>
	<input type="text" style="width:300px" class="form-control" name="hbobat" value="<?php echo $d['hargaBeli']?>">
  </div>
<td>
 </tr>
 <tr>
    <td>Harga Jual(Rp.)</td>
<td>
	<div class='form-group'>
	<input type="text" style="width:300px" class="form-control" name="hjobat" value="<?php echo $d['hargaJual']?>">
  </div>
<td>
 </tr>
 <tr>
    <td>Detail Obat</td>
<td>
	<div class='form-group'>
	<input type="text" style="width:300px" class="form-control" name="det1" value="<?php echo $d['detailObat']?>">
  </div>
  </td>

</table>
<center><input type='submit' class='btn btn-primary' name='submit' value='Confirm'></input></center>
  <?php } ?>
</form>
        <!-- CONTENT -->
<!-- Footer -->
<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kempeng Brotherhood</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>