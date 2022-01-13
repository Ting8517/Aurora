@extends('layouts.template')

@section('css')
     <!-- bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- swiper Core CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- layout Core CSS -->
    <link rel="stylesheet" href="{{asset('/css/layout.css')}}">
    <!-- itinerary Core CSS -->
    <link rel="stylesheet" href="{{asset('css/itinerary.css')}}">
@endsection

@section('main')
        <!-- banner 區 -->
        <section>
            <div class="banner d-flex flex-column justify-content-center align-items-center">
                <p class="mb-0">北半球除了極光令人驚艷讚嘆</p>
                <p class="mb-0">周邊景點也讓人抱持著浪漫幻想與憧憬</p>
                <p class="mb-0">準備躍躍欲試了嗎？</p>
            </div>
        </section>

        <!-- 相關行程區 -->
        <section class="aurora">
            <div class="container">
                <div class="row itinerary">
                    <div class="col-1">
                        <div class="slogan">相關行程&周邊景點</div>
                    </div>
                    <div class="col-11">
                        <div class="ms-4 itinerary-image">
                            <h1 class="pb-3 pb-lg-5">冰島 Iceland(歐洲)</h1>
                            <img src="https://fakeimg.pl/1101x676/" class="img-fluid w-100" alt="Responsive image">
                        </div>
                        <div class="ms-4 body">
                            <div class="title">
                                <div class="dut"></div>
                                <h2>藍湖溫泉 blue lagoon</h2>
                            </div>
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
            </div>
        </section>

        <!-- 其他相關行程區 -->
        <section id="other-itinerary">
            <div class="other-itinerary">
                <div class="container">
                    <h2>其他相關行程</h2>
                    <!-- 其他相關行程 Swiper -->
                    <div class="swiper-container">
                        <div class="swiper itinerary-swiper pt-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="itinerary-card" href="#">
                                        <div class="content">
                                            <img src="https://fakeimg.pl/359x307/" alt="">
                                            <div class="p-3">
                                                <h4 class="mt-2">藍湖溫泉</h4>
                                                <p>藍湖 blue lagoon那是一個黑色的火山岩中環抱著的一汪如同藍寶石的熱泉，常天維持在37～39°C，四周的泥地是白色的。由於水質和池邊土壤都富含稀有的礦物，這個溫泉不但美如仙境，更被視為回復青春，保持美麗的聖泉。</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>    
                    </div> 
                </div>
            </div>
        </section>
@endsection

@section('js')
    <!-- bootstrap Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <!-- swiper Core JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- layout Core JS -->
    <script src="{{asset('js/layout.js')}}"></script>
    <!-- 此專案的 swiper JS -->
    <script src="{{asset('js/itinerary-swiper.js')}}" ></script>
@endsection