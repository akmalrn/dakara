@extends('frontend.layouts')
@section('title', 'Profile')
@section('title-page', 'Profile')
@section('content')
    @include('frontend.components.page-header')

    <!-- Service Start -->
    <section class="srex-service srex-section">
        <div class="container">
            <div class="srex-section__head text-center">
                <h5 class="srex-section__head__badge wow ud-fade-in-up" data-wow-delay="200ms">
                    <img src="./assetsfront/images/badge-icon.svg" alt="Badge Icon">
                    {{ $configuration->website_name ?? '' }}
                </h5>

            </div>
            <div class="srex-info-box">
                <div class="row">
                    @foreach ($superioritys as $superiority)
                    <div class="col-md-3 col-lg-3 col-12"> <!-- Change col-md-2 to col-md-3 for 4 items per row -->
                        <div class="srex-info-box__item wow ud-fade-in-up" data-wow-delay="200ms">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="srex-info-box__item__img">
                                    <img src="{{ asset($superiority->path) }}"
                                        class="srex-info-box__item__logo" alt="{{ $superiority->title }}">
                                </div>
                                <h2 class="srex-info-box__item__number">
                                    0{{ $superiority->id }}
                                </h2>
                            </div>
                            <h3 class="srex-info-box__item__text">
                                {{ $superiority->title }}
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

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
    <!-- Hero End -->

    <!-- Struktur Organisasi -->
    <section class="wedo-section"
        style="background:  url({{ asset('assetsfront/images/background/tukang-struktur.jpg') }});overflow-x: hidden; background-size: 150px; border-top: 1px solid #dbdbdb;">
        <div class="container pad-top-lg">
            <div class="row">
                <div class="col-md-2 dekstop">
                </div>
                <div class="col-md-8 col-xs-12">
                    <!-- start of main-heading -->
                    <header class="main-heading mar-bottom-lg">
                        <center>
                            <!-- <h2 class="heading mar-bottom-xs">Struktur Organisasi -->
                            </h2>
                        </center>
                        <img src="{{ asset($profile->path) }}" style="width: 100%;">
                    </header><!-- end of main-heading -->

                </div>

            </div>
        </div>
    </section>
    <!-- Struktur Organisasi End -->
@endsection
