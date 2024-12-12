<!DOCTYPE html>
<!-- Language -->
<html lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>@yield('title', $configuration->title ?? '')</title>
    <meta name="keywords" content="{{ $blog->keywords ?? $configuration->meta_keywords ?? '' }}">
    <meta name="description" content="{{ $blog->descriptions ?? $configuration->meta_descriptions ?? '' }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset($configuration->path_logo ?? '') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/bootstrap/css/bootstrap.min.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/font-awesome/css/all.min.css') }}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/slick-slider/slick.css') }}">
    <!-- Slick Slider Theme -->
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/slick-slider/slick-theme.css') }}">
    <!-- MetisMenu CSS -->
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/metismenu/metismenu.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assetsfront/vendors/magnific-popup/magnific-popup.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assetsfront/css/style.css') }}">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        @yield('style')
</head>

<body class="body-wrapper home-one" data-scroll-animation="true">
    <div class="overlay"></div>
    <!-- Overlay -->
    @include('frontend.components.overlay')

    <!-- Header Start -->
    @include('frontend.components.header')
    <!-- Header End -->

    @yield('content')

    <!-- Footer Start-->
    @include('frontend.components.footer')
    <!-- Footer End -->

    <!-- jQuery -->
    <script src="{{ asset('assetsfront/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assetsfront/vendors/bootstrap/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assetsfront/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('assetsfront/vendors/slick-slider/slick.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('assetsfront/vendors/wow/wow.min.js') }}"></script>
    <!-- MetisMenu JS -->
    <script src="{{ asset('assetsfront/vendors/metismenu/metismenu.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assetsfront/vendors/magnific-popup/magnific-popup.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assetsfront/vendors/waypoints/waypoints.min.js') }}"></script>
    <!-- CounterUp JS -->
    <script src="{{ asset('assetsfront/vendors/counterup/counterup.js') }}"></script>
    <!-- Mixitup -->
    <script src="{{ asset('assetsfront/vendors/jquery-mixitup/jquery-mixitup.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assetsfront/js/custom.js') }}"></script>

</body>

</html>
