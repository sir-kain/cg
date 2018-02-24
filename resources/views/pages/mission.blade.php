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
                        <h1 class="no-wrap justify bo-b" style="font-weight: 100">Vison & Missions & Défis</h1>
                    </div>
                    <div class="page-summary">
                        <p class="justify" style="padding-left: 150px; padding-right: 150px;">
                            L'approche genre consiste à identifier et analyser les inégalités entre hommes et femmes et à prendre des mesures concrètes pour les corriger.
                            <br>
                            Elle repose donc sur 2 pilliers: ANALYSE et CORRECTION.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9"
                     style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 500; line-height: 180%; padding: 0 100px 0 40px;">
                    <div class="row" style="padding: 20px 0px 75px;">
                        <div class="title-head">
                            <div class="title-head-inner">
                                <h1 class="no-wrap justify" style="font-weight: 100">Vision</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p align="justify" class="dropcap">
                            Institutionnalisation du Genre dans les politiques, programmes, projets du Ministère de la Santé et de l ’Action Sociale.
                        </p>
                    </div>

                    <div class="row" style="padding: 100px 0px 45px;">
                        <div class="title-head">
                            <div class="title-head-inner">
                                <h1 class="no-wrap justify" style="font-weight: 100">Missions</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul>
                            <li>
                                <p align="justify">
                                    Elaborer chaque année le cadre d’actions annuel de toutes les
                                    parties prenantes des questions de genre, de sa structure en se
                                    référant au plan de MEO, de la SNEEG et le cas échéant, le plan
                                    d’institutionnalisation (PIG) élaboré;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Veiller à la prise en compte des besoins et intérêts des femmes et
                                    des hommes dans les cadres de planification, de la programmation et
                                    de la budgétisation des activités;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Considérer une base de données ventilées par sexe sur la situation
                                    des groupes cibles du secteur avec l’appui du mécanisme national
                                    genre (MNG) ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Contribuer à la préparation et à l’organisation de la revue
                                    annuelle de la MEO, de la SNEEG ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Faciliter la formulation et le suivi des indicateurs de résultats
                                    tenant compte du genre dans les domaines d’intervention du secteur
                                    ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Elaborer et MEO avec l’appui du mécanisme national genre, un
                                    programme de renforcement des capacités en genre à l’intervention
                                    des agents du ministère et des partenaires ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Appuyer le ministère dans le plaidoyer pour la promotion du genre
                                    et la mobilisation des ressources pour la mise en œuvre de la
                                    stratégie nationale pour l’équité et l’égalité de genre ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Faciliter l’élaboration et la MEO d’une stratégie de communication
                                    genre au sein du département ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Elaborer une stratégie santé genre.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="row" style="padding: 100px 0px 45px;">
                        <div class="title-head">
                            <div class="title-head-inner">
                                <h1 class="no-wrap justify" style="font-weight: 100">Défis</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul>
                            <li>
                                <p align="justify">
                                    Implication et participation de toutes les parties prenantes par la
                                    Création de cadre de concertation et de coordination par la mise en
                                    place d’un comité de pilotage par des comités régionaux et national
                                    officialisé ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Appropriation de l’approche genre par les décideurs et tous les
                                    acteurs du MSAS;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    Renforcement de capacités des acteurs et actrices
                                </p>
                            </li>
                            <li>
                                <p>
                                    Mobilisation de ressources pour confection d’outils
                                    multimédias(HIGH_TECH);
                                </p>
                            </li>
                            <li>
                                <p>
                                    Mobilisation de ressources humaines pour appuyer la cellule(S/E,
                                    assistant administratif et financier …);
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a name="_GoBack"></a>
                                    Mise en place et application d’un budget de fonctionnement pour la
                                    cellule;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Coordination et mise en synergie des partenaires;
                                </p>
                            </li>
                            <li>
                                <p>
                                    Couverture de toutes les régions et de tous les districts.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" style="padding-top: 50px; padding-right: 30px;">
                    <h3>Voir aussi...</h3>
                    <h6>
                        <a href="{{route('historique')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon" src="{{asset('assets/img/service_1.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover" src="{{asset('assets/img/service_1_d.png')}}" alt="">
                            Historique
                        </a>
                    </h6>
                    <h6>
                        <a href="{{route('structuration')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon" src="{{asset('assets/img/service_2.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover" src="{{asset('assets/img/service_2_d.png')}}" alt="">
                            Composition (Structuration)
                        </a>
                    </h6>
                    <h6>
                        <a href="{{route('objectifsambition')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon" src="{{asset('assets/img/service_3.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover" src="{{asset('assets/img/service_3_d.png')}}" alt="">
                            Objectifs & Ambitions
                        </a>
                    </h6>
                    <h6 class="active bo-r-h">
                        <a style="{{route('mission')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon" src="{{asset('assets/img/service_4.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover" src="{{asset('assets/img/service_4_d.png')}}" alt="">
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
