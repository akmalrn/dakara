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
                    <p style="color:black;">Pentingnya Pelaksanaan Kompetensi Kerja Oleh Ibu Inda Mapiliandari (Ketua
                        Komisi Pengendalian Mutu Sertifikasi dan Sistem Informasi Badan Nasional Sertifikasi Profesi)
                        <a
                            href="https://dakara-lcaindonesia.com/web/assets/kcfinder/upload/files/MateriPelatihan%20-%20Bu%20Inda%20PelaksanaanSertifikasiKompetensiKerja.pptx">
                            <span style="color:blue;">[Download PPT Klik Disini]</span>
                    </p>

                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
