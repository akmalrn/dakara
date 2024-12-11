@extends('frontend.layouts')

@section('title', 'Galery')
@section('title-page', 'Galery')

@section('content')
    @include('frontend.components.page-header')

    <!-- Tambahkan CSS langsung di dalam halaman Blade -->
    <style>
        #isotop-holder {
            display: flex;
            flex-wrap: wrap;
            gap: 30px; /* memberi jarak antar elemen */
        }

        .product-box {
            flex: 1 1 calc(50% - 15px); /* Setiap produk box akan mengambil setengah lebar dari kontainer */
            box-sizing: border-box;
        }

        .product-box img {
            width: 100%; /* Membuat gambar mengambil 100% dari kontainer */
            height: auto;
            margin-top: 40px; /* Memberikan jarak atas pada gambar */
        }

        @media (max-width: 768px) {
            .product-box {
                flex: 1 1 100%; /* Pada layar lebih kecil, setiap item akan memakan penuh lebar */
            }
        }
    </style>

    <div class="container pad-top-md pad-bottom-md">
        <div class="row">
            <!-- start of isotop-holder -->
            <div id="isotop-holder">
                <!-- start of item -->
                <div class="col-xs-12 col-sm-6 col-md-4 filter3 mar-bottom-xs active coba" style="height:450px;">
                    <!-- start of product-box -->
                    <div class="product-box">
                        <a href="galeri-pendampingan/19-pendampingan-dan-verifikasi-dokumen-lca-pt-indonesia-power">
                            <img src="https://dakara-lcaindonesia.com/dev/img/galeri/620a8680ddeb5f1922ca20866bd2a496.png" alt="Pendampingan dan Verifikasi dokumen LCA PT. Indonesia Power" class="img-responsive">
                        </a>
                        <div class="box">
                            <h3 class="heading large">
                                <a href="galeri-pendampingan/19-pendampingan-dan-verifikasi-dokumen-lca-pt-indonesia-power">
                                    Pendampingan dan Verifikasi dokumen LCA PT. Indonesia Power
                                </a>
                            </h3>
                        </div>
                    </div><!-- end of product-box -->
                </div><!-- end of item -->

                <!-- start of item -->
                <div class="col-xs-12 col-sm-6 col-md-4 filter3 mar-bottom-xs active coba" style="height:450px;">
                    <!-- start of product-box -->
                    <div class="product-box">
                        <a href="galeri-pendampingan/20-advanced-workshop-dan-pendampingan-serta-verifikasi-dokumen-lca-pt-bio-farma">
                            <img src="https://dakara-lcaindonesia.com/dev/img/galeri/f7e1f31eab30c55b69eb18a6601e4b2c.png" alt="Advanced Workshop dan pendampingan serta Verifikasi Dokumen LCA PT.Bio Farma" class="img-responsive">
                        </a>
                        <div class="box">
                            <h3 class="heading large">
                                <a href="galeri-pendampingan/20-advanced-workshop-dan-pendampingan-serta-verifikasi-dokumen-lca-pt-bio-farma">
                                    Advanced Workshop dan Pendampingan serta Verifikasi Dokumen LCA PT. Bio Farma
                                </a>
                            </h3>
                        </div>
                    </div><!-- end of product-box -->
                </div><!-- end of item -->
            </div><!-- end of isotop-holder -->
        </div>
    </div>
@endsection
