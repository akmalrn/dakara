@extends('frontend.layouts')

@section('title', 'Penyusunan dokumen LCA PROPER')
@section('title-page', 'Penyusunan dokumen LCA PROPER')

@section('content')
    @include('frontend.components.page-header')

    <div class="container pad-top-xs full-width">
        <div class="row pad-top-xs">
            <div class="col-12">
                <div class="blog-detail">
                    <div class="text-box bg-white">
                        <h2 class="heading">Penyusunan dokumen LCA PROPER</h2>
                        <span class="meta">by: superadmin</span>
                       {!! $compi->description ?? 'kosong' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
