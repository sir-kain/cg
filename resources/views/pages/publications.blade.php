@extends('layouts/app', ['title' => 'Publications |'])

@section('header')
@include('layouts/partials/_header')
@stop
<style>
    .topbar {
        background-color: #f4f4f7;
        padding: 0;
    }

    .topmenu span i {
        margin-right: 3px;
    }

    .topmenu a,
    .topmenu span {
        font-size: 13px;
        padding: 0;
        margin: 0;
        color: #555;
    }

    .topmenu {
        margin-top: 9px;
    }

    .topmenu span {
        margin-right: 10px;
    }

    .social-icons li,
    .social-icons ul {
        padding: 0 !important;
        margin: 0 !important;
    }

    .list-inline > li {
        padding: 0 !important;
    }

    .social-icons li {
        margin-left: -5px !important;
    }

    .social-icons li {
        font-size: 14px;
        width: 35px;
        height: 40px;
        line-height: 40px;
        text-align: center;
    }

    .social-icons li a {
        color: #555;
    }

    .social-icons li:hover a,
    .social-icons li:focus a {
        color: #ffffff !important;
    }

    .social-icons li a i {
        margin-top: 10px;
    }

    .list-inline > li {
        padding: 0 !important;
    }

    li.facebook:hover {
        background-color: #3B5998;
    }

    li.twitter:hover {
        background-color: #00B6F1;
    }

    li.pinterest:hover {
        background-color: #cb2027;
    }

    li.linkedin:hover {
        background-color: #007bb5;
    }

    li.google:hover {
        background-color: #DA5333;
    }

    li.skype:hover {
        background-color: #00AFF0;
    }

    li.youtube:hover {
        background-color: #E22D26;
    }

    li.vimeo:hover {
        background-color: #1AB7EA;
    }

    .background-color .navbar-brand2,
    .background-color .pager h4,
    .logo-wrapper .text-center,
    .logo-wrapper .text-left,
    .logo-wrapper .text-right,
    .topbar .text-left,
    .topbar .text-right {
        text-align: center !important;
    }

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    /*----------------------------------------*/
    .logo-wrapper {
        padding: 20px 0;
        background-color: #ffffff;
    }

    .site-logo {
        margin-bottom: 20px;
    }

    .navbar-brand2 {
        font-size: 32px;
        color: #222222 !important;
        padding: 0;
        float: none;
        display: block;
        margin: 6px 0 0;
        line-height: 1;
        text-transform: capitalize;
        height: auto;
        text-decoration: none !important;
        font-weight: 300;
    }

    .navbar-brand2 small {
        display: block;
        padding: 5px 0 0;
        font-size: 12px;
    }

    .navbar-brand2 span {
        font-weight: bold;
        color: #3ca1db;
    }

    .navbar-brand2 img {
        width: 100%;
    }
</style>
<div class="">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="topmenu">
                        <span class="hidden-xs"><i class="fa fa-lock"></i>
                            <a href="login.html">Customer Login</a></span>
                        <span class="hidden-xs"><i class="fa fa-envelope-o"></i>
                            <a href="mailto:name@yoursite.com">name@yoursite.com</a></span>
                        <span><i class="fa fa-phone-square"></i> 1-900-324-5467</span>
                    </div><!-- end callus -->
                </div>

                <div class="col-md-6 col-sm-12 text-right">
                    <div class="social-icons">
                        <ul class="list-inline">
                            <li class="facebook"><a title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="google"><a title="Google Plus" href="#">
                                    <i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="twitter">
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="linkedin">
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="pinterest"><a title="Pinterest" href="#">
                                    <i class="fa fa-pinterest"></i></a>
                            </li>
                            <li class="skype"><a title="Skype" href="#">
                                    <i class="fa fa-skype"></i></a>
                            </li>
                            <li class="vimeo"><a title="Vimeo" href="#">
                                    <i class="fa fa-vimeo"></i></a>
                            </li>
                            <li class="youtube">
                                <a title="Youtube" href="#">
                                    <i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div><!-- end social icons -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end topbar -->
    </div><!-- end topbar -->
    <div class="logo-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 text-center">
                    <div class="site-logo">
                        <a class="navbar-brand2" href="index.html">Teach<span>me</span>
                            <small>Learning Management System</small>
                        </a>
                    </div>
                </div>
                <!-- end col -->

                {{--<div class="col-md-8 text-right hidden-xs">--}}
                {{--<div class="postpager">--}}
                {{--<ul class="pager row-fluid">--}}
                {{--<li class="col-md-4 col-sm-4 col-xs-12">--}}
                {{--<div class="post">--}}
                {{--<a href="course-single.html">--}}
                {{--<img alt="" src="upload/pager_04.jpg" class="img-responsive alignleft">--}}
                {{--<h4>Learning Web Design & Development</h4>--}}
                {{--<small>View Course</small>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="col-md-4 col-sm-4 col-xs-12">--}}
                {{--<div class="post">--}}
                {{--<a href="course-single.html">--}}
                {{--<img alt="" src="upload/pager_05.jpg" class="img-responsive alignleft">--}}
                {{--<h4>Graphic Design Introduction Course</h4>--}}
                {{--<small>View Course</small>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--<li class="col-md-4 col-sm-4 col-xs-12">--}}
                {{--<div class="post">--}}
                {{--<a href="course-single.html">--}}
                {{--<img alt="" src="upload/pager_06.jpg" class="img-responsive alignleft">--}}
                {{--<h4>Social Media Marketing Strategy</h4>--}}
                {{--<small>View Course</small>--}}
                {{--</a>--}}
                {{--</div>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div><!-- end postpager -->--}}
                {{--</div><!-- end col -->--}}
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end logo-wrapper -->
</div>

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
