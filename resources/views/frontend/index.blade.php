@extends('frontend.layouts')
@section('style')
    <style>
        .custom-alert {
            display: none;
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

        .custom-alert-content {
            position: relative;
            background: #fff;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

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
@endsection
@section('content')
    <div id="custom-alert" class="custom-alert">
        <div class="custom-alert-content">
            <button class="close-btn">&times;</button>
           <img src="{{ asset($configuration->path_alert ?? '') }}" alt="{{ $path->website_name ?? '' }}" width="260px" height="260px">
        </div>
        <script>
            function showAlert() {
                const alertBox = document.getElementById("custom-alert");
                alertBox.style.display = "flex";
            }

            document.querySelector(".close-btn").addEventListener("click", function() {
                const alertBox = document.getElementById("custom-alert");
                alertBox.style.display = "none";
            });

            setTimeout(showAlert, 1000);
        </script>
    </div>
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
                               {{ $whyus->title }}
                                <span class="srex-hero-one__box__text__top__line"></span>
                            </span>
                        </h1>
                        <p class="srex-hero-one__box__desc">
                            {!! $whyus->description ?? '' !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="srex-hero-one__right wow ud-fade-in-right" data-wow-delay="200ms">
                        <img src="{{ asset($whyus->path ?? '') }}" alt="Women with Solar Panel">
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
                                {{ $about->title ?? '' }}
                            </h5>
                            {{-- <h2 class="srex-section__head__title wow ud-fade-in-up" data-wow-delay="200ms">
                                Apa itu Life Cycle Assessment (LCA) ?
                            </h2> --}}
                            <p class="srex-section__head__desc wow ud-fade-in-up" data-wow-delay="200ms">
                                {{ $about->overview ?? '' }}
                            </p>

                            <div class="srex-icon-list wow ud-fade-in-up" data-wow-delay="200ms">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <p>
                                            Definition of objectives and scope
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <p>LCI (Life Cycle Inventory)</p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <p>
                                            Life Cycle Impact Assessment
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        <p>
                                            Interpretation
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            {!! $about->description ?? '' !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-0">
                    <div class="srex-about-us-one__right">
                        <img src="{{ asset($about->path ?? '') }}" alt="{{ $about->title ?? '' }}"
                            class="srex-about-us-one__right__img wow ud-fade-in-up" data-wow-delay="200ms">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About US End-->


    <!-- About US Bottom Start-->
    <div class=" pad-top-md pad-bottom-md border-top">
        <div class="containe    r">
            <!-- start of main-heading -->
            <header class="main-heading text-center row">
                <div class="col-xs-12">
                    <h2 class="heading"><span style="background: white; padding:10px; border-radius:5px;">Jadwal
                            Terdekat</span></h2>
                </div>
            </header><!-- end of main-heading -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- start of line-box -->
                    <div class="line-box">
                        <!-- start of line -->
                        <div class="owl-carouself">
                            @if ($schedules->isEmpty())
                            <p class="text-center">Jadwal Kosong</p>
                        @else
                            @foreach ($schedules as $schedule)
                                <div>
                                    <a href="{{ $schedule->path }}" target="_blank">
                                        <img src="{{ asset($schedule->path) }}" alt="" width="150px" height="150px">
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        </div>
                    </div><!-- end of line-box -->
                </div>
            </div>
        </div>
    </div>
    <!-- About US Bottom End-->

    <!-- Blog Section Start-->
    <section class="srex-blog-one srex-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="srex-blog-one__title">
                        <div class="srex-section__head wow ud-fade-in-left" data-wow-delay="200ms">
                            <h5 class="srex-section__head__badge">
                                <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                                Blog
                            </h5>
                            <h2 class="srex-section__head__title">
                                Blog Terbaru
                            </h2>
                        </div>
                        <a href="{{ route('blog') }}" class="srex-btn srex-btn--primary wow ud-fade-in-right"
                            data-wow-delay="200ms">
                            Blog Lainnya <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                </div>
                @foreach ($blogs as $blog)
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="srex-blog-one__post wow ud-fade-in-up" data-wow-delay="250ms">
                            <a href="blog-details.html" class="srex-blog-one__post__img">
                                <img src="{{ asset($blog->path) }}" alt="{{ $blog->title }}">
                            </a>
                            <div class="d-flex gap-5 mt-2">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-calendar-alt"></i>
                                    <h6>{{ $blog->created_at }}</h6>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-user-alt"></i>
                                    <h6>Admin</h6>
                                </div>
                            </div>
                            <h3><a href="blog-details.html">{{ $blog->title }}</a></h3>
                            <a href="./blog-details.html" class="srex-btn srex-btn--outline">
                                Baca Selengkapnya<i class="fa-solid fa-plus"></i>
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
                @foreach ($mitras as $mitra)
                    <a href="{{ $mitra->link }}" target="blank" class="zirox-brand__items-item">
                        <img src="{{ asset($mitra->path) }}" alt="{{ $mitra->title }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Sponsor Section End -->
@endsection
