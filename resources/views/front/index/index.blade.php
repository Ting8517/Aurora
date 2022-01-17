@extends('layouts.template')

@section('css')
    <!-- 此專題的 layout Core CSS -->
    <link rel="stylesheet" href="./css/layout.css">
    <!-- 此專題的 index Core CSS -->
    <link rel="stylesheet" href="./css/index.css">
@endsection

@section('main')
        <main>
        <!-- banner1 區 -->
        <section>
            <div class="banner1">
                <div class="layer aurora"></div>
                <h1 class="banner1-text">Northern Light</h1>
                <div class="layer mountain"></div>
                <div class="layer lake"></div>
                <div class="layer person"></div>
                <div class="layer rock"></div>
            </div>
        </section>

        <!-- 極光傳說區 -->
        <section >
            <div class="container">
                <div class="text-block">
                    <div class="col-12 col-md-7">
                        <h1>Etymology</h1>
                        <h2 class="pt-2">極光傳說</h2>
                        <p class="pt-1">極光(aurora)，是古羅馬神話里的黎明女神，同時也象徵黑夜轉為白天的那第一道光芒。</p>
                    </div>
                    <div class="col-12 col-md-7 ms-auto">
                        <img class="w-100" src="./img/index/index-01.png" alt="">
                    </div>
                    <div class="col-12 mt-5 d-md-none">
                        <p class="col-12 col-md-8 ms-auto">中世紀早期，不少人相信極光是騎馬 奔馳越過天空的勇士。</p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 col-md-7">
                            <img class="w-100" src="./img/index/index-02.png" alt="">
                        </div>
                        <div class="col-12 col-md-5 mt-5 d-none d-md-block">
                            <p class="col-12 col-md-8 ms-auto">中世紀早期，不少人相信極光是騎馬 奔馳越過天空的勇士。</p>
                        </div>
                    </div>
                    <div class="col-12 mt-5 d-md-none">
                        <p>在北極地區，因紐特人認為，極光是神靈在為最近死去之人照亮歸天之路。</p>
                    </div>
                    <div class="col-12 col-md-7 ms-auto set-up">
                        <img class="w-100" src="./img/index/index-03.jpg" alt="">
                    </div>
                    <div class="col-12 col-md-6 mt-5 d-none d-md-block">
                        <p>在北極地區，因紐特人認為，極光是神靈在為最近死去之人照亮歸天之路。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- banner2 區 -->
        <section>
            <div class="banner2-text">
                <div class="container">
                    <div class="py-3 py-sm-4">
                        <div class="d-md-flex">
                            <p class="mb-0  text-center text-md-start">在愛斯基摩人古老傳說中，</p>
                            <p class="mb-0 d-none d-md-block">極光是一道被賦予幸福的能量。</p>
                        </div>
                        <p class="mb-0 d-md-block d-md-none text-center text-md-start">極光是一道被賦予幸福的能量。</p>
                    </div>
                </div>
            </div>
            <div class="banner2"></div>
        </section>

        <!-- 極光成因區 -->
        <section >
            <div class="container ">
                <div class="text-block">
                    <div class="col-12 col-md-8">
                        <h1>Occurrence</h1>
                        <h2>極光如何形成</h2>
                        <p>「極光」是太陽發出的高速帶電粒子，或稱太陽風，來到地球表面時，在極區上空與大氣層的粒子產生交互碰撞作用，釋放出能量後所產生的發光現象。</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center justify-md-content-between ">
                    <div class="mt-3 mt-md-auto factor-image1"></div>
                    <div class="mt-5 mx-auto mt-md-0 factor-image2"></div>
                </div>
            </div>
        </section>
       
        <!-- 背景星星群 -->
        <section>
            <div class="scene"></div>
        </section>
        <!-- 底部按鈕區 -->
        <section>
            <div class="d-flex justify-content-center nxet-page">
                <a class="next-btn" href="./hotspot.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    開始旅程
                    <span><i class="fas fa-chevron-down"></i></span></i>
                </a>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <!-- parallax Core JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <!-- 此專題的 layout Core JS -->
    <script src="js/layout.js"></script>
        <!-- 此專題的 index Banner1 JS -->
    <script>
        let aurora = document.querySelector('.aurora');
        let mountain = document.querySelector('.mountain');
        let lake = document.querySelector('.lake');
        let person = document.querySelector('.person');
        let rock = document.querySelector('.rock');
        let banner1Text = document.querySelector('.banner1-text');
        let banner1TextTop =  window.getComputedStyle(banner1Text).top; //取得原本Top的位置值

        window.addEventListener('scroll',function(){
            let scrollYvalue = window.scrollY;

            aurora.style['top'] = scrollYvalue + 'px';
            banner1Text.style['top'] = parseInt(banner1TextTop) + scrollYvalue*0.5 + 'px';

            let mountainScale = 1+scrollYvalue*0.0003;
            mountain.style['transform'] = `scaleX(${mountainScale})`;
            mountain.style['top'] = scrollYvalue*0.2 + 'px';

            let personScale = 1+scrollYvalue*0.0002;
            person.style['transform'] = `scaleX(${personScale})`;
            person.style['top'] = scrollYvalue*0.1 + 'px';
            
        });
        // aurora mountain lake preson rock
    </script>
@endsection