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
@include('layouts.partials._header')

<div id="content-wrapper">
    <!-- MAIN-SLIDER -->


    <div id="about" class="main-slider clearfix">
        <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0"
             data-slides-per-view="1" data-add-slides="2">
            <div class="swiper-wrapper">
                <div class="swiper-slide active" data-val="0">
                    <div class="triheight">
                        <img class="center-image" src="{{asset('assets/img/atelierplancom.jpg')}}"
                             alt="" style="max-width: 100%;">
                        <div class="vertical-align">
                            <div class="square-box">
                                <h4 class="square-date">Activité</h4>
                                <h2 class="square-title" style="font-size: 32px">Atelier de validation du plan de
                                    communication.</h2>
                                <div class="square-text"> Atelier de validation du plan de communication du Plan
                                    d'Institutionnalisation du Genre du Ministère de la Santé et de l'Action sociale.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination"></div>
            <div class="swiper-arrow-left style-11"><img src="{{asset('assets/img/arrow_left.png')}}" alt=""></div>
            <div class="swiper-arrow-right style-11"><img src="{{asset('assets/img/arrow_right.png')}}" alt=""></div>
        </div>
    </div>


    <!-- COUNTERS -->
@include('layouts.partials._statistiques')


{{--CONTENU--}}

<!-- TEMPLATE PREVIEW - begin
    ======================================================================== -->
    <div class="wrapper">
        <div class="container">

            <!-- TABS PREVIEW - begin -->
            <div class="rt01 rt01underline rt01size-l"
                 data-tabs='{
                "fx"    : "line",
                "speed" : 800,
                "pag"   : { "align": "center" }
            }'>

                <div>
                    <h2 class="rt01pagitem">Ativité</h2>


                    <!-- Dummy Content - begin -->
                    <div class="row font-blokk">
                        <div class="col2">
                            <h2 class="bo-l-h"><i>Atelier de validation du plan de communication du Plan
                                    d'Institutionnalisation du Genre du Ministère de la Santé et de l'Action
                                    sociale.</i></h2>
                        </div>

                        <div class="col8 col-md-offset-1">
                            <p class="dropcap"
                               style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 500; line-height: 180%; padding: 0 200px 0 100px;">
                                <div>
                            <p><strong>
                                    La violence contre les filles sévit partout dans le monde. Cependant,
                                    dans les mois à venir, nous devons profiter des opportunités clés pour
                                    assurer la sécurité des filles, écrit Leila Asrari de Plan
                                    International.</strong>
                            </p>
                        </div>
                        <section>
                            <div>
                                <p class="dropcap">
                                    Faridah, 18 ans, vit dans les bidonvilles de Kampala. Chaque soir,
                                    vers 18 heures, elle se rend au centre de la capitale ougandaise
                                    pour vendre des jetons à un rond-point très fréquenté. Le voyage
                                    pour atteindre cet emploi à faible revenu est lourd de danger.
                                </p>
                                <p>
                                    «Je n'ai qu'à marcher un kilomètre, mais je rencontre des obstacles
                                    à chaque détour: les chauffeurs de taxi ivres harcèlent et tentent
                                    de me toucher, quand je refuse leurs avances, ils peuvent devenir
                                    agressifs et me crier des injures pendant des semaines.
                                </p>
                                <p>
                                    Faridah a développé des mécanismes d'adaptation pour faire face à
                                    ces risques.
                                </p>
                                <p>
                                    "Nous apprenons à anticiper le danger. Nous évitons les endroits où
                                    personne ne peut nous voir ou nous entendre et voyager seul le
                                    moins possible. "
                                </p>
                                <h2>
                                    L'ÉCHELLE DE LA VIOLENCE CONTRE LES ENFANTS EST CHOQUANTE
                                </h2>
                                <p>
                                    Des milliards d'enfants de tous les milieux socio-économiques, de
                                    tous les âges, de toutes les religions et de toutes les régions du
                                    monde souffrent de la violence, de l'exploitation et des abus
                                    chaque jour. En fait, entre la moitié et les trois quarts des
                                    enfants - jusqu'à 1,7 milliard - ont été victimes de violence. Les
                                    enfants subissent différentes formes de violence à différentes
                                    étapes de leur enfance, les filles étant beaucoup plus susceptibles
                                    d'être victimes de violence sexuelle, de la traite et du
                                    <a
                                            href="https://plan-international.org/sexual-health/child-marriage"
                                    >
                                        mariage des enfants
                                    </a>
                                    .
                                </p>
                                <p>
                                    La violence a lieu dans les maisons, les écoles, les institutions
                                    et en ligne. Il menace les enfants dans les rues de la ville ainsi
                                    que dans les villages ruraux reculés. Et la violence est exacerbée
                                    par les conflits, les crises et les déplacements, où les structures
                                    de soutien et les filets de sécurité disparaissent souvent de la
                                    vie des enfants.
                                </p>
                                <h2>
                                    CRÉER DES ESPACES SÉCURISÉS POUR LES ENFANTS
                                </h2>
                                <p>
                                    La nature même de la
                                    <a href="https://plan-international.org/ending-violence">
                                        violence contre les enfants
                                    </a>
                                    rend la contestation difficile. La «protection» qu'offrent les
                                    foyers, les écoles et les communautés peut également masquer les
                                    abus qui ont lieu dans ces espaces. En tant que communauté
                                    mondiale, nous devons investir notre temps, notre expertise et nos
                                    ressources pour créer des espaces dans lesquels les enfants peuvent
                                    grandir en sécurité, afin que les enfants ne vivent pas dans la
                                    peur et ne soient pas limités à mener une vie libre et pleine.
                                </p>
                                <blockquote>
                                    <p>
                                        Tout acte de violence contre un enfant est inacceptable - une
                                        violation de leurs droits humains.
                                    </p>
                                </blockquote>
                                <p>
                                    Plan International adopte cette approche dans notre travail de
                                    plaidoyer mondial, en luttant contre la violence faite aux filles à
                                    la maison, à l'école et dans les communautés dans lesquelles elles
                                    grandissent. Nous nous attaquons également au risque accru de
                                    violence contre les filles qui vivent des situations d'urgence, de
                                    conflit ou de déplacement. L'expérience nous indique que nous avons
                                    besoin de différentes solutions et interventions pour prévenir et
                                    répondre à la violence contre les filles dans ces différents
                                    espaces et contextes.
                                </p>
                                <div>
                                    <source media="(min-width: 1008px)">
                                    <source media="(min-width: 864px)">
                                    <source media="(min-width: 576px)">
                                    <source media="(min-width: 432px)">
                                    <source media="(max-width: 432px)">
                                    <img
                                            alt="Des filles marchent dans les rues de Kampala pour évaluer les risques pour leur sécurité"
                                            title="Des filles marchent dans les rues de Kampala pour évaluer les risques pour leur sécurité"
                                    />
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                    </source>
                                    <div>
                                        <div>
                                            Faridah conduit un groupe de filles à travers les rues de
                                            Kampala pour évaluer et cartographier les risques pour leur
                                            sécurité.
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    En mars, la Commission de la condition de la femme débattra des
                                    défis et des opportunités pour parvenir à l'égalité des sexes et à
                                    l'autonomisation des femmes et des filles rurales. C'est une autre
                                    occasion vitale de parler de la violence contre les filles dans les
                                    espaces ruraux. Plan International mettra l'accent sur des
                                    solutions pour mettre fin à la violence basée sur le genre dans les
                                    communautés rurales, présentant certaines interventions vitales
                                    telles que le travail avec les hommes et les garçons pour défier
                                    les masculinités négatives.
                                </p>
                                <h2>
                                    VIOLENCE CONTRE LES ENFANTS DANS DES CONTEXTES HUMANITAIRES
                                </h2>
                                <p>
                                    Entre ces moments, le 14 février verra les leaders mondiaux se
                                    rassembler au Sommet sur les solutions à l'Agenda 2030 pour les
                                    enfants: Mettre fin à la violence. Le Sommet sera l'occasion de
                                    discuter de toutes les formes de violence contre les enfants, mais
                                    Plan International et ses partenaires
                                    <a
                                            href="https://plan-international.org/sites/default/files/call_to_action_for_attendees_to_the_agenda_2030_for_children_end_violence_solutions_summit.pdf"
                                    >
                                        s'adresseront aux dirigeants mondiaux spécifiquement sur la
                                        protection des enfants dans les conflits, les crises et les
                                        déplacements
                                    </a>
                                    (PDF), qui sera de plus en plus durable.
                                </p>
                                <p>
                                    Les activités de protection dans les situations d'urgence reçoivent
                                    généralement environ un tiers du montant total demandé et
                                    proportionnellement moins que la réponse humanitaire globale. Nous
                                    demanderons à toutes les parties d'accorder la priorité à
                                    l'élimination de la violence contre les enfants dans des contextes
                                    humanitaires et de financer la protection des enfants dans les
                                    situations d'urgence en tant qu'intervention vitale.
                                </p>
                                <p>
                                    Tout acte de violence contre un enfant est inacceptable - une
                                    violation de leurs droits humains. Mais les chiffres auxquels nous
                                    sommes confrontés sont une source de honte mondiale. En 2015, les
                                    dirigeants du monde ont reconnu les niveaux épidémiques de violence
                                    contre les enfants et se sont engagés à mettre fin à toutes les
                                    formes de violence à l'encontre des enfants d'ici 2030 dans le
                                    cadre des objectifs mondiaux. Plan International utilisera toutes
                                    les opportunités pour s'assurer que cela se produise.
                                </p>
                            </div>
                        </section>
                        </p>

                    </div>
                </div>
                <!-- Dummy Content - end -->
            </div>

            <div>
                <h2 class="rt01pagitem">Galérie</h2>
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
</div>
<!-- TEMPLATE PREVIEW - end
======================================================================== -->


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
@include('layouts/partials/_footer')
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