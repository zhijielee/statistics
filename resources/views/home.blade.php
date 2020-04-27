<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Datatables -->

    <link href="/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
{{--    <link href="/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">--}}

    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        @include("sidebar")
        <!-- top navigation -->

        @include("header")
        <!-- /top navigation -->

        <!-- page content -->


        <!-- /page content -->
        <div class="right_col" role="main">
            @yield("content")
        </div>

{{--        @yield('content')--}}
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="/gentelella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/gentelella/vendors/nprogress/nprogress.js"></script>

<!-- Datatables -->
<script src="/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
{{--<script src="/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>--}}
<script src="/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
{{--<script src="/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>--}}
{{--<script src="/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>--}}
{{--<script src="/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>--}}
{{--<script src="/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>--}}
{{--<script src="/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>--}}
{{--<script src="/gentelella/vendors/jszip/dist/jszip.min.js"></script>--}}
<script src="/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>


<!-- Custom Theme Scripts -->
<script src="/gentelella/build/js/custom.min.js"></script>
</body>
</html>
