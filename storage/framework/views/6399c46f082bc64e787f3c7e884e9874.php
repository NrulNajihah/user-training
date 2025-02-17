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
        <li class="nav-item active">
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Program</h4>
                  <button type="button" class="btn btn-info btn-icon-text" data-toggle="modal" data-target="#addModal">
                          Add
                          <i class="mdi mdi-plus btn-icon-append"></i>                                                                              
                        </button>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Course ID
                          </th>
                          <th>
                            Program ID
                          </th>
                          <th>
                            Program Name
                          </th>
                          <th>
                            Duration
                          </th>
                          <th>
                            Fee
                          </th>
                          <th>
                            Time
                          </th>
                          <th>
                            Practical Mode
                          </th>
                          <th>
                            Location
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $progList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($program->course->course_id); ?></td>
                        <td><?php echo e($program->program_id); ?></td>
                        <td><?php echo e($program->program_name); ?></td>
                        <td><?php echo e($program->duration); ?></td>
                        <td><?php echo e($program->fee); ?></td>
                        <td><?php echo e($program->time); ?></td>
                        <td><?php echo e($program->practical_mode); ?></td>
                        <td><?php echo e($program->location); ?></td>
                          <td>
                          <a href= "javascript:void">
                            <button type = button
                            class="btn btn-success btn-rounded btn-icon btn-edit" 
                            data-toggle="modal" 
                            data-target="#editModal" 
                            data-pid="<?php echo e($program->pID); ?>" 
                            data-cid="<?php echo e($program->cID); ?>" 
                            data-id="<?php echo e($program->program_id); ?>" 
                            data-name="<?php echo e($program->program_name); ?>"
                            data-duration="<?php echo e($program->duration); ?>"
                            data-fee="<?php echo e($program->fee); ?>"
                            data-time="<?php echo e($program->time); ?>" 
                            data-pmode="<?php echo e($program->practical_mode); ?>"
                            data-loc="<?php echo e($program->location); ?>">
                             <i class="mdi mdi-pencil"></i>
                          </button>
                            </a>
                          <form action="<?php echo e(route('program.destroy', $program->pID)); ?>" method="POST" style="display:inline;">
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
                    <form action="<?php echo e(route('program.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="cID">Course ID</label>
                              <select class="form-control" id="cID" name="cID" required>
                                <option value="" disabled selected>Select a Course</option>
                                 <?php $__currentLoopData = $courseList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($course->cID); ?>"><?php echo e($course->course_id); ?> - <?php echo e($course->course_name); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="program_id">Program ID</label>
                            <input type="text" class="form-control" id="program_id" name="program_id" placeholder="Enter Program ID" required>
                        </div>
                        <div class="form-group">
                            <label for="program_name">Program Name</label>
                            <input type="text" class="form-control" id="program_name" name="program_name" placeholder="Enter Program Name" required>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter The Duration" required>
                        </div>
                        <div class="form-group">
                            <label for="fee">Fee</label>
                            <input type="text" class="form-control" id="fee" name="fee" placeholder="Enter The Fee" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text" class="form-control" id="time" name="time" placeholder="Enter the Time" required>
                        </div>
                        <div class="form-group">
                            <label for="practical_mode">Practical Mode</label>
                            <input type="text" class="form-control" id="practical_mode" name="practical_mode" placeholder="Enter The Practical Mode" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Enter The Location" required>
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
                            <label for="cID">Course ID</label>
                              <select class="form-control" id="cID" name="cID" required>
                                <option value="" disabled selected>Select a Course</option>
                                 <?php $__currentLoopData = $courseList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($course->cID); ?>"><?php echo e($course->course_id); ?> - <?php echo e($course->course_name); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="program_id">Program ID</label>
                            <input type="text" class="form-control" id="program_id" name="program_id" value="<?php echo e(old('program_id', $program->program_id)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="program_name">Program Name</label>
                            <input type="text" class="form-control" id="program_name" name="program_name" value="<?php echo e(old('program_name', $program->program_name)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="duration" name="duration" value="<?php echo e(old('duration', $program->duration)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="fee">Fee</label>
                            <input type="text" class="form-control" id="fee" name="fee" value="<?php echo e(old('fee', $program->fee)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="time">Time</label>
                            <input type="text" class="form-control" id="time" name="time" value="<?php echo e(old('time', $program->time)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="practical_mode">Practical Mode</label>
                            <input type="text" class="form-control" id="practical_mode" name="practical_mode" value="<?php echo e(old('practical_mode', $program->practical_mode)); ?>">
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="<?php echo e(old('location', $program->location)); ?>">
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
        var cID = button.data('cid');
        var programID = button.data('id');
        var programName = button.data('name');
        var duration = button.data('duration');
        var fee = button.data('fee');
        var time = button.data('time');
        var pracMode = button.data('pmode');
        var location = button.data('loc');
        var pID = button.data('pid');

        // Update modal fields
        var modal = $(this);
        modal.find('#cID').val(cID);
        modal.find('#program_id').val(programID);
        modal.find('#program_name').val(programName);
        modal.find('#duration').val(duration);
        modal.find('#fee').val(fee);
        modal.find('#time').val(time);
        modal.find('#practical_mode').val(pracMode);
        modal.find('#program_name').val(programName);
        modal.find('#location').val(location);

        // Update form action dynamically
        var formAction = "<?php echo e(route('program.update', ':id')); ?>".replace(':id', pID); // Replace with dynamic URL as needed
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

</html><?php /**PATH C:\inetpub\wwwroot\project\resources\views/program.blade.php ENDPATH**/ ?>