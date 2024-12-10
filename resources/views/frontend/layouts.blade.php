<!DOCTYPE html>
<!-- Language -->
<html lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>Solarex - Solar & Renewable Energy HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assetsfront/images/favicon.ico">

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
    <div class="col-xs-12 dekstop"
        style="z-index:999; padding:0px 50px; background: linear-gradient(90deg ,#02320d 0% ,#16813e 40% ,#129144 100%);">
        <!-- Page logo -->
        <div class="holder pull-right" style="width: auto !important;">
            <a href="mailto:info@dakara-lcaindonesia.com" style="color:#fafafa; margin-right:20px; line-height:70px;">
                <i class="fas fa-envelope"></i>
                &nbsp;info@dakara-lcaindonesia.com </a>
            <a href="mailto:marketing@dakara-lcaindonesia.com"
                style="color:#fafafa; margin-right:20px; line-height:70px;">
                <i class="fas fa-envelope"></i>
                &nbsp;marketing@dakara-lcaindonesia.com </a>
            <a href="https://api.whatsapp.com/send?phone=6281314226989" target="_blank"
                style="color:#fafafa; margin-right:20px;">
                <i class="fab fa-whatsapp"></i>
                &nbsp;081314226989 </a>
            <a href="tel:6285871140912" target="_blank" style="color:#fafafa;  margin-right:20px;">
                <i class="fa fa-phone"></i>&nbsp;085871140912 </a>
            <a href="tel:6281218670223" target="_blank" style="color:#fafafa;">
                <i class="fa fa-phone"></i>&nbsp;081218670223 </a>
        </div>
    </div>

    <!-- Header Start -->
    <header class="srex-header srex-header--home-one">
        <div class="container">
            <nav class="ud-main-menu ud-main-menu--home-one d-flex align-items-center justify-content-between"
                aria-label="Main Navigation" style="max-width: 1190px; width : 1190px;">
                <div class="ud-main-menu__logo">
                    <a href="index.html">
                        <img src="assetsfront/images/logo-black.png" alt="Solarex" width="100px">
                    </a>
                </div>
                <ul class="ud-main-menu__links d-none d-lg-flex">
                    <li>
                        <a href="#" style="font-size: small">Home</a>
                    </li>
                    <li>
                        <a href="#" style="font-size: small">About Us <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="ud-main-menu__sub-menu">
                            <li><a href="index.html">Profile</a></li>
                            <li><a href="index-2.html">Trainer</a></li>
                            <li><a href="index-3.html">Download Company Profile/Brochure</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" style="font-size: small">Training Activities <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="ud-main-menu__sub-menu">
                            <li><a href="index.html">Schedule Of Activities</a></li>
                            <li><a href="index-2.html">Registration</a></li>
                            <li><a href="index-3.html">Certification</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" style="font-size: small">LCA Assistance & Arrangement <i class="fa-solid fa-angle-down"></i></a>
                        <ul class="ud-main-menu__sub-menu">
                            <li><a href="services.html">consultant</a></li>
                            <li>
                                <a href="services-details.html">LCA Calculation Assistance</a>
                            </li>
                            <li>
                                <a href="services-details.html">Preparation Of Proper LCA Documents</a>
                            </li>
                            <li>
                                <a href="services-details.html">LCA Companion Gallery</a>
                            </li>
                            <li>
                                <a href="services-details.html">LCA Assistance News</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" style="font-size: small">LCA Indonesia Publishing</a>
                    </li>
                    <li>
                        <a href="contact.html" style="font-size: small">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.html" style="font-size: small">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" style="font-size: small">News</a>
                    </li>
                    <li>
                        <a href="#" style="font-size: small">Videos</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Side Popup -->
        <div class="ud-side-popup ud-side-popup--home-one">
            <div class="ud-side-popup__header">
                <div class="ud-side-popup__header-logo">
                    <img src="./assetsfront/images/logo-black.png" alt="Solarex">
                </div>
                <button class="side-popup-close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="ud-side-popup__body">
                <ul class="metismenu" id="side-menu">
                    <li>
                        <a href="#">
                            Home <i class="fa-solid fa-plus"></i>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false">
                            <li>
                                <a href="index.html">Home 1</a>
                            </li>
                            <li>
                                <a href="index-2.html">Home 2</a>
                            </li>
                            <li>
                                <a href="index-3.html">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="#">
                            Services <i class="fa-solid fa-plus"></i>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false">
                            <li>
                                <a href="services.html">Services</a>
                            </li>
                            <li>
                                <a href="services-details.html">Services Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Projects <i class="fa-solid fa-plus"></i>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false">
                            <li>
                                <a href="projects.html">Projects</a>
                            </li>
                            <li>
                                <a href="projects-details.html">Projects Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Blog <i class="fa-solid fa-plus"></i>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false">
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="blog-details.html">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Pages <i class="fa-solid fa-plus"></i>
                        </a>
                        <ul class="sub-menu collapse" aria-expanded="false">
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="ud-side-popup__bottom">
                <div class="ud-side-popup__bottom-info">
                    <div class="ud-side-popup__bottom-info-box d-flex align-items-center gap-3 py-0 m-0">
                        <i class="fa-solid fa-phone"></i>
                        <div class="ud-header-info-box__details">
                            <span>Need Help?</span>
                            <h4>
                                <a href="tel:+3075550133">(307) 555-0133</a>
                            </h4>
                        </div>
                    </div>
                    <div class="ud-side-popup__bottom-info-box d-flex align-items-center gap-3 py-0 m-0">
                        <i class="fa-solid fa-paper-plane"></i>
                        <div class="ud-header-info-box__details">
                            <span>Shreekol, Dublia Bazar</span>
                            <h4>Pabna, Bangladesh</h4>
                        </div>
                    </div>
                    <div class="ud-side-popup__bottom-info-box d-flex align-items-center gap-3 py-0 m-0">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="ud-header-info-box__details">
                            <span>Send email</span>
                            <h4>
                                <a href="mailto:hello@example.com">hello@example.com</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <ul class="ud-side-popup__bottom-socials">
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Slider -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 1</h5>
                    <p>Deskripsi untuk Slide 1.</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 2</h5>
                    <p>Deskripsi untuk Slide 2.</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide 3</h5>
                    <p>Deskripsi untuk Slide 3.</p>
                </div>
            </div>
        </div>
        <!-- Kontrol Sebelumnya -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!-- Kontrol Berikutnya -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Slider End -->

    <!-- Hero Start -->
    <section class="srex-hero-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="srex-hero-one__box wow ud-fade-in-left" data-wow-delay="200ms">
                        <h1 class="srex-hero-one__box__text">
                            <span
                                class="srex-hero-one__box__text__top d-flex align-items-center gap-3 justify-content-between">
                                Power For
                                <span class="srex-hero-one__box__text__top__line"></span>
                            </span>
                            A Sustainable Future <br>
                            with <span>Solar Energy</span>
                        </h1>
                        <p class="srex-hero-one__box__desc">
                            Nullam vel nibh facilisis lectus fermentum
                            ultrices quis non risus. Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. In hac
                            habitasse platea dictumst.
                        </p>

                        <a href="#" class="srex-btn srex-btn--outline">
                            Discover More <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="d-flex gap-2 align-items-center justify-content-between wow ud-fade-in-up"
                        data-wow-delay="200ms">
                        <div class="srex-hero-one__left__enery__efficient">
                            <h2>70%</h2>
                            <p>Energy Efficient</p>
                        </div>
                        <div class="srex-hero-one__left__img">
                            <img src="./assetsfront/images/home-one/hero-img-1.png" alt="Solar Panel">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="srex-hero-one__right wow ud-fade-in-right" data-wow-delay="200ms">
                        <img src="./assetsfront/images/home-one/hero-img-2.png" alt="Women with Solar Panel">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->


    <!-- Service Start -->
    <section class="srex-service srex-section">
        <div class="container">
            <div class="srex-section__head text-center">
                <h5 class="srex-section__head__badge wow ud-fade-in-up" data-wow-delay="200ms">
                    <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                    Our Services
                </h5>
                <h2 class="srex-section__head__title wow ud-fade-in-up" data-wow-delay="200ms">
                    Unlock the potential of the sun with solar energy!
                </h2>
            </div>
            <div class="srex-info-box">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="srex-info-box__item wow ud-fade-in-up" data-wow-delay="200ms">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="srex-info-box__item__img">
                                    <img src="./assetsfront/images/home-one/service/service-1.svg"
                                        class="srex-info-box__item__logo" alt="PowerSun Assistance">
                                </div>
                                <h2 class="srex-info-box__item__number">
                                    01
                                </h2>
                            </div>
                            <h3 class="srex-info-box__item__text">
                                PowerSun Assistance
                            </h3>
                            <div class="srex-info-box__more">
                                <a href="./service-details.html">Read More
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="srex-info-box__item wow ud-fade-in-up" data-wow-delay="400ms">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="srex-info-box__item__img">
                                    <img src="./assetsfront/images/home-one/service/service-2.svg"
                                        class="srex-info-box__item__logo" alt="PowerSun Assistance">
                                </div>
                                <h2 class="srex-info-box__item__number">
                                    02
                                </h2>
                            </div>
                            <h3 class="srex-info-box__item__text">
                                SolarEdge Services
                            </h3>
                            <div class="srex-info-box__more">
                                <a href="./service-details.html">Read More
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="srex-info-box__item wow ud-fade-in-up" data-wow-delay="600ms">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="srex-info-box__item__img">
                                    <img src="./assetsfront/images/home-one/service/service-3.svg"
                                        class="srex-info-box__item__logo" alt="BrightSun Support">
                                </div>
                                <h2 class="srex-info-box__item__number">
                                    03
                                </h2>
                            </div>
                            <h3 class="srex-info-box__item__text">
                                BrightSun Support
                            </h3>
                            <div class="srex-info-box__more">
                                <a href="./service-details.html">Read More
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="srex-info-box__item wow ud-fade-in-up" data-wow-delay="800ms">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="srex-info-box__item__img">
                                    <img src="./assetsfront/images/home-one/service/service-4.svg"
                                        class="srex-info-box__item__logo" alt="Sun Gust Energy">
                                </div>
                                <h2 class="srex-info-box__item__number">
                                    04
                                </h2>
                            </div>
                            <h3 class="srex-info-box__item__text">
                                Sun Gust Energy
                            </h3>
                            <div class="srex-info-box__more">
                                <a href="./service-details.html">Read More
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="srex-info-box__item wow ud-fade-in-up" data-wow-delay="1s">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="srex-info-box__item__img">
                                    <img src="./assetsfront/images/home-one/service/service-5.svg"
                                        class="srex-info-box__item__logo" alt="WindVista Solutions">
                                </div>
                                <h2 class="srex-info-box__item__number">
                                    05
                                </h2>
                            </div>
                            <h3 class="srex-info-box__item__text">
                                WindVista Solutions
                            </h3>
                            <div class="srex-info-box__more">
                                <a href="./service-details.html">Read More
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="srex-info-box__item wow ud-fade-in-up" data-wow-delay="1.2s">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="srex-info-box__item__img">
                                    <img src="./assetsfront/images/home-one/service/service-6.svg"
                                        class="srex-info-box__item__logo" alt="SolarCrest Services">
                                </div>
                                <h2 class="srex-info-box__item__number">
                                    06
                                </h2>
                            </div>
                            <h3 class="srex-info-box__item__text">
                                SolarCrest Services
                            </h3>
                            <div class="srex-info-box__more">
                                <a href="./service-details.html">Read More
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->


    <!-- About US Start-->
    <section class="srex-about-us-one srex-section">
        <div class="srex-about-us-one__container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="srex-about-us-one__left text-left">
                        <div class="srex-section__head">
                            <h5 class="srex-section__head__badge wow ud-fade-in-up" data-wow-delay="200ms">
                                <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                                About US
                            </h5>
                            <h2 class="srex-section__head__title wow ud-fade-in-up" data-wow-delay="200ms">
                                Embrace the power the sun with solar energy!
                            </h2>
                            <p class="srex-section__head__desc wow ud-fade-in-up" data-wow-delay="200ms">
                                Nullam vel nibh facilisis lectus fermentum
                                ultrices quis non risus. Lore m ipsum dolor
                                sit amet, consectetur adipiscing elit. In
                                hac habi
                            </p>

                            <div class="srex-icon-list wow ud-fade-in-up" data-wow-delay="200ms">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <p>
                                            Redefining Energy with Solar
                                            Technology
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <p>Unleash the Power of the Sun</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <p>
                                            Solar Solutions for a Brighter
                                            Tomorrow
                                        </p>
                                    </li>
                                </ul>
                            </div>

                            <a href="./about-us.html" class="srex-btn srex-btn--outline wow ud-fade-in-up"
                                data-wow-delay="200ms">
                                Read More <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-0">
                    <div class="srex-about-us-one__right">
                        <img src="./assetsfront/images/about-us/about-us.png" alt="About Us"
                            class="srex-about-us-one__right__img wow ud-fade-in-up" data-wow-delay="200ms">
                        <div>
                            <div class="srex-about-us-one__right__box d-flex gap-3 wow fadeInUp"
                                data-wow-duration="1.3s">
                                <img src="./assetsfront/images/about-us/medal.png" alt="Medal">
                                <div class="srex-about-us-one__right__box__text">
                                    <h2>15+</h2>
                                    <p>Years of experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US End-->


    <!-- About US Bottom Start-->
    <section class="srex-section-bottom srex-section">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-12">
                    <div class="srex-section-bottom__left wow ud-fade-in-up" data-wow-delay="200ms">
                        <img src="assetsfront/images/about-us/Shape.png" alt="Shape">
                        <img class="srex-section-bottom__left__img"
                            src="assetsfront/images/about-us/about-us-bottom.png" alt="about-us-bottom-img">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="srex-section-bottom__right">
                        <div class="mb-5">
                            <h3 class="srex-section-bottom__right__title wow ud-fade-in-up" data-wow-delay="200ms">
                                Sun-Powered Solutions for a Sustainable
                                Future
                            </h3>
                            <p class="srex-section-bottom__right__desc wow ud-fade-in-up" data-wow-delay="300ms">
                                Nullam vel nibh facilisis lectus fermentum
                                ultrices quis non risus. Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit. In
                                hac habita
                            </p>
                        </div>
                        <div class="srex-icon-list srex-icon-list--multi-text">
                            <ul>
                                <li class="wow ud-fade-in-up" data-wow-delay="350ms">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <div>
                                        <h3>Sunshine Energy</h3>
                                        <p>
                                            Lorem ipsum dolor consectetur
                                            notte massa sapien samet.
                                            Aucibus sed sem non, mattis
                                        </p>
                                    </div>
                                </li>
                                <li class="wow ud-fade-in-up" data-wow-delay="400ms">
                                    <i class="fa-solid fa-chevron-right"></i>
                                    <div>
                                        <h3>Sunshine Energy</h3>
                                        <p>
                                            Lorem ipsum dolor consectetur
                                            notte massa sapien samet.
                                            Aucibus sed sem non, mattis
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US Bottom End-->


    <!-- Features Start -->
    {{-- <section class="srex-features srex-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-12">
                    <div class="srex-features__left text-left">
                        <div class="srex-section__head">
                            <h5 class="srex-section__head__badge wow ud-fade-in-up" data-wow-delay="200ms">
                                <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                                Our Features
                            </h5>
                            <h2 class="srex-section__head__title wow ud-fade-in-up" data-wow-delay="250ms">
                                Harness the power of the sun with solar
                                energy!
                            </h2>
                            <p class="mb-5  wow ud-fade-in-up" data-wow-delay="200ms">
                                Nullam vel nibh facilisis lectus fermentum
                                ultrices quis non risus. Lore ipsum dolor
                                sit amet, consectetur adipiscing elit. In
                                hac habit asse pla dictumst. Duis porta,
                                quam ut finibus ultrices, lorem lacus
                            </p>
                            <a href="./about-us.html" class="srex-btn srex-btn--outline wow ud-fade-in-up"
                                data-wow-delay="200ms">
                                Read More <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="srex-info-box srex-info-box--feature-box">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="srex-info-box__item wow ud-fade-in-up" data-wow-duration="1s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="srex-info-box__item__img">
                                            <img src="assetsfront/images/home-one/features/features-1.svg"
                                                class="srex-info-box__item__logo" alt="GreenSun Support">
                                        </div>
                                    </div>
                                    <h3 class="srex-info-box__item__text">
                                        GreenSun Support
                                    </h3>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet cut co
                                        sect. Proin viverra
                                    </p>
                                    <div class="srex-info-box__more">
                                        <a href="./service-details.html">Read More
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="srex-info-box__item wow ud-fade-in-up" data-wow-duration="1.3s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="srex-info-box__item__img">
                                            <img src="assetsfront/images/home-one/features/features-2.svg"
                                                class="srex-info-box__item__logo" alt="BrightSun Support">
                                        </div>
                                    </div>
                                    <h3 class="srex-info-box__item__text">
                                        BrightSun Support
                                    </h3>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet cut co
                                        sect. Proin viverra
                                    </p>
                                    <div class="srex-info-box__more">
                                        <a href="./service-details.html">Read More
                                            <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="srex-info-box__item wow ud-fade-in-up" data-wow-duration="1.6s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="srex-info-box__item__img">
                                            <img src="assetsfront/images/home-one/features/features-3.svg"
                                                class="srex-info-box__item__logo" alt="SolarPro Solutions">
                                        </div>
                                    </div>
                                    <h3 class="srex-info-box__item__text">
                                        SolarPro Solutions
                                    </h3>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet cut co
                                        sect. Proin viverra
                                    </p>
                                    <div class="srex-info-box__more">
                                        <a href="./service-details.html">Read More
                                            <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="srex-info-box__item wow ud-fade-in-up" data-wow-duration="1.9s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="srex-info-box__item__img">
                                            <img src="assetsfront/images/home-one/features/features-4.svg"
                                                class="srex-info-box__item__logo" alt="EcoSolar Services">
                                        </div>
                                    </div>
                                    <h3 class="srex-info-box__item__text">
                                        EcoSolar Services
                                    </h3>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet cut co
                                        sect. Proin viverra
                                    </p>
                                    <div class="srex-info-box__more">
                                        <a href="./service-details.html">Read More
                                            <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Features End -->


    <!-- Video Section Start -->
    {{-- <div class="srex-video srex-section">
        <div class="container-fluid">
            <div class="srex-video__box wow ud-fade-in-up" data-wow-delay="200ms">
                <a href="https://www.youtube.com/watch?v=bYsgGkKksvs" class="srex-video__play__btn popup-video">
                    <i class="fa-solid fa-play"></i>
                </a>
                <img src="./assetsfront/images/video-section.png" alt="Video">
            </div>
        </div>
    </div> --}}
    <!-- Video Section End -->


    <!-- Contact Section Start -->
    {{-- <section class="srex-contact srex-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="srex-contact__left wow ud-fade-in-up" data-wow-duration="1.3s">
                        <form action="#">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-12">
                                    <input name="full-name" placeholder="Your Name" type="text" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <input name="email" placeholder="Email Address" type="text" required>
                                </div>
                            </div>
                            <div>
                                <input placeholder="Your Phone" type="text" name="phone" required>
                            </div>
                            <div>
                                <textarea placeholder="Your Message" id="message" rows="5" name="message" required></textarea>
                            </div>
                            <div>
                                <button type="button" class="srex-btn srex-btn--secondary">
                                    Submit Now
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="srex-contact__right mt-5">
                        <div class="srex-section__head">
                            <h5 class="srex-section__head__badge wow ud-fade-in-up" data-wow-delay="200ms">
                                <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                                Contact US
                            </h5>
                            <h2 class="srex-section__head__title wow ud-fade-in-up" data-wow-delay="200ms">Empowering
                                Communities with Solar Energy</h2>
                            <p class="mt-2 mb-4 wow ud-fade-in-up" data-wow-duration="2.2s">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout It is a long established fact that a
                            </p>

                            <div class="srex-icon-list">
                                <ul>
                                    <li class="wow ud-fade-in-up" data-wow-delay="200ms">
                                        <i class="fa-solid fa-phone"></i>
                                        <h4>
                                            <a href="tel:+6295550129">(629) 555-0129</a>
                                        </h4>
                                    </li>
                                    <li class="wow ud-fade-in-up" data-wow-delay="200ms">
                                        <i class="fa-solid fa-envelope"></i>
                                        <h4>
                                            <a href="mailto:info@example.com">info@example.com</a>
                                        </h4>
                                    </li>
                                    <li class="wow ud-fade-in-up" data-wow-delay="200ms">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <h4>
                                            6391 Elgin St. Celina, 10299
                                        </h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Contact Section End -->


    <!--  Latest PortFolio Start -->
    {{-- <section class="srex-portfolio srex-section">
        <div class="container-fluid">
            <div class="srex-portfolio__title">
                <div class="srex-section__head wow ud-fade-in-up" data-wow-delay="200ms">
                    <h5 class="srex-section__head__badge">
                        <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                        latest portfolio
                    </h5>
                    <h2 class="srex-section__head__title">
                        Embrace the power the sun with solar energy!
                    </h2>
                </div>
            </div>
            <div class="controls wow ud-fade-in-up" data-wow-delay="200ms">
                <ul id="filters">
                    <li class="filter active" data-filter="all">All</li>
                    <li class="filter" data-filter=".power">Power</li>
                    <li class="filter" data-filter=".eco-solar">
                        Eco Solar
                    </li>
                    <li class="filter" data-filter=".solar-pro">
                        Solar Pro
                    </li>
                    <li class="filter" data-filter=".energy">Energy</li>
                </ul>
            </div>
            <div class="row" id="srex-ho-filter">
                <div class="col-md-6 col-lg-4 col-xl-3 col-12 filter-item solar-pro">
                    <a href="./project-details.html">
                        <div class="srex-portfolio__item wow ud-fade-in-up" data-wow-delay="200ms">
                            <img src="assetsfront/images/portfolio/portfolio-1.png" alt="portfolio-1">
                            <div class="srex-portfolio__item__title">
                                <h2>01</h2>
                                <h3>Equality and solidarity</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 col-12 filter-item power">
                    <a href="./project-details.html">
                        <div class="srex-portfolio__item wow ud-fade-in-up" data-wow-delay="200ms">
                            <img src="assetsfront/images/portfolio/portfolio-2.png" alt="portfolio-1">
                            <div class="srex-portfolio__item__title">
                                <h2>02</h2>
                                <h3>Windward Renewables</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 col-12 filter-item eco-solar">
                    <a href="./project-details.html">
                        <div class="srex-portfolio__item wow ud-fade-in-up" data-wow-delay="200ms">
                            <img src="assetsfront/images/portfolio/portfolio-3.png" alt="portfolio-1">
                            <div class="srex-portfolio__item__title">
                                <h2>03</h2>
                                <h3>Sun Breeze Power</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 col-12 filter-item energy">
                    <a href="./project-details.html">
                        <div class="srex-portfolio__item wow ud-fade-in-up" data-wow-delay="200ms">
                            <img src="assetsfront/images/portfolio/portfolio-4.png" alt="portfolio-1">
                            <div class="srex-portfolio__item__title">
                                <h2>04</h2>
                                <h3>Wind Whisper Energy</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <!--  Latest PortFolio End -->

    <!-- Question Section Start -->
    {{-- <section class="srex-question srex-section">
        <div class="container">
            <div class="srex-question__title">
                <div class="srex-section__head wow ud-fade-in-up" data-wow-delay="200ms">
                    <h5 class="srex-section__head__badge">
                        Recently asked
                    </h5>
                    <h2 class="srex-section__head__title">
                        asked any questions
                    </h2>
                    <p class="mb-5 mt-3">
                        It is a long established fact that a reader will be
                        distracted by the readable content of a page when
                        looking at its layout
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="srex-question__left">
                        <img src="assetsfront/images/question/question.png" alt="Question_img">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="srex-question__right wow ud-fade-in-up" data-wow-duration="1.7s">
                        <div class="srex-accordion accordion" id="faq">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne" role="button">
                                        <div class="accordion-header__left">
                                            <p class="accordion-header__left__badge">01</p>
                                            <h3>What is Equality and solidarity?</h3>
                                        </div>
                                        <i class="fa-solid fa-angle-down open"></i>
                                        <i class="fa-solid fa-angle-up close"></i>
                                    </div>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        The generated is therefore always free from repetition, injected humour, or
                                        words etc.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" role="button">
                                        <div class="accordion-header__left">
                                            <p class="accordion-header__left__badge">02</p>
                                            <h3>How to inspire humanity?</h3>
                                        </div>
                                        <i class="fa-solid fa-angle-down open"></i>
                                        <i class="fa-solid fa-angle-up close"></i>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        The generated is therefore always free from repetition, injected humour, or
                                        words etc.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseTwo" role="button">
                                        <div class="accordion-header__left">
                                            <p class="accordion-header__left__badge">03</p>
                                            <h3>Where are Better living programs?</h3>
                                        </div>
                                        <i class="fa-solid fa-angle-down open"></i>
                                        <i class="fa-solid fa-angle-up close"></i>
                                    </div>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq">
                                    <div class="accordion-body">
                                        The generated is therefore always free from repetition, injected humour, or
                                        words etc.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Question Section End -->

    <!-- NewsLetter Section Start -->
    {{-- <section class="srex-news-letter srex-section">
        <div class="container">
            <div class="srex-news-letter__box wow ud-fade-in-up" data-wow-delay="200ms">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="srex-news-letter__box__left">
                            <img src="./assetsfront/images/home-one/letter/news-letter-icon.svg"
                                class="srex-info-box__item__logo" alt="NewsLetter">
                            <h3>Subscribe your E-mail for Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="srex-news-letter__box__right">
                            <form class="text-center">
                                <input placeholder="Enter your email" type="text">
                                <button type="button" class="srex-btn srex-btn--primary">
                                    Subscribe <i class="fa-solid fa-plus"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- NewsLetter Section End -->

    <!-- Stats Section Start -->
    {{-- <div class="srex-stats srex-section">
        <div class="container">
            <div class="srex-stats__items wow ud-fade-in-up" data-wow-duration="1.3s">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-12">
                        <div class="srex-stats__item">
                            <div class="srex-stats__item__icon">
                                <img src="./assetsfront/images/home-one/stats/awards.svg" alt="Winning Awards">
                            </div>
                            <div class="srex-stats__item__text">
                                <h2><span class="counter">20</span>+</h2>
                                <h3>Winning Awards</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12">
                        <div class="srex-stats__item">
                            <div class="srex-stats__item__icon">
                                <img src="./assetsfront/images/home-one/stats/projects.svg" alt="Completed Projects">
                            </div>
                            <div class="srex-stats__item__text">
                                <h2><span class="counter">10</span>K+</h2>
                                <h3>Completed Projects</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12">
                        <div class="srex-stats__item">
                            <div class="srex-stats__item__icon">
                                <img src="./assetsfront/images/home-one/stats/members.svg" alt="Team members">
                            </div>
                            <div class="srex-stats__item__text">
                                <h2><span class="counter">300</span>+</h2>
                                <h3>Team Members</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12">
                        <div class="srex-stats__item">
                            <div class="srex-stats__item__icon">
                                <img src="./assetsfront/images/home-one/stats/clients.svg" alt="Clients Review">
                            </div>
                            <div class="srex-stats__item__text">
                                <h2><span class="counter">900</span>+</h2>
                                <h3>Clients Review</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Stats Section End -->

    <!-- Testimonial Section Start-->
    {{-- <section class="srex-testimonial-one srex-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-12">
                    <div class="srex-testimonial-one__left text-left">
                        <div class="srex-section__head">
                            <h2 class="srex-section__head__title wow fadeInLeft" data-wow-duration="0.6s">
                                What our clients say?
                            </h2>
                        </div>

                        <div class="srex-testimonial-one__slider wow ud-fade-in-up" data-wow-delay="200ms">
                            <div class="srex-testimonial-one__slider__item">
                                <img src="./assetsfront/images/quote.svg" alt="Quote"
                                    class="srex-testimonial-one__slider__item__quote">
                                <p class="srex-testimonial-one__slider__item__text">
                                    "Nullam vel nibh facilisis lectus fermentum
                                    ultrices quis non risus. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. In
                                    hac habitasse platea dictumst. Duis porta,
                                    quam ut finibus ultrices, lorem lacus
                                </p>
                                <div class="srex-testimonial-one__slider__item__author">
                                    <h3>John Doe</h3>
                                    <p>CEO, WindVista Solutions</p>
                                </div>
                            </div>

                            <div class="srex-testimonial-one__slider__item">
                                <img src="./assetsfront/images/quote.svg" alt="Quote"
                                    class="srex-testimonial-one__slider__item__quote">
                                <p class="srex-testimonial-one__slider__item__text">
                                    "Nullam vel nibh facilisis lectus fermentum
                                    ultrices quis non risus. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. In
                                    hac habitasse platea dictumst. Duis porta,
                                    quam ut finibus ultrices, lorem lacus
                                </p>
                                <div class="srex-testimonial-one__slider__item__author">
                                    <h3>MH Imon</h3>
                                    <p>CEO, ultraDevs</p>
                                </div>
                            </div>

                            <div class="srex-testimonial-one__slider__item">
                                <img src="./assetsfront/images/quote.svg" alt="Quote"
                                    class="srex-testimonial-one__slider__item__quote">
                                <p class="srex-testimonial-one__slider__item__text">
                                    "Nullam vel nibh facilisis lectus fermentum
                                    ultrices quis non risus. Lorem ipsum dolor
                                    sit amet, consectetur adipiscing elit. In
                                    hac habitasse platea dictumst. Duis porta,
                                    quam ut finibus ultrices, lorem lacus
                                </p>
                                <div class="srex-testimonial-one__slider__item__author">
                                    <h3>MD Arifuzzaman</h3>
                                    <p>CEO, Creativilo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="srex-testimonial-one__right">
                        <img src="./assetsfront/images/home-one/testimonial/testimonial-right.png" alt="Testimonial"
                            class="srex-testimonial-one__right__img">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Testimonial Section End-->


    <!-- Blog Section Start-->
    <section class="srex-blog-one srex-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="srex-blog-one__title">
                        <div class="srex-section__head wow ud-fade-in-left" data-wow-delay="200ms">
                            <h5 class="srex-section__head__badge">
                                <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                                Blog & News
                            </h5>
                            <h2 class="srex-section__head__title">
                                Shine Brighter with Solar
                            </h2>
                        </div>
                        <a href="./blog.html" class="srex-btn srex-btn--primary wow ud-fade-in-right"
                            data-wow-delay="200ms">
                            More Blogs <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="srex-blog-one__post wow ud-fade-in-up" data-wow-delay="250ms">
                        <a href="blog-details.html" class="srex-blog-one__post__img">
                            <img src="./assetsfront/images/home-one/blog/blog-1.png" alt="Blog">
                        </a>
                        <div class="d-flex gap-5 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-calendar-alt"></i>
                                <h6>October 19, 2022</h6>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-user-alt"></i>
                                <h6>Admin</h6>
                            </div>
                        </div>
                        <h3><a href="blog-details.html">Explore the world like never before travel experience</a></h3>
                        <a href="./blog-details.html" class="srex-btn srex-btn--outline">
                            Read More<i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="srex-blog-one__post wow ud-fade-in-up" data-wow-delay="400ms">
                        <a href="blog-details.html" class="srex-blog-one__post__img">
                            <img src="./assetsfront/images/home-one/blog/blog-2.png" alt="Blog">
                        </a>
                        <div class="d-flex gap-5 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-calendar-alt"></i>
                                <h6>October 19, 2022</h6>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-user-alt"></i>
                                <h6>Admin</h6>
                            </div>
                        </div>
                        <h3><a href="blog-details.html">Explore the world like never before travel experience</a></h3>
                        <a href="./blog-details.html" class="srex-btn srex-btn--outline">
                            Read More<i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-6">
                    <div class="srex-blog-one__post wow ud-fade-in-up" data-wow-delay="600ms">
                        <a href="blog-details.html" class="srex-blog-one__post__img">
                            <img src="./assetsfront/images/home-one/blog/blog-3.png" alt="Blog">
                        </a>
                        <div class="d-flex gap-5 mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-calendar-alt"></i>
                                <h6>October 19, 2022</h6>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-user-alt"></i>
                                <h6>Admin</h6>
                            </div>
                        </div>
                        <h3><a href="blog-details.html">Explore the world like never before travel experience</a></h3>
                        <a href="./blog-details.html" class="srex-btn srex-btn--outline">
                            Read More<i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End-->

    <!-- Sponsor Section Start -->
    <div class="srex-sponsor srex-section">
        <div class="container">
            <div class="srex-sponsor__items wow fadeInUp" data-wow-duration="1.5s">
                <a href="#" class="zirox-brand__items-item">
                    <img src="assetsfront/images/sponsor/sponsor-2.png" alt="Envato">
                </a>
                <a href="#" class="zirox-brand__items-item">
                    <img src="assetsfront/images/sponsor/sponsor-3.png" alt="Envato">
                </a>
                <a href="#" class="zirox-brand__items-item">
                    <img src="assetsfront/images/sponsor/sponsor-4.png" alt="Envato">
                </a>
                <a href="#" class="zirox-brand__items-item">
                    <img src="assetsfront/images/sponsor/sponsor-2.png" alt="Envato">
                </a>
                <a href="#" class="zirox-brand__items-item">
                    <img src="assetsfront/images/sponsor/sponsor-3.png" alt="Envato">
                </a>
                <a href="#" class="zirox-brand__items-item">
                    <img src="assetsfront/images/sponsor/sponsor-4.png" alt="Envato">
                </a>
            </div>
        </div>
    </div>
    <!-- Sponsor Section End -->

    <!-- Footer Start-->
    <footer class="srex-footer-one">
        <div class="container">
             
            <hr>
            <div class="srex-footer__links">
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="srex-footer__links__wrapper text-center text-lg-start">
                            <img src="./assetsfront/images/logo-black.png" alt="Logo" class="mb-3">
                            <div class="srex-footer__links__content">
                                <div class="srex-footer__newsletter">
                                    <ul class="list-unstyled d-flex justify-content-center justify-content-lg-start gap-3">
                                        <li>
                                            <a href="#" class="text-dark fs-4">
                                                <i class="fa-brands fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-dark fs-4">
                                                <i class="fa-brands fa-x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-dark fs-4">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-dark fs-4">
                                                <i class="fa-brands fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="srex-footer__links__wrapper">
                            <h4>Judul</h4>
                            <div class="srex-footer__links__content">
                               <p>Deskripsi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="srex-footer__links__wrapper">
                            <h4>More Service</h4>
                            <div class="srex-footer__links__content">
                                <ul class="srex-footer__links__list">
                                    <li>
                                        <a href="#">Accounting</a>
                                    </li>
                                    <li>
                                        <a href="#">Risk Management</a>
                                    </li>
                                    <li>
                                        <a href="#">Accounting</a>
                                    </li>
                                    <li>
                                        <a href="#">Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#">Financial</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="srex-footer__links__wrapper">
                            <h4>Contact US</h4>
                            <div class="srex-footer__links__content">
                                <ul class="srex-footer__contact">
                                    <li>
                                        <div class="srex-footer__contact__icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="srex-footer__contact__text">
                                            <p>
                                                <a href="tel:+11234567890">+(1) 123 456 7890</a>
                                            </p>
                                            <p>
                                                <a href="tel:+10987654321">+(1) 098 765 4321</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="srex-footer__contact__icon">
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </div>
                                        <div class="srex-footer__contact__text">
                                            <p>
                                                Burmsille Street, MN 55337,
                                                <br>
                                                United States
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="srex-footer__contact__icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="srex-footer__contact__text">
                                            <p>
                                                <a href="mailto:info@driller.com">info@driller.com</a>
                                            </p>
                                            <p>
                                                <a href="mailto:info.example@driller.com">info.example@driller.com</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="srex-footer__bottom">
                <div class="row">
                    <div class="text-center">
                        <p>
                            &copy; 2024 Solarex | All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
            </section>
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
