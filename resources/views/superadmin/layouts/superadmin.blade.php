
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <title>Onlinexchange</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


	@yield('css')
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	@include('superadmin.partials.toastr')

	
<div class="wrapper">
	<div id="loader"></div>
	
	@include('superadmin.partials.horizontale')
  
	@include('superadmin.partials.verticale')

  
    

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			{{-- @include('superadmin.partials.dashboard') --}}
			
			@include('superadmin.partials.flash-message')

            @if ( Session::has('flash_message') )

                <div class="alert {{ Session::get('flash_type') }}">
                <script> M.toast({html: '{{ Session::get('flash_message') }}', displayLegth: 1000, timeRemaining: 2000}) </script>
                    <h3></h3>
                </div>
            @endif


			@yield('content')

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
            @include('superadmin.partials.footer')

			@include('sweetalert::alert')

  <!-- Control Sidebar -->
  
  @include('superadmin.partials.sidebar')
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->
		
	@include('superadmin.partials.chat')
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="{{ asset('js/vendors.min.js') }}"></script>
	<script src="{{ asset('js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('icons/feather-icons/feather.min.js') }}"></script>

	<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('assets/vendor_components/fullcalendar/fullcalendar.js') }}"></script>


	<script src="{{ asset('assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
	<script src="{{ asset('assets/vendor_plugins/input-mask/jquery.inputmask.js')}}"></script>
	<script src="{{ asset('assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
	<script src="{{ asset('assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/moment/min/moment.min.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{ asset('assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{ asset('assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
	<script src="{{ asset('assets/vendor_plugins/iCheck/icheck.min.js')}}"></script>
	
	<!-- Edusuperadmin App -->
	<script src="{{ asset('js/template.js') }}"></script>
	<script src="{{ asset('js/pages/dashboard.js') }}"></script>
	<script src="{{ asset('js/pages/calendar.js') }}"></script>

	
	<script src="{{ asset('js/pages/advanced-form-element.js') }}"></script>

	<script src="{{ asset('js/pages/toastr.js')}}"></script>

	@yield('js')
	
</body>
</html>
