<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>Admin Paris Wrought Iron</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/morris.js/morris.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/style.min.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">

        <!-- Topbar header - style you can find in pages.scss -->

        @include('layout_admin.header')

        <!-- End Topbar header -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->

        @include('layout_admin.topsidebar')

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- Page wrapper  -->

        <div class="page-wrapper">

            <!-- Bread crumb and right sidebar toggle -->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- End Wrapper -->
    <div class="chat-windows"></div>
    <!-- All Jquery -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app.init.horizontal.js') }}"></script>
    <script src="{{ asset('assets/dist/js/app-style-switcher.horizontal.js') }}"></script>

    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>

    <script src="{{ asset('assets/dist/js/waves.js') }}"></script>

    <script src="{{ asset('assets/dist/js/sidebarmenu.js') }}"></script>

    <script src="{{ asset('assets/dist/js/custom.min.js') }}"></script>

    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>

    <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>

    <script src="{{ asset('assets/dist/js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>
