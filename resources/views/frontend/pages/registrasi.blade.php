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
                    <p>
                        <a
                            href="/web/assets/kcfinder/upload/files/FORMULIR%20PENDAFTARAN%20TRAINING%20PT.%20DAKARA%20CONSULTING%20LCA%20INDONESIA%20%281%29.pdf">
                            <strong>Formulir Pendaftaran [Download Klik Disini]</strong>
                        </a>
                    </p>
                    <p>
                        Atau Hubungi kami di
                        <strong>
                            <span
                                style="font-family: open sans, helvetica neue, helvetica, arial, sans-serif; font-size:14px">
                                <a href="tel:6281314226989" style="color: rgb(46, 204, 113); text-decoration: none;">
                                    081314226989
                                </a>
                            </span>
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menambahkan Google Maps -->

</section>

<!-- Tambahkan CSS -->

@endsection
