<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <base href="{{ asset('') }}">
        <link rel="shortcut icon" href="assetsd/images/favicon.ico">

        <title>Admin Apple</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assetsd/plugins/morris/morris.css">

        <!-- App css -->
        <link href="assetsd/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assetsd/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assetsd/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assetsd/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.layout.header')


            @include('admin.layout.menu')
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
                @yield('content')

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assetsd/js/jquery.min.js"></script>
        <script src="assetsd/js/popper.min.js"></script>
        <script src="assetsd/js/bootstrap.min.js"></script>
        <script src="assetsd/js/detect.js"></script>
        <script src="assetsd/js/fastclick.js"></script>
        <script src="assetsd/js/jquery.blockUI.js"></script>
        <script src="assetsd/js/waves.js"></script>
        <script src="assetsd/js/jquery.nicescroll.js"></script>
        <script src="assetsd/js/jquery.slimscroll.js"></script>
        <script src="assetsd/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assetsd/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assetsd/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
		<script src="assetsd/plugins/morris/morris.min.js"></script>
		<script src="assetsd/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assetsd/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assetsd/js/jquery.core.js"></script>
        <script src="assetsd/js/jquery.app.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    @yield('script')
    </body>
</html>