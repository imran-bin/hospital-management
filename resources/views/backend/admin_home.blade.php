 

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin site</title>
    <!-- plugins:css -->
    @include('backend.admin_css')
  </head>
  <body>
    <div class="container-scroller">
       
      <!-- partial:partials/_sidebar.html -->
   @include('backend.admin_sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
             @include('backend.admin_topbar')
        <!-- partial -->
      @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="backend/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="backend/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="backend/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="backend/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="backend/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="backend/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="backend/assets/js/off-canvas.js"></script>
    <script src="backend/assets/js/hoverable-collapse.js"></script>
    <script src="backend/assets/js/misc.js"></script>
    <script src="backend/assets/js/settings.js"></script>
    <script src="backend/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="backend/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>