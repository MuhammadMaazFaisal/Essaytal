<!doctype html>
<html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
     <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>@yield('title') - {{  get_company_name()  }}</title>
     <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
     <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
     <!-- Custom CSS -->
     <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
     @stack('stylesheets')
   </head>
   <body>
         
    @include('layouts.menu')
         @yield('content')
      
       @include('layouts.footer')

<script type="text/javascript">
      window.currencyConfig = {!! currencyConfig() !!};
</script>
<script src="{{ asset('js/app.js') }}"></script>
@if($notification = growl_notification())
<script type="text/javascript">
   $(function () {     
     <?php echo $notification; ?>     
   });
</script>
@endif
@stack('scripts')
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.js"></script> 
<script src="assets/js/summernote.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>	
<script src="assets/js/custom.js"></script>

<!-- Morris.js charts -->
<script src="assets/js/raphael.min.js"></script>
<script src="assets/js/morris.min.js"></script>

<!-- Custom Morrisjs JavaScript -->
<script src="assets/js/morris.js"></script>
</html>