@extends('frontend.layouts')
@section('title', 'Pendampingan Perhitungan LCA')
@section('title-page', 'Pendampingan Perhitungan LCA')
@section('content')
    @include('frontend.components.page-header')
    <div class="container pad-top-xs full-width">
        <div class="row pad-top-xs">
            <div class="">
                <div class="blog-detail">
                    <div class="text-box bg-white">
                        <h2 class="heading">Pendampingan Perhitungan LCA
                        </h2>
                        <span class="meta">by: superadmin</span>
                       {!! $calcu->description ?? 'Kosong' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
