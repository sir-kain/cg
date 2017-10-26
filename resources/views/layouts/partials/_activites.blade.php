<div class="main-block clearfix" id="sectionActivites">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="block-header">
                    <h4 class="block-category">A la Une</h4>
                    <h2 class="block-title">Nouveautés</h2>
                    <div class="block-text">Découvrez les derniers contenus partagés sur la plateforme</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="1000" data-slides-per-view="responsive" data-mob-slides="1"
                data-xs-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                <div class="swiper-wrapper">
                @foreach($activities as $activity)
                    <div class="swiper-slide" data-val="{{$loop->index}}">
                        <div class="about-item">
                            <a class="about-title" href="{{ url('activite/'.$activity->slug) }}">
                            <img class="img-responsive" src="{{asset('storage/upload/activite/'.$activity->media)}}" alt="" style="height:200px">
                            {{$activity->titre}}</a>
                            <div class="about-keywords">
                                <a href="#" class="tags">Activités </a>/
                                <a href="{{route('admin.edit', $activity)}}" class="tags">Editer </a>
                                <!-- <a href="#" class="tags">indice </a>/
                                <a href="#" class="tags">rapport </a>/
                                <a href="#" class="tags">initiative </a> -->
                            </div>
                            <div class="about-text"> {{$activity->description}}.</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination"></div>
            </div>
        </div>
    </div>
</div>