<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- daterange picker -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}"> -->
    <!-- iCheck for checkboxes and radio inputs -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"> -->
    <!-- Bootstrap Color Picker -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> -->
    <!-- Select2 -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}"> -->
    <!-- Bootstrap4 Duallistbox -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}"> -->
    <!-- BS Stepper -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}"> -->
    <!-- dropzonejs -->
    <!-- <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content-header')
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- <div class="container-fluid"> -->
                @yield('content')
                <!-- </div> -->
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2021 <a>AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Select2 -->
    <!-- <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script> -->
    <!-- Bootstrap4 Duallistbox -->
    <!-- <script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script> -->
    <!-- InputMask -->
    <!-- <script src="{{asset('plugins/moment/moment.min.js')}}"></script> -->
    <!-- <script src="{{asset('plugins/inputmask/jquery.inputmask.min.js')}}"></script> -->
    <!-- date-range-picker -->
    <!-- <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script> -->
    <!-- bootstrap color picker -->
    <!-- <script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script> -->
    <!-- Bootstrap Switch -->
    <!-- <script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script> -->
    <!-- BS-Stepper -->
    <!-- <script src="{{asset('plugins/bs-stepper/js/bs-stepper.min.js')}}"></script> -->
    <!-- dropzonejs -->
    <!-- <script src="{{asset('plugins/dropzone/min/dropzone.min.js')}}"></script> -->
    <!-- AdminLTE App -->
    <script src="{{asset('vendor/adminlte/dist/js/adminlte.min.js')}}"></script>
    <!-- Page specific script -->
    @yield('js')
</body>

</html>