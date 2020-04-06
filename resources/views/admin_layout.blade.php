<!DOCTYPE html>
<html lang="en">

<head>



    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin/dash/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/css/style.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin/dash/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">


    <!-- Vendor CSS-->
    <link href="{{asset('admin/dash/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/dash/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin/dash/css/theme.css')}}" rel="stylesheet" media="all">

    <!-- customer CSS-->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" media="all">
</head>

<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @yield('normalViewnavBar')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @yield('mobileView')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->

            @yield('dash_header')

            <!-- HEADER DESKTOP-->
            @yield('content')
             <!-- MAIN CONTENT-->

<!-- END MAIN CONTENT-->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->

    <script src="{{asset('admin/dash/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('admin/dash/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin/dash/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('admin/dash/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('admin/dash/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin/dash/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('admin/dash/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('admin/dash/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin/dash/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('admin/dash/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admin/dash/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('admin/dash/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin/dash/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('admin/dash/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
