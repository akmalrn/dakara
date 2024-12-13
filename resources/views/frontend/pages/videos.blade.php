@extends('frontend.layouts')
@section('title', 'Videos')
@section('title-page', 'Videos')
@section('content')
    @include('frontend.components.page-header')

    <section class="wedo-section"
        style="background: url({{ asset('assetsfront/images/background/tukang-struktur.jpg') }}); overflow-x: hidden; background-size: 150px; border-top: 1px solid #dbdbdb;">
        <div class="container pad-top-md pad-bottom-md" style="padding-top: 5%">
            <div class="row">
                <div id="isotop-holder">
                    <!-- Video 1 -->
                    <div class="video-container" style="display: flex; flex-wrap: wrap; gap: 15px;">
                        @foreach ($videos as $video)
                        <div class="video-item" style="flex: 1 1 calc(33.333% - 15px); height: 450px; max-width: calc(33.333% - 15px);">
                            <div class="product-box">
                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $video->youtube }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <div class="box" style="margin-top: 10px;">
                                    <h3 class="heading large">{{ $video->title }}</h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
