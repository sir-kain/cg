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

@section('topimage')
    @include('layouts/partials/_topImage', ['image' =>  'presentation.png', 'titre' => 'Structuration'])
@stop

@section('activite')

    <!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="wrapper">
        <div class="container">
            <div class="row" style="padding: 20px 0px 75px;">
                <div class="title-head">
                    <div class="title-head-inner">
                        <h1 class="no-wrap justify bo-b" style="border-color: #cc0055; font-weight: 100">
                            Structuration
                        </h1>
                    </div>
                    <div class="page-summary">
                        <p class="justify" style="padding-left: 150px; padding-right: 150px;">
                            Faire du Sénégal un pays
                            émergent, sans discrimination,
                            où les hommes et les femmes
                            auront les mêmes chances de
                            participer à son développement
                            et de jouir des bénéfices
                            de sa croissance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row font-alter">
                <div class="col-md-9"
                     style="padding: 0 100px 0 50px;">
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
                                <span class="marge"></span>• D’assurer la coordination et le suivi de la bonne exécution
                                de la
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
                                <span class="marge"></span>• Président(e) : le ou la conseiller(ère) technique chargé(e)
                                du
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
                                <span class="marge"></span>• Les points focaux des directions, services nationaux et
                                programmes
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
                                <span class="marge"></span>• Veiller sur la mise en œuvre de la stratégie genre au
                                niveau local
                                ;
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="marge"></span>• Coordonner l’activité de tous les points focaux de la
                                région.
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
                                <span class="marge"></span>• et toutes autres ressources approuvées par le Ministre de
                                la santé
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
        <!-- SHEDULE -->
        <div id="schedule" class="main-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="block-header">
                            <h4 class="block-category">Notre Réseau</h4>
                            <h2 class="block-title">L'équipe</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-wrapper">
                    <div class="tabs-content clearfix">
                        <div class="tab-info active">
                            <div class="shedule-block left">
                                <img class="shedule-user" src="{{asset('assets/img/user_1.jpg')}}" alt="">
                                <div class="shedule-entry">
                                    <div class="shedule-date">Vision 2020</div>
                                    <h4><a class="shedule-speaker" id="demo01" href="#animatedModal">Rwanda</a></h4>

                                    {{--<div class="shedule-text">--}}
                                        {{--Le Rwanda figure aujourd’hui parmi les pays africains les--}}
                                        {{--plus prisés par les investisseurs étrangers.--}}
                                    {{--</div>--}}
                                    <img class="img-responsive" src="{{asset('assets/img/msas/equipe/coordo.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                            <div class="shedule-block right">
                                <img class="shedule-user" src="{{asset('assets/img/user_1.jpg')}}" alt="">
                                <div class="shedule-entry">
                                    <div class="shedule-date">Plan Sénégal Emergent</div>
                                    <h4><a class="shedule-speaker" href="#">Senegal</a></h4>

                                    <div class="shedule-text">Le Sénégal a décidé d’adopter un nouveau modèle de
                                        développement pour accélérer sa marche vers l’émergence.
                                    </div>
                                    <img class="img-responsive" src="img/perfstock/pays/modal/senegal.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block left">
                                <img class="shedule-user" src="{{asset('assets/img/user_1.jpg')}}" alt="">
                                <div class="shedule-entry">
                                    <div class="shedule-date">Plan Stratégique Gabon Emergent</div>
                                    <h4><a class="shedule-speaker" href="#">Gabon</a></h4>

                                    <div class="shedule-text">Le projet de "Gabon émergent" consiste à mettre en oeuvre
                                        une stratégie autour de trois piliers de croissance dont
                                        le ressort est la valorisation du potentiel en ressources humaines, naturelles
                                        et minéralières du Gabon.
                                    </div>
                                    <img class="img-responsive" src="img/perfstock/pays/modal/gabon.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block right">
                                <img class="shedule-user" src="{{asset('assets/img/user_1.jpg')}}" alt="">
                                <div class="shedule-entry">
                                    <div class="shedule-date">PND 2016-2020</div>
                                    <h4><a class="shedule-speaker" href="#">Côte d'Ivoire</a></h4>

                                    <div class="shedule-text">La Côte d'Ivoire a l'ambition de devenir un pays émergent
                                        à l'horizon 2020.
                                    </div>
                                    <img class="img-responsive" src="img/perfstock/pays/modal/ivorycoast.jpg" alt="">
                                </div>
                            </div>
                            <div class="shedule-block left">
                                <img class="shedule-user" src="{{asset('assets/img/user_1.jpg')}}" alt="">
                                <div class="shedule-entry">
                                    <div class="shedule-date">Plan Tanzania</div>
                                    <h4><a class="shedule-speaker" href="#">Tanzanie</a></h4>

                                    <div class="shedule-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor.
                                    </div>
                                    <img class="img-responsive" src="img/perfstock/pays/modal/tanzanie.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
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
