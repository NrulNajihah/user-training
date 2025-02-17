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
        <li class="nav-item">
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
        <li class="nav-item active">
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Available date</h4>
                  <button type="button" class="btn btn-info btn-icon-text" data-toggle="modal" data-target="#addModal">
                          Add
                          <i class="mdi mdi-plus btn-icon-append"></i>                                                                              
                        </button>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Date
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $dateList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($date->date); ?></td>
                          <td><?php if($date->status === 'active'): ?>
                            <span class="badge badge-success">Active</span>
                            <?php else: ?>
                            <span class="badge badge-danger">Disactive</span>
                            <?php endif; ?>
                          </td>
                          <td>
                          <a href = "javascript:void">
                          <button type="button" 
                          class="btn btn-success btn-rounded btn-icon" 
                          data-toggle="modal" 
                          data-target="#editModal"
                          data-did="<?php echo e($date->dID); ?>" 
                          data-dated="<?php echo e($date->date); ?>"
                          data-stts="<?php echo e($date->status); ?>">
                          <i class="mdi mdi-pencil"></i> </button>
                          </a>
                          <form action="<?php echo e(route('date.destroy', $date->dID)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                          <button type="submit" class="btn btn-danger btn-rounded btn-icon"><i class="mdi mdi-delete"></i> </button>
                          </form>
                        </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
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

  <!-- Modal for adding  -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('date.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Enter Your Department" required>
                        </div>
                        <div class="form-group">
                          <label for="status">Status</label>
                          <select class="form-control" id="status" name="status" required>
                            <option value="" disabled selected>Select a Status</option>
                            <option value="active">Active</option>
                            <option value="disactive">Disactive</option>
                          </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for edit  -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form id="editForm" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="date" name="date" value="<?php echo e(old('date', $date->date)); ?>">
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <select class="form-control" id="status" name="status" required>
                        <option value="active" <?php echo e($date->status == 'active' ? 'selected' : ''); ?>>Active</option>
                        <option value="disactive" <?php echo e($date->status == 'disactive' ? 'selected' : ''); ?>>Disactive</option>
                      </select>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  <!-- container-scroller -->

  <script>
    document.addEventListener('DOMContentLoaded',function() {
      //Event listener fro showing the modal
      $('#editModal').on('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = $(event.relatedTarget);

        // Extract data from the button attributes
        var Date = button.data('dated');
        var Status = button.data('stts');
        var dID = button.data('did');

        // Update modal fields
        var modal = $(this);
        modal.find('#date').val(Date);
        modal.find('#status').val(Status);

        // Update form action dynamically
        var formAction = "<?php echo e(route('date.update', ':id')); ?>".replace(':id', dID); // Replace with dynamic URL as needed
        modal.find('#editForm').attr('action', formAction);
      });
    });
    </script>
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

</html><?php /**PATH C:\inetpub\wwwroot\project\resources\views/date.blade.php ENDPATH**/ ?>