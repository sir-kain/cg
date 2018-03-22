<div id="about" class="main-slider clearfix">
    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-center="0"
         data-slides-per-view="1" data-add-slides="2">
        <div class="swiper-wrapper">
            <div class="swiper-slide active" data-val="0">
                <div class="triheight">
                    @if ($theActivity != false)
                        <img class="blur-img center-image" src="{{asset('assets/img/msas/activite</'.$theActivity->media)}}" alt="" style="max-width: 100%; filter: blur(5px); -webkit-filter: blur(5px);">
                        {{--  {{ HTML::image('public/upload/activite/1.jpeg') }}  --}}
                    @elseif ($theActivity == false)
                        <img class="blur-img center-image" src="{{asset('assets/img/perfstock/slider/collaboration2.jpg')}}"
                             alt="" style="max-width: 100%;">
                    @endif
                    <div class="vertical-align">
                        <div class="square-box">
                            @if ($theActivity != false)
                                <h4 class="square-date">Cellule Genre</h4>
                                <h2 class="square-title"
                                    style="font-size: 50px;">{{str_limit($theActivity->titre, 30)}}</h2>
                                <div class="square-text">{{$theActivity->description}} </div>
                            @elseif($theActivity == false)
                                <h4 class="square-date">Bienvenue</h4>
                                <h2 class="square-title">Cellule Genre</h2>
                                <div class="square-text"> Equité et égalité de genre pour la santé et le bien-être de
                                    toutes et de tous.
                                </div>
                            @endif
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