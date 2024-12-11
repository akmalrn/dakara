<!DOCTYPE html>
<!-- Language -->
<html lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>@yield('title', $configuration->title ?? '')</title>
    <meta name="keywords" content="@yield('keywords', $configuration->keywords ?? 'default, keywords, here')">
    <meta name="description" content="@yield('description', $configuration->description ?? 'Default description for the page')">

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


    <style>
        /* Styling overlay */
        .custom-alert {
            display: none;
            /* Tersembunyi secara default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Styling alert box */
        .custom-alert-content {
            position: relative;
            background: #fff;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Close button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #000;
        }
    </style>
</head>

<div id="custom-alert" class="custom-alert">
    <div class="custom-alert-content">
        <button class="close-btn">&times;</button>
        <p>Ini adalah pesan alert di tengah!</p>
    </div>
    <script>
        // Menampilkan alert
        function showAlert() {
            const alertBox = document.getElementById("custom-alert");
            alertBox.style.display = "flex"; // Menampilkan alert
        }

        // Menyembunyikan alert
        document.querySelector(".close-btn").addEventListener("click", function() {
            const alertBox = document.getElementById("custom-alert");
            alertBox.style.display = "none"; // Menyembunyikan alert
        });

        // Tes fungsi
        setTimeout(showAlert, 1000); // Alert muncul 1 detik setelah halaman dimuat
    </script>
</div>


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
