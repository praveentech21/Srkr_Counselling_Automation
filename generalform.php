<?php

  include "link.php";
  session_start();
  $Regno = $_SESSION['Regno'];
  if(!empty($Regno)){
    $some= mysqli_fetch_assoc(mysqli_query($con,"select random from student where regno ='$Regno'"));
    if($some['random']!= 'datasetedshiva')
    {
      if($some['random'] != 'dataupdatedshiva') header("location:academics.php");
      else header("location:booklet.php");
    } 
  }
  else header("location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <?php
        include "header.php";
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include "navbar.php";
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            Write Your Body Hear
            <!--  -->
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

          
          </div>
          <?php
            include "fotter.php";
          ?>
          <!-- partial -->
        </div>
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>