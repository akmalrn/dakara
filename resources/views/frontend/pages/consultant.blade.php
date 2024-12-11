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
        <div class="">
            <div class="row bg-white" style="padding-top:40px;">
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-3 mar-bottom-md">
                        <!-- start of team-box -->
                        <div class="team-box text-center">
                            <a href="https://dakara-lcaindonesia.com/dev/file/trainer/NEW_CV_Dr_Kiman_Siregar,S_TP,M_Si_Expert_LCA_dari_ILCAN__Okt_2020_ok.pdf"
                                style="color:#999;" target="_blank"><span class="text">
                                    <div class="img-box" style="height: 250px; overflow: hidden;"><img
                                            src="https://dakara-lcaindonesia.com/dev/img/trainer/669000a9c6dff50edda58b6c581be334.jpg"
                                            alt="" class="img-responsive"></div>
                                    <h3 class="heading">Dr. Kiman Siregar</h3>
                                    <i class="fa fa-eye"></i> View
                                </span></a>
                        </div><!-- end of team-box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
