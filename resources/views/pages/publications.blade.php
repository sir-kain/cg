@extends('layouts/app', ['title' => 'Publications |'])

@section('header')
    @include('layouts/partials/_header')
@stop

{{--  @section('mainSlider')
@include('layouts/partials/_mainSlider')
@stop

@section('statistiques')
@include('layouts/partials/_statistiques')
@stop--}}

@section('topimage')
    @include('layouts/partials/_topImage', ['image' =>  'publication.jpg', 'titre' => 'Publications'])
@stop


@section('activite')

    <!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="main-block style-2 clearfix">
        <div class="container">
            <div class="row" style="padding: 20px 0px 75px;">
                <div class="title-head">
                    <div class="title-head-inner">
                        <h1 class="no-wrap justify bo-b" style="border-color: #cc0055; font-weight: 100">
                            Publications</h1>
                    </div>
                    <div class="page-summary">
                        <p class="justify" style="padding-left: 150px; padding-right: 150px;">
                            L'approche genre consiste à identifier et analyser les inégalités entre hommes et femmes et
                            à prendre des mesures concrètes pour les corriger. <br>
                            <span class="marge"></span><span class="marge"></span>Elle repose donc sur 2 pilliers:
                            ANALYSE et CORRECTION.
                        </p>
                    </div>
                </div>
            </div>
            <div class="costomers-wrapper">
                <div class="row">
                    {{--<div class="col-md-9">--}}
                    <div class="costomers-block col-xs-12 col-sm-6 col-md-4">
                        <div class="costomers-entry">
                            <img class="customres-logo" src="{{asset('assets/img/msas/ppt.png')}}" alt="">
                            <div class="cutomers-title">15 Jan 2017</div>
                            <div class="cuctomres-text">
                                <a class="news-title" href="{{ url('docs/froutegenre.pptx') }}" target="_blank">
                                    Feuille de route de la Cellule Genre du Ministère de la Santé et de l'Action sociale
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="costomers-block col-xs-12 col-sm-6 col-md-4">
                        <div class="costomers-entry">
                            <img class="customres-logo" src="{{asset('assets/img/msas/word.png')}}" alt="">
                            <div class="cutomers-title">30 Fev 2017</div>
                            <div class="cuctomres-text">
                                <a class="news-title" href="{{ url('docs/froutegenre.docx') }}" target="_blank">
                                    Arrêté portant création et fixant les règles d'organisation et fonctionnement de la
                                    Cellule Genre du Ministère de la Santé et de l'Action sociale
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="costomers-block col-xs-12 col-sm-6 col-md-4">
                        <div class="costomers-entry">
                            <img class="customres-logo" src="{{asset('assets/img/msas/pdf.jpg')}}" alt="">
                            <div class="cutomers-title">20 Mai 2017</div>
                            <div class="cuctomres-text">
                                <a class="news-title" href="{{ url('docs/depliantgenre.pdf') }}"
                                   target="_blank">Ministère de la Santé et de l’Action sociale.
                                    Qu’est-ce que
                                    c’est le genre ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="costomers-block col-xs-12 col-sm-6 col-md-4">
                        <div class="costomers-entry">
                            <img class="customres-logo" src="{{asset('assets/img/msas/pdf.jpg')}}" alt="">
                            <div class="cutomers-title">20 Oct 2017</div>
                            <div class="cuctomres-text">
                                <a class="news-title" href="{{ url('docs/pmosneeg.pdf') }}" target="_blank">Plan
                                    de
                                    mise en oeuvre de la stratégie nationale pour l'équité et l'égalité de
                                    genre au
                                    Sénégal</a>
                            </div>
                        </div>
                    </div>
                    <div class="costomers-block col-xs-12 col-sm-6 col-md-4">
                        <div class="costomers-entry">
                            <img class="customres-logo" src="{{asset('assets/img/msas/pdf.jpg')}}" alt="">
                            <div class="cutomers-title">31 Oct 2017</div>
                            <div class="cuctomres-text">
                                <a class="news-title" href="{{ url('docs/sneegenre.pdf') }}"
                                   target="_blank">Stratégie
                                    Nationale pour l'Equité et l'Egalité de Genre</a>
                            </div>
                        </div>
                    </div>
                    <div class="costomers-block col-xs-12 col-sm-6 col-md-4">
                        <div class="costomers-entry">
                            <img class="customres-logo" src="{{asset('assets/img/msas/pdf.jpg')}}" alt="">
                            <div class="cutomers-title">02 Jan 2017</div>
                            <div class="cuctomres-text">
                                <a class="news-title" href="{{ url('docs/msassrd.pdf') }}" target="_blank">Institutionnalisation
                                    du genre du Ministère de la santé et de l’Action (MSAS)</a>
                            </div>
                        </div>
                    </div>
                    <div class="costomers-block col-xs-12 col-sm-6 col-md-4">
                        <div class="costomers-entry">
                            <img class="customres-logo" src="{{asset('assets/img/msas/word.png')}}" alt="">
                            <div class="cutomers-title">02 Jan 2017</div>
                            <div class="cuctomres-text">
                                <a class="news-title" href="{{ url('docs/rapforgenre.docx') }}"
                                   target="_blank">Rapport
                                    du renforcement des capacités en genre des membres de la Cellule Genre
                                    du
                                    MSAS.</a>
                            </div>
                        </div>
                    </div>
                    {{--</div>--}}
                    {{--<div class="col-md-3"></div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- TEMPLATE PREVIEW - end
        ======================================================================== -->
    <div class="page-buffer"></div>

@stop @section('footer')
    @include('layouts/partials/_footer')
@stop
