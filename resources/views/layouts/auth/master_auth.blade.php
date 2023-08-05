<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>yukbelanja.com - Signin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.css') }}">
    <!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('css/custom/custom.css') }}">

</head>

<body class="js" style="background-color: #ddd;">
    @include('layouts.preload')
    
    @yield('content')

    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
</body>
</html>