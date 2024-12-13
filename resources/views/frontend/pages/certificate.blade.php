@extends('frontend.layouts')
@section('title', 'Certificate')
@section('content')
@section('title-page', 'Certificate')
@include('frontend.components.page-header')

<section class="wedo-section"
style="background: url({{ asset('assetsfront/images/background/tukang-struktur.jpg') }}); overflow-x: hidden; background-size: 150px; border-top: 1px solid #dbdbdb;">
<div class="container pad-top-xs full-width" style="padding-bottom: 75px">
    <div class="row pad-top-xs">
        <div class="">
            <div class="blog-detail">
                <div class="text-box bg-white">
                    <h2 class="heading">SERTIFIKASI</h2>
                    <span class="meta">by: superadmin</span>
                   {!! $certi->description ?? 'Kosong' !!}

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
