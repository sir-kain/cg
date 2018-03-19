@extends('layouts/app', ['title' => 'Médiathèques |'])

@section('header')
    @include('layouts/partials/_header')
    @stop

<!-- TEMPLATE PREVIEW - begin
======================================================================== -->
<style>
    .main {
        position: relative;
    }
</style>

<div class="main">

    <!-- SLIDER PREVIEW - begin -->
    <style>
        .slider-preview {
            z-index: -1;
        }

        .slider-preview:after {
            content: '';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: transparent url(ruby/templates/imgs/overlay-boken.png) center center;
            z-index: 99999;
        }

        .slider-preview .rt01control {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

    <div style="height: 450px;" class="slider-preview rt01 rt01timer-lineBottom"
         data-tabs='{
                "optionsPlus"   : "slider",
                "fx"            : "randomMath",
                "speed"         : 2000,
                "width"         : 940,
                "isSwipe"       : false,

                "imagePosition" : "fill",
                "isPag"         : false,
                "isFullscreen"  : true,
                "offsetBy"      : ".header",

                "isSlideshow"   : true,
                "slideshow"     : { "delay": 4000, "timer": "line", "isPlayPause": false }
            }'>

        <a class="rt01imgback" href="{{asset('assets/img/msas/media.jpg')}}">Média</a>
        <a class="rt01imgback" href="{{asset('assets/img/msas/mainslider/publication.jpg')}}">season 1</a>
    </div>
    <!-- SLIDER PREVIEW - end -->


    <!-- CONTENT - begin -->
    <style>
        .main-content {
            position: absolute;
            left: 50%;
            top: 50%;
            padding: 30px;
            background-color: hsla(0, 0%, 100%, .85);
            border-radius: 4px;
            box-shadow: 0 0 2px hsla(0, 0%, 0%, .25);
            text-align: center;

            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .ie8 .content-inner {
            position: relative;
            left: -50%;
            margin-top: -50px;
            padding: 30px;
            background-color: #fff;
        }

        .main-content h1 {
            margin-bottom: 0;
        }
    </style>

    <div class="main-content">
        <div class="content-inner">
            <!-- TITLE HEADING -->
            <h1>MEDIATHEQUES</h1>
        </div>
    </div>
</div>
<!-- TEMPLATE PREVIEW - end
======================================================================== -->

@section('activite')
@stop
@section('footer')
    @include('layouts/partials/_footer')
@stop
