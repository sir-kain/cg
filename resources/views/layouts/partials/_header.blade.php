<!-- HEADER -->
<!-- HEADER - begin
======================================================================== -->
<div class="wrapper header logo-left">
    <div class="container">

        <!-- Logo - begin
        ....................................................................  -->
        <a class="logo" href="{{ url('') }}" data-mScale="100" style="display: inline-flex;">
                <img style="margin-top: -3px" src="{{asset('assets/img/msas/partenaires/ministere-de-la-sante.png')}}" alt="" height="60px">
                <img style="margin: -10px 0 5px 40px;" src="{{asset('assets/img/Logo.png')}}" alt="" height="70px">
        </a>
        <!-- Logo - end
        ....................................................................  -->



        <!-- Menu - begin
        ....................................................................  -->
        <nav class="rm01">
            <ul class="rm01menu">
                <li>
                    <a href="{{ url('') }}">Présentation</a>
                    <ul class="rm01menu">

                        <li><a href="{{ route('historique') }}">Historique</a></li>
                        <li><a href="{{ route('structuration') }}">Structuration</a></li>
                        <li><a href="{{ route('objectifsambition') }}">Objectifs & Ambitions</a></li>
                        <li><a href="{{ route('mission') }}">Vision & Missions & Défis</a></li>
                    </ul>
                </li>

                <li><a href="#" id="navActivites">Actualités</a></li>

                <li><a href="#" id="navActualites">Activités</a></li>

                <li><a href="{{route('publications')}}">Publications</a></li>

                <li><a href="{{route('mediatheque')}}">Médiathèque</a></li>

            </ul>
        </nav>
        <!-- Menu - end
        ....................................................................  -->

    </div>
</div>
<!-- HEADER - end
======================================================================== -->