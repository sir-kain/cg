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

<div class="main-slider slide-img-only clearfix">
    <div class="img-wrapper">
        <img class="center-image" src="{{asset('assets/img/msas/media.jpg')}}"/>
    </div>
</div>



@section('activite')

    <!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="wrapper">

        <!-- TITLE HEADING - begin -->
        <div class="container">
            <div class="title-head">
                <div class="title-head-inner">
                    <h1>FULLWIDTH LAYOUT</h1>
                </div>
            </div>
        </div>
        <!-- TITLE HEADING - end -->


        <!-- TABS PREVIEW - begin -->
        <style>
            .tabs-preview > .rt01tabs.rt01pag {
                margin-bottom: 0;
            }

            .tabs-preview > .rt01viewport {
                padding-top: 50px;
                padding-bottom: 20px;
                background: #f9f9f9 url({{asset('ruby/libs/imgs/pattern_wavegrid.png')}}) repeat;
            }

            @media only screen and (max-width: 479px) {
                .tabs-preview > .rt01viewport {
                    padding-top: 30px;
                    padding-bottom: 0;
                }
            }
        </style>

        <div class="rt01 rt01underline rt01size-l"
             data-tabs='{
                "fx"    : "line",
                "speed" : 800,
                "pag"   : { "align": "center" }
            }'>

            <div>
                <h2 class="rt01pagitem">Photos</h2>


            </div>
            <!-- Dummy Content - end -->
        </div>

        <div>
            <h2 class="rt01pagitem">Vidéos</h2>
            <div class="row font-blokk">
                <div class="row">
                    <div class="col3"></div>
                    <div class="col9">
                        <img class="img-responsive"
                             src="{{asset('ruby/templates/imgs/animal-focus-landscape2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col3"></div>
                <div class="col3 col-xs-6">
                    <div class="card-outline">
                        <a class="rt01img card-thumbnail"
                           href="{{asset('ruby/templates/imgs/animal-focus-thumbnail1.jpg')}}">Animal 1</a>
                        <div class="card-content">Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas.
                        </div>
                    </div>
                </div>

                <div class="col3 col-xs-6">
                    <div class="card-outline">
                        <a class="rt01img card-thumbnail"
                           href="{{asset('ruby/templates/imgs/animal-focus-thumbnail2.jpg')}}">Animal 2</a>
                        <div class="card-content">Lorem ipsum dolor sit amet, consectetur adipisi elit. Deleniti,
                            pariatur aliquam molestias aspernatur. Facere, quibusdam.
                        </div>
                    </div>
                </div>

                <div class="col3 col-xs-6">
                    <div class="card-outline">
                        <a class="rt01img card-thumbnail"
                           href="{{asset('ruby/templates/imgs/animal-focus-thumbnail3.jpg')}}">Animal 3</a>
                        <div class="card-content">Aenean fermentum, elit eget tincidunt condimentum, eros ipsum
                            rutrum orci, sagittis tempus lacus enim donec consectetur io.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- TABS PREVIEW - end -->

    </div>
    <!-- TEMPLATE PREVIEW - end
    ======================================================================== -->




    <div class="page-buffer"></div>

@stop @section('footer')
    @include('layouts/partials/_footer')
@stop
