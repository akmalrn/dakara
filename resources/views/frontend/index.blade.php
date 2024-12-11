@extends('frontend.layouts')
@section('content')
    <!-- Slider -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            @foreach ($sliders as $slider)
                <div class="carousel-item active">
                    <img src="{{ asset($slider->path) }}" class="d-block w-100" alt="{{ $slider->title ?? 'Slider Image' }}"
                        style="object-fit: cover; width: 100%; max-width: 100%; height: 600px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->title }}</h5>
                        <p>{!! $slider->description !!}</p>
                    </div>
                </div>
            @endforeach
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
                            <div class="srex-about-us-one__right__box d-flex gap-3 wow fadeInUp" data-wow-duration="1.3s">
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
                        <img class="srex-section-bottom__left__img" src="assetsfront/images/about-us/about-us-bottom.png"
                            alt="about-us-bottom-img">
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

    <!-- Blog Section Start-->
    <section class="srex-blog-one srex-section">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-12">
                        <div class="srex-blog-one__title">
                            <div class="srex-section__head wow ud-fade-in-left" data-wow-delay="200ms">
                                <h5 class="srex-section__head__badge">
                                    <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}">
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
                @endforeach
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
@endsection
