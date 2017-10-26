@extends('layouts/app', ['title' => 'Admin |'])

{{--  @section('header')
@include('layouts/partials/_header')
@stop

@section('statistiques')
@include('layouts/partials/_statistiques')
@stop  --}}

@section('admin')

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


                {{--  <div>
                    <div class="rt01pagitem">Activité</div>


                    <!-- Dummy Content - begin -->
                    <div class="row font-blokk">
                        <div class="col4">
                            <p class="bo-l-h"><i>Consectetur adipisicing elit. Vel, sequi, quis, minima, dolor quisquam numquam quod in repudiandae officia.</i></p>
                        </div>

                        <div class="col8">
                            <p class="dropcap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, pariatur aliquam molestias aspernatur non. Facere, quibusdam, reiciendis, natus laudantium debitis suscipit consequatur voluptatibus mollitia temporibus quia ratione dignissimos magnam provident.</p>
                            <p>Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero?</p>
                            <p>Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero? Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero?Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero?</p><p>Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero? Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero? Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero?</p><p>Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero? Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero? Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero? Assumenda, repudiandae, iste magni labore culpa eum expedita eligendi odio molestiae temporibus id ab nihil ad sunt mollitia veritatis excepturi. Ullam, odit nesciunt doloribus natus non repudiandae error itaque vero?</p>
                        </div>
                    </div>
                    <!-- Dummy Content - end -->
                </div>  --}}


                <div>
                    <div class="rt01pagitem">
                    @if($activityAmodifier)
                    Modifier une activité
                    @else
                    Ajouter une activité
                    @endif
                    </div>

                    <div class="row bg-wrap">
                        <div class="col4">
                            <div class="rt01swipe-prevent area-highlight">
                                <h2 class="color-hl">Remplissez les données de l'activité</h2>
                                {{--  <p><i>Insert class "{ns}swipe-prevent" to stop swipe gestures on that element</i></p>
                                <p class="font-blokk"><i>Consectetur adipisicing elit. Vel, sequi, quis, minima, dolor quisqua</i></p>  --}}
                                {{--  <a class="">Go to &rarr;</a>  --}}
                            </div>
                        </div>

                        <div class="col8">
                            {{--  {!! Form::open(['url' => 'admin.create', 'class' => 'block clearfix']) !!}
                                {!! Form::text('titre', '', ['placeholder' => 'Titre', 'class' => 'large']) !!}
                                {!! Form::textarea('contenu', '', ['placeholder' => 'Contenu', 'rows' => '5', 'cols' => '30']) !!}
                                {!! Form::submit('Ajouter', ['class' => 'btn large pull-right no-ma']) !!}
                            {!! Form::close() !!}  --}}
                            @if($activityAmodifier)
    
                            <form class="block clearfix" method="PUT" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <input type="text" name="titre" class="large" value="{{$activityAmodifier->titre}}">
                                <input type="text" name="description" class="large" value="{{$activityAmodifier->description}}">
                                {{--  <input type="text" class="large" placeholder="Password">
                                <input type="text" class="large" placeholder="Repeat Password">
                                <input type="text" class="large" placeholder="Email">  --}}
                                <textarea name="contenu" cols="30" rows="5">{{$activityAmodifier->contenu}}</textarea>

                                {{--  <label class="checkbox text-small muted pull-left" for="terms">
                                    <input id="terms" type="checkbox">I have read and I agree the Terms of Use
                                </label>  --}}

                                <label> Joindre images </label>
                                <a href="#" class="btn pull-left no-ma" id="selectMedia"> joindre </a>
                                <input type="file" name="images" id="images">
                                <div id="imageSection" style="height: 120px; width: 120px; margin-top:50px; background-image: url('{{asset('storage/upload/activite/'.$activityAmodifier->media)}}'); background-size: cover;" ></div> 

                                <input class="btn large pull-right no-ma" type="submit" value="Ajouter">
                            </form>
                            @else
                             <form class="block clearfix" method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <input type="text" name="titre" class="large" placeholder="Titre de l'activité">
                                <input type="text" name="description" class="large" placeholder="Description de l'article">
                                {{--  <input type="text" class="large" placeholder="Password">
                                <input type="text" class="large" placeholder="Repeat Password">
                                <input type="text" class="large" placeholder="Email">  --}}
                                <textarea name="contenu" cols="30" rows="5" placeholder="Contenu de l'activité"></textarea>

                                {{--  <label class="checkbox text-small muted pull-left" for="terms">
                                    <input id="terms" type="checkbox">I have read and I agree the Terms of Use
                                </label>  --}}

                                <label> Joindre images </label>
                                <a href="#" class="btn pull-left no-ma" id="selectMedia"> joindre </a>
                                <input type="file" name="images" id="images" style="display: none;">
                                <div id="imageSection" style="height: 120px; width: 120px; margin-top:50px;"></div> 

                                <input class="btn large pull-right no-ma" type="submit" value="Ajouter">
                            </form>
                            @endif
                        </div>
                    </div>
                </div>


                <div>
                    <div class="rt01pagitem">Galerie</div>

                    <div class="row">

                    </div>
                </div>
            </div>
            <!-- TABS PREVIEW - end -->

        </div>
    </div>
    <!-- TEMPLATE PREVIEW - end
    ======================================================================== -->



@stop


@section('footer')
  @include('layouts/partials/_footer') 
@stop
