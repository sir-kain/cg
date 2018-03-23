@extends('layouts/app', ['title' => 'A propos |'])

@section('header')
    @include('layouts/partials/_header')
@stop

@section('topimage')
    @include('layouts/partials/_topImage', ['image' =>  'presentation.png', 'titre' =>  'Historique'])
@stop

{{--  @section('mainSlider')
@include('layouts/partials/_mainSlider')
@stop

@section('statistiques')
@include('layouts/partials/_statistiques')
@stop--}}


@section('activite')

    <!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="wrapper">
        <div class="container">
            <div class="row" style="padding: 20px 0px 75px;">
                <div class="title-head">
                    <div class="title-head-inner">
                        <h1 class="no-wrap justify bo-b" style="border-color: #cc0055; font-weight: 100">Historique</h1>
                    </div>
                    <div class="page-summary">
                        <p class="justify" style="padding-left: 150px; padding-right: 150px;">
                            L'approche genre consiste à identifier et analyser les inégalités entre hommes et femmes et
                            à prendre des mesures concrètes pour les corriger. <br>
                            <span class="marge"></span><span class="marge"></span>Elle repose donc sur 2 pilliers:
                            ANALYSE et CORRECTION.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row font-blokk">
                <div class="col-md-9" style="padding: 0 100px 0 50px;">
                    <p align="justify" class="dropcap">
                        Le Sénégal a ratifié de nombreux instruments juridiques :
                    </p>
                    <ul>
                        <li>
                            <p align="justify">
                                <span class="marge"></span> <strong> • Au plan international: </strong>
                                Convention de 1985 sur l’Elimination de toutes Formes de
                                Discrimination à l’Egard des Femmes (CEDAW/CEDEF).
                            </p>
                        </li>
                        <li>
                            <p align="justify">
                                <span class="marge"></span><strong>• Au plan régional: </strong>
                                Protocole à la Charte Africaine des Droits de l’Homme et des
                                Peuples relatif aux Droits de la Femme (Protocole de Maputo), en
                                décembre 2004.
                            </p>
                        </li>
                        <li>
                            <p align="justify">
                                <span class="marge"></span><strong>• Au plan national: </strong>
                                Constitution de 2001 qui garantit expressément l’égalité des droits
                                entre les hommes et les femmes en mettant l’accent sur les femmes
                                rurales.
                            </p>
                        </li>
                    </ul>
                    <p align="justify">
                        L’élaboration de trois cadres de référence en faveur de la promotion de la
                        femme, respectivement en 1982 (1<sup>er</sup> Plan d’actions de la Femme),
                        en 1996 ( 2<sup>ème</sup> Plan d’actions de la Femme conformément au
                        programme d’actions de Beijing) et 2005 (Stratégie Nationale de l’Equité et
                        Egalité de Genre (SNEEG) 2005-2015), confirme l’engagement des autorités à
                        améliorer les conditions de vie des populations selon des modalités et des
                        politiques qui promeuvent la femme et l’égalité des femmes et des hommes en
                        tenant compte des écarts .
                    </p>
                    <p align="justify">
                        <span class="marge"></span>La Stratégie Nationale de l’Equité et Egalité de Genre (SNEEG) est le
                        3ème
                        cadre de référence pour la promotion de la femme et de l’égalité de genre
                        au Sénégal. Elle a été élaborée en 2004 suivant un processus participatif
                        auquel tous les acteurs de développement, parties prenantes de la promotion
                        de la femme et de l’égalité de genre ont activement contribué.
                    </p>
                    <p align="justify">
                        <span class="marge"></span>Le Sénégal a adopté cette stratégie afin de mettre en œuvre la vision
                        de :
                        « faire du Sénégal un pays émergent où les hommes et les femmes auront les
                        mêmes chances de participer à son développement et de jouir des bénéfices
                        de sa croissance. ».
                    </p>
                    <p align="justify">
                        A ce jour, cette SNEEG 1 a été révisée. Nous disposons de la SNEEG 2 qui
                        trouve ses fondements dans:
                    </p>
                    <ul>
                        <li>
                            <p align="justify">
                                <span class="marge"></span><strong> • L’option spécifique du PSE </strong>
                                relative à l’intégration du genre dans les politiques publiques;
                            </p>
                        </li>
                        <li>
                            <p align="justify">
                                <span class="marge"></span>
                                • une stratégie de lutte contre toute forme d’inégalités;
                            </p>
                        </li>
                        <li>
                            <p align="justify">
                                <span class="marge"></span> • un moyen d’assurer à tous
                                <strong>
                                    une participation équitable au processus de développement;
                                </strong>
                            </p>
                        </li>
                        <li>
                            <p align="justify">
                                <span class="marge"></span>• la contribution à la mise en œuvre des objectifs de
                                développement
                                durable (ODD), surtout
                                <strong>
                                    ODD 5 «assurer l’égalité des sexes et autonomiser toutes les
                                    femmes et les filles ».
                                </strong>
                            </p>
                        </li>
                    </ul>
                    <p align="justify">
                        Un plan de mise en œuvre de la SNEEG 1, a été élaboré à travers une
                        approche multisectorielle pour promouvoir l’égalité de genre sur le plan
                        socioculturel, économique, juridique, politique et sanitaire. Afin de
                        renforcer l’institutionnalisation de l’intégration transversale du genre
                        dans ces secteurs, le Ministère de la Famille, de la petite Enfance et de
                        l’Entreprenariat Féminin (MFEEF), devenu aujourd’hui Ministère de la Femme,
                        de la Famille et du genre, a recommandé depuis quelques années, la mise en
                        place de cellules ou points focaux au sein des directions de planification,
                        suivi/évaluation des différents ministères, institutions et autres
                        organismes non gouvernementaux.
                    </p>
                    <p align="justify">
                        <span class="marge"></span>A cet effet, la cellule genre du Ministère de la Santé et de l’Action
                        sociale, a été créée par arrêté <strong>n° 1454/MSAS/DPRS/CG du 03/02/2015, </strong>suite à la
                        circulaire
                        primatoriale du 26 mars 2013 invitant les différents départements
                        ministériels à assurer la prise en compte du genre dans leur secteur. Dans
                        ce cadre, il est attendu, de chaque ministère, le développement
                        d’initiatives de promotion interne de l’intégration du genre dans les
                        politiques, programmes et projets sectoriels.
                    </p>
                    <p align="justify">
                        La cellule genre du MSAS est rattachée à la Direction de la Planification,
                        de la Recherche et des Statistiques (DPRS). Mais depuis le décret numéro
                        ……..portant organisation des services de l’état, la cellule genre au même
                        titre que la Planification sont rattachés directement au Secrétariat
                        Général du Ministère de la Santé et de l’action sociale. Cependant, son
                        application tarde à être effective. Par ailleurs, le Bureau Organisation et
                        Méthode veillera à cette effectivité.
                    </p>
                    <p align="justify">
                        Elle traduit en action les orientations de la politique nationale d’équité
                        et d’égalité entre les femmes et les hommes au Sénégal dans le domaine de
                        la santé.
                    </p>
                </div>
                <div class="col-md-3" style="padding-top: 50px; padding-right: 30px;">
                    <h3>Voir aussi...</h3>
                    <h6 class="active bo-r-h">
                        <a href="{{route('historique')}}">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon"
                                 src="{{asset('assets/img/service_1.png')}}" alt="">
                            <img height="25px" style="margin-bottom: -5px" class="presentation-icon-hover"
                                 src="{{asset('assets/img/service_1_d.png')}}" alt="">
                            Historique
                        </a>
                    </h6>
                    <h6>
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
