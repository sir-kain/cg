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
    @include('layouts/partials/_topImage', ['image' =>  'presentation.png', 'titre' =>  'Objectifs & Ambitions'])
@stop



@section('activite')

    <!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="wrapper">
        <div class="container">
            <div class="row" style="padding: 20px 0px 75px;">
                <div class="title-head">
                    <div class="title-head-inner">
                        <h1 class="no-wrap justify bo-b" style="border-color: #cc0055; font-weight: 100">Objectifs & Ambitions</h1>
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
            <div class="row font-alter">
                <div class="col-md-9" style="padding: 0 100px 0 40px;">
                    <div class="row" style="padding: 20px 0px 75px;">
                        <div class="title-head">
                            <div class="title-head-inner">
                                <h1 class="no-wrap justify" style="font-weight: 100">Objectifs</h1>
                            </div>
                        </div>
                    </div>
                    <p align="justify">
                        <strong>Objectif général</strong>
                    </p>
                    <p align="justify">
                        Contribuer à l’intégration de l’équité et l’égalité de genre dans les
                        structures, les systèmes, les pratiques et les interventions du secteur de
                        la santé et de l’action sociale.
                    </p>
                    <p align="justify">
                        <strong>Objectifs spécifiques</strong>
                    </p>
                    <ul>
                        <li>
                            <p align="justify">
                                <span class="marge"></span>• Offrir aux populations des prestations de services sanitaires
                                équitables tout en se fondant sur des conditions d’exercice de
                                travail décent à tous les niveaux de la pyramide sanitaire.
                            </p>
                        </li>
                        <li>
                            <p align="justify">
                                <span class="marge"></span>• Accroitre le niveau de sensibilité genre de la politique sanitaire
                                à l’échelle centrale, intermédiaire et périphérique
                            </p>
                        </li>
                    </ul>

                    <div class="row" style="padding: 100px 0px 45px;">
                        <div class="title-head">
                            <div class="title-head-inner">
                                <h1 class="no-wrap justify" style="font-weight: 100">Ambitions</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul type="square">
                            <li>
                                <p align="justify">
                                    • Mobilisation des ressources pour la mise en œuvre du PIG;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Renforcement des capacités du personnel de santé en genre;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Élaboration des outils de formation, d’autoapprentissage et de
                                    sensibilisation sur le genre pour appuyer le plan de renforcement
                                    de capacité de la cellule genre;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Confection et Reproduction 300 tablettes multimédias sur la
                                    mutualisation au niveau communautaire et les partager au niveau
                                    central et opérationnel;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Organisation d’un atelier de formation pour les cadres du
                                    Ministère, les partenaires et les MCR;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Rédaction au moins d’un article scientifique par an sur une
                                    thématique genre ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Capitalisation des réalisations (mise en place d’une bibliothèque
                                    genre);
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Rédaction d’un bulletin semestriel d'information;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Formation des pools de formateurs constitués;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Organisation d’un atelier en genre pour les cadres du ministère,
                                    les partenaires et les MCR;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Mise en place d’un groupe thématique genre autour des experts genre
                                    (PTF), cadres du MSAS et DEEG qui peut constituer le comité
                                    technique genre ou Task force;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Mise en place d’un comité national et un comité régional des points
                                    focaux ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Sensibilisation à tous les niveaux de la pyramide sanitaire, des
                                    agents pour des pratiques favorables à l’équité et l’égalité de
                                    genre dans le MSAS;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Formation des membres de la Cellule genre en gestion axée sur les
                                    résultats, de suivi et d’évaluation sensible au genre/CTB;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Elaboration de guide et module d’aide à l’intégration du genre dans
                                    la gestion des ressources humaines à tous les niveaux de la
                                    pyramide sanitaire;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Elaboration d’un guide et module d’aide à l’intégration du genre
                                    dans la collecte, l’analyse et le traitement de données;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Intégration du genre dans le guide de planification;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Formation aux différents niveaux, de tous les responsables du
                                    management du personnel, aux techniques de gestion des ressources
                                    humaines dans une perspective genre;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Formation des agents du niveau central, chargés du système
                                    d’information sanitaire, aux techniques d’analyse des données dans
                                    une perspective genre;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Formation des responsables du niveau central, chargés de la
                                    planification, du suivi/évaluation aux techniques de planification
                                    S/E dans une perspective genre ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Mise à la disposition du personnel médical des régions et districts
                                    des outils de formation et supports de communication sur le genre ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Formation des équipes cadre de district et des régions sur
                                    l'approche genre en lien avec la santé ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Mise à la disposition du personnel médical des outils de suivi pour
                                    l'intégration du genre dans la planification, la mise en œuvre et
                                    le suivi;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Intégration de l'analyse genre dans les évaluations des services et
                                    les grilles de notation de la communauté;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Utilisation des résultats pour sélectionner, concevoir, mettre en
                                    œuvre, suivre et évaluer les améliorations des services relatives à
                                    la dimension genre ;
                                </p>
                            </li>
                            <li>
                                <p align="justify">
                                    • Confection des outils HIGH-TECH sur le processus
                                    d’institutionnalisation du genre notamment le PIG.
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
                    <h6 class="active bo-r-h">
                        <a href="{{route('objectifsambition')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon" src="{{asset('assets/img/service_3.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover" src="{{asset('assets/img/service_3_d.png')}}" alt="">
                            Objectifs & Ambitions
                        </a>
                    </h6>
                    <h6>
                        <a href="{{route('mission')}}">
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
