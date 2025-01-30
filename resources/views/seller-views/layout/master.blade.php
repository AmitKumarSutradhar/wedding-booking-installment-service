<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - Wedding Service </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('/') }}admin/assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
   @include('seller-views.includes.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       @include('seller-views.includes.sidebar')
        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('seller-views.includes.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('/') }}admin/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('/') }}admin/assets/vendors/chart.js/chart.umd.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="{{ asset('/') }}admin/assets/vendors/select2/select2.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('/') }}admin/assets/js/off-canvas.js"></script>
<script src="{{ asset('/') }}admin/assets/js/template.js"></script>
<script src="{{ asset('/') }}admin/assets/js/settings.js"></script>
<script src="{{ asset('/') }}admin/assets/js/hoverable-collapse.js"></script>
<script src="{{ asset('/') }}admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('/') }}admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="{{ asset('/') }}admin/assets/js/dashboard.js"></script>
<!-- <script src="{{ asset('/') }}admin/assets/js/Chart.roundedBarCharts.js"></script> -->


<script src="{{ asset('/') }}admin/assets/js/typeahead.js"></script>
<script src="{{ asset('/') }}admin/assets/js/select2.js"></script>
<!-- End custom js for this page-->
</body>

</html>
