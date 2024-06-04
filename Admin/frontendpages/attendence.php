<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
   <title>Document</title>
   <?php
    include_once('../common/session.php');
   ?>
</head>
<body>
   <!-- component -->
   <?php  include ('../assets/script.css') ?>

 <div x-data="setup()" :class="{ 'dark': isDark }">
     <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
 
       <!-- Header -->
       <?php  include('../common/navbar.php');  ?>
       <!-- ./Header -->
     
       <!-- Sidebar -->
       <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <?php  include('../common/sidebar.php');  ?>
           <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
         </div>
       </div>
       <!-- ./Sidebar -->
     
       <!-- main starts -->
       <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
<!-- paste code here you want to set in main  -->
<div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Applications</h4>
                      <a href="#" class="text-dark ms-auto mb-3 mb-sm-0"> View all Applications</a>
                      <h4 class="card-title mb-sm-0">attendance</h4>
                      <!-- <a href="#" class="text-dark ms-auto mb-3 mb-sm-0"> View all Applications</a> -->
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table id="myDataTable"class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Date</th>
                            <th class="font-weight-bold">Login Time</th>
                            <th class="font-weight-bold">Logout Time</th>
                            <th class="font-weight-bold">Active Time</th>
                            <th class="font-weight-bold">Status</th>
                            <th class="font-weight-bold">Details</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                           // foreach($rows as $row){
                          ?>
                          <tr>
                            <td>
                               <?php echo $row['date']; ?>
                            </td>
                            <td><?php echo $row['firstLogin']; ?></td>
                            <td><?php echo $row['lastLogin']; ?></td>
                            <td><?php echo $row['minutes']; ?></td>
                            <td>
                              <div class="badge badge-success p-2"> <?php echo $row['status']; ?></div>
                            </td>
                            <td>
                            <a href='#' type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
                          <?php
                     //       }
                          ?>
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>

</div>

        <!-- main ends -->

 
 <?php   include('../assets/script.js')  ?>
 <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/moment/moment.min.js"></script>
    <script src="assets/vendors/daterangepicker/daterangepicker.js"></script>
    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
    <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
    <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="./common/script.js"></script>
</body>
</html>