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
                "fx"    : "line",
                "speed" : 800,
                "pag"   : { "align": "center" }
            }'>

                <div>
                    <h2 class="rt01pagitem">Article</h2>


                    <!-- Dummy Content - begin -->
                    <div class="row font-blokk">
                        <div class="col2">
                            <h2 class="bo-l-h"><i> {{$theActivity->titre}}</i></h2>
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
                                <h2>
                                    IL EST TEMPS DE S'ATTAQUER À LA VIOLENCE
                                </h2>
                                <p>
                                    Au cours des prochains mois, nous aurons l'occasion de nous
                                    concentrer sur certains des endroits où les filles subissent des
                                    abus et de mettre au défi les dirigeants mondiaux de faire
                                    davantage pour mettre fin à la violence:
                                </p>
                                <p>
                                    Le 7 février, les dirigeants se sont rencontrés au Forum urbain
                                    mondial pour tirer parti de notre succès d'il y a deux ans, où nous
                                    avons plaidé pour le
                                    <a
                                            href="http://habitat3.org/wp-content/uploads/Habitat-III-New-Urban-Agenda-10-September-2016.pdf"
                                    >
                                        Nouvel Agenda Urbain
                                    </a>
                                    * pour assurer la
                                    <a
                                            href="https://plan-international.org/ending-violence/creating-safer-cities"
                                    >
                                        sécurité
                                    </a>
                                    et l'autonomisation des
                                    <a
                                            href="https://plan-international.org/ending-violence/creating-safer-cities"
                                    >
                                        villes
                                    </a>
                                    pour les filles et les jeunes femmes. Cette fois-ci, nous avons
                                    plaidé pour que le Nouvel Agenda Urbain soit mis en œuvre de
                                    manière sensible au genre et aux enfants, incluant la participation
                                    des enfants / jeunes.
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
                            <img class="img-responsive"  src="{{asset('ruby/templates/imgs/animal-focus-landscape2.jpg')}}" alt="">
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



@stop


@section('activites')
    @include('/layouts/partials/_activites')
@stop


@section('footer')
    @include('layouts/partials/_footer')
@stop
