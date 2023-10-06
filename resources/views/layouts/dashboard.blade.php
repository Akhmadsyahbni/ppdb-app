<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{str_replace('_','-',app()->getlocale())}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name','PPDB')}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('vendors/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('vendors/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/dist/css/adminlte.css')}}">
    <!-- Tambahkan CSS DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

    {{-- <link rel="stylesheet" href="{{asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('vendors/dist/css/style.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('vendors/plugins/sweetalert2/sweetalert2.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    @yield('css')
</head>

<body class="hold-transition sidebar-mint">
    <div class="wrapper">
        @auth
        @include('layouts.dashboard.sidebar')
        @include('layouts.dashboard.navbar')
        @endauth
        @yield('content')
        @auth
        @include('layouts.dashboard.footer')
        @endauth
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendors/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('vendors/dist/js/adminlte.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('vendors/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <!-- Tambahkan JS DataTables -->
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    {{-- <script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> --}}
    <script src="{{asset('vendors/plugins/fullcalendar/main.js')}}"></script>
    {{-- <script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script> --}}
    {{-- <script src="{{asset('vendors/dashboard/plugins/sweetalert2/sweetalert2.min.js')}}"></script> --}}
    @include('sweetalert::alert')
    @yield('script')
   
</body>

</html>
