@extends('layouts/app', ['title' => 'Activité |'])

@section('header')
@include('layouts/partials/_header')
@stop

@section('mainSlider')
@include('layouts/partials/_mainSlider', ['image' => 'activite1.jpg'])
@stop

@section('statistiques')
@include('layouts/partials/_statistiques')
@stop

@section('activite')

            <!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="wrapper">
    <div class="container">

        <!-- TABS PREVIEW - begin -->
        <div class="rt01 rt01underline rt01size-l"
            data-tabs='{
                "fx"    : "cssOne",
                "speed" : 800,
                "pag"   : { "align": "center" }
            }'>


            {{--  <div>
                <div class="rt01pagitem">OVERVIEW</div>

                <div class="row font-blokk">
                    <div class="col4 col-xs-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis aspernatur repellendus, esse illum suscipit nihil, minima beatae quaerat labore nisi fugit, officiis dignissimos saepe ab facilis qui non quas!</p>
                    </div>

                    <div class="col4 col-xs-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis aspernatur repellendus, esse illum suscipit nihil, minima beatae quaerat labore nisi fugit, officiis dignissimos saepe ab facilis qui non quas!</p>
                        <p>Nam facilis tempore maxime incidunt deserunt, ipsum pariatur, accusamus animi quidem velit tenetur eum nesciunt quos veniam architecto neque impedit! Sed accusamus commodi dignissimos dolorem distinctio, itaque dicta non maiores?</p>
                    </div>

                    <div class="col4 col-xs-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis aspernatur repellendus, esse illum suscipit nihil, minima beatae quaerat labore nisi fugit, officiis dignissimos saepe ab facilis qui non quas!</p>
                        <p>Nam facilis tempore maxime incidunt deserunt, ipsum pariatur, accusamus animi quidem velit tenetur eum nesciunt quos veniam architecto neque impedit! Sed accusamus commodi dignissimos dolorem distinctio, itaque dicta non maiores?</p>
                    </div>
                </div>
            </div>  --}}


            <div>
                <div class="rt01pagitem">Activité</div>


                <!-- Dummy Content - begin -->
                <div class="row font-blokk">
                    <div class="col4">
                        <p class="bo-l-h"><i> {{$theActivity->titre}}</i></p>
                    </div>

                    <div class="col8">
                        <p class="dropcap">{{$theActivity->contenu}}.</p>
                    
                    </div>
                </div>
                <!-- Dummy Content - end -->
            </div>


            {{--  <div>
                <div class="rt01pagitem">SWIPE PREVENT</div>

                <div class="row bg-wrap">
                    <div class="col4">
                        <div class="rt01swipe-prevent area-highlight">
                            <h2 class="color-hl">Area prevent Swipe gestures</h2>
                            <p><i>Insert class "{ns}swipe-prevent" to stop swipe gestures on that element</i></p>
                            <p class="font-blokk"><i>Consectetur adipisicing elit. Vel, sequi, quis, minima, dolor quisqua</i></p>
                            <a class="">Go to &rarr;</a>
                        </div>
                    </div>

                    <div class="col8">
                        <form class="block clearfix">

                            <input type="text" class="large" placeholder="Username">
                            <input type="text" class="large" placeholder="Password">
                            <input type="text" class="large" placeholder="Repeat Password">
                            <input type="text" class="large" placeholder="Email">
                            <textarea name="" cols="30" rows="5" placeholder="Your bio"></textarea>

                            <label class="checkbox text-small muted pull-left" for="terms">
                                <input id="terms" type="checkbox">I have read and I agree the Terms of Use
                            </label>

                            <input class="btn large pull-right no-ma" type="submit" value="Register">
                        </form>
                    </div>
                </div>
            </div>  --}}


            <div>
                <div class="rt01pagitem">Galerie</div>

                <div class="row">
                    <div class="col4">
                        <a class="rt01img card-img" href="{{asset('assets/img/msas/activites/activite1.jpg')}}">Food 1</a>
                    </div>

                    <div class="col4">
                        <a class="rt01img card-img" href="{{asset('assets/img/msas/activites/strategie.jpg')}}">Food 2</a>
                    </div>

                    <div class="col4">
                        <a class="rt01img card-img" href="{{asset('assets/img/msas/activites/activite1.jpg')}}">Food 3</a>
                    </div>

                    <div class="col4">
                        <a class="rt01img card-img" href="{{asset('assets/img/msas/activites/strategie.jpg')}}">Food 4</a>
                    </div>

                    <div class="col4">
                        <a class="rt01img card-img" href="{{asset('assets/img/msas/activites/activite1.jpg')}}">Food 6</a>
                    </div>

                    <div class="col4">
                        <a class="rt01img card-img" href="{{asset('assets/img/msas/activites/strategie.jpg')}}">Food 7</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- TABS PREVIEW - end -->

    </div>
    </div>
    <!-- TEMPLATE PREVIEW - end
    ======================================================================== -->



@stop


@section('activites')
@include('/layouts/partials/_activites')
@stop


@section('footer')
  @include('layouts/partials/_footer') 
@stop
