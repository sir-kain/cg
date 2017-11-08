  <div id="about" class="main-slider clearfix">
        <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1" data-add-slides="2">
          <div class="swiper-wrapper">
            <div class="swiper-slide active" data-val="0">
              <div class="triheight">
              @if ($theActivity != false)
                <img class="center-image" src="{{asset('storage/upload/activite/'.$theActivity->media)}}" alt="" style="max-width: 100%;">
                {{--  {{ HTML::image('public/upload/activite/1.jpeg') }}  --}}
              @elseif ($theActivity == false)
              <img class="center-image" src="{{asset('assets/img/perfstock/slider/collaboration2.jpg')}}" alt="" style="max-width: 100%;">
              @endif
                <div class="vertical-align">
                  <div class="square-box">
                    @if ($theActivity != false)
                      <h4 class="square-date">Cellule Genre</h4>
                      <h2 class="square-title">{{str_limit($theActivity->titre, 20)}}</h2>
                      <div class="square-text">{{$theActivity->description}} </div>
                    @elseif($theActivity == false)
                      <h4 class="square-date">Bienvenue sur</h4>
                      <h2 class="square-title">Cellule Genre</h2>
                      <div class="square-text">Le slogan cellule genre ici... </div>
                      @endif
                      {{--  @elseif($id == 2)
                        <h4 class="square-date">Bienvenue sur</h4>
                        <h2 class="square-title">Admin Cellule Genre</h2>
                        <div class="square-text">Lorem impsut dolor Lorem impsut dolor Lorem impsut dolor Lorem impsut dolor. </div>
                   
                      @endif  --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="swiper-slide" data-val="1">
                        <div class="fullheight">
                            <img class="center-image" src="../assets/img/bg_1.jpg" alt="">
                            <div class="vertical-align">
                              <div class="square-box">
                                <h4 class="square-date">25 June 2015</h4>
                                <h2 class="square-title">design conference</h2>
                                <div class="square-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodn</div>
                              </div>
                            </div>
                        </div>
                      </div> -->
            {{--  <div class="swiper-slide" data-val="2">
              <div class="triheight">
                <img class="center-image" src="{{asset('assets/img/perfstock/slider/confroom2.jpg')}}" alt="">
                <div class="vertical-align">
                  <div class="square-box">
                    <h4 class="square-date">Lorem impsut dolor </h4>
                    <h2 class="square-title">Lorem</h2>
                    <div class="square-text">Lorem impsut dolor lorem</div>
                  </div>
                </div>
              </div>
            </div>  --}}
          </div>
          <div class="pagination"></div>
          <div class="swiper-arrow-left style-1"><img src="{{asset('assets/img/arrow_left.png')}}" alt=""></div>
          <div class="swiper-arrow-right style-1"><img src="{{asset('assets/img/arrow_right.png')}}" alt=""></div>
        </div>
      </div>