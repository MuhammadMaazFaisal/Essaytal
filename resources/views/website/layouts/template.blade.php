<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">  
<meta name="viewport" content="width=device-width, initial-scale=1">
@if(Session::has('seo_was_set'))
{!! SEO::generate() !!}
@endif
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

<!-- Custom CSS -->
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">


{!! settings('website_header_script') !!}
@include('website.google_analytics')
</head>
<body>
   
{{-- @include('website.layouts.header') --}}


<div id="app">
    @yield('content')  
</div>
@include('cookieConsent::index')
{{-- @include('website.layouts.footer') --}}

@include('website.layouts.footer1')

{{-- <script src="{{ asset('js/theme.min.js') }}"></script>
{!! settings('website_footer_script') !!} --}}

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
</body>
</html>