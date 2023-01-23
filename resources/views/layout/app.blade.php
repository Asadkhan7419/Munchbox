<!DOCTYPE html>
<html lang="en">


<!-- munchbox/  05 Dec 2019 10:05:53 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="#">
    <meta name="description" content="#">
    <title>Munchbox | Food Delivery Hub</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="#">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="#">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="#">
    <link rel="apple-touch-icon-precomposed" href="#">
    <link rel="shortcut icon" href="#">
    <!-- Bootstrap -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="{{ asset('/assets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Flaticons -->
    <link href="{{ asset('/assets/css/font/flaticon.css') }}" rel="stylesheet">
    <!-- Swiper Slider -->
    <link href="{{ asset('/assets/css/swiper.min.css') }}" rel="stylesheet">
    <!-- Range Slider -->
    <link href="{{ asset('/assets/css/ion.rangeSlider.min.css') }}" rel="stylesheet">
    <!-- magnific popup -->
    <link href="{{ asset('/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Nice Select -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <!-- Custom Responsive -->
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <!-- place -->
</head>


<body>

    @php
        $setting = \App\Models\Setting::first();
    @endphp
@include('layout.includes.header')

@yield('content')

@include('layout.includes.footer')


<!-- Place all Scripts Here -->
    <!-- jQuery -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('/assets/js/ion.rangeSlider.min.js') }}"></script>
    <!-- Swiper Slider -->
    <script src="{{ asset('/assets/js/swiper.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
    <!-- sticky sidebar -->
    <script src="{{ asset('/assets/js/sticksy.js') }}"></script>
    <!-- Munch Box Js -->
    <script src="{{ asset('/assets/js/munchbox.js') }}"></script>
    <!-- /Place all Scripts Here -->
</body>
<!-- munchbox/  05 Dec 2019 10:11:37 GMT -->
</html>
