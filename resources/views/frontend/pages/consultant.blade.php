@extends('frontend.layouts')
@section('title', 'Consultant')
@section('title-page', 'Consultant')
@section('content')
    @include('frontend.components.page-header')

    <div class="container pad-top-xs full-width">
        <div class="row pad-top-xs">
            <div class="">
                <div class="blog-detail">
                    <div class="text-box bg-white">
                        <h2 class="heading">Consultant</h2>
                        <span class="meta">by: superadmin</span>
                        <p>Consultant</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row bg-white" style="padding-top:40px;">
                @foreach ($teams as $team)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="team-box text-center">
                            <a href="{{ $team->pdf }}" style="color:#999;" target="_blank">
                                <div class="img-box" style="height: 250px; overflow: hidden;">
                                    <img src="{{ asset($team->path) }}" alt="{{ $team->name }}" class="img-responsive w-100">
                                </div>
                                <h3 class="heading mt-2">{{ $team->name }}</h3>
                                <i class="fa fa-eye"></i> View
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
