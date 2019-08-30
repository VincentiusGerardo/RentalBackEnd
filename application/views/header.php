<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rental | Admin</title>
  
  <script src="<?= base_url('js/jquery.min.js') ?>"></script>

  <link rel="icon" href="<?= base_url('media/logo.png') ?>" type="image/png">

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('fontawesome/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('css/sb-admin-2.css') ?>" rel="stylesheet">
  <script src="<?= base_url('js/sb-admin-2.js') ?>"></script>

  <link href="<?= base_url('summernote/summernote-bs4.css') ?>" rel="stylesheet">
  <script src="<?= base_url('summernote/summernote-bs4.js') ?>"></script>
  

  <!-- Bootstrap core-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css') ?>">
  <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Bootstrap select -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap-select.min.css') ?>">
  <script src="<?= base_url('js/bootstrap-select.min.js') ?>"></script>

  <!-- Bootstrap table -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap-table.min.css') ?>">
  <script src="<?= base_url('js/bootstrap-table.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css')?>">
  <script src="<?= base_url('js/script.js') ?>"></script>
  <script src="<?= base_url('js/jam.js') ?>"></script>
  
  <script src="<?= base_url('js/sweetalert.min.js') ?>"></script>
  
  <?php if(!empty($this->session->flashdata('msg'))){ ?>
    <script>
      $(function(){
        swal({
          icon: "<?= $this->session->flashdata('alert') ?>",
          title: "<?= $this->session->flashdata('msg') ?>",
          button: "OK",
        });
      });
    </script>
  <?php } ?>
</head>

<body id="page-top" class="sidebar-toggled">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" style="color:white;">
        <div class="sidebar-brand-icon"><br>
          <p>Rental</p>
        </div>
      </a>
      
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Home -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Module/') ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <!-- Mobil -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Module/Mobil/') ?>">
          <i class="fas fa-fw fa-car"></i>
          <span>Mobil</span></a>
      </li>

      <!-- Jenis Mobil -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Module/JenisMobil/') ?>">
          <i class="fas fa-fw fa-car-side"></i>
          <span>Jenis Mobil</span></a>
      </li>

      <!-- Pelanggan -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Module/Pelanggan/') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Pelanggan</span></a>
      </li>

      <!-- Transaksi -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Module/Transaksi/') ?>">
          <i class="fas fa-fw fa-exchange-alt"></i>
          <span>Transaksi</span></a>
      </li>
     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $NamaUser ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('media/nopic.jpg') ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#changePassword">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>Change Password
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">