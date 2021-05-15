<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        @include('../partials/head')
    </head>
    <!-- END HEAD -->
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            @include('../partials/header')
            <!-- END HEADER -->
            <!-- Main Sidebar Container -->
            @include('../partials/sidebar')
            <!-- End Sidebar Container -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            @include('../partials/footer')
            <!-- END FOOTER -->
        </div>
        <!-- jQuery -->
        <script src="{{ URL::asset('admin/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ URL::asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{ URL::asset('admin/dist/js/adminlte.min.js') }}" type="text/javascript"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
    </body>
</html>