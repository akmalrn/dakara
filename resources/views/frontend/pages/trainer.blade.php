@extends('frontend.layouts')
@section('title', 'Trainer')
@section('title-page', 'Trainer')
@section('content')
    @include('frontend.components.page-header')

    <div class="container pad-top-md pad-bottom-md">
        <div class="row">
            <div class="col-xs-12 col-sm-3 mar-bottom-md">
                <!-- Start of team-box -->
                <div class="team-box text-center">
                    <a href="https://dakara-lcaindonesia.com/dev/file/trainer/NEW_CV_Dr_Kiman_Siregar,S_TP,M_Si_Expert_LCA_dari_ILCAN__Okt_2020_ok.pdf"
                        style="color: #999;" target="_blank">
                        <div class="img-box" style="height: 250px; overflow: hidden; margin-top: 20px;">
                            <img src="https://dakara-lcaindonesia.com/dev/img/trainer/669000a9c6dff50edda58b6c581be334.jpg"
                                alt="Dr. Kiman Siregar" class="img-responsive">
                        </div>  
                        <h3 class="heading">Dr. Kiman Siregar</h3>
                        <span class="text">
                            <i class="fa fa-eye"></i> View
                        </span>
                    </a>
                </div>
                <!-- End of team-box -->
            </div>
        </div>
    </div>

@endsection
