<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('concept-assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('concept-assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet"
          href="{{ asset('concept-assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('concept-assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>Storage Information System</title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    @include('base.navbar')
    @include('base.sidebar')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                @include('base.page-header')
                @yield('content')
            </div>
        </div>
    @include('base.footer')
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{ asset('concept-assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<!-- bootstap bundle js -->
<script src="{{ asset('concept-assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<!-- slimscroll js -->
<script src="{{ asset('concept-assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<!-- main js -->
<script src="{{ asset('concept-assets/libs/js/main-js.js') }}"></script>
<!-- chart chartist js -->
<script src="{{ asset('concept-assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
<!-- sparkline js -->
<script src="{{ asset('concept-assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
</body>

</html>
