<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">

    <link href="{{ asset('template_users/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_users/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template_users/assets/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template_users/assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template_users/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('template_users/assets/libs/@chenfengyuan/datepicker/datepicker.min.css') }}">
    
    <link href="{{ asset('template_users/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('template_users/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('template_users/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</head>

@section('body')
    <body data-sidebar="dark">
        @include('superadmin.partials.toastr')
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('users.layouts.topbar')
        @include('users.layouts.sidebar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                @if (Auth::user()->statut_de_compte == "non verifier" || Auth::user()->type_de_compte == "mini")
                    @include('superadmin.partials.flash-message-verification')
                @endif
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('users.layouts.footer')

            @include('sweetalert::alert')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('users.layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->

<script src="{{ asset('template_users/assets/js/app.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/node-waves/waves.min.js')}}"></script>

<script src="{{ asset('template_users/assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{ asset('template_users/assets/libs/@chenfengyuan/datepicker/datepicker.min.js')}}"></script>

<script src="{{ asset('template_users/assets/js/pages/form-advanced.init.js')}}"></script>

<script src="{{ asset('template_users/assets/js/app.js')}}"></script>
   
@include('users.layouts.vendor-scripts')



    @yield('js')
</body>

</html>
