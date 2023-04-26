<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dompet.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 13:45:29 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>@yield('title')</title>

    <!-- FAVICONS ICON -->

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/dashboard/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/jquery-nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/nouislider/nouislider.min.css') }}">

    @yield('style')

    <!-- Datatable -->
    <link href="{{ asset('assets/dashboard/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="{{ asset('assets/dashboard/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style.css') }}">

    <!-- Daterange picker -->
    <link href="{{ asset('assets/dashboard/css/style.css') }}vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{ asset('assets/dashboard/css/style.css') }}vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{ asset('assets/dashboard/css/style.css') }}vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="{{ asset('assets/dashboard/css/style.css') }}vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	
    <!-- Pick date -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/pickadate/themes/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/pickadate/themes/default.date.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	
    
  
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        {{-- TOP NAVBAR --}}
        @include('dashboard.components.top_nav')

        @include('dashboard.components.sidebar')

        <div class="content-body">
            @yield('pages')
        </div>

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">

            <div class="copyright">
                <p>Copyright ©
                    {{-- Designed &amp; Developed by  --}}
                    {{-- <a href="https://dexignlab.com/"
                        target="_blank">DexignLab</a>  --}}
                        2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/dashboard/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>


    <!-- Apex Chart -->
    <script src="{{ asset('assets/dashboard/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/wnumb/wNumb.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/dashboard/js/dashboard/dashboard-1.js') }}"></script>

    <!-- Datatable -->
    <script src="{{ asset('assets/dashboard/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/plugins-init/datatables.init.js') }}"></script>


    <script src="{{ asset('assets/dashboard/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/demo.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/styleSwitcher.js') }}"></script>

    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('assets/dashboard/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('assets/dashboard/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('assets/dashboard/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <!-- Material color picker -->
    <script src="{{ asset('assets/dashboard/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <!-- pickdate -->
    <script src="{{ asset('assets/dashboard/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/pickadate/picker.date.js') }}"></script>



    <!-- Daterangepicker -->
    <script src="{{ asset('assets/dashboard/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('assets/dashboard/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('assets/dashboard/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('assets/dashboard/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('assets/dashboard/js/plugins-init/pickadate-init.js') }}"></script>





    @yield('script')
</body>

</html>
