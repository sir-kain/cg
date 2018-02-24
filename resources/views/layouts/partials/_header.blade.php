<header class="header type-3">
    <div class="logo-block" style="z-index:1;">
        <a class="logo" href="{{ url('') }}">
            <img src="{{asset('assets/img/Logo.png')}}" alt="" width="80px">
        </a>
    </div>
    <div class="container">
        <div class="top-line clearfix"></div>
        <nav class="main-nav">
            {{--<div class="top-line-left">--}}
            {{--<div class="top-contact"><i class="fa fa-envelope-o"></i><a href="mail@gouv.sn">mail@gouv.sn</a></div>--}}
            {{--<div class="top-contact"><i class="fa fa-phone"></i><a href="tal:61402186411">+221 33 888 7700</a>,--}}
            {{--<a href="tal:6166650">+221 33 555 4477</a></div>--}}
            {{--</div>--}}
            <div class="menu-container">
                <div class="menu top-line-right text-light">
                    <ul>
                        <li><a href="{{ url('') }}">Accueil</a>
                            <ul>
                                <li>
                                    {{--<a>&nbsp;</a>--}}
                                    <ul>
                                        <li><a href="{{ route('historique') }}">Historique</a></li>
                                        <li><a href="{{ route('structuration') }}">Structuration</a></li>
                                        <li><a href="{{ route('objectifsambition') }}">Objectifs & Ambitions</a></li>
                                        <li><a href="{{ route('mission') }}">Vision & Missions & Défis</a></li>
                                    </ul>
                                </li>
                                {{--<li><a>&nbsp;</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="{{ url('') }}">Contacts</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a>&nbsp;</a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#" id="navPartenaire">Partenaires</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            </ul>
                        </li>
                        <li><a href="#" id="navActivites">Actualités</a></li>
                        <li><a href="{{route('publications')}}">Publications</a></li>
                        <li><a href="#" id="navActualites">Activités</a></li>
                        {{--<li><a href="#" id="navMediatheque">Médiathèque</a></li>--}}
                        <li><a href="#" id="navDivers">Divers</a>
                            <ul>
                                <li><a href="">Astuces</a></li>
                                <li><a href="#">Bien-être</a></li>
                                <li><a href="#">Beauté</a></li>
                                <li><a href="">Cuisine</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            {{--<div class="top-line-right">--}}
            {{--<div class="top-contact"><i class="fa fa-envelope-o"></i><a href="#">cellulegenre@sante.gouv.sn</a>--}}
            {{--</div>--}}
            {{--<div class="top-contact"><i class="fa fa-phone"></i><a href="tal:00221338694274">00 221 33 869 42 74</a>--}}
            {{--</div>--}}
            {{--<div class="top-social"><a href="#"><i class="fa fa-skype"></i></a><a href="#"><i--}}
            {{--class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-linkedin"></i></a>--}}
            {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
            {{--</div>--}}
            {{--<a class="search-link top-search" href="#"><i class="fa fa-search"></i></a>--}}
            {{--<div class="search-popup custom-popup">--}}
            {{--<form>--}}
            {{--<div class="popup-close"><i class="fa fa-times"></i></div>--}}
            {{--<h3 class="popup-title text-center">Rechercher</h3>--}}
            {{--<div class="c-form-group">--}}
            {{--<div class="c-form-label">Entrer votre recherche</div>--}}
            {{--<input type="text" required="" value=""></div>--}}
            {{--<input class="c-btn b-50 black hv-blue-o"--}}
            {{--type="submit" value="Rechercher"></form>--}}
            {{--</div>--}}
            {{--</div>--}}
        </nav>
        <button class="cmn-toggle-switch"><span></span></button>
    </div>
</header>
