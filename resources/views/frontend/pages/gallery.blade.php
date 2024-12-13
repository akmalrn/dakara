@extends('frontend.layouts')
@section('title', 'Galery')
@section('title-page', 'Galery')

@section('content')
    @include('frontend.components.page-header')

    <section class="wedo-section" 
        style="background: url({{ asset('assetsfront/images/background/tukang-struktur.jpg') }}); overflow-x: hidden; background-size: 150px; border-top: 1px solid #dbdbdb;">
        
    </section>
@endsection