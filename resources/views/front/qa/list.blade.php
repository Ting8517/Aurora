@extends('layouts.template')

@section('title','Aurora-常見問題')

@section('css')

    <!-- q&a Core CSS -->
    <link rel="stylesheet" href="{{asset('css/q&a.css')}}">

@endsection

@section('main')
    <!-- banner 區 -->
    <section>
        <div class="banner">
            <div class="layer sky"></div>
            <div class="layer person"></div>
        </div>
    </section>

    <!-- 常見問題區 -->
    <section>
        <div class="question">
            <div class="slogan">
                <span>Northern Lights</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>Q&A</span>
                    <h1>常見問題</h1>
                </div>
                <div class="mt-5 question-explain">
                    <h2 class="d-none d-sm-block">傳說中看到極光會幸福一輩子，</h2>
                    <h2 class="d-none d-sm-block">你也想要追逐極光嗎？</h2>
                    <h2 class="d-block d-sm-none">傳說中看到極光會幸福一輩子，你也想要追逐極光嗎？</h2>
                    <h3 >關於極光的常識你了解了多少呢？</h3>
                    <p class="mb-0">
                        極光的神奇魅力在於與它的不期而遇。極光宛如是一場夜空中的光之舞，絢麗綻放又變幻無窮。當極光出現的那一刻，時空彷彿凍結，一望無際的寂靜之中卻又令人熱血沸騰，悸動人心。</p>
                    <p class="mb-5">相信不少人對於鄰近北極圈神秘又魔幻的極光都抱持著浪漫幻想與憧憬，關於極光的常識你瞭解了多少呢?</p>
                    <p class="mb-5">
                        什麼是極光？極光長什麼樣子？何時何地能看到極光？在看到極光的機率有多少？極光如何預測？如何拍攝出美麗的極光照片？相機的各種參數應該要怎麼設定才好？這篇文章就要來解答許多人對於看極光的種種疑惑!
                    </p>
                    <div class="row">
                        <div class="col-12  pb-4 col-md-6">
                            <img src="./img/qa/qa-01.jpg" class="img-fluid w-100" alt="Responsive image">
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="./img/qa/qa-02.jpg" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <!-- Q&A區 -->
                <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <div class="d-flex align-items-start">
                                    <span>Q1：</span>
                                    <span>北半球哪裡看得到北極光?</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>極光是以帶狀形式出現的。南北半球各有一個極光帶，覆蓋兩極附近的區域：出現在北半球的叫北極光，出現在南半球的叫南極光。</p>
                                <p>北極光之所以叫北極光，是因為基本要在極北國家才能看得到北極光，低於北緯60°的地區很少出現極光現象。挪威、加拿大、格陵蘭、阿拉斯加、瑞典、芬蘭的北部，都是可以獵尋北極光的區域。
                                </p>
                                <p>相較於其他國家，只有限定地區有機會一睹北極光風采，冰島整個國土面積都在極光帶上，因此全國任何一處地方都有機會看見北極光。冰島除了曾被評選為全球五大最佳觀賞極光的地點，也被視為近年來最受遊客歡迎的追極光國家。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <div class="d-flex align-items-start">
                                    <span>Q2：</span>
                                    <span>極光長什麼樣子? 什麼顏色?</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>極光是在夜裡的天空中移動的光幕，有帶狀、弧狀、幕狀和放射狀，隨著高空的風移動速度或快、或慢地飄動著，就好像是在漆黑的夜空舞台上，優雅演出的一場光之舞。
                                </p>
                                <p>極光美麗又變幻莫測，最常見的顏色是螢光綠，其次是橙色和紫色以及多種色度的紅色、粉紅色、藍色和黃色。這些顏色是由大氣中的氣體-主要為氧氣和氮氣的混合物而造成的。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <div class="d-flex align-items-start">
                                    <span>Q3：</span>
                                    <span>極光的季節是什麼時候?</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>北極光現象一年到頭都有機會發生，但因為不及日光明亮，所以需要很暗的天空來襯托。換言之， 極光只有在漆黑的夜晚才能看到。</p>
                                <p>一般來講，最適合看極光的季節是九月至隔年三月，但從八月中下旬，一直到隔年的四月底，整整八個月的時間，無論黑夜時間的長短，只要天氣允許之下，極光都有可能在漆黑的夜空中出現。相對的，北極圈的盛夏因為白晝現象，儘管太陽下山了天空還是明亮的，因此夏季期間是無法用肉眼看到北極光的。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                <div class="d-flex align-items-start">
                                    <span>Q4：</span>
                                    <span>能看到極光的機率有多大?</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>在極光帶內都是極光活耀的範圍，但極光必須要在晴朗無雲的夜空中，才有機會看到。以冰島為來說一個晴朗無雲的夜空是非常難得的，天氣不佳可以說是看極光的致命傷，冰島的天氣是北半球可看見極光的地區當中最惡劣、多變的，若幸運遇上雨後天晴的夜晚，也無法確定極光在這個夜晚是不是活躍，
                                    天氣晴朗的夜晚也有可能完全看不到北極光。</p>
                                <p>老實說，追尋極光，追尋的其實是一種緣分，完全是要看運氣的。極光可遇不可求，因此出現的機率到底有多大實在很難用一個確切的數字來回答。幸運的話，連續好幾天都能欣賞到極光，反之，也可能連續好幾天，甚至整趟旅程都完全無法看到極光。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                <div class="d-flex align-items-start">
                                    <span>Q5：</span>
                                    <span>想要看到極光，有什麼先決條件?</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="pb-3">觀賞極光，除了黑夜是首要的先決條件外，「天氣」、「極光指數」及「光害」這三項要素也決定了看不看得到極光的重要關鍵。</p>
                                <h3>天氣</h3>
                                <p class="pb-3">
                                    極光一般在天氣晴朗的夜晚才有辦法被肉眼看見。雨、雪、雲層等都對觀不觀賞得到極光有絕對性的影響。如果天氣不好，再美的極光也無法看見。追極光前要先查詢當地的天氣預報，雲的覆蓋度越低，就有機會看到極光，而越晴朗的夜空，越有利於觀測極光。
                                </p>
                                <h3>極光指數Kp-index</h3>
                                <p class="pb-3">極光指數Kp-index 也追極光的一個參考指標-但一般只能預測3-5天，且可能發生變化。極光指數範圍從0級至9級，KP
                                    指數越高，並不是代表當晚看見極光的機率越高 ;
                                    極光指數代表的，是極光的活躍程度與極光帶涵蓋範圍的大小。指數高，極光的活躍程度高，極光帶的涵蓋範圍大，因此能同時間目睹到極光的地方會變多，甚至是延伸到的緯度較低的地區
                                    ;
                                    而當極光指數低的時候，極光帶的涵蓋範圍則變小。但是在北極圈中，理論上只要極光指數有3以上，且天氣允許、光害稀少的情況下，照樣能以肉眼看見夜空中高掛的極光風采。
                                </p>
                                <h3>光害</h3>
                                <p>極光亮度有限，實際的極光一般並沒有照片中那般明亮，動的也不快，很多時候是慢慢出現，然後一點點變換形狀，需要很暗的環境來襯托。除了城市的燈光，連月光都會對欣賞極光帶來些許影響。因此，遠離市區及有光的地方，周圍環境越黑，自然是越容易以肉眼看見極光
                                    ; 如果周圍很亮，比較暗的極光就難以看到。但如果天氣及極光指數都達到完美的情況下，就算是在光害強的市區也是可以看見一大片舞動的極光。</p>
                                <p>所以一生中遇上一次極光，是多麼幸運的事情！</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                <div class="d-flex align-items-start">
                                    <span>Q6：</span>
                                    <span>有沒有好用的「極光預測」手機 APP 可以下載？</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>iOS 及 Android 的手機用戶，都可以下載的到一個叫做 "My Aurora Forecast – Aurora Alerts Northern
                                    Lights"的免費手機APP。</p>
                                <p>將手機定位功能開啟後，就可以根據當前的所在位置，偵測現在看到極光的機率。應用程式也會告知你未來的30分鐘內，什麼時間看到極光的機率會比較高。除此之外，你也可以透過這個
                                    APP 查詢所在位置的雲層覆蓋率。只要雲層覆蓋率越低，那麼看到極光的機率自然也就越高。建議旅人們結合當地的天氣預報與 My Aurora
                                    Forecast 手機 APP 的結果相互整合，如此一來，預測何時、幾點鐘能看見極光的準確度，將會高達90%以上。</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                <div class="d-flex align-items-start">
                                    <span>Q7：</span>
                                    <span>看極光應該要穿什麼?</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>看極光因為需要長時間待在戶外等待，沒有太多活動，很容易覺得冷，所以一定要穿著保暖。</p>
                                <p>穿衣服最裡面一層建議還是穿著一件短袖或輕薄透氣的長袖 (因為車內及室內到處都會開暖氣，若穿太暖且無法脫衣透氣，很容易產生悶熱感或頭暈。) 掌握由輕薄透氣
                                    (裡) 至厚重防禦 (外)
                                    的訣竅，逐件加厚的"洋蔥式穿衣法"。禦寒的防風外套、帽子、圍巾、手套都不可少。此外，鞋子最好是防水鞋或登山鞋，厚襪子也很重要，否則可能會冷到腳趾頭凍僵痲痺。
                                </p>
                                <p>只要穿對衣服，上半身從裡到外共三至四層就相當足夠。注意：衣服的厚度與件數多寡，不與保暖程度成正比。瞭解衣服的特質，穿對服裝，才是上策。</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                <div class="d-flex align-items-start">
                                    <span>Q8：</span>
                                    <span>肉眼看到的極光，為何沒有網路照片那麼驚艷？</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>相信許多人都是在欣賞了網路上的極光照片後，內心大為震撼，因此決定來趟追尋極光之旅。但是你知道嗎？網路上所分享出來的極光寫真，看起來亮麗無比，但實際上肉眼所看見的極光，除非遇上極光大爆發，不然根本不會如此明亮。
                                </p>
                                <p>照片上的極光燦爛多彩，其實都是透過調慢相機的快門速度，來增加曝光量的拍攝技巧，以及修圖軟體的「後製處理」後才呈現出來的。那些令人驚嘆不已的極光照相信
                                    95% 以上都是有「加工」過的。</p>
                                <p>如果極光的KP值在3以下，除非是在幾乎沒有光害的地方，不然肉眼很難看到、或是看得清楚。然而，相機的感光靈敏，可以透過快門速度捕捉極光，再搭配後製處理，調高對比度和飽和度，利用
                                    Photoshop 的蒙版工具將極光的部分調亮，人人都可以「拍」出大師級照片。</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseNine" aria-expanded="false"
                                aria-controls="flush-collapseNine">
                                <div class="d-flex align-items-start">
                                    <span>Q9：</span>
                                    <span>如何拍攝出美麗的極光照片呢？</span>
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h3>使用單眼或類單眼相機</h3>
                                <p>當極光相當強烈的時候，現在市面上大多數的手機性能均已有辦法在不做任何相機設置的情況下拍攝出極光。但要知道的是：使用手機拍攝極光的效果，畫質的呈現，整體的細緻、柔和度等，絕對是比相機遜色的！如果本身對於極光照片的要求並不高，「有拍到就好」，那麼倒是可以使用相機來拍攝極光。
                                </p>
                                <p>然而，如果你想要拍攝出令人稱羨，讓人看了覺得厲害的極光照片，那麼一台單眼或類單眼相機絕對是必須的！</p>
                                <h4 class="pt-3">光圈設定 APERTURE</h4>
                                <p>光圈的設定可以讓攝影者控制進入鏡頭的光線量。光圈越大，能吸收到的光線越多，照片拍出來則會更光亮 ; 反之，當光圈越小，能夠進入鏡頭的光線便較少。f
                                    值越小，光圈越大 ; f 值越大，光圈越小。捕捉極光時，建議使用大光圈來拍攝（即 f 值越小越好)。</p>
                                <h4 class="pt-3">快門速度 SHUTTER SPEED</h4>
                                <p>快門速度（即曝光時間）是指拍攝時，相機快門保持開啟的時間。快門速度以秒或秒的分數形式表示：10秒、2秒、1 秒、1/2 秒、1/4
                                    秒、1/250秒、1/500秒等。較快的快門速度會縮短光線進入相機的時間，而較慢的快門速度則會加長這段時間。</p>
                                <p>拍攝極光時，應設定較慢的快門速度，讓更多的光線進入相機中。快門速度需要幾秒，必須依據當晚極光的強弱來進行設置。如果極光亮、移動速度快，一般理想的曝光秒數介於1秒-20秒，但如果當天極光較弱、較暗，可以嘗試增長曝光時間，例如將快門速度設置為30秒。
                                </p>
                                <h4 class="pt-3">感光度ISO</h4>
                                <p>相機的 ISO 感光度設定，可以使照片變亮或變暗。在越亮的地方進行拍攝，可以降低 ISO 值; 當環境光源不足的時候，則可以提高 ISO
                                    值，讓拍攝出來的畫面變亮。</p>
                                <p>在夜間拍攝極光，會需要調高相機的 ISO 值，一般來說約 800 至 1600 左右。ISO 越低，影像清晰銳利 ; 過高的 ISO
                                    會在照片上產生噪點。ISO 是否設定過高，主要取決於當晚極光本身的明亮度，因此建議可以使用不同的數值進行拍攝，找到最合適的 ISO 數值來進行拍攝。
                                </p>
                                <h4 class="pt-3">相機設備:腳架、快門線&備用電池</h4>
                                <p>長時間曝光需要相機穩定，所以一定需要三角架。觀賞極光的地點通常空曠風大，三腳架最好是有一定重量、不會輕易被風吹到左搖右晃的為主，有快門線輔助為佳，沒有的話也能使用相機內建的拍攝計時器，減少晃動的機會。寒冷的環境下相機電池消耗會很快，多帶幾顆備用電池最保險。
                                </p>
                                <h4 class="pt-3">構圖</h4>
                                <p>如果整張照片僅僅只有極光，那畫面會過於單調，也無法突出極光的曼妙。為了讓照片看起來更有層次，給極光找一個合適的前景陪襯就顯得很重要了！山脈、樹林、房子、瀑布、湖面等都可以當作是不錯的前景，能夠讓攝影作品更加生動，更富美感與詩意。
                                </p>
                                <h4 class="pt-3">RAW格式</h4>
                                <p>拍攝極光時的周圍環境通常比較黑暗，很多時候都需要利用軟體進行後製修圖。選用RAW格式的優點是適合進行後製處理，調整亮度、白平衡的設定後不會使畫質受損。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 聯絡我們區 -->
    <section id="contact-us">
        <div class="contact">
            <div class="new-container">
                <div class="page-title">
                    <span>CONTACT</span>
                    <h1>聯絡我們</h1>
                </div>
                <form  method="POST" action="{{route('contact.store')}}" class="mt-5">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="姓名" required>
                        <label for="name">姓名</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="電話" required>
                        <label for="phone">電話</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message" required></textarea>
                        <label for="message">留言</label>
                    </div>
                    <input type="hidden" name="read_status" value="未讀">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn">送出</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('js')

    <!-- 此專題的 qa Banner JS -->
    <script>
        let sky = document.querySelector('.sky');

        window.addEventListener('scroll',function(){
            let scrollYvalue = window.scrollY;
            // let skyScale = 1+scrollYvalue*0.0003;
            // sky.style['transform'] = `scaleX(${skyScale})`;
            sky.style['top'] = scrollYvalue*0.5 + 'px';
        });

    </script>

    <!-- Sweetaler2 Core scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //可以先定義style
        const mySwal = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
            },
            buttonsStyling: false
        });
        if('{{session('action')}}' == 'success'){
            mySwal.fire({
                title: '{{session('message')}}',
                icon: '{{session('action')}}',
            });
        }
    </script>




@endsection