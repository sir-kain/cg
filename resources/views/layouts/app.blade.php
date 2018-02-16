<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/idangerous.swiper.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
    {{--  mon style  --}}
    <link href="{{asset('assets/css/stylesAdd.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{asset('assets/img/Logo.png')}}"/>
    <!-- Main css of rubytabs, including styles, skins -->
    <link rel="stylesheet" href="{{asset('ruby/libs/css/ruby00.css')}}">
    <link rel="stylesheet" href="{{asset('ruby/libs/css/ruby01.css')}}">
    <link rel="stylesheet" href="{{asset('ruby/rubytabs.css')}}">
    {{--
   <link rel="stylesheet" href="{{asset('ruby/libs/css/styles.custom.css')}}"> --}}
    <script src="{{asset('ruby/libs/scripts/modernizr.js')}}"></script>

    <title> {{$title or ''}} Cellule Genre</title>

    <!-- Style embedded -->
    <style>

        /* GENERAL STYLE */
        body {
            font-size: 16px;
            line-height: 26px;
            overflow-y: scroll;
        }

        a {
            cursor: pointer;
        }

        p a {
            text-decoration: none;
        }

        {{--  .header {
            padding-top: 10px; padding-bottom: 10px;
        }  --}}
        .part-content a,
        .part-content a:visited {
            color: #cc0055;
        }

        .part-content a:hover,
        .part-content a:focus {
            text-decoration: underline;
        }

        .pa-tb-30 {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .pa-tb-50 {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .ma-l-20 {
            margin-left: 20px;
        }

        .ma-b-150 {
            margin-bottom: 150px !important;
        }

        .ma-b-200 {
            margin-bottom: 200px !important;
        }

        .subtitle {
            display: inline-block;
            padding: 5px 15px;
            font-size: 1em;
            border-left: 4px solid #999;
            background-color: #eee;
            color: #181818;
        }

        ul.expanded > li {
            margin-bottom: 30px;
        }

        .pattern-light {
            background-color: #e5e5e5;
        }

        .text-mini {
            font-size: .8em;
        }

        /**
         * GRID SYSTEM
         */
        @media only screen and (min-width: 1200px) {
            .container {
                /*width: 1156px;*/
                width: auto;
                padding-left: 50px;
                padding-right: 50px;
            }

            .part-menu {
                width: 250px;
            }

            .part-content, .footer .col9 {
                width: -webkit-calc(100% - 250px);
                width: -moz-calc(100% - 250px);
                width: calc(100% - 250px);
            }

            .footer .col9 {
                margin-left: 250px;
            }
        }

        /* TABLES */
        .tb-options tbody td:nth-child(1),
        .tb-options tbody td:nth-child(2),
        .tb-options tbody td:nth-child(3) {
            font-size: 16px;
            font-family: "Source Code Pro", monospace, serif;
        }

        .tb-options tbody td:nth-child(1) {
            color: #000;
        }

        .tb-options tbody td:nth-child(3) {
            width: 65%;
            color: #666;
            font-size: 14px;
            line-height: 24px;
        }

        .tb-options a {
            border-bottom: 1px dashed #ccc;
            color: #777;
        }

        .tb-options a.label {
            border-bottom-width: 0;
        }

        @media only screen and (min-width: 1px) and (max-width: 767px) {
            .tb-options {
                font-size: .85em;
            }

            .tb-options caption, .tb-options td {
                padding-left: 0;
            }
        }

        /* FRAME IMAGE */
        .frame {
            overflow: hidden;
            margin-bottom: 20px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .frame-bg {
            border: none;
            background-color: #f5f5f5;
        }

        .frame > img {
            display: inline-block;
            border-radius: 4px;
            zoom: 1;
        }

        .frame-img1 {
            margin-right: 50px;
        }

        @media only screen and (min-width: 768px) and (max-width: 959px) {
            .frame-img1 {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }

        @media only screen and (min-width: 1px) and (max-width: 767px) {
            .frame-img1 {
                margin-right: 0px;
            }
        }

        /* SCREENSHOOT IMAGE */
        .screenshoot {
            display: inline-block;
            margin-right: 30px;
            margin-bottom: 30px;
        }

        .screenshoot > img {
            display: block;
            border-radius: 4px 4px 0 0;
        }

        .screenshoot > .caption {
            display: block;
            padding: 8px 10px;
            background-color: #e5e5e5;
            border-radius: 0 0 4px 4px;
            text-align: center;
        }

        .screenshoot .caption-num {
            display: inline-block;
            padding: 1px 10px;
            margin-right: 8px;
            border: 1px solid #333;
            border-radius: 20px;
        }

        .screenshoot.border > img {
            border: 1px solid #e5e5e5;
            border-bottom: 0;
        }

        /* PRETTYPRINT */
        .prettyprint, .prettyall {
            font-size: 15px;
            line-height: 24px;
        }
    </style>
</head>


<body data-color="blue">
<!-- LOADER -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="bigSqr">
                <div class="square first"></div>
                <div class="square second"></div>
                <div class="square third"></div>
                <div class="square fourth"></div>
            </div>
        </div>
    </div>
    <div id="loading-text">Loading</div>
</div>
<!-- HEADER -->
@yield('header')

<div id="content-wrapper">
    <!-- MAIN-SLIDER -->
@yield('mainSlider')
<!-- COUNTERS -->
@yield('statistiques')

{{--  Presentation  --}}
@yield('presentation')

@yield('activite')
@yield('admin')

<!-- ABOUT -->

@yield('activites')

<!-- ABOUT -->
@yield('galeries')

<!-- SERVICE -->
{{--
<div id="services" class="main-block clearfix">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="block-header">
          <h4 class="block-category">En route vers l'émergence</h4>
          <h2 class="block-title">Focus</h2>
        </div>
      </div>
    </div>
    <div class="service-wrapper">
      <div class="row">
        <div class="service-block col-xs-12 col-sm-6 col-md-4">
          <a class="service-entry" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125"
              style="enable-background:new 0 0 100 100;" xml:space="preserve">
              <path class="fillwhite" d="M27.2,40.8H15.1c-1.3,0-2.3-1.1-2.3-2.3V27.9c0-1.3,1.1-2.3,2.3-2.3h12.1c1.3,0,2.3,1.1,2.3,2.3v10.5  c0.1,0.6-0.2,1.2-0.6,1.7C28.5,40.6,27.8,40.8,27.2,40.8z M15.1,26.6c-0.7,0-1.4,0.5-1.4,1.4v10.6c0,0.7,0.5,1.4,1.4,1.4h12.1  c0.4,0,0.8-0.2,1-0.5c0.2-0.3,0.4-0.6,0.3-1l0-10.5c0-0.7-0.5-1.4-1.4-1.4H15.1z"
              />
              <path class="fillwhite" d="M52.9,30.2h-20c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h20c0.3,0,0.5,0.2,0.5,0.5S53.1,30.2,52.9,30.2z"
              />
              <path class="fillwhite" d="M52.9,37.7h-20c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h20c0.3,0,0.5,0.2,0.5,0.5S53.1,37.7,52.9,37.7z"
              />
              <path class="fillwhite" d="M49.8,45.3H13.2c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h36.6c0.3,0,0.5,0.2,0.5,0.5S50.1,45.3,49.8,45.3z"
              />
              <path class="fillwhite" d="M43.3,53H13.2c-0.3,0-0.5-0.2-0.5-0.5c0-0.3,0.2-0.5,0.5-0.5h30.1c0.3,0,0.5,0.2,0.5,0.5C43.8,52.7,43.6,53,43.3,53z"
              />
              <path class="fillwhite" d="M39.7,60.5H13.2c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h26.5c0.3,0,0.5,0.2,0.5,0.5S39.9,60.5,39.7,60.5z"
              />
              <path class="fillwhite" d="M54.8,49.4h-8.9c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h8.9c0.3,0,0.5,0.2,0.5,0.5S55.1,49.4,54.8,49.4z"
              />
              <path class="fillwhite" d="M54.8,57.1H41.4c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h13.4c0.3,0,0.5,0.2,0.5,0.5S55.1,57.1,54.8,57.1z"
              />
              <path class="fillwhite" d="M54.8,64.7H39.7c-0.3,0-0.5-0.2-0.5-0.5c0-0.3,0.2-0.5,0.5-0.5h15.1c0.3,0,0.5,0.2,0.5,0.5C55.3,64.5,55.1,64.7,54.8,64.7z"
              />
              <path class="fillwhite" d="M43.6,82.3H9.1c-3.9,0-7-3.2-7-7V10.8c0-3.9,3.2-7,7-7h36c0.3,0,0.5,0.2,0.5,0.5V22l17.8-0.1c0.2,0,0.3,0.1,0.3,0.1  c0.1,0.1,0.1,0.2,0.1,0.3v16.2c0,0.3-0.2,0.5-0.5,0.5s-0.5-0.2-0.5-0.5V22.9L45.1,23c0,0,0,0,0,0c-0.1,0-0.3-0.1-0.3-0.1  c-0.1-0.1-0.1-0.2-0.1-0.3V4.8H9.1C5.7,4.8,3,7.5,3,10.8v64.4c0,3.3,2.7,6.1,6.1,6.1h34.5c0.3,0,0.5,0.2,0.5,0.5  C44.1,82.1,43.9,82.3,43.6,82.3z"
              />
              <path class="fillwhite" d="M63.4,23c-0.1,0-0.2,0-0.3-0.1L44.8,4.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0l18.3,18.2c0.2,0.2,0.2,0.5,0,0.7  C63.7,22.9,63.6,23,63.4,23z"
              />
              <g>
                <path class="fillwhite" d="M59.6,85.1H45.7c-0.3,0-0.5-0.2-0.5-0.5s0.2-0.5,0.5-0.5h13.9c3.3,0,6.1-2.7,6.1-6.1V38.9c0-0.3,0.2-0.5,0.5-0.5   s0.5,0.2,0.5,0.5v39.2C66.7,82,63.5,85.1,59.6,85.1z"
                />
              </g>
              <g>
                <path class="fillwhite" d="M98.5,98c-0.1,0-0.3,0-0.3-0.1l-10-10c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0l10,10c0.2,0.2,0.2,0.5,0,0.7   C98.8,98,98.6,98,98.5,98z"
                />
              </g>
              <g>
                <path class="fillwhite" d="M67.8,95.8C51.9,95.8,39,82.8,39,66.9s12.9-28.8,28.8-28.8c15.9,0,28.8,12.9,28.8,28.8S83.7,95.8,67.8,95.8z M67.8,39.1   C52.5,39.1,40,51.6,40,66.9s12.5,27.9,27.9,27.9s27.9-12.5,27.9-27.9S83.2,39.1,67.8,39.1z"
                />
              </g>
              <g>
                <path class="fillwhite" d="M76.9,88.7c-0.2,0-0.4-0.1-0.4-0.3c-0.1-0.2,0-0.5,0.3-0.6c8.4-3.5,13.8-11.7,13.8-20.9c0-5-1.6-9.7-4.5-13.6   c-0.2-0.2-0.1-0.5,0.1-0.7c0.2-0.2,0.5-0.1,0.7,0.1c3.1,4.1,4.7,9,4.7,14.2c0,9.5-5.6,18.1-14.4,21.8C77,88.7,77,88.7,76.9,88.7z"
                />
              </g>
            </svg>
            <h4 class="service-title">Etude de cas</h4>
            <div class="service-text"> Découvrez nos modules de formation.</div>
          </a>
        </div>
        <div class="service-block col-xs-12 col-sm-6 col-md-4">
          <a class="service-entry" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125"
              enable-background="new 0 0 100 100" xml:space="preserve">
              <g>
                <path class="fillwhite" fill="#000000" d="M78.92,7.371c-0.381-0.38-0.9-0.6-1.439-0.6h-7.281c0.041-1.13,0.061-2.28,0.061-3.49   c0-0.49-0.4-0.9-0.9-0.9H30.64c-0.5,0-0.9,0.41-0.9,0.9c0,1.22,0.03,2.39,0.07,3.53h-7.32c-0.53,0-1.05,0.21-1.42,0.59   c-0.38,0.37-0.59,0.89-0.59,1.42c0,0.31,0.07,7.57,5.96,12.82c2.17,1.94,4.73,3.47,6.9,4.59c3.19,8.233,8.92,12.608,13.815,17.61   c0.695,0.71,0.862,0.922,1.335,1.41c-2.002,2.131-3.668,8.13-10.71,14.43h-1.86c-0.83,0-1.5,0.67-1.5,1.5   c0,0.38,0.14,0.72,0.37,0.98c0.2,0.229,0.46,0.399,0.77,0.47c0.12,0.04,0.24,0.05,0.36,0.05h28.16c0.119,0,0.24-0.01,0.359-0.05   c0.311-0.07,0.57-0.24,0.77-0.47c0.23-0.261,0.371-0.601,0.371-0.98c0-0.83-0.67-1.5-1.5-1.5h-1.85   c-6.801-6.24-8.551-12.33-10.611-14.43c0.51-0.47,1.031-0.95,1.541-1.41c5.25-4.76,10.33-9.36,13.561-17.62   c2.148-1.11,4.68-2.64,6.828-4.55c5.9-5.26,5.971-12.54,5.971-12.85C79.52,8.281,79.311,7.761,78.92,7.371z M29.11,18.641   c-2.84-2.54-3.93-5.76-4.35-7.81h5.27c0.3,3.64,0.81,6.84,1.5,9.67C30.69,19.931,29.87,19.311,29.11,18.641z M70.83,18.611   c-0.721,0.64-1.51,1.24-2.301,1.78c0.66-2.79,1.15-5.95,1.441-9.53h5.189C74.74,12.911,73.65,16.101,70.83,18.611z"
                />
                <rect class="fillwhite" x="31.52" y="86.243" fill="#000000" width="36.96" height="3.521" />
                <rect class="fillwhite" x="28" y="91.459" fill="#000000" width="44" height="6.16" />
                <path class="fillwhite" fill="#000000" d="M65.84,84.311c0.299,0,0.539-0.241,0.539-0.539V65.279c0-0.298-0.24-0.539-0.539-0.539H34.16   c-0.298,0-0.539,0.241-0.539,0.539v18.492c0,0.298,0.241,0.539,0.539,0.539H65.84z M43.564,71.887h4.798l1.482-4.563   c0.044-0.135,0.269-0.135,0.312,0l1.482,4.563h4.797c0.072,0,0.135,0.046,0.156,0.113s-0.002,0.142-0.059,0.184l-3.881,2.82   l1.482,4.562c0.021,0.067-0.002,0.142-0.061,0.184c-0.029,0.021-0.062,0.031-0.096,0.031c-0.035,0-0.068-0.011-0.098-0.031   L50,76.931l-3.881,2.819c-0.058,0.041-0.136,0.041-0.193,0c-0.057-0.042-0.082-0.116-0.06-0.184l1.483-4.562l-3.882-2.82   c-0.057-0.042-0.082-0.116-0.06-0.184S43.493,71.887,43.564,71.887z"
                />
              </g>
            </svg>
            <h4 class="service-title">Top 5 Matrice Emergence</h4>
            <div class="service-text">Accédez aux analyses de la matrice.</div>
          </a>
        </div>
        <div class="service-block col-xs-12 col-sm-6 col-md-4">
          <a class="service-entry" href="#">
            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
              xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
              xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 125">
              <g transform="translate(0,-952.36218)">
                <path class="fillwhite" style="font-size:medium;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;text-indent:0;text-align:start;text-decoration:none;line-height:normal;letter-spacing:normal;word-spacing:normal;text-transform:none;direction:ltr;block-progression:tb;writing-mode:lr-tb;text-anchor:start;baseline-shift:baseline;opacity:1;color:#000000;fill:#000000;fill-opacity:1;stroke:none;stroke-width:4;marker:none;visibility:visible;display:inline;overflow:visible;enable-background:accumulate;font-family:Sans;-inkscape-font-specification:Sans"
                  d="M 35.03125,11 C 30.060712,11 26,15.06072 26,20.03125 L 26,23 15.03125,23 C 10.060716,23 6,27.06072 6,32.03125 l 0,29.9375 C 6,66.93925 10.060716,71 15.03125,71 L 16,71 16,87 c 0.0064,0.780799 0.515115,1.558177 1.236852,1.856142 C 17.478461,88.955892 17.739176,89 17.999991,89 c 0.524034,0 1.036836,-0.228593 1.406259,-0.59375 L 36.8125,71 64.96875,71 c 2.787791,0 5.30927,-1.251181 6.96875,-3.25 l 8.65625,8.65625 c 0.555324,0.54891 1.447661,0.724257 2.169398,0.426292 C 83.484885,76.534577 83.993639,75.780799 84,75 l 0,-16 0.96875,0 C 89.939284,59 94,54.93925 94,49.96875 l 0,-29.9375 C 94,15.06072 89.939288,11 84.96875,11 z m 0,4 49.9375,0 C 87.798412,15 90,17.2016 90,20.03125 l 0,29.9375 C 90,52.79835 87.798416,55 84.96875,55 L 82,55 c -1.047169,1.05e-4 -1.999895,0.952831 -2,2 L 80,70.15625 73.78125,63.9375 C 73.923598,63.302967 74,62.644884 74,61.96875 l 0,-29.9375 C 74,27.06072 69.939288,23 64.96875,23 L 30,23 30,20.03125 C 30,17.20158 32.201588,15 35.03125,15 z m -20,12 49.9375,0 C 67.798412,27 70,29.20158 70,32.03125 l 0,29.9375 C 70,64.79835 67.798416,67 64.96875,67 L 36,67 c -0.517756,-0.004 -1.034102,0.202508 -1.40625,0.5625 L 20,82.15625 20,69 c -1.05e-4,-1.047169 -0.952831,-1.999895 -2,-2 l -2.96875,0 C 12.201584,67 10,64.79835 10,61.96875 l 0,-29.9375 C 10,29.20158 12.201584,27 15.03125,27 z M 26,43 c -2.2091,0 -4,1.7909 -4,4 0,2.2092 1.7909,4 4,4 2.2091,0 4,-1.7908 4,-4 0,-2.2091 -1.7909,-4 -4,-4 z m 14,0 c -2.2091,0 -4,1.7909 -4,4 0,2.20922 1.7909,4 4,4 2.2091,0 4,-1.79078 4,-4 0,-2.2091 -1.7909,-4 -4,-4 z m 14,0 c -2.2091,0 -4,1.7909 -4,4 0,2.2092 1.7909,4 4,4 2.2092,0 4,-1.7908 4,-4 0,-2.2091 -1.7908,-4 -4,-4 z"
                  transform="translate(0,952.36218)" />
              </g>
            </svg>
            <h4 class="service-title">Forum</h4>
            <div class="service-text">Echangez avec des acteurs clés de l’Emergence.</div>
          </a>
        </div>
      </div>
    </div>
    <!-- <div class="text-center">
                <a class="c-btn b-50 blue hv-blue-t" href="#">see all services</a>
            </div> -->
  </div>
</div> --}}

<!-- SLIDER WITH THUMBS PUBLICATIONS -->
@yield('actualites')

<!-- MESSAGE LINE -->
    <div id="sing" class="message-line">
        <div class="container">
            <div class="message-entry clearfix">
                <h2 class="message-title">Prêt à nous rejoindre?</h2>
                <div class="message-text">Rejoignez notre communauté d’acteurs engagés dans la transformation du
                    continent.
                </div>
            </div>
            <a class="register-link c-btn b-50 black hv-blue-o" href="#">S'inscrire</a>
        </div>
    </div>
    <!-- TESTIMONALS -->
@yield('documentations')
<!-- NEWS -->
@yield('pointsFocaux')
<!-- SPONSORS -->
    @yield('partenaires')
    @yield('content')
    {{--
    <div id="contact" class="contact-block bg-dark">
      <div class="map-block slogan-block" data-style="style-1">
        <div class="contact-title">
          Cellule Genre,<br /> l'Emergence Africaine est en marche
        </div>
      </div>
      <div class="addresses-block">
        <a data-lat="40.687971" data-lng="-73.827457" data-string="1. Here is some address or email or phone or something else..."></a>
        <a data-lat="40.725604" data-lng="-73.445888" data-string="2. Here is some address or email or phone or something else..."></a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <div class="contact-entry">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="s-contact">
                    <div class="contact-catagory">Nous joindre</div>
                    <div class="contact-title">contact</div>
                    <div class="contact-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>
                    <div class="contact-row">
                      <p><i class="fa fa-map-marker"></i> 44 Place de l'independance</p>
                      <p><i class="fa fa-envelope-o"></i><a href="mailto:emergenceinsight@pnud.com">emergenceinsight@pnud.com!!</a></p>
                      <p><i class="fa fa-phone"></i><a href="tal:61402186411q">+221 33 555 1234</a>, <a href="tal:6166650">+221 33 555 4567</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="s-contact">
                    <div class="contact-catagory style-2">Sur Twitter</div>
                    <div class="contact-title">Le fil d'actu</div>
                    <div class="twitter-row">
                      <p><i class="fa fa-twitter"></i> <span>@faq</span> vestibulum accumsan est malesuada sem auctor, eu aliquet
                        nisi
                      </p>
                      <p><i class="fa fa-twitter"></i> <span>@faq</span> suspendisse id pharetra lacus, et hendrerit mi. Praesent
                        at tortor.</p>
                      <p><i class="fa fa-twitter"></i> <span>@faq</span> donec volutpat enim at interdum pretium. Vestibulum
                        ante ipsum
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
</div>
<!-- FOOTER -->
{{-- @include('layouts/partials/_footer') --}}
@yield('footer')
<div class="register-popup custom-popup">
    <form action="mail.php" class="js-contact-form" method="POST">
        <div class="popup-close"><i class="fa fa-times"></i></div>
        <h3 class="popup-title  form-element">Inscrivez-vous</h3>
        <div class="c-form-group form-element">
            <div class="c-form-label">Nom</div>
            <input type="text" name="fields[first_name]">
        </div>
        <div class="c-form-group form-element">
            <div class="c-form-label">Prenom</div>
            <input type="text" name="fields[last_name]">
        </div>
        <div class="c-form-group form-element">
            <div class="c-form-label">Email</div>
            <input type="email" name="fields[email]">
        </div>
        <div class="c-form-group form-element">
            <div class="c-form-label">Telephone</div>
            <input type="tel" name="fields[phone]">
        </div>
        <div class="c-form-group form-element">
            <div class="message-result">
                <div class="ajax-result">
                    <div class="success"></div>
                    <div class="error"></div>
                </div>
                <div class="ajax-loader"></div>
            </div>
        </div>
        <input class="c-btn b-50 black hv-blue-o  form-element" type="submit" value="S'inscrire">
    </form>
</div>
<script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/js/megamenu.js')}}"></script>
<script src="{{asset('assets/js/animatedModal.min.js')}}"></script>
<script src="{{asset('assets/js/idangerous.swiper.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/imagelightbox.min.js')}}"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="{{asset('assets/js/global.js')}}"></script>
<script src="{{asset('assets/js/anchors.navigation.js')}}"></script>
<!-- Main script of rubytabs -->
<script src="{{asset('ruby/rubytabs.js')}}"></script>
<!-- Script - begin
  ======================================================================== -->
{{--
<script src="../libs/scripts/jquery-last.min.js"></script> --}}
<script src="{{asset('ruby/libs/scripts/ruby01-old.js')}}"></script>
<script src="{{asset('ruby/libs/scripts/ruby01.js')}}"></script>
<script src="{{asset('ruby/rubyanimate.js')}}"></script>
<!-- Ruby Animate -->
<script src="{{asset('ruby/rubytabs.js')}}"></script>
<!-- RubyTabs Plugins -->
<!-- Script - end
  ======================================================================== -->


<!-- CSS effects (CSS One - Two - Four effects) in rubytabs -->
<link rel="stylesheet" href="{{asset('ruby/rubyanimate.js')}}">
<script src="{{asset('assets/js/main.js')}}"></script>
@include('flashy::message')
</body>

</html>