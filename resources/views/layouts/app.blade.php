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
    <link rel="stylesheet" href="{{asset('ruby/libs/css/styles.custom.css')}}">
    <link rel="stylesheet" href="{{asset('ruby/rubytabs.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">

    <script src="{{asset('ruby/libs/scripts/modernizr.js')}}"></script>


    <title> {{$title or ''}} Cellule Genre</title>

    <!-- Style embedded -->
    <style>

        /* IMAGE RESPONSIVE */
        .img-responsive {
            display: block;
            width: 100%;
            height: auto;
            margin-bottom: 30px;
            border-radius: 4px;
        }

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
                <div class="square fourth" style="background-color: #f43ff4"></div>
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

<!-- TESTIMONALS -->
@yield('documentations')

<!-- ABOUT -->
@yield('galeries')

<!-- SLIDER WITH THUMBS PUBLICATIONS -->
@yield('actualites')


<!-- NEWS -->
@yield('pointsFocaux')
<!-- SPONSORS -->
@yield('partenaires')
@yield('content')
<!-- MESSAGE LINE -->
    <div id="sing" class="message-line">
        <div class="container">
            <div class="message-entry clearfix">
                <h2 class="message-title">S'inscrire à la newsletter?</h2>
                <div class="message-text">Rejoignez notre communauté d’acteurs engagés dans la transformation du
                    continent.
                </div>
            </div>
            <a class="register-link c-btn b-50 black hv-blue-o" href="#">S'inscrire</a>
        </div>
    </div>
    <div id="contact" class="contact-block bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="contact-entry">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="s-contact">
                                    <div class="contact-catagory">Nous joindre</div>
                                    <div class="contact-title">contact</div>
                                    <div class="contact-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor
                                    </div>
                                    <div class="contact-row">
                                        <p><i class="fa fa-map-marker"></i> 44 Place de l'independance</p>
                                        <p><i class="fa fa-envelope-o"></i><a href="mailto:cellulegenre@sante.gouv.sn">cellulegenre@sante.gouv.sn!!</a>
                                        </p>
                                        <p><i class="fa fa-phone"></i><a href="tal:338694274">+221 33 869 42 74</a>,
                                            <a href="tal:338694274">+221 33 869 42 74</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="s-contact">
                                    <div class="contact-catagory style-2">Actualités</div>
                                    <div class="contact-title">Le fil d'actu</div>
                                    <div class="twitter-row">
                                        <p><i class="fa fa-twitter"></i> <span>@faq</span> vestibulum accumsan est
                                            malesuada sem auctor, eu aliquet
                                            nisi
                                        </p>
                                        <p><i class="fa fa-twitter"></i> <span>@faq</span> suspendisse id pharetra
                                            lacus, et hendrerit mi. Praesent
                                            at tortor.</p>
                                        <p><i class="fa fa-twitter"></i> <span>@faq</span> donec volutpat enim at
                                            interdum pretium. Vestibulum
                                            ante ipsum
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 imagefooter">
                    <img src="{{asset('assets/img/perfstock/people_insights.jpg')}}" alt="" height="350px"
                         width="600px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FOOTER -->
{{-- @include('layouts/partials/_footer') --}}
@yield('footer')
<div class="register-popup custom-popup">
    <form action="" class="js-contact-form" method="POST">
        <div class="popup-close"><i class="fa fa-times"></i></div>
        <h3 class="popup-title  form-element">Inscrivez-vous à la newsletter</h3>
        <div class="c-form-group form-element">
            <div class="c-form-label">Prénom & Nom</div>
            <input type="text" name="fields[first_name]">
        </div>
        <div class="c-form-group form-element">
            <div class="c-form-label">Email</div>
            <input type="email" name="fields[email]">
        </div>
        <input type="hidden" name="_token" id="tokenn" value="{{ csrf_token() }}">
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
{{--<script src="{{asset('ruby/rubytabs.js')}}"></script>--}}
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