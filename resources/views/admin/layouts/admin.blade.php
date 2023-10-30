
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('plugins/images/favicon.png')}}">
    <title>Onlinexchange</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/megna-dark.css')}}" id="theme" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    {{-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> --}}

    @include('admin.partials.toastr')
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('admin.partials.Navbar')
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin.partials.Sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            {{-- @include('admin.partials.flash-message') --}}

           {{--  @if ( Session::has('flash_message') )

                <div class="alert {{ Session::get('flash_type') }}">
                <script> M.toast({html: '{{ Session::get('flash_message') }}', displayLegth: 1000, timeRemaining: 2000}) </script>
                    <h3></h3>
                </div>
            @endif --}}

            @yield('content')
            <!-- /.container-fluid -->
            @include('admin.partials.Footer')

            @include('sweetalert::alert')
        </div>
        <!-- /#page-wrapper -->
    </div>
    


    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--Counter js -->
    <script src="{{ asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js')}}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-in-mill.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- sparkline chart JavaScript -->
    <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>
    <script src="{{ asset('js/dashboard3.js')}}"></script>
    <script src="{{ asset('js/jasny-bootstrap.js')}}"></script>
    
    <!--Style Switcher -->
    <script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>

    <script src="{{ asset('js/vendors.min.js')}}"></script>
	<script src="{{ asset('js/pages/chat-popup.js')}}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js')}}"></script>	

    
	<!-- EduAdmin App -->
	<script src="{{ asset('js/template.js')}}"></script>
	
    <script src="{{ asset('js/pages/notification.js')}}"></script>
    
    <script src="{{ asset('js/pages/toastr.js')}}"></script>
    <script src="{{ asset('assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



</body>

</html>
