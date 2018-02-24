@extends('layouts/app', ['title' => 'A propos |'])

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
        <img class="center-image" src="{{asset('assets/img/perfstock/slider/collaboration2.jpg')}}"/>
    </div>
</div>



@section('activite')

    <!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="wrapper">
        <div class="container">
            <div class="row" style="padding: 20px 0px 75px;">
                <div class="title-head">
                    <div class="title-head-inner">
                        <h1 class="no-wrap justify bo-b" style="border-color: #cc0055; font-weight: 100">Structuration</h1>
                    </div>
                    <div class="page-summary">
                        <p class="justify" style="padding-left: 150px; padding-right: 150px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, cum debitis ipsa
                        iste labore neque officia sit vel velit. Aspernatur autem debitis, dolore dolorem eos
                        molestias numquam quas similique.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9"
                     style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 500; line-height: 180%; padding: 0 100px 0 40px;">
                    <p class="dropcap">
                        Les <strong>organes</strong> de la cellule genre sont :
                    </p>
                    <ul>
                        <li>
                            <p>
                                <span class="marge"></span>• La coordination ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Le comité national des points focaux ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Le comité régional des points focaux.
                            </p>
                        </li>
                    </ul>
                    <p>
                        La cellule genre est dirigée par un ou une coordinateur/trice nommé(e) par
                        arrêté du Ministre de la Santé et de l’Action sociale sur proposition du
                        Directeur de la Planification, de la Recherche et des Statistiques.
                    </p>
                    <p>
                        Il ou elle est assisté(e) par :
                    </p>
                    <ul>
                        <li>
                            <p>
                                <span class="marge"></span> • Un ou une assistant(e) suivi-évaluation
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Un ou une gestionnaire
                            </p>
                        </li>
                    </ul>
                    <p>
                        Le ou la coordinateur/trice est chargé(e) notamment :
                    </p>
                    <ul>
                        <li>
                            <p>
                                <span class="marge"></span>• D’élaborer le plan stratégique genre du département ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• D’assurer la coordination et le suivi de la bonne exécution de la
                                stratégie genre ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• De participer à la mobilisation des ressources ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span> • De planifier les missions et d’en assurer le suivi.
                            </p>
                        </li>
                    </ul>
                    <p>
                        Le <strong>comité national</strong> des points focaux est l’instance
                        d’appui, d’impulsion et de validation de la stratégie sectorielle.
                    </p>
                    <p>
                        Il est composé comme suit :
                    </p>
                    <ul>
                        <li>
                            <p>
                                <span class="marge"></span>• Président(e) : le ou la conseiller(ère) technique chargé(e) du
                                genre ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Rapporteur(e) : le ou la coordinateur/trice de la cellule ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Les points focaux des directions, services nationaux et programmes
                                ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Les coordinateurs/trices des comités régionaux.
                            </p>
                        </li>
                    </ul>
                    <p>
                        Le comité national se réunit deux fois dans l’année, sur convocation de son
                        ou sa président(e).
                    </p>
                    <p>
                        Le <strong>comité régional</strong> a pour missions notamment de :
                    </p>
                    <ul>
                        <li>
                            <p>
                                <span class="marge"></span>• Veiller sur la mise en œuvre de la stratégie genre au niveau local
                                ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Coordonner l’activité de tous les points focaux de la région.
                            </p>
                        </li>
                    </ul>
                    <p>
                        Le comité régional est présidé par le médecin chef de région et réunit le
                        point focal de la région et les points focaux des districts.
                    </p>
                    <p>
                        <strong>Les ressources de la cellule</strong>
                        sont :
                    </p>
                    <ul>
                        <li>
                            <p>
                                <span class="marge"></span>• la dotation budgétaire de l’état ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• les dotations des partenaires techniques et financiers ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• et toutes autres ressources approuvées par le Ministre de la santé
                                et de l’action sociale.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3" style="padding-top: 50px; padding-right: 30px;">
                    <h3>Voir aussi...</h3>
                    <h6>
                        <a href="{{route('historique')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon"
                                 src="{{asset('assets/img/service_1.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover"
                                 src="{{asset('assets/img/service_1_d.png')}}" alt="">
                            Historique
                        </a>
                    </h6>
                    <h6 class="active bo-r-h">
                        <a href="{{route('structuration')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon"
                                 src="{{asset('assets/img/service_2.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover"
                                 src="{{asset('assets/img/service_2_d.png')}}" alt="">
                            Composition (Structuration)
                        </a>
                    </h6>
                    <h6>
                        <a href="{{route('objectifsambition')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon"
                                 src="{{asset('assets/img/service_3.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover"
                                 src="{{asset('assets/img/service_3_d.png')}}" alt="">
                            Objectifs & Ambitions
                        </a>
                    </h6>
                    <h6>
                        <a href="{{route('mission')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon"
                                 src="{{asset('assets/img/service_4.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover"
                                 src="{{asset('assets/img/service_4_d.png')}}" alt="">
                            Vision & Missions & Défis
                        </a>
                    </h6>
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
