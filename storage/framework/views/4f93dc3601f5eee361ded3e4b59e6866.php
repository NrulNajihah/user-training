<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UnitLatihanAdmin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="css/materialdesignicons.min.css">
  <link rel="stylesheet" href="css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style1.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/course')); ?>">
            <i class="mdi mdi-clipboard menu-icon"></i>
            <span class="menu-title">Courses</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/program')); ?>">
          <i class="mdi mdi-folder menu-icon"></i>
            <span class="menu-title">Programs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/date')); ?>">
            <i class="mdi mdi-calendar menu-icon"></i>
            <span class="menu-title">Available Dates</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/enrollment')); ?>">
          <i class="mdi mdi-account-plus menu-icon"></i>
            <span class="menu-title">Enrollments</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Settings</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="docs/documentation.html">
          <i class="mdi mdi-logout menu-icon"></i>
            <span class="menu-title">Log Out</span>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-xl-6 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <p class="card-title">Statistik</p>
                      <p class="text-muted"></p>
                      <div class="row mb-3">
                        <div class="col-md-7">
                          <div class="d-flex justify-content-between traffic-status">
                            <div class="item">
                              <p class="mb-"></p>
                              <h5 class="font-weight-bold mb-0"></h5>
                              
                            </div>
                            <div class="item">
                              
                            </div>
                            <div class="item">
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          
                        </div>
                      </div>
                      <canvas id="audience-chart"></canvas>
                    </div>
                  </div>
                </div>
                
                
              </div>
            </div>
            
          </div>
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html><?php /**PATH C:\inetpub\wwwroot\project\resources\views/dashboard.blade.php ENDPATH**/ ?>