@extends('layouts.template')

@section('css')
    <!-- layout Core CSS -->
    <link rel="stylesheet" href="{{asset('/css/layout.css')}}">
    <!-- itinerary Core CSS -->
    <link rel="stylesheet" href="{{asset('css/itinerary.css')}}">

    <style>
        #images {  
            height: 300px;
        }
    </style>
@endsection

@section('main')
        <section>
            <div class="banner">
                <div class="layer scenery"></div>
                <div class="layer photo"></div>
            </div>
        </section>

        <!-- 相關行程區 -->
        <section>
            <div class="new-container">
                <div class="itinerary">
                    <div class="page-title">
                        <span>ITINERARY</span>
                        <h1>相關行程</h1>
                    </div>
                    <div class="country">
                        <h2>Iceland<span>  &nbsp;冰島 [歐洲]</span></h2>
                    </div>
                    <div class="col-12  pb-4 ">
                        <img  src="https://fakeimg.pl/939x576/" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="itinerary-body">
                        <h2>藍湖溫泉 blue lagoon</h2>
                        <h3 class="mt-2 pt-3 mt-md-4 pt-md-3">景點介紹</h3>
                        <p>藍湖 blue lagoon 那是一個黑色的火山岩中環抱著的一汪如同藍寶石的熱泉，常天維持在37～39°C，四周的泥地是白色的。由於水質和池邊土壤都富含稀有的礦物，這個溫泉不但美如仙境，更被視為回復青春，保持美麗的聖泉。</p>
                        <p>藍湖之之所以著名是因為：</p>
                        <p>1. 露天的溫泉：由於地熱發達，即使是在雪花飄飛的時候，遊客仍可以泡在暖融融的水中，充分享受大自然的賜予。</p>
                        <p>2. 溫泉泥：由於冰島是多火山國家，而藍湖正是位於一座死火山上，地層中有益的礦物質沉積在湖底，水性好或運氣好的人，在挖到白顏色的泥時會歡呼不已，因為這種泥美顏健體，據說功效不錯。</p>
                        <h3 class="mt-2 pt-3 mt-md-4 pt-md-3">地點資訊</h3>
                        <p>地址：Nordurljosavegur 9, 240 Grindavík</p>
                        <p>營業時間：08:00-22:00</p>
                        <p>門票：浮動票價（越晚訂票票價越高）成人 ISK 6,990 起，兒童免費</p>
                        <p>電話：+354-420-8800</p>
                        <p>詳細資訊：官網 <a href="http://www.bluelagoon.com/">http://www.bluelagoon.com/</a></p>
                    </div>

                </div>
         
            </div>
        </section>


        <!-- 其他相關行程區 -->
        <section>
            <div class="other-itinerary">
                <div class="container">
                    <h2 class="text-center">相關行程</h2>
                    <!-- 相關行程 Swiper -->
                    <div class="swiper-container">
                        <div class="swiper itinerary-swiper pt-4">
                            <div class="swiper-wrapper">
                                @foreach ($itineraries as $itinerary)
                                <div class="swiper-slide">
                                    <a class="itinerary-card" href="{{route('front.itinerary.content',['id' => $itinerary->id])}}">
                                        <div class="content">
                                            <img id="images" src="{{Storage::url($itinerary->image_url)}}" alt="">
                                            <div class="p-3">
                                                <h4 class="mt-2">{{$itinerary->title}}</h4>
                                                <p id="content">{!!$itinerary->content!!}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>    
                    </div> 
                </div>
            </div>
        </section>

        <!-- 背景星星群 -->
        <section>
            <div class="scene"></div>
        </section>

        <!-- 底部按鈕區 -->
        <section >
            <div class="d-flex justify-content-center nxet-page">
                <a class="next-btn" href="./prepare.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    行前準備
                    <span ><i class="fas fa-chevron-down"></i></span></i>
                </a>
            </div>
        </section>
    </main>

    </main>
@endsection

@section('js')
    <!-- layout Core JS -->
    <script src="{{asset('js/layout.js')}}"></script>
    <!-- 此專案的 swiper JS -->
    <script src="{{asset('js/itinerary-swiper.js')}}" ></script>
    <script>
        let scenery = document.querySelector('.scenery');
        let photo = document.querySelector('.photo');

        window.addEventListener('scroll',function(){
            let scrollYvalue = window.scrollY;
            photo.style['top'] = scrollYvalue*0.5 + 'px';
        });
    </script>
@endsection