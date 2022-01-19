@extends('layouts.template')

@section('title','Aurora-相關行程')

@section('css')
    <!-- swiper Core CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- itinerary Core CSS -->
    <link rel="stylesheet" href="{{asset('css/itinerary.css')}}">
@endsection

@section('main')
    <!-- banner 區 -->
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
                    <h2>{{$itinerary->country->english_name}}<span>  &nbsp;{{$itinerary->country->chinese_name}} [{{$itinerary->country->continent->name}}]</span></h2>
                </div>
                <div class="col-12  pb-4 ">
                    <img  src="{{Storage::url($itinerary->image_url)}}" class="img-fluid w-100" alt="Responsive image">
                </div>
                <div class="itinerary-body">
                    <h2>{{$itinerary->place_chinese_name}} {{$itinerary->place_english_name}}</h2>
                    <div>
                        <h3 class="mt-2 pt-3 mt-md-4 pt-md-3">景點介紹</h3>
                        <p>{!!$itinerary->introduce!!}</p>
                    </div>
                    <div>
                        <h3 class="mt-2 pt-3 mt-md-4 pt-md-3">地點資訊</h3>
                        <p>{!!$itinerary->information!!}</p>
                    </div>
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
                            @foreach ($otherItineraries as $otherItinerary)
                                <div class="swiper-slide">
                                    <a class="itinerary-card" href="{{route('itineraries.content',['id' => $otherItinerary->id])}}">
                                        <div class="content">
                                            <img src="{{Storage::url($otherItinerary->image_url)}}" alt="">
                                            <div class="p-3">
                                                <h4 class="mt-2">{{$otherItinerary->place_chinese_name}}</h4>
                                                <div class="itinerary-introduce">
                                                    <p>{!!$otherItinerary->introduce!!}</p>
                                                </div>
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

    <!-- 底部按鈕區 -->
    <section >
        <div class="d-flex justify-content-center nxet-page">
            <a class="next-btn" href="{{route('itineraries.content')}}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                行前準備
                <span ><i class="fas fa-chevron-down"></i></span></i>
            </a>
        </div>
    </section>

@endsection

@section('js')
    <!-- swiper Core JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- 此專案的 swiper JS -->
    <script src="{{asset('js/itinerary-swiper.js')}}" ></script>

    <!-- 此專題的 itinerary Banner JS -->
    <script>
        let scenery = document.querySelector('.scenery');
        let photo = document.querySelector('.photo');

        window.addEventListener('scroll',function(){
            let scrollYvalue = window.scrollY;
            photo.style['top'] = scrollYvalue*0.5 + 'px';
        });
    </script>

@endsection