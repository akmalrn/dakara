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
                    <div class="col-xs-12 col-sm-6 col-md-4 filter3 mar-bottom-xs active coba" style="height:450px;">
                        <div class="product-box">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/5u74d1nUC_s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="box" style="margin-top: 10px;">
                                <h3 class="heading large">ITSoLCA : Life Cycle Impact Assessment (LCIA) by ILCAN & PT. Dakara Consulting LCA Indonesia</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 filter3 mar-bottom-xs active coba" style="height:450px;">
                        <div class="product-box">
                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/Xw-TFQFmiLc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <div class="box" style="margin-top: 10px;">
                                <h3 class="heading large">Uji Kompetensi Life Cycle Assessment (LCA) Berlisensi Sertifikasi BNSP</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
