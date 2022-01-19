@extends('layouts.template')

@section('title','Aurora-極光熱點')

@section('css')
    <!-- leaflet Core CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <!-- swiper Core CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- 此專題的 aurora Core CSS -->
    <link rel="stylesheet" href="{{asset('css/aurora.css')}}">
    <!-- 此專題的 hotspot Core CSS -->
    <link rel="stylesheet" href="{{asset('css/hotspot.css')}}">
@endsection

@section('main')
    <!-- banner 區 -->
    <section>
        <!-- 地圖 -->
        <div class="map-container">
            <div id="map"></div>
        </div>
        <!-- 極光熱點選單 -->
        <div class="hotspot-list">
            <!-- <span class="col-5 ms-auto">極光熱點</span> -->
            <ul class="location-menu">
                <li class="location-li">       
                    <a class="location" href="#{{--route('hotspot.hotspot','country_name=冰島')--}}" data-tag="冰島">冰島 雷克雅維克</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li>
                <li class="location-li">
                    <a class="location" href="#" data-tag="挪威">挪威 特羅姆瑟</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li class="location-li">
                <li>
                    <a class="location" href="#" data-tag="瑞典">瑞典 基律納</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li>
                <li class="location-li">
                    <a class="location" href="#" data-tag="芬蘭">芬蘭 羅瓦涅米</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li>
                <li class="location-li">
                    <a class="location" href="#" data-tag="俄羅斯">俄羅斯 莫曼斯克</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li>
                <li class="location-li">
                    <a class="location" href="#" data-tag="美國">美國 費爾班克斯</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li>
                <li class="location-li">
                    <a class="location" href="#" data-tag="加拿大">加拿大 黃刀鎮</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li>
                <li class="location-li">
                    <a class="location" href="#" data-tag="格陵蘭">格陵蘭 伊盧利薩特</a>
                    <div class="location-btn">
                        <div class="circle"></div>
                        <div class="circle-border"></div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- 景點簡介區 -->
    <section>
        <!-- 冰島極光簡介區 -->
        <div class="location-item active" data-location="冰島">
            <div class="slogan">
                <span>火山與冰川，</span>
                <span>冰與火的國度</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>Iceland<span>  &nbsp;冰島 [歐洲]</span></h2>
                    <h3>雷克雅維克 Reykjavík</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/Iceland/冰島-極光.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/Iceland/冰島-教會山.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/Iceland/冰島-極光2.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list">
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">全國都在極光範圍內，皆可有機會看到極光</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">2~3等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">30%~40%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">交通不便，建議自駕或參加旅遊團</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">不想只侷限在一點看極光，景點多！</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">10月~3月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">冰島（冰島語：Ísland）是北大西洋中的一個島國，位於北大西洋和北冰洋的交匯處，通常被視為北歐五國之一。冰島文化與其他北歐斯堪地納維亞文化有很深淵源，大多數冰島人是斯堪地納維亞人和蓋爾人的後裔。冰島語屬北日耳曼語支，起源於古諾爾斯語並與法羅語及挪威西部方言接近。冰島的文化遺產主要為傳統冰島菜、詩歌和中世紀的冰島薩迦。在北約成員國中，冰島人口最少並且是唯一沒有常備軍隊的國家，僅有海巡部隊，冷戰時期的冰島，國防全由美軍負責。冰島國土面積為10.3萬平方公里，人口為36萬，面積不大卻是歐洲人口密度最小的國家。內陸主要是平原地貌，境內多分布沙質地、冷卻的熔岩平原和冰川。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/Iceland/冰島-極光2.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <p>實際上冰島全國都處於極光帶上，所以全國都可以看到極光。雷克雅維克是冰島首都，人口約12萬人，城市機能發達。冰島地貌包羅萬象，火山、溫泉、瀑布、冰河、噴泉等等，可以說是集美景於一身，除了追極光外還有各式各樣的活動，絕對不會無聊。冰島近年來也成為全世界最熱門的極光城市，但唯一美中不足的是，冰島的天氣不是很穩定，許多人因為天氣因素而無法一睹極光風采。</p>
                </div>
            </div>
        </div>
        <!-- 挪威極光簡介區 -->
        <div class="location-item d-none" data-location="挪威">
            <div class="slogan">
                <span>精靈國度，</span>
                <span>極光之都</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>Norway<span>  &nbsp;挪威 [歐洲]</span></h2>
                    <h3>特羅姆瑟 Tromsø</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/Norway/挪威011.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/Norway/挪威013.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/Norway/挪威041.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list">
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">靠近大學城，較多戶外活動</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">2~5等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">50%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">機場交通方便，市內交通也相對方便</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">不想只有看極光，喜歡戶外活動者</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">11月~3月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">挪威 Norway（挪威語：Norge）位於北歐斯堪地那維亞半島西半部，東接瑞典，西臨北大西洋，北部進入北極圈，其東北端與芬蘭及俄國接壤，是斯堪地那維亞三小國最西、最北及最東的國家。挪威地形狹長，丘陵、湖泊及峽灣交錯。由於挪威扼制北大西洋與北極海之交通，戰略位置重要；境內有深水不凍港可供巨型船艦停泊，故冷戰時期頗受北約國家重視。挪威海岸線錯綜複雜深峽灣、夏季的午夜太陽和北極光吸引許多旅人不遠千里來到挪威。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/Norway/挪威041.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <p>挪威的特羅姆瑟 Tromsø 在北極圈以北，是所有極光城市中最北的一個，意味著冬天的黑夜比別人要長，也可以說冬天是幾乎永夜，這使得一天當中能看到極光的時間更多。特羅姆瑟是一個現代化的城市，人口有7萬5千人，所以城市本身機能豐富，餐廳酒吧選擇豐富，也有很多地方可以觀光。每年的一月底二月初，這裡會舉辦為期十天的極光節，有許多音樂及藝術表演活動。這裡因為有洋流調節，氣候不會太嚴寒，周遭有許多冰河峽灣，可以說是最適合旅遊的極光城市之一。</p>
                </div>
            </div>
        </div>
        <!-- 瑞典極光簡介區 -->
        <div class="location-item d-none" data-location="瑞典">
            <div class="slogan">
                <span>童話王國</span>
                <span></span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>Sweden<span>  &nbsp;瑞典 [歐洲]</span></h2>
                    <h3>基律納 Kiruna</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/Sweden/瑞典01.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/Sweden/瑞典冰屋旅館.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/Sweden/瑞典03.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list">
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">天氣較穩，雪地活動多，較無光害</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">3~5等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">50%~70%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">極光地點為小村落，交通不便，但機場交通方便</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">超想看到極光者，想拍出清晰極光照！</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">10月~12月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">瑞典王國，簡稱瑞典，北歐五國之一，是北歐最大的國家。從13世紀起，斯德哥爾摩就已經成為瑞典的政治、文化、經濟和交通中心。首都為斯德哥爾摩，斯德哥爾摩有“北方威尼斯“的稱號，你可以把它看成是一座建在島嶼上的城市。整座城市的規劃把人與自然非常巧妙的結合在一起，非常適合戶外參觀活動，特別是坐船參觀，由於沒受過戰爭的破壞而保存良好，現在共有100多座博物館和名勝。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/Sweden/瑞典03.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <p>欣賞極光最佳地點是位於北極圈以內的拉普蘭地區，最北的城市，基律納是最為有名。如果你想體會北歐極北地的原始寧靜以及較少的觀光客，基律納是最好的選擇。在這裡有許多雪山的國家公園、也可以體驗薩米人文化。位在瑞典的ICEHOTEL是世界上第一座冰旅館。他們的新品牌ICEHOTEL 365更是擁有冰宮城堡般的漂亮冰雕房間。</p>
                </div>
            </div>
        </div>
        <!-- 芬蘭極光簡介區 --><!-- 資訊有未更正的 -->
        <div class="location-item d-none" data-location="芬蘭">
            <div class="slogan">
                <span>聖誕雪橇</span>
                <span>遺留下的塵埃</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>Finland<span>  &nbsp;芬蘭 [歐洲]</span></h2>
                    <h3>羅瓦涅米 Rovaniemi</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/Finland/芬蘭-冰屋極光.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/Finland/芬蘭1.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/Finland/芬蘭2.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list">
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">天氣較穩，玻璃穹頂屋</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">3~5等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">60%~80%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">交通相對方便，有巴士、接駁車前往飯店</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">超想看到極光者，想拍出清晰極光照！</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">10月~12月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">芬蘭的羅瓦涅米 Rovaniemi位於北極圈以南，人口約6萬3千人，是歐盟內面積最大的城市。這裡天氣也比其他北歐極光城市好，一年有200天的機會可以看到極光。這裡有許多有名的景點，例如聖誕老人村Santa Claus Village、芬蘭樹冰tykky、北歐最大原住民──薩米人文化等。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/Finland/芬蘭2.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div><!--資訊尚未更正 -->
                    <p>芬蘭的羅瓦涅米 Rovaniemi位於北極圈以南，人口約6萬3千人，是歐盟內面積最大的城市。這裡天氣也比其他北歐極光城市好，一年有200天的機會可以看到極光。這裡有許多有名的景點，例如聖誕老人村Santa Claus Village、芬蘭樹冰tykky、北歐最大原住民──薩米人文化等。</p>
                </div>
            </div>
        </div>
        <!-- 俄羅斯極光簡介區 --><!--資訊有未更正的 -->
        <div class="location-item d-none" data-location="俄羅斯">
            <div class="slogan">
                <span>擁有一個半月</span>
                <span>極夜的極光新寵</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>Russia<span>  &nbsp;俄羅斯 [亞洲]</span></h2>
                    <h3>莫曼斯克 Мurmansk</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/Russia/Russia1.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/Russia/Russia3.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/Russia/Russia4.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list"> <!--資訊尚未更正 -->
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">天氣較穩，玻璃穹頂屋</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">3~5等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">60%~80%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">交通相對方便，有巴士、接駁車前往飯店</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">超想看到極光者，想拍出清晰極光照！</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">10月~12月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">北極圈內最大的城市，人口約30萬人，城市機能完整，是歷史軍事文化重地，也是俄羅斯氣候最溫和可親的區域之一。這裡一年有42天是永夜，漫長的黑夜就是看極光的好時機。可以到柯拉半島看山水美景，坐上列寧號和動力破冰船，參觀北冰洋海岸線及苔原。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/Russia/Russia4.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <!--資訊尚未更正 -->
                    <p>北極圈內最大的城市，人口約30萬人，城市機能完整，是歷史軍事文化重地，也是俄羅斯氣候最溫和可親的區域之一。這裡一年有42天是永夜，漫長的黑夜就是看極光的好時機。可以到柯拉半島看山水美景，坐上列寧號和動力破冰船，參觀北冰洋海岸線及苔原。</p>
                </div>
            </div>
        </div>
        <!-- 美國斯極光簡介區 --><!--資訊有未更正的 -->
        <div class="location-item d-none" data-location="美國">
            <div class="slogan">
                <span>「 極光之城 」</span>
                <span>取代了「 黃金心臟 」</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>USA<span>  &nbsp;美國 [北美洲]</span></h2>
                    <h3>費爾班克斯 Fairbanks</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/USA/美國 aurora.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/USA/美國-狗拉雪橇.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/USA/美國 aurora 2.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list"> <!--資訊尚未更正 -->
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">天氣較穩，玻璃穹頂屋</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">3~5等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">60%~80%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">交通相對方便，有巴士、接駁車前往飯店</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">超想看到極光者，想拍出清晰極光照！</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">10月~12月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">位於北極圈以南，人口約3萬人，是阿拉斯加第二大城，城市機能完整，氣候乾燥，在極光季節時五天裡有四天能看到極光。每年二、三月會舉辦世界冰雕大賽，三月初時有世界最艱難的狗拉雪橇大賽，大賽路程一路從阿拉斯加到達加拿大的育空。也可以參加知名的淘金體驗，感受19世紀美國人的淘金潮。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/USA/美國 aurora 2.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <!--資訊尚未更正 -->
                    <p>位於北極圈以南，人口約3萬人，是阿拉斯加第二大城，城市機能完整，氣候乾燥，在極光季節時五天裡有四天能看到極光。每年二、三月會舉辦世界冰雕大賽，三月初時有世界最艱難的狗拉雪橇大賽，大賽路程一路從阿拉斯加到達加拿大的育空。也可以參加知名的淘金體驗，感受19世紀美國人的淘金潮。</p>
                </div>
            </div>
        </div>
        <!-- 加拿大斯極光簡介區 --><!--資訊有未更正的 -->
        <div class="location-item d-none" data-location="加拿大">
            <div class="slogan">
                <span>冬季晝短</span>
                <span>夜長光害少</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>Canada<span>  &nbsp;加拿大 [北美洲]</span></h2>
                    <h3>黃刀鎮 Yellowknife</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/Canada/Canada-aurora.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/Canada/加拿大卡麥隆瀑布.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/Canada/西北地區黃刀鎮.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list"> <!--資訊尚未更正 -->
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">天氣較穩，玻璃穹頂屋</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">3~5等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">60%~80%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">交通相對方便，有巴士、接駁車前往飯店</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">超想看到極光者，想拍出清晰極光照！</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">10月~12月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">黃刀是北美洲的極光重鎮，位於極光帶的中心，因為身處內陸並且周遭沒有高山，天氣乾燥視野無遮蔽，一年有240天適合看極光，可以說是世界上最適合看極光的極光城市。黃刀人口約2萬人，是簡單樸實的小鎮，旁邊的大奴湖提供觀賞極光的最佳視野，在湖還沒有結凍時前往，可以看到極光在湖面上的倒影。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/Canada/西北地區黃刀鎮.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <!--資訊尚未更正 -->
                    <p>黃刀是北美洲的極光重鎮，位於極光帶的中心，因為身處內陸並且周遭沒有高山，天氣乾燥視野無遮蔽，一年有240天適合看極光，可以說是世界上最適合看極光的極光城市。黃刀人口約2萬人，是簡單樸實的小鎮，旁邊的大奴湖提供觀賞極光的最佳視野，在湖還沒有結凍時前往，可以看到極光在湖面上的倒影。</p>
                </div>
            </div>
        </div>
        <!-- 格陵蘭斯極光簡介區 --><!--資訊有未更正的 -->
        <div class="location-item d-none" data-location="格陵蘭">
            <div class="slogan">
                <span>唯一的</span>
                <span>世界文化遺產小鎮</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>HOTSPOT</span>
                    <h1>極光熱點</h1>
                </div>
                <div class="country">
                    <h2>Canada<span>  &nbsp;格陵蘭 [歐洲]</span></h2>
                    <h3>伊盧利薩特  Ilulissat</h3>
                </div>
                <div class="row">
                    <div class="col-12  pb-4 ">
                        <img  src="{{asset('img/hotspot/Greenland/Greenland01.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 pb-4 col-sm-6">
                        <img src="{{asset('img/hotspot/Greenland/Greenland02.jpeg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <img src="{{asset('img/hotspot/Greenland/Greenland03.jpeg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 相關資訊區 -->
            <div class="other-info">
                <div class="aurora">
                    <div class='bg'>
                        <div class='aur_cont'>
                            <span class='aur aur_1'></span>
                            <span class='aur aur_2'></span>
                            <span class='aur aur_3'></span>
                            <span class='aur aur_4'></span>
                            <span class='aur aur_5'></span>
                            <span class='aur aur_6'></span>
                            <span class='aur aur_7'></span>
                            <span class='aur aur_8'></span>
                            <span class='aur aur_9'></span>
                            <span class='aur aur_10'></span>
                            <span class='aur aur_11'></span>
                            <span class='aur aur_12'></span>
                            <span class='aur aur_13'></span>
                            <span class='aur aur_14'></span>
                            <span class='aur aur_15'></span>
                            <span class='aur aur_16'></span>
                            <span class='aur aur_17'></span>
                            <span class='aur aur_18'></span>
                            <span class='aur aur_19'></span>
                            <span class='aur aur_20'></span>
                            <span class='aur aur_21'></span>
                            <span class='aur aur_22'></span>
                            <span class='aur aur_23'></span>
                            <span class='aur aur_24'></span>
                        </div>
                        <div class='star'></div>
                        <div class='pinetree'>
                            <span class='foot'></span>
                        </div>
                        <span class='hill'></span>
                    </div>
                </div>              
                <div class="info-list"> 
                    <div class="info-item anim-1 feature">
                        <h4>特色</h4>
                        <button class="info-btn"><i class="fas fa-camera-retro"></i></button>
                        <div class="info d-none" ><p class="text-center my-0 p-3">天氣較穩，極光地點距離機場近</p></div>
                    </div>
                    <div class="info-item anim-2 kp">
                        <h4>可見極光等級</h4>
                        <button class="info-btn"><i class="fas fa-eye"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">2~3等級以上</p></div>
                    </div>
                    <div class="info-item anim-3 probability">
                        <h4>看見極光機率</h4>
                        <button class="info-btn"><i class="fas fa-bahai"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">60%~80%</p></div>
                    </div>
                    <div class="info-item anim-4 traffic">
                        <h4>交通便利性</h4>
                        <button class="info-btn"><i class="fas fa-car-side"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">超級不方便，建議自駕或參加旅遊團</p></div>
                    </div>
                    <div class="info-item anim-5 people">
                        <h4>適合對象</h4>
                        <button class="info-btn"><i class="fas fa-user-check"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">熱愛冒險者，想選擇較特別的極光點</p></div>
                    </div>
                    <div class="info-item anim-6 period">
                        <h4>極光旺盛期</h4>
                        <button class="info-btn"><i class="far fa-calendar-alt"></i></button>
                        <div class="info d-none"><p class="text-center my-0 p-3">10月~12月</p></div>
                    </div>
                </div>
            </div>
            <!-- 簡介區 -->
            <div class="introduce">
                <div class="new-container">
                    <h2 class="mb-3">簡介</h2>
                    <p class="pb-5">格陵蘭大概是這些賞極光地點中最難到達的一個，但也是因為這樣才更加神秘讓人想一探究竟。伊盧利薩特是格陵蘭的第三大城，人口約5千人，在這裡你期待的不是高檔的商業觀光城市，而是遺世獨立的特殊世外桃源村落。而因為地理位置氣候乾燥，全年有300天是晴天，大大增加看到極光的機會。這裡最特殊的景觀是壯觀的海上浮冰跟冰川峽灣。</p>
                    <div class="col-12 pb-5 d-sm-none">
                        <img src="{{asset('img/hotspot/Greenland/Greenland03.jpeg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <!--資訊尚未更正 -->
                    <p>格陵蘭大概是這些賞極光地點中最難到達的一個，但也是因為這樣才更加神秘讓人想一探究竟。伊盧利薩特是格陵蘭的第三大城，人口約5千人，在這裡你期待的不是高檔的商業觀光城市，而是遺世獨立的特殊世外桃源村落。而因為地理位置氣候乾燥，全年有300天是晴天，大大增加看到極光的機會。這裡最特殊的景觀是壯觀的海上浮冰跟冰川峽灣。</p>
                </div>
            </div>
        </div>

    </section>

    <!-- 相關行程區 -->
    <section id="other-itinerary">
        <div class="other-itinerary">
            <div class="container">
                <h2 class="text-center">相關行程</h2>
                <!-- 相關行程 Swiper -->
                <div class="swiper-container">
                    <div class="swiper itinerary-swiper pt-4">
                        <div class="swiper-wrapper">
                            @foreach ($itineraries as $itinerary)
                                <div class="swiper-slide" data-country="{{$itinerary->country->chinese_name}}">
                                    <a class="itinerary-card" href="{{route('itineraries.content',['id'=>$itinerary->id])}}">
                                        <div class="content">
                                            <img src="{{Storage::url($itinerary->image_url)}}" class="img-fluid" alt="">
                                            <div class="p-3">
                                                <h4 class="mt-2">{{$itinerary->place_chinese_name}}</h4>
                                                <div class="itinerary-introduce">
                                                    {!!$itinerary->introduce!!}
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
            <a class="next-btn" href="{{route('prepare.list')}}">
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
    <!-- leaflet Core JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- swiper Core JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- jquery Core JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- 此專題的 Leaflet JS -->
    <script src="{{asset('js/leaflet-map.js')}}"></script>
    <!-- 此專題的 swiper JS -->
    <script src="{{asset('js/itinerary-swiper.js')}}"></script>
    <!-- 此專題的 極光熱點選單 JS -->
    <script src="{{asset('js/hotspot-list.js')}}"></script>
    <!-- 此專題的其他資訊按鈕 JS -->
    <script>
        const infoItemElements = document.querySelectorAll('.info-item');
        
        infoItemElements.forEach(function(infoItemElement){
            infoItemElement.addEventListener('click',function(e){
                e.stopPropagation();
                let infoItemActive = document.querySelector('.info-item.active');
                if(infoItemActive){
                    infoItemActive.classList.remove('active');
                    let infoButton = infoItemActive.querySelector('.info');
                    infoButton.classList.remove('d-block');
                    infoButton.classList.add('d-none');
                    infoItemActive.style['z-index'] = '0';
                }
                this.classList.add('active');
                let infoButton = this.querySelector('.info');
                infoButton.classList.remove('d-none');
                infoButton.classList.add('d-block');
                this.style['z-index'] = '999';      
            });
        });

        document.addEventListener('click',function(){
            setInfoDispaly();
        })
        function setInfoDispaly(){
            let infoDiv = document.querySelector('.info.d-block');
            if(infoDiv){
                    infoDiv.classList.remove('d-block');
                    infoDiv.classList.add('d-none');
            }
        }
    </script>

@endsection

