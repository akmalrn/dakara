@extends('frontend.layouts')

@section('title', 'Galeri')
@section('title-page', 'Galeri')

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
            overflow: hidden;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-box img {
            width: 100%; /* Membuat gambar mengambil 100% dari kontainer */
            height: auto;
            transition: transform 0.3s ease-in-out;
        }

        .product-box img:hover {
            transform: scale(1.05);
        }

        .product-box .box {
            padding: 20px;
        }

        .product-box .box h3 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
            color: #333;
        }

        .product-box .box a {
            color: #4e73df;
            font-weight: bold;
            text-decoration: none;
        }

        .product-box .box a:hover {
            color: #2e59d9;
        }

        @media (max-width: 768px) {
            .product-box {
                flex: 1 1 100%; /* Pada layar lebih kecil, setiap item akan memakan penuh lebar */
            }
        }

        /* Background hanya muncul sekali */
        .background-container {
            background-image: url('/assetsfront/images/background/tukang-struktur.jpg'); /* Ganti dengan gambar sesuai kebutuhan */
            background-size:15%; /* Memastikan gambar mengisi seluruh kontainer */
            background-repeat: repeat; /* Tidak mengulang gambar */
            background-position: center center; /* Memastikan gambar berada di tengah */
            padding: 100px 0; /* Memberikan padding atas dan bawah lebih besar agar konten terlihat lebih jelas */
        }
    </style>

    <div class="container pad-top-md pad-bottom-md background-container">
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
