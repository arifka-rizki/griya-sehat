<?php
  session_start();
  if($_SESSION["adminlog"]!==true){
    header("location: index.html");
  }
  $_SESSION["checkdate"]=false;
  $_SESSION["datex"]=date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

 <!-- Custom fonts for this template-->
    <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

    <!-- Page level plugin CSS-->
    <!--<link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">-->
    <link rel="stylesheet" href="frontend/libraries/datatables/dataTables.bootstrap4.css">
    <!-- Custom styles for this template-->
    <!--<link href="css/sb-admin.css" rel="stylesheet">-->
    <link rel="stylesheet" href="frontend/styles/sb-admin.css">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top mr-auto">

    <a class="navbar-brand mr-1" href="dashboardadmin.html">Admin Dashboard</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <!--<ul class="navbar-nav  ml-auto ">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="adminlogin.html" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    
    </ul>-->

    <ul class="navbar-nav  ml-auto ">
      
      <li class="nav-item ">
        <a class="nav-link change-color text-white font-weight-bold" href="logout.php">Log Out</a>
      </li>
    </ul>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboardadmin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="daftarpasien.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Pasien</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="daftarreservasi.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Reservasi</span></a>
      </li>
    </ul>

    <div id="content-wrapper" class=" align-content-center">

      <div class="container-fluid">

        <h1 class=" mt-5 text-center">
        Dashboard Admin
        
        <br>
        
        </h1>

        <?php
          if($_SESSION["reservtrue"]===true){
            echo "ID Pasien: ", $_SESSION["idp"], "<br>";
            echo "Nama: ", $_SESSION["namar"], "<br>";
            echo "Jenis Kelamin: ", $_SESSION["gender"], "<br>";
            echo "Tanggal Lahir: ", $_SESSION["tanggall"], "<br>";
            echo "Alamat: ", $_SESSION["alamat"], "<br><br>";
            echo "ID Reservasi: ", $_SESSION["idr"], "<br>";
            echo "Tanggal Periksa: ", $_SESSION["tanggalp"], "<br>";
            echo "Dokter: ", $_SESSION["dokter"], "<br>";
          }
        ?>
        
    </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="adminlogin.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <div class=" modal"></div>
  -->

   <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    -->
    <link rel="stylesheet" href="/frontend/libraries/jquery/jquery-3.4.1.min.js">
    <link rel="stylesheet" href="/frontend/libraries/bootstrap/js/bootstrap.bundle.min.js">
  

    <!-- Core plugin JavaScript-->
    <!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>-->
    <link rel="stylesheet" href="/frontend/libraries/jquery-easing/jquery.easing.min.js">

    <!-- Page level plugin JavaScript-->
    <!--<script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>-->
    <script src="/frontend/libraries/datatables/jquery.dataTables.js"></script>
    <script src="/frontend/libraries/datatables/dataTables.bootstrap4.js"></script>
    <script src=""></script>

    <!-- Custom scripts for all pages-->
    <!--<script src="js/sb-admin.min.js"></script>-->
    <script src="/frontend/scripts/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
