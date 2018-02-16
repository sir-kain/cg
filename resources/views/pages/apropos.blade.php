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
            <div class="row" style="padding: 20px;">
                <div class="title-head">
                    <div class="title-head-inner">
                        <h1 class="no-wrap justify" style="font-weight: 100">Presentation</h1>
                    </div>
                    <div class="page-summary">
                        <p class="justify" style="padding-left: 30px; padding-right: 30px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus, cum debitis ipsa
                            iste labore neque officia sit vel velit. Aspernatur autem debitis, dolore dolorem eos
                            molestias numquam quas similique.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- TABS PREVIEW - begin -->
                    <div class="rt01 rt01underline rt01size-l"
                         data-tabs='{
                                "fx"    : "line",
                                "speed" : 800,
                                "pag": { "direction": "hor", "align": "center" }}'>

                        {{-- HISTORIQUE --}}
                        <div style="padding: 40px">
                            <h2 style="font-size: 20px" class="rt01pagitem">Historique</h2>
                            <!-- Dummy Content - begin -->
                            <div class="row font-blokk">
                                <div class="col12">
                                    <p class="dropcap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Missions de la cellule
                                        Genre </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">Le S&eacute;n&eacute;gal a ratifi&eacute; de nombreux instruments juridiques&nbsp;:</span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><strong>Au plan international: </strong></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">Convention de 1985 sur l&rsquo;Elimination de toutes Formes de Discrimination &agrave; l&rsquo;Egard des Femmes (CEDAW/CEDEF).</span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><strong>Au plan r&eacute;gional: </strong></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">Protocole &agrave; la Charte Africaine des Droits de l&rsquo;Homme et des Peuples relatif aux Droits de la Femme (Protocole de Maputo), en d&eacute;cembre 2004.</span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><strong>Au plan national: </strong></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">Constitution de 2001 qui garantit express&eacute;ment l&rsquo;&eacute;galit&eacute; des droits entre les hommes et les femmes en mettant l&rsquo;accent sur les femmes rurales.</span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="color: #000000;"><span
                                                    style="font-family: Times\ New\ Roman, serif;"><span
                                                        style="font-size: medium;">L&rsquo;&eacute;laboration de trois cadres de r&eacute;f&eacute;rence en faveur de la promotion de la femme, respectivement en 1982 (1</span></span></span><span
                                                style="color: #000000;"><sup><span
                                                        style="font-family: Times\ New\ Roman, serif;"><span
                                                            style="font-size: medium;">er</span></span></sup></span><span
                                                style="color: #000000;"><span
                                                    style="font-family: Times\ New\ Roman, serif;"><span
                                                        style="font-size: medium;"> Plan d&rsquo;actions de la Femme), en 1996 ( 2</span></span></span><span
                                                style="color: #000000;"><sup><span
                                                        style="font-family: Times\ New\ Roman, serif;"><span
                                                            style="font-size: medium;">&egrave;me</span></span></sup></span><span
                                                style="color: #000000;"><span
                                                    style="font-family: Times\ New\ Roman, serif;"><span
                                                        style="font-size: medium;"> Plan d&rsquo;actions de la Femme conform&eacute;ment au programme d&rsquo;actions de Beijing) et 2005 (</span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">Strat&eacute;gie Nationale de l&rsquo;Equit&eacute; et Egalit&eacute; de Genre (</span></span><span
                                                style="color: #000000;"><span
                                                    style="font-family: Times\ New\ Roman, serif;"><span
                                                        style="font-size: medium;">SNEEG) 2005-2015), confirme l&rsquo;engagement des autorit&eacute;s &agrave; am&eacute;liorer les conditions de vie des populations selon des modalit&eacute;s et des politiques qui promeuvent la femme et l&rsquo;&eacute;galit&eacute; des femmes et des hommes en tenant compte des &eacute;carts .</span></span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">La Strat&eacute;gie Nationale de l&rsquo;Equit&eacute; et Egalit&eacute; de Genre (SNEEG) est le 3&egrave;me cadre de r&eacute;f&eacute;rence pour la promotion de la femme et de l&rsquo;&eacute;galit&eacute; de genre au S&eacute;n&eacute;gal. Elle a &eacute;t&eacute; &eacute;labor&eacute;e en 2004 suivant un processus participatif auquel tous les acteurs de d&eacute;veloppement, parties prenantes de la promotion de la femme et de l&rsquo;&eacute;galit&eacute; de genre ont activement contribu&eacute;.</span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">Le S&eacute;n&eacute;gal a adopt&eacute; cette strat&eacute;gie afin de mettre en &oelig;uvre la vision de&nbsp;: &laquo;&nbsp;faire du S&eacute;n&eacute;gal un pays &eacute;mergent o&ugrave; les hommes et les femmes auront les m&ecirc;mes chances de participer &agrave; son d&eacute;veloppement et de jouir des b&eacute;n&eacute;fices de sa croissance.&nbsp;&raquo;. </span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">A ce jour, cette SNEEG 1 a &eacute;t&eacute; r&eacute;vis&eacute;e. Nous disposons de la SNEEG 2 qui trouve ses fondements dans: </span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><strong>L&rsquo;option sp&eacute;cifique du PSE </strong></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">relative &agrave; l&rsquo;int&eacute;gration du genre dans les politiques publiques; </span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">une strat&eacute;gie de lutte contre toute forme d&rsquo;in&eacute;galit&eacute;s; </span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">un moyen d&rsquo;assurer &agrave; tous </span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><strong>une participation &eacute;quitable au processus de d&eacute;veloppement;</strong></span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">la contribution &agrave; la mise en &oelig;uvre des objectifs de d&eacute;veloppement durable (ODD), surtout </span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><strong>ODD 5 &laquo;assurer l&rsquo;&eacute;galit&eacute; des sexes et autonomiser toutes les femmes et les filles&nbsp;&raquo;</strong></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">.</span></span></p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">Un plan de mise en &oelig;uvre de la SNEEG 1, a &eacute;t&eacute; &eacute;labor&eacute; &agrave; travers une approche multisectorielle pour promouvoir l&rsquo;&eacute;galit&eacute; de genre sur le plan socioculturel, &eacute;conomique, juridique, politique et sanitaire. Afin de renforcer l&rsquo;institutionnalisation de l&rsquo;int&eacute;gration transversale du genre dans ces secteurs, le Minist&egrave;re de la Famille, de la petite Enfance et de l&rsquo;Entreprenariat F&eacute;minin (MFEEF), devenu aujourd&rsquo;hui Minist&egrave;re de la Femme, de la Famille et du genre, a recommand&eacute; depuis quelques ann&eacute;es, la mise en place de cellules ou points focaux au sein des directions de planification, suivi/&eacute;valuation des diff&eacute;rents minist&egrave;res, institutions et autres organismes non gouvernementaux.</span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span style="background: #ffffff;">A cet effet, la cellule genre du Minist&egrave;re de la Sant&eacute; et de l&rsquo;Action sociale, </span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span lang="fr-BE">a &eacute;t&eacute; cr&eacute;&eacute;e par arr&ecirc;t&eacute; </span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span lang="fr-BE"><strong>n&deg; 1454/MSAS/DPRS/CG du 03/02/2015, </strong></span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span lang="fr-BE">suite &agrave; </span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;">la circulaire primatoriale du 26 mars 2013 invitant les diff&eacute;rents d&eacute;partements minist&eacute;riels &agrave; assurer la prise en compte du genre dans leur secteur</span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span lang="fr-BE">.</span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"> Dans ce cadre, il est attendu, de chaque minist&egrave;re, le d&eacute;veloppement d&rsquo;initiatives de promotion interne de l&rsquo;int&eacute;gration du genre dans les politiques, programmes et projets sectoriels.</span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span lang="fr-BE">La cellule genre du MSAS est rattach&eacute;e &agrave; la Direction de la Planification, de la Recherche et des Statistiques (DPRS). Mais depuis le d&eacute;cret num&eacute;ro </span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span
                                                        lang="fr-BE">&hellip;&hellip;..</span></span></span><span
                                                style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span lang="fr-BE">portant organisation des services de l&rsquo;&eacute;tat, la cellule genre au m&ecirc;me titre que la Planification sont rattach&eacute;s directement au Secr&eacute;tariat G&eacute;n&eacute;ral du Minist&egrave;re de la Sant&eacute; et de l&rsquo;action sociale. Cependant, son application tarde &agrave; &ecirc;tre effective. Par ailleurs, le Bureau Organisation et M&eacute;thode veillera &agrave; cette effectivit&eacute;.</span></span></span>
                                    </p>
                                    <p class="western" style="margin-bottom: 0cm; line-height: 150%;" align="justify">
                                        <span style="font-family: Times\ New\ Roman, serif;"><span
                                                    style="font-size: medium;"><span style="background: #ffffff;">Elle traduit en action les orientations de la politique nationale d&rsquo;&eacute;quit&eacute; et d&rsquo;&eacute;galit&eacute; entre les femmes et les hommes au S&eacute;n&eacute;gal dans le domaine de la sant&eacute;.</span></span></span>
                                    </p>
                                </div>
                            </div>
                            <!-- Dummy Content - end -->
                        </div>

                        {{-- COMPOSITION STRUCTURATION --}}
                        <div>
                            <h1 style="font-size: 21px" class="rt01pagitem">Composition (Structuration)</h1>

                            <div class="row">
                                <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                                    <div class="news type-1 facebook">
                                        <h4><a class="news-title" href="{{ url('docs/froutegenre.pptx') }}"
                                               target="_blank">Feuille
                                                de route de la Cellule Genre du Ministère de la Santé et de l'Action
                                                sociale</a>
                                        </h4>
                                        {{--  <div class="news-date"><i class="fa fa-clock-o"></i> 25 Septembre 2016</div>
                                        <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                                         --}}
                                        <div class="news-likes">
                                            <a href="{{ url('docs/froutegenre.pptx') }}" target="_blank"><i
                                                        class="fa fa-file-pdf-o fa-2x"></i></a>
                                            {{--  <a href="#"><i class="fa fa-comment-o"></i> 79</a>  --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                                    <div class="news type-2">
                                        {{--  <img class="img-responsive" src="../assets/img/perfstock/alaune/tanzaniefit.jpg" alt="">  --}}
                                        {{--  <div class="news-desc">  --}}
                                        <h4><a class="news-title" href="{{ url('docs/froutegenre.docx') }}"
                                               target="_blank">Arrêté
                                                portant création et fixant les règles d'organisation et fonctionnement
                                                de la
                                                Cellule Genre du Ministère de la Santé et de l'Action sociale</a></h4>
                                        <div class="news-date"><i class="fa fa-file-pdf-o fa-2x"></i></div>
                                        {{--  </div>  --}}
                                    </div>
                                </div>
                                <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                                    <div class="news type-1 twitter">
                                        <h4><a class="news-title" href="{{ url('docs/msassrd.pdf') }}" target="_blank">Institutionnalisation
                                                du genre du Ministère de la santé et de l’Action (MSAS)</a></h4>
                                        {{--  <div class="news-date"><i class="fa fa-clock-o"></i> 24 Aout 2016</div>
                                        <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                                         --}}
                                        <div class="news-likes">
                                            <a href="{{ url('docs/msassrd.pdf') }}" target="_blank"><i
                                                        class="fa fa-file-pdf-o fa-2x"></i></a>
                                            {{--  <a href="#"><i class="fa fa-star-o"></i> 79</a>  --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                                    <div class="news type-2">
                                        {{--  <img class="img-responsive" src="../assets/img/perfstock/alaune/obama_power_africa.jpg" alt="">  --}}
                                        <div class="news-desc">
                                            <h4><a class="news-title" href="{{ url('docs/depliantgenre.pdf') }}"
                                                   target="_blank">Ministère de la Santé et de l’Action sociale.
                                                    Qu’est-ce que
                                                    c’est le genre ?</a></h4>
                                            {{--  <div class="news-date"><i class="fa fa-clock-o"></i> 21 Septembre 2016</div>  --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                                    <div class="news type-1 twitter">
                                        <h4><a class="news-title" href="{{ url('docs/rapforgenre.docx') }}"
                                               target="_blank">Rapport
                                                du renforcement des capacités en genre des membres de la Cellule Genre
                                                du
                                                MSAS.</a></h4>
                                        {{--  <div class="news-date"><i class="fa fa-clock-o"></i> 02 Octobre 2016</div>
                                        <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                                        <div class="news-likes">
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i> 980</a>
                                            <a href="#"><i class="fa fa-star-o"></i> 79</a>
                                        </div>  --}}
                                    </div>
                                </div>
                                <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                                    <div class="news type-1 facebook">
                                        <h4><a class="news-title" href="{{ url('docs/pmosneeg.pdf') }}" target="_blank">Plan
                                                de
                                                mise en oeuvre de la stratégie nationale pour l'équité et l'égalité de
                                                genre au
                                                Sénégal</a></h4>
                                        {{--  <div class="news-date"><i class="fa fa-clock-o"></i> 30 Septembre 2016</div>
                                        <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                                        <div class="news-likes">
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i> 980</a>
                                            <a href="#"><i class="fa fa-comment-o"></i> 79</a>
                                        </div>  --}}
                                    </div>
                                </div>
                                <div class="news-entry col-xs-12 col-sm-6 col-md-4">
                                    <div class="news type-1 twitter">
                                        <h4><a class="news-title" href="{{ url('docs/sneegenre.pdf') }}"
                                               target="_blank">Stratégie
                                                Nationale pour l'Equité et l'Egalité de Genre</a></h4>
                                        {{--  <div class="news-date"><i class="fa fa-clock-o"></i> 24 Aout 2016</div>
                                        <a class="news-type" href="#"><i class="fa fa-facebook"></i></a>
                                        <div class="news-likes">
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i> 980</a>
                                            <a href="#"><i class="fa fa-star-o"></i> 79</a>
                                        </div>  --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- VISION --}}
                        <div>
                            <h1 style="font-size: 21px" class="rt01pagitem">Vision</h1>

                            <div class="row bg-wrap">

                                <div class="col8">
                                    {{--  {!! Form::open(['url' => 'admin.create', 'class' => 'block clearfix']) !!}
                                        {!! Form::text('titre', '', ['placeholder' => 'Titre', 'class' => 'large']) !!}
                                        {!! Form::textarea('contenu', '', ['placeholder' => 'Contenu', 'rows' => '5', 'cols' => '30']) !!}
                                        {!! Form::submit('Ajouter', ['class' => 'btn large pull-right no-ma']) !!}
                                    {!! Form::close() !!}  --}}
                                    <form class="block clearfix" method="POST">
                                        {{ csrf_field() }}


                                        <input type="text" name="nom" class="large" placeholder="Nom et Prenom">
                                        <input type="email" name="email" class="large" placeholder="email">
                                        <input type="text" name="sujet" class="large" placeholder="Sujet">
                                        {{--  <input type="text" class="large" placeholder="Password">
                                        <input type="text" class="large" placeholder="Repeat Password">
                                        <input type="text" class="large" placeholder="Email">  --}}
                                        <textarea name="contenu" cols="30" rows="5" placeholder="Contenu"></textarea>

                                        {{--  <label class="checkbox text-small muted pull-left" for="terms">
                                            <input id="terms" type="checkbox">I have read and I agree the Terms of Use
                                        </label>  --}}

                                        <input class="btn large pull-right no-ma" type="submit" value="Envoyer">
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- MISSIONS --}}
                        <div>
                            <h1 style="font-size: 21px" class="rt01pagitem">Missions</h1>

                            <!-- Dummy Content - begin -->
                            <div class="row font-blokk">
                                <div class="col12">
                                    <p class="dropcap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Missions de la cellule
                                        Genre </p>
                                    <p>La cellule a pour missions de veiller à l’intégration de la dimension genre dans
                                        toutes
                                        les activités
                                        des structures du ministère notamment à travers sa prise en compte dans les
                                        politiques,
                                        programmes,
                                        projets de développement et budgets. <br> A ce titre, elle sera responsable de
                                        la mise
                                        en œuvre
                                        du plan d’institutionnalisation du genre et en conséquence, comptable des
                                        résultats
                                        obtenus en
                                        faveur de la promotion du genre dans les différentes structures.</p>
                                    <p style="color: black;">
                                        <u> Plus spécifiquement, la cellule genre aura la responsabilité :</u>
                                    </p>
                                    <ul type="square">
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’élaborer,
                                            chaque
                                            année, le
                                            cadre d’actions annuel de toutes les parties prenantes du ministère en se
                                            référant
                                            au Plan
                                            de mise en Œuvre de la SNEEG et au plan d’institutionnalisation du genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            mobilisation des
                                            ressources aussi bien humaines, matérielles que financières nécessaires à la
                                            mise en
                                            œuvre
                                            du cadre d’actions annuel ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du Ministère avec
                                            l’appui du
                                            Mécanisme
                                            National Genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de mettre en
                                            œuvre avec
                                            l’appui du
                                            Mécanisme national genre (MNG), le programme de renforcement des capacités
                                            en genre
                                            à l’intention
                                            du personnel du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’appuyer le
                                            Ministère
                                            dans le plaidoyer
                                            pour la promotion du genre et la mobilisation des ressources pour la mise en
                                            œuvre
                                            de la
                                            du PIG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            mise en
                                            œuvre de
                                            la stratégie de communication genre au sein du ministère.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>Missions de la Coordonnatrice de la ‘Cellule Genre La Coordinatrice de la
                                            Cellule
                                            Genre aura
                                            comme responsabilités :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer,
                                            chaque
                                            année, le cadre
                                            d’action annuel de toutes les parties prenantes de sa structure en se
                                            référant au
                                            plan de
                                            mise en œuvre de la SNEEG et, le cas échéant, le plan
                                            d’institutionnalisation
                                            élaboré ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation des activités ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du secteur avec
                                            l’appui du
                                            mécanisme
                                            national genre (MNG) ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du secteur ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer et de
                                            mettre
                                            en œuvre
                                            avec l’appui du mécanisme national genre, un programme de renforcement des
                                            capacités
                                            en genre
                                            à l’intention du personnel du ministère et des ONG partenaires ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’appuyer le
                                            ministère
                                            dans le
                                            plaidoyer pour la promotion du genre et la mobilisation des ressources pour
                                            la mise
                                            en œuvre
                                            de la stratégie nationale pour l’équité et l’égalité de genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter
                                            l’élaboration et la
                                            mise en œuvre d’une stratégie de communication genre au sein de la
                                            structure.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>La Coordinatrice de la Cellule Genre aura comme tâches également :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Coordonner le
                                            réseau des
                                            PFG
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le suivi
                                            du plan
                                            de travail
                                            (feuille de route)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Créer les
                                            relations avec
                                            la cellule
                                            Genre du ministère de l’hydraulique et de l’assainissement (MHA)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le
                                            plaidoyer pour
                                            la prise
                                            en compte de l’approche par les PTF/ Entretenir les contacts avec les PTF
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Entretenir les
                                            contacts
                                            avec MFFE.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dummy Content - end -->
                        </div>

                        {{-- OBJECTIFS --}}
                        <div>
                            <h1 style="font-size: 21px" class="rt01pagitem">Objectifs</h1>

                            <!-- Dummy Content - begin -->
                            <div class="row font-blokk">
                                <div class="col12">
                                    <p class="dropcap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Missions de la cellule
                                        Genre </p>
                                    <p>La cellule a pour missions de veiller à l’intégration de la dimension genre dans
                                        toutes
                                        les activités
                                        des structures du ministère notamment à travers sa prise en compte dans les
                                        politiques,
                                        programmes,
                                        projets de développement et budgets. <br> A ce titre, elle sera responsable de
                                        la mise
                                        en œuvre
                                        du plan d’institutionnalisation du genre et en conséquence, comptable des
                                        résultats
                                        obtenus en
                                        faveur de la promotion du genre dans les différentes structures.</p>
                                    <p style="color: black;">
                                        <u> Plus spécifiquement, la cellule genre aura la responsabilité :</u>
                                    </p>
                                    <ul type="square">
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’élaborer,
                                            chaque
                                            année, le
                                            cadre d’actions annuel de toutes les parties prenantes du ministère en se
                                            référant
                                            au Plan
                                            de mise en Œuvre de la SNEEG et au plan d’institutionnalisation du genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            mobilisation des
                                            ressources aussi bien humaines, matérielles que financières nécessaires à la
                                            mise en
                                            œuvre
                                            du cadre d’actions annuel ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du Ministère avec
                                            l’appui du
                                            Mécanisme
                                            National Genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de mettre en
                                            œuvre avec
                                            l’appui du
                                            Mécanisme national genre (MNG), le programme de renforcement des capacités
                                            en genre
                                            à l’intention
                                            du personnel du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’appuyer le
                                            Ministère
                                            dans le plaidoyer
                                            pour la promotion du genre et la mobilisation des ressources pour la mise en
                                            œuvre
                                            de la
                                            du PIG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            mise en
                                            œuvre de
                                            la stratégie de communication genre au sein du ministère.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>Missions de la Coordonnatrice de la ‘Cellule Genre La Coordinatrice de la
                                            Cellule
                                            Genre aura
                                            comme responsabilités :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer,
                                            chaque
                                            année, le cadre
                                            d’action annuel de toutes les parties prenantes de sa structure en se
                                            référant au
                                            plan de
                                            mise en œuvre de la SNEEG et, le cas échéant, le plan
                                            d’institutionnalisation
                                            élaboré ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation des activités ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du secteur avec
                                            l’appui du
                                            mécanisme
                                            national genre (MNG) ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du secteur ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer et de
                                            mettre
                                            en œuvre
                                            avec l’appui du mécanisme national genre, un programme de renforcement des
                                            capacités
                                            en genre
                                            à l’intention du personnel du ministère et des ONG partenaires ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’appuyer le
                                            ministère
                                            dans le
                                            plaidoyer pour la promotion du genre et la mobilisation des ressources pour
                                            la mise
                                            en œuvre
                                            de la stratégie nationale pour l’équité et l’égalité de genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter
                                            l’élaboration et la
                                            mise en œuvre d’une stratégie de communication genre au sein de la
                                            structure.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>La Coordinatrice de la Cellule Genre aura comme tâches également :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Coordonner le
                                            réseau des
                                            PFG
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le suivi
                                            du plan
                                            de travail
                                            (feuille de route)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Créer les
                                            relations avec
                                            la cellule
                                            Genre du ministère de l’hydraulique et de l’assainissement (MHA)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le
                                            plaidoyer pour
                                            la prise
                                            en compte de l’approche par les PTF/ Entretenir les contacts avec les PTF
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Entretenir les
                                            contacts
                                            avec MFFE.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dummy Content - end -->
                        </div>

                        {{-- DEFIS --}}
                        <div>
                            <h1 style="font-size: 21px" class="rt01pagitem">Défis</h1>

                            <!-- Dummy Content - begin -->
                            <div class="row font-blokk">
                                <div class="col12">
                                    <p class="dropcap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Missions de la cellule
                                        Genre </p>
                                    <p>La cellule a pour missions de veiller à l’intégration de la dimension genre dans
                                        toutes
                                        les activités
                                        des structures du ministère notamment à travers sa prise en compte dans les
                                        politiques,
                                        programmes,
                                        projets de développement et budgets. <br> A ce titre, elle sera responsable de
                                        la mise
                                        en œuvre
                                        du plan d’institutionnalisation du genre et en conséquence, comptable des
                                        résultats
                                        obtenus en
                                        faveur de la promotion du genre dans les différentes structures.</p>
                                    <p style="color: black;">
                                        <u> Plus spécifiquement, la cellule genre aura la responsabilité :</u>
                                    </p>
                                    <ul type="square">
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’élaborer,
                                            chaque
                                            année, le
                                            cadre d’actions annuel de toutes les parties prenantes du ministère en se
                                            référant
                                            au Plan
                                            de mise en Œuvre de la SNEEG et au plan d’institutionnalisation du genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            mobilisation des
                                            ressources aussi bien humaines, matérielles que financières nécessaires à la
                                            mise en
                                            œuvre
                                            du cadre d’actions annuel ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du Ministère avec
                                            l’appui du
                                            Mécanisme
                                            National Genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de mettre en
                                            œuvre avec
                                            l’appui du
                                            Mécanisme national genre (MNG), le programme de renforcement des capacités
                                            en genre
                                            à l’intention
                                            du personnel du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’appuyer le
                                            Ministère
                                            dans le plaidoyer
                                            pour la promotion du genre et la mobilisation des ressources pour la mise en
                                            œuvre
                                            de la
                                            du PIG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            mise en
                                            œuvre de
                                            la stratégie de communication genre au sein du ministère.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>Missions de la Coordonnatrice de la ‘Cellule Genre La Coordinatrice de la
                                            Cellule
                                            Genre aura
                                            comme responsabilités :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer,
                                            chaque
                                            année, le cadre
                                            d’action annuel de toutes les parties prenantes de sa structure en se
                                            référant au
                                            plan de
                                            mise en œuvre de la SNEEG et, le cas échéant, le plan
                                            d’institutionnalisation
                                            élaboré ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation des activités ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du secteur avec
                                            l’appui du
                                            mécanisme
                                            national genre (MNG) ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du secteur ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer et de
                                            mettre
                                            en œuvre
                                            avec l’appui du mécanisme national genre, un programme de renforcement des
                                            capacités
                                            en genre
                                            à l’intention du personnel du ministère et des ONG partenaires ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’appuyer le
                                            ministère
                                            dans le
                                            plaidoyer pour la promotion du genre et la mobilisation des ressources pour
                                            la mise
                                            en œuvre
                                            de la stratégie nationale pour l’équité et l’égalité de genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter
                                            l’élaboration et la
                                            mise en œuvre d’une stratégie de communication genre au sein de la
                                            structure.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>La Coordinatrice de la Cellule Genre aura comme tâches également :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Coordonner le
                                            réseau des
                                            PFG
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le suivi
                                            du plan
                                            de travail
                                            (feuille de route)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Créer les
                                            relations avec
                                            la cellule
                                            Genre du ministère de l’hydraulique et de l’assainissement (MHA)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le
                                            plaidoyer pour
                                            la prise
                                            en compte de l’approche par les PTF/ Entretenir les contacts avec les PTF
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Entretenir les
                                            contacts
                                            avec MFFE.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dummy Content - end -->
                        </div>

                        {{-- AMBITIONS --}}
                        <div>
                            <h1 style="font-size: 21px" class="rt01pagitem">Ambitions (Perspectives)</h1>

                            <!-- Dummy Content - begin -->
                            <div class="row font-blokk">
                                <div class="col12">
                                    <p class="dropcap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Missions de la cellule
                                        Genre </p>
                                    <p>La cellule a pour missions de veiller à l’intégration de la dimension genre dans
                                        toutes
                                        les activités
                                        des structures du ministère notamment à travers sa prise en compte dans les
                                        politiques,
                                        programmes,
                                        projets de développement et budgets. <br> A ce titre, elle sera responsable de
                                        la mise
                                        en œuvre
                                        du plan d’institutionnalisation du genre et en conséquence, comptable des
                                        résultats
                                        obtenus en
                                        faveur de la promotion du genre dans les différentes structures.</p>
                                    <p style="color: black;">
                                        <u> Plus spécifiquement, la cellule genre aura la responsabilité :</u>
                                    </p>
                                    <ul type="square">
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’élaborer,
                                            chaque
                                            année, le
                                            cadre d’actions annuel de toutes les parties prenantes du ministère en se
                                            référant
                                            au Plan
                                            de mise en Œuvre de la SNEEG et au plan d’institutionnalisation du genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            mobilisation des
                                            ressources aussi bien humaines, matérielles que financières nécessaires à la
                                            mise en
                                            œuvre
                                            du cadre d’actions annuel ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du Ministère avec
                                            l’appui du
                                            Mécanisme
                                            National Genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de mettre en
                                            œuvre avec
                                            l’appui du
                                            Mécanisme national genre (MNG), le programme de renforcement des capacités
                                            en genre
                                            à l’intention
                                            du personnel du Ministère ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; d’appuyer le
                                            Ministère
                                            dans le plaidoyer
                                            pour la promotion du genre et la mobilisation des ressources pour la mise en
                                            œuvre
                                            de la
                                            du PIG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; de faciliter la
                                            mise en
                                            œuvre de
                                            la stratégie de communication genre au sein du ministère.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>Missions de la Coordonnatrice de la ‘Cellule Genre La Coordinatrice de la
                                            Cellule
                                            Genre aura
                                            comme responsabilités :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer,
                                            chaque
                                            année, le cadre
                                            d’action annuel de toutes les parties prenantes de sa structure en se
                                            référant au
                                            plan de
                                            mise en œuvre de la SNEEG et, le cas échéant, le plan
                                            d’institutionnalisation
                                            élaboré ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De veiller à la
                                            prise en
                                            compte des
                                            besoins et intérêts différenciés des femmes et des hommes dans les cadres de
                                            planification,
                                            de programmation et de budgétisation des activités ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De constituer
                                            une base
                                            de données
                                            ventilées par sexe sur la situation des groupes-cibles du secteur avec
                                            l’appui du
                                            mécanisme
                                            national genre (MNG) ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De contribuer à
                                            la
                                            préparation et
                                            à l’organisation de la revue annuelle de la mise en œuvre de la SNEEG ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter la
                                            formulation et le
                                            suivi des indicateurs de résultats tenant compte du genre dans les domaines
                                            d’intervention
                                            du secteur ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’élaborer et de
                                            mettre
                                            en œuvre
                                            avec l’appui du mécanisme national genre, un programme de renforcement des
                                            capacités
                                            en genre
                                            à l’intention du personnel du ministère et des ONG partenaires ;
                                        </li>
                                        <li>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; D’appuyer le
                                            ministère
                                            dans le
                                            plaidoyer pour la promotion du genre et la mobilisation des ressources pour
                                            la mise
                                            en œuvre
                                            de la stratégie nationale pour l’équité et l’égalité de genre ;
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; De faciliter
                                            l’élaboration et la
                                            mise en œuvre d’une stratégie de communication genre au sein de la
                                            structure.
                                        </li>
                                    </ul>
                                    <p style="color: black;">
                                        <u>La Coordinatrice de la Cellule Genre aura comme tâches également :</u>
                                    </p>
                                    <ul>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Coordonner le
                                            réseau des
                                            PFG
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le suivi
                                            du plan
                                            de travail
                                            (feuille de route)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Créer les
                                            relations avec
                                            la cellule
                                            Genre du ministère de l’hydraulique et de l’assainissement (MHA)
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Faire le
                                            plaidoyer pour
                                            la prise
                                            en compte de l’approche par les PTF/ Entretenir les contacts avec les PTF
                                        </li>
                                        <li><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; Entretenir les
                                            contacts
                                            avec MFFE.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dummy Content - end -->
                        </div>
                    </div>
                    <!-- TABS PREVIEW - end -->

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
