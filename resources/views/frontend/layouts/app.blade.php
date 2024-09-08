<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('asset/images/man.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="preloader">
        <div id="preloader_inner"></div>
    </div>

    @include('frontend.layouts.header')
    
    <div>
        @yield('content')
    </div>



    <a href="" class="scrollup">
        <i class="fas fa-chevron-up"></i>
    </a>
    
    @include('frontend.layouts.footer')

    <script src="{{ asset('asset/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('asset/js/counterup.min.js') }}"></script>
    <script src="{{ asset('asset/js/filter.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/js/custom.js') }}"></script>
</body>
</html>