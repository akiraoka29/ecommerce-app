<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>YukBelanja.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('css/vendor/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('css/vendor/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/niceselect.css') }}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/animate.css') }}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendor/flex-slider.min.css') }}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/vendor/owl-carousel.css') }}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('css/vendor/slicknav.min.css') }}">

    <!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('css/vendor/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/responsive.css') }}">

</head>

<body class="js">
    @include('layouts.preload')
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('js/vendor/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<!-- Color JS -->
	{{-- <script src="{{ asset('js/vendor/colors.js') }}"></script> --}}
	<!-- Slicknav JS -->
	<script src="{{ asset('js/vendor/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('js/vendor/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('js/vendor/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('js/vendor/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('js/vendor/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('js/vendor/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('js/vendor/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('js/vendor/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('js/vendor/easing.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('js/vendor/active.js') }}"></script>
</body>
</html>