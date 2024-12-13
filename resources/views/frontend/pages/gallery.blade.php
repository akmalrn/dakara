@extends('frontend.layouts')

@section('title', 'Gallery')
@section('title-page', 'Gallery')

@section('content')
    @include('frontend.components.page-header')

    <!-- Tambahkan CSS langsung di dalam halaman Blade -->
    <style>
        #isotop-holder {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* memberi jarak antar elemen */
        }

        .product-box {
            text-align: center;
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
            background-size:15%; /* Memastikan gambar mengisi seluruh kontainer */
            background-repeat: repeat; /* Tidak mengulang gambar */
            background-position: center center; /* Memastikan gambar berada di tengah */
            padding: 100px 0; /* Memberikan padding atas dan bawah lebih besar agar konten terlihat lebih jelas */
        }
    </style>

<div class="container pad-top-md pad-bottom-md background-container" style="background-image: url('/assetsfront/images/background/tukang-struktur.jpg'); width: 100%; max-width:100%;">
        <div class="row">
            <!-- start of isotop-holder -->
            <div id="isotop-holder">
                <!-- start of item -->
                @foreach ($gallerys as $gallery)
                <div class="col active coba" style="height:450px;">
                    <!-- start of product-box -->
                    <div class="product-box">
                        <a href="galeri-pendampingan/19-pendampingan-dan-verifikasi-dokumen-lca-pt-indonesia-power">
                            <img src="{{ asset($gallery->path) }}" alt="{{ $gallery->title }}" style="max-width: 300px; width : 300px;">
                            <div class="box">
                        </a>
                            <h3 class="heading large">
                                <a href="galeri-pendampingan/19-pendampingan-dan-verifikasi-dokumen-lca-pt-indonesia-power">
                                    {{ $gallery->title }}
                                </a>
                            </h3>
                        </div>
                    </div><!-- end of product-box -->
                </div><!-- end of item -->
                @endforeach
            </div><!-- end of isotop-holder -->
        </div>
    </div>

@endsection
