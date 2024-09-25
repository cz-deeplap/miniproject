<?php
  session_start();
  if(session_id() != $_SESSION['sess_id']) {
    header("Location: login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iTSTORE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="styles.css"> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
  
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="https://discord.com" target="_blank">
            <img src="pic/discord.png" alt="Discord" style="width: 24px; height: 24px;">
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/athip.praneewat" target="_blank">
            <img src="pic/facebook.png" alt="Facebook" style="width: 24px; height: 24px;">
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://www.instagram.com/czatxip_/" target="_blank">
            <img src="pic/instagram.png" alt="Instagram" style="width: 24px; height: 24px;">
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://github.com/cz-deeplap" target="_blank">
            <img src="pic/github.png" alt="GitHub" style="width: 24px; height: 24px;">
        </a>
    </li>
</ul>

    </nav>
    <!-- /.navbar -->

  

  <!-- Main Sidebar Container -->
  <aside style="text-decoration: none;"class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="text-decoration: none;" href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light namelogo">it store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="pic/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="text-decoration: none;" >Admin : <?php echo $_SESSION['sess_username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
          <a href="#" class="nav-link active" style="height: 40px;">
            <ion-icon name="clipboard-outline" role="img" class="md hydrated"></ion-icon>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="index.php" class="nav-link ">
                <ion-icon name="bag-outline"></ion-icon>
                  <p>List Product</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?p=draft" class="nav-link ">
                <ion-icon name="man-outline"></ion-icon>
                  <p>วางแผนครั้งต่อไป</p>
                </a>
            </li>
            </ul>
          </li>

          
          <li class="nav-item menu-open">
          <a href="#" class="nav-link active" style="height: 40px;display: flex;align-items: center;">
            <ion-icon name="settings-outline" role="img" class="md hydrated"></ion-icon>
              <p>
                Manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?p=dashboard_user/manageuser" class="nav-link ">
                <ion-icon name="person"></ion-icon>
                  <p>Manage Users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?p=dashboard_products/edit_products" class="nav-link ">
                <ion-icon name="bag"></ion-icon>
                  <p>Manage Products</p>
                </a>
              </li>
          
              <li class="nav-item">
                <a href="index.php?p=dashboard_products/add_product" class="nav-link ">
                <ion-icon name="bag-add"></ion-icon>
                  <p>Insert Products</p>
                </a>
              </li>
            </ul>
          </li>
              
          <li class="nav-item">
          <a href="logout.php" class="nav-link" style="display: flex;background: #ff0000;color: whitesmoke;height: 40px;">
              <ion-icon name="log-out-outline" role="img" class="md hydrated"></ion-icon>
              <p style="padding: 0px 0px 0px 0px;">Logout</p>
                </a>
              </li>
            
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 633.4px;padding: 10px;">
    
     
    <?php 
      if  (isset($_REQUEST['p'])) {
        include $_REQUEST['p'] . ".php";
    } else {
      include "dashboard_products/list_products.php";
    }
    ?>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="script.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
