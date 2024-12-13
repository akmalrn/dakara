@extends('frontend.layouts')
@section('title', 'Trainer')
@section('title-page', 'Trainer')
@section('content')
    @include('frontend.components.page-header')

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

@endsection
