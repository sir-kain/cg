<header class="header type-3">
  <div class="logo-block"><a class="logo" href="#"><img src="{{asset('assets/img/Logo.png')}}" alt="" width="100px"></a></div>
  <div class="container">
    <div class="top-line clearfix"></div>
    <nav class="main-nav">
      <!-- <div class="top-line-left"><div class="top-contact"><i class="fa fa-envelope-o"></i><a href="mail@gouv.sn">mail@gouv.sn</a></div><div class="top-contact"><i class="fa fa-phone"></i><a href="tal:61402186411">+221 33 888 7700</a>,
  <a href="tal:6166650">+221 33 555 4477</a></div></div>-->
      <div class="menu-container">
        <div class="menu top-line-right">
          <ul>
            <li><a href="{{ url('') }}">Accueil</a></li>
            <li><a>Présentation</a>
              <ul>
                {{--
                <li><a href="#" class="bold-text"><b>Secteurs</b></a>
                  <ul> --}}
                    <li><a href="{{ url('docs/depliantgenre.pdf') }}" target="_blank">Définition Cellule Genre</a></li>
                    <li><a href="{{ url('apropos') }}">A propos de Cellule Genre</a></li>
                    {{--
                    <li><a href="#">Education et Formation professionelle</a></li> --}} {{-- </ul> --}} {{-- </li> --}} {{--
                <li><a>&nbsp;</a>
                  <ul>
                    <li><a href="#">Santé</a></li>
                    <li><a href="#">Energie</a></li>
                    <li><a href="#">Pêche et Elevage </a></li>
                    <li><a href="#">Infrastructures &amp; aménagement du territoire</a></li>
                  </ul>
                </li>
                <li><a href="#" class="bold-text"><b>Thèmes</b></a>
                  <ul>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Promotion des Investissements</a></li>
                    <li><a href="#">Gouvernance</a></li>
                    <li><a href="#">Réforme des Administrations</a></li>
                  </ul>
                </li>
                <li><a>&nbsp;</a>
                  <ul>
                    <li><a href="#">Intégration Régionale</a></li>
                    <li><a href="#">Planification urbaine</a></li>
                    <li><a href="#">Financement</a></li>
                    <li><a href="#">Développement de l'entrepreneuriat</a></li>
                  </ul>
                </li> --}}
              </ul>
            </li>
            <li><a href="#" id="navActivites">Activités</a> {{--
              <ul> --}} {{--
                <li><a href="#" class="bold-text"><b>Secteurs</b></a>
                  <ul> --}} {{--
                    <li><a href="{{ url('activite') }}">Article 1</a></li>
                    <li><a href="{{ url('activite') }}">Article 2</a></li>
                    <li><a href="#">Article 3</a></li>
                    <li><a href="#">Article 4</a></li> --}} {{--
                    <li><a href="#">Education et Formation professionelle</a></li> --}} {{-- </ul> --}} {{-- </li> --}} {{--
                <li><a>&nbsp;</a>
                  <ul>
                    <li><a href="#">Santé</a></li>
                    <li><a href="#">Energie</a></li>
                    <li><a href="#">Pêche et Elevage </a></li>
                    <li><a href="#">Infrastructures &amp; aménagement du territoire</a></li>
                  </ul>
                </li>
                <li><a href="#" class="bold-text"><b>Thèmes</b></a>
                  <ul>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Promotion des Investissements</a></li>
                    <li><a href="#">Gouvernance</a></li>
                    <li><a href="#">Réforme des Administrations</a></li>
                  </ul>
                </li>
                <li><a>&nbsp;</a>
                  <ul>
                    <li><a href="#">Intégration Régionale</a></li>
                    <li><a href="#">Planification urbaine</a></li>
                    <li><a href="#">Financement</a></li>
                    <li><a href="#">Développement de l'entrepreneuriat</a></li>
                  </ul>
                </li> --}} {{-- </ul> --}}
            </li>
            {{--
            <li><a href="pays.html">Points focaux</a>
              <ul>
                <li><a href="pays.html">Dakar</a></li>
                <li><a href="#">Thies</a></li>
                <li><a href="#">Fatick</a></li>
                <li><a href="pays.html">Kaolack</a></li>
                <li><a href="#">Mbour</a></li>
              </ul>
            </li> --}}
            <li><a href="#" id="navPartenaire">Partenaires</a></li>
            <li><a href="#">Forum</a></li>
            {{--  <li><a href="#">Contacter-nous</a></li>  --}}
            <!-- <ul><li><a href="#">School</a><ul><li><a href="#">Lidership</a></li><li><a href="#">History</a></li><li><a href="#">Locations</a></li><li><a href="#">Careers</a></li></ul></li><li><a href="#">Study</a><ul><li><a href="#">Undergraduate</a></li><li><a href="#">Masters</a></li><li><a href="#">International</a></li><li><a href="#">Online</a></li></ul></li><li><a href="#">Study</a><ul><li><a href="#">Undergraduate</a></li><li><a href="#">Masters</a></li><li><a href="#">International</a></li><li><a href="#">Online</a></li></ul></li><li><a href="#">Empty sub</a></li></ul>-->
            </li>
          </ul>
        </div>
      </div>
      {{--  <div class="top-line-right">
        <div class="top-contact"><i class="fa fa-envelope-o"></i><a href="#">cellulegenre@sante.gouv.sn</a></div>
        <div class="top-contact"><i class="fa fa-phone"></i><a href="tal:00221338694274">00 221 33 869 42 74</a></div>
        <div class="top-social"><a href="#"><i class="fa fa-skype"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
        </div><a class="search-link top-search" href="#"><i class="fa fa-search"></i></a>
        <div class="search-popup custom-popup">
          <form>
            <div class="popup-close"><i class="fa fa-times"></i></div>
            <h3 class="popup-title text-center">Rechercher</h3>
            <div class="c-form-group">
              <div class="c-form-label">Entrer votre recherche</div><input type="text" required="" value=""></div><input class="c-btn b-50 black hv-blue-o"
              type="submit" value="Rechercher"></form>
        </div>
      </div>  --}}
    </nav><button class="cmn-toggle-switch"><span></span></button></div>
</header>
