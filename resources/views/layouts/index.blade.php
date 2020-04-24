<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>bKash @yield('title')</title>
    <link rel="icon" type="image/png" href="{{url(asset('dist/img/icon.jpg'))}}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url(asset('plugins/fontawesome-free/css/all.min.css'))}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{url(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'))}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url(asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css'))}}">
    <!-- pace-progress -->
    <link rel="stylesheet" href="{{url(asset('plugins/pace-progress/themes/pink/pace-theme-minimal.css'))}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{url(asset('plugins/toastr/toastr.min.css'))}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{url(asset('plugins/daterangepicker/daterangepicker.css'))}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{url(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css'))}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{url(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'))}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{url(asset('plugins/select2/css/select2.min.css'))}}">
    <link rel="stylesheet" href="{{url(asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'))}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{url(asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css'))}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url(asset('dist/css/adminlte.min.css'))}}">
    <link rel="stylesheet" href="{{url(asset('plugins/summernote/summernote-bs4.css'))}}">

    <link rel="stylesheet" href="{{url(asset('dist/css/custom.css'))}}">
    <link rel="stylesheet" href="{{url(asset('dist/css/lightbox.css'))}}">
    <link rel="stylesheet" href="{{url(asset('dist/css/parsley.css'))}}">

    <link rel="stylesheet" href="{{url(asset('plugins/SweetAlert2/SweetAlert2.all.js'))}}">
    <link rel="stylesheet" href="{{url(asset('plugins/SweetAlert2/SweetAlert2.css'))}}">
    <link rel="stylesheet" href="{{url(asset('dist/css/lightgallery.min.css'))}}" /> 
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
{{-- TESTING --}}
{{--     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

    @stack('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
<div class="wrapper">
    @include('partials.header')
    @include('partials.sidebar')

{{-- ALERT --}}

@if(Session::has('success')==true)  

            <?php toast(Session::get('success'),'success'); ?>
@endif

@if(Session::has('danger'))    
            <?php toast(Session::get('danger'),'error'); ?>
@endif
  
{{-- {{swal("Good job!", "You clicked the button!", "success")}}
    @if(Session::has('success') )
    <div class="alert alert-success" role="alert">
      <strong>Success:</strong>{{Session::get('success')}}
    </div>
    @endif
    @if(Session::has('danger') )
    <div class="alert alert-danger" role="alert">
      <strong>Deleted:</strong>{{Session::get('danger')}}

    </div>
     @endif --}}

{{-- END ALERT --}}


    @yield('content')

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    @include('partials.footer')
</div>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{url(asset('plugins/jquery/jquery.min.js'))}}"></script>
<!-- Bootstrap -->
<script src="{{url(asset('plugins/bootstrap/js/bootstrap.bundle.min.js'))}}"></script>
<!-- overlayScrollbars -->
<script src="{{url(asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'))}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url(asset('plugins/jquery-mousewheel/jquery.mousewheel.js'))}}"></script>
<script src="{{url(asset('plugins/raphael/raphael.min.js'))}}"></script>
<script src="{{url(asset('plugins/jquery-mapael/jquery.mapael.min.js'))}}"></script>
<script src="{{url(asset('plugins/jquery-mapael/maps/usa_states.min.js'))}}"></script>
<!-- ChartJS -->
<script src="{{url(asset('plugins/chart.js/Chart.min.js'))}}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{url(asset('dist/js/pages/dashboard2.js'))}}"></script>

<script src="{{url(asset('plugins/pace-progress/pace.min.js'))}}"></script>
<!-- Select2 -->
<script src="{{url(asset('plugins/select2/js/select2.full.min.js'))}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{url(asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js'))}}"></script>
<!-- InputMask -->
<script src="{{url(asset('plugins/moment/moment.min.js'))}}"></script>
<script src="{{url(asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js'))}}"></script>
<!-- date-range-picker -->
<script src="{{url(asset('plugins/daterangepicker/daterangepicker.js'))}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url(asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'))}}"></script>
<!-- Bootstrap Switch -->
<script src="{{url(asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js'))}}"></script>
<!-- jquery-validation -->
<script src="{{url(asset('plugins/jquery-validation/jquery.validate.min.js'))}}"></script>
<script src="{{url(asset('plugins/jquery-validation/additional-methods.min.js'))}}"></script>

<!-- AdminLTE App -->
<script src="{{url(asset('dist/js/adminlte.js'))}}"></script>
<!-- Summernote -->
<script src="{{url(asset('plugins/summernote/summernote-bs4.min.js'))}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{url(asset('dist/js/demo.js'))}}"></script>
<script src="{{url(asset('dist/js/parsley.min.js'))}}"></script>

@include('sweetalert::alert')
@stack('scripts')

</body>
</html>
