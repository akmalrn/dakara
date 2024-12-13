@extends('frontend.layouts')

@section('title', 'Registrasi')

@section('content')
@section('title-page', 'Registrasi')

@include('frontend.components.page-header')


<section class="wedo-section"
style="background: url({{ asset('assetsfront/images/background/tukang-struktur.jpg') }}); overflow-x: hidden; background-size: 150px; border-top: 1px solid #dbdbdb;">
<div class="container pad-top-xs full-width" style="padding-bottom:50px ">
    <div class="row pad-top-xs">
        <div class="">
            <div class="blog-detail">
                <div class="text-box bg-white">
                    <h2 class="heading">Pendaftaran</h2>
                    <span class="meta">by: superadmin</span>
                   {!! $regis->description ?? 'Kosong' !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menambahkan Google Maps -->

</section>

<!-- Tambahkan CSS -->

@endsection
