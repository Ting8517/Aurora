@extends('layouts.template')

@section('title','Aurora-行前準備')

@section('css')
     <!-- leaflet Core CSS -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
     <!-- 此專題的 prepare Core CSS -->
    <link rel="stylesheet" href="{{asset('css/prepare.css')}}">

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
                    <a class="location" href="#" data-tag="冰島">冰島 雷克雅維克</a>
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

    <!-- 行前準備區 -->
    <section>
        <!-- 冰島行前準備區 -->
        <div class="location-item active" data-location="冰島">
            <div class="slogan">
                <span>冰島 Icelan</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>Iceland<span>  &nbsp;冰島 [歐洲]</span></h2>
                    <h3>雷克雅維克 Reykjavík</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-5 col-lg-6">
                        <img src="{{asset('img/prepare/Iceland/冰島-冰島國旗.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/Iceland/冰島-著名景點.jpg')}}" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>需申請申根簽證。</p>
                    <p>持台灣護照者(護照上有國民身分證統一編號)可免簽證入境，在180天內最多可停留90天，離開申根國家當日，護照須仍具有3個月以上的效期。</p>
                    <p>※護照上無國民身分證統一編號，不得適用免申根簽證待遇，訪歐前需辦理申根簽證。</p>
                    <p class="mt-5">入境時，事先備妥並隨身攜帶以下資料，供海關查驗:</p>
                    <p>1.訂房確認紀錄與付款證明、旅遊行程表及回程機票。</p>
                    <p>2.足夠維持旅歐期間生活的財力證明。</p>
                    <p>更多入境相關規定，可參照冰島官方網站：</p>
                    <a href="https://island.is/en/p/entry">https://island.is/en/p/entry</a>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>由台北啟程至冰島首都-雷克雅維克平均飛行時間在20(轉機一次)~24小時之間(轉機兩次)。</p>
                    <p>擁有直飛航線的國家多在歐洲。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/Iceland/冰島-凱夫拉維克機場.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>進出歐盟國家，如隨身攜帶超過1萬歐元現金或其他等值貨幣者，均須向海關申報。</p>
                </div>
            </div>
        </div>

        <!-- 挪威行前準備區 -->
        <div class="location-item d-none" data-location="挪威">
            <div class="slogan">
                <span>挪威 Norway</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>Norway<span>  &nbsp;挪威 [歐洲]</span></h2>
                    <h3>特羅姆瑟 Tromsø</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 col-lg-6">
                        <img src="{{asset('img/prepare/Norway/挪威-挪威國旗.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/Norway/挪威-著名風景.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>需申請申根簽證。</p>
                    <p>持台灣護照者(護照上有國民身分證統一編號)可免簽證入境，在180天內最多可停留90天，離開申根國家當日，護照須仍具有3個月以上的效期。</p>
                    <p>※護照上無國民身分證統一編號，不得適用免申根簽證待遇，訪歐前需辦理申根簽證。</p>
                    <p class="mt-5">在台簽證單位：</p>
                    <p>挪威簽證相關可向丹麥駐台北辦事處洽詢。</p>
                    <p class="mt-5">丹麥駐台北辦事處：</p>
                    <p>地址：105台北市敦化北路205號12樓1207室</p>
                    <p>電話：02-2718-2101</p>
                    <p class="mt-5">入境時，事先備妥並隨身攜帶以下資料，供海關查驗:</p>
                    <p>1. 訂房確認紀錄與付款證明、旅遊行程表及回程機票。</p>
                    <p>2. 足夠維持旅歐期間生活的財力證明。</p>
                    <p>更多入境相關規定，可參照挪威移民局網站：</p>
                    <a href="http://www.udi.no/Norwegian-Directorate-of-Immigration/">http://www.udi.no/Norwegian-Directorate-of-Immigration/</a>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>由台北啟程至挪威的首都-奧斯陸的平均飛行時數為16 ~20(轉機一次)小時。</p>
                    <p>擁有直飛航線的國家多在歐洲。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/Norway/挪威-特羅姆瑟機場.jpeg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>進出歐盟國家，如隨身攜帶超過1萬歐元現金或其他等值貨幣者，均須向海關申報。</p>
                </div>
            </div>
        </div>

        <!-- 瑞典行前準備區 -->
        <div class="location-item d-none" data-location="瑞典">
            <div class="slogan">
                <span>瑞典 Sweden</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>Sweden<span>  &nbsp;瑞典 [歐洲]</span></h2>
                    <h3>基律納 Kiruna</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 col-lg-6">
                        <img src="{{asset('img/prepare/Sweden/瑞典-瑞典國旗.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/Sweden/瑞典-著名景點.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>需申請申根簽證。</p>
                    <p>持台灣護照者(護照上有國民身分證統一編號)可免簽證入境，在180天內最多可停留90天，離開申根國家當日，護照須仍具有3個月以上的效期。</p>
                    <p>※護照上無國民身分證統一編號，不得適用免申根簽證待遇，訪歐前需辦理申根簽證。</p>
                    <p>※申請赴瑞典申根簽證，必須以線上申請方式向瑞典移民局申請</p>
                    <p class="mt-5">入境時，事先備妥並隨身攜帶以下資料，供海關查驗:</p>
                    <p>1.訂房確認紀錄與付款證明、旅遊行程表及回程機票。</p>
                    <p>2.足夠維持旅歐期間生活的財力證明。</p>
                    <p>更多入境相關規定，可參照瑞典移民局網站：</p>
                    <a href="http://www.migrationsverket.se/info/start_en.html">http://www.migrationsverket.se/info/start_en.html</a>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>由台北啟程至瑞典平均飛行時間在18(轉機一次)~23小時之間(轉機兩次)。</p>
                    <p>擁有直飛航線的國家多在歐洲。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/Sweden/瑞典基律納機場.jpeg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>進出歐盟國家，如隨身攜帶超過1萬歐元現金或其他等值貨幣者，均須向海關申報。</p>
                </div>
            </div>
        </div>

        <!-- 芬蘭行前準備區 -->
        <div class="location-item d-none" data-location="芬蘭">
            <div class="slogan">
                <span>芬蘭 Finland</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>Finland<span>  &nbsp;芬蘭 [歐洲]</span></h2>
                    <h3>羅瓦涅米 Rovaniemi</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 col-lg-6">
                        <img src="{{asset('img/prepare/Finland/芬蘭-芬蘭國旗.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/Finland/芬蘭-著名景點.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>需申請申根簽證。</p>
                    <p>持台灣護照者(護照上有國民身分證統一編號)可免簽證入境，在180天內最多可停留90天，離開申根國家當日，護照須仍具有3個月以上的效期。</p>
                    <p>※護照上無國民身分證統一編號，不得適用免申根簽證待遇，訪歐前需辦理申根簽證。</p>
                    <p class="mt-5">入境時，事先備妥並隨身攜帶以下資料，供海關查驗:</p>
                    <p>1.訂房確認紀錄與付款證明、旅遊行程表及回程機票。</p>
                    <p>2.足夠維持旅歐期間生活的財力證明。</p>
                    <p>更多入境相關規定，可參照芬蘭邊境管理局網站：</p>
                    <a href="https://raja.fi/en/guidelines-for-border-traffic-during-pandemic">https://raja.fi/en/guidelines-for-border-traffic-during-pandemic</a>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>由台北啟程至芬蘭平均飛行時間在19(轉機一次)~29小時之間(轉機兩次)。</p>
                    <p>擁有直飛航線的國家多在歐洲。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/Finland/芬蘭-羅瓦涅米機場.jpeg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>進出歐盟國家，如隨身攜帶超過1萬歐元現金或其他等值貨幣者，均須向海關申報。</p>
                </div>
            </div>
        </div>

        <!-- 俄羅斯行前準備區 -->
        <div class="location-item d-none" data-location="俄羅斯">
            <div class="slogan">
                <span>俄羅斯 Russia</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>Russia<span>  &nbsp;俄羅斯 [歐洲]</span></h2>
                    <h3>莫曼斯克 Murmansk</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 col-lg-6">
                        <img src="{{asset('img/prepare/Russia/俄羅斯-俄羅斯國旗.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/Russia/俄羅斯-著名景點.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>網路申辦電子簽證，最多能停留16天，簽證費用為40美元，6歲以下孩童可免費申辦。</p>
                    <p>相關規定請以莫斯科台北經濟文化協調委員會駐台北代表處官網公告為主。</p>
                    <p>網址：<a href="http://mtc.org.tw">http://mtc.org.tw</a></p>
                    <p>電話：02-8780-3011</p>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>由台北啟程至俄羅斯平均飛行時間在19(轉機一次)~32小時之間(轉機兩次)。</p>
                    <p>擁有直飛航線的國家多在歐洲。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/Russia/俄羅斯-莫曼斯克機場 .jpeg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>抵達俄羅斯目的地城市後7個工作日內，必須至移民局辦理「抵俄報告通知書」或將「抵俄報告通知書」郵寄至移民局，移民局或郵局工作人員將在存根聯註記「已辦理移民註冊登記」，在俄停留期間應隨身攜帶，以便隨時查驗。</p>
                    <p>違反移民登記規定的外國公民，將依法處以2000盧布至5000盧布的罰款（約70至170美元）。</p>
                    <p>嚴重違反規定者，將依法院判決予以遣返，並裁定一定期限內不得再入境。</p>
                </div>
            </div>
        </div>

        <!-- 美國行前準備區 -->
        <div class="location-item d-none" data-location="美國">
            <div class="slogan">
                <span>美國 USA</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>USA<span>  &nbsp;美國 [北美洲]</span></h2>
                    <h3>費爾班克斯 Fairbanks</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 col-lg-6">
                        <img src="{{asset('img/prepare/USA/美國-美國國旗.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/USA/美國-勝利女神像.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>設籍台灣，有身分證統一編號之國民，90天以下的觀光，免申請簽證，只需申請「旅行授權電子系統（Electronic System for Travel Authorization, ESTA）」取得授權許可。</p>
                    <p>持台灣具效期之晶片護照可免簽證入境，線上申請「旅行授權電子系統（Electronic System for Travel Authorization, ESTA）」取得授權許可（費用為 14美元）。</p>
                    <p>網址：<a href="https://esta.cbp.dhs.gov/">https://esta.cbp.dhs.gov/</a></p> 
                    <p class="mt-5">符合赴美免簽證之資格:</p>
                    <p>● 在台灣設籍，有身分證統一編號之國民。</p>
                    <p>● 持我國核發並具效期之晶片護照。</p>
                    <p>● 赴美目的為觀光或商務，且赴美停留在90天以內。</p>
                    <p>● 已取得「旅行授權電子系統」（ESTA）授權許可。</p>
                    <p>● 其他：無其他特殊限制而無法適用者（如有犯罪紀錄、曾被美國拒絕入境、先前以VWP入境未遵守相關規定、屬2016年美國VWP增強安全措施不適用免簽範圍等）、以海空方式抵達須搭乘獲核准之運輸工具且持有回程票、以陸路方式抵達需支付小額陸路邊境費用等。在入境機場或港口之移民官員就旅客能否入境有最終裁量權。</p>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>費爾班克斯位於阿拉斯加，由台北啟程至美國阿拉斯加平均飛行時間在18~20(轉機一次)小時之間。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/USA/美國-費爾班克斯國際機場.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>可能被要求入境時至少須持6個月以上效期之護照。</p>
                </div>
            </div>
        </div>

        <!-- 加拿大行前準備區 -->
        <div class="location-item d-none" data-location="加拿大">
            <div class="slogan">
                <span>加拿大 Canada</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>Canada<span>  &nbsp;加拿大 [北美洲]</span></h2>
                    <h3>黃刀鎮 Yellowknife</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 col-lg-6">
                        <img src="{{asset('img/prepare/Canada/加拿大-加拿大國旗.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/Canada/加拿大-著名景點.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>持有外交部在台北核發且載有身分證字號之台灣普通護照（含非晶片護照）免申請簽證，最多能停留6個月，但要申請「電子旅行授權許可證（Electronic Travel Authorization, eTA）」。</p>
                    <p>申請網站：<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/eta/apply-zh.html。">https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/eta/apply-zh.html。</a></p>
                    <p class="mt-5">相關規定請以加拿大移民、難民暨公民部網頁為主：</p>
                    <a href="http://www.cic.gc.ca/english/visit/eta.asp">http://www.cic.gc.ca/english/visit/eta.asp</a>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>由台北啟程至加拿大黃刀鎮平均飛行時間在20(轉機一次)~25(轉機兩次)小時之間。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/Canada/加拿大黃刀鎮機場.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>無</p>
                </div>
            </div>
        </div>

        <!-- 格陵蘭行前準備區 -->
        <div class="location-item d-none" data-location="格陵蘭">
            <div class="slogan">
                <span>格陵蘭 Greenland</span>
            </div>
            <div class="new-container">
                <div class="page-title">
                    <span>PREPARE</span>
                    <h1>行前準備</h1>
                </div>
                <div class="country">
                    <h2>Greenland<span>  &nbsp;格陵蘭 [歐洲]</span></h2>
                    <h3>伊盧利薩特 Ilulissat</h3>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 col-lg-6">
                        <img src="{{asset('img/prepare/Greenland/格陵蘭-格陵蘭旗幟.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('img/prepare/Greenland/格陵蘭-著名景點.jpg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                </div>
            </div>
            <!-- 準備區 -->
            <div class="prepaer">
                <div class="new-container">
                    <!-- 簽證區 -->
                    <h2 class="mb-3">簽證</h2>
                    <p>需申請申根簽證。</p>
                    <p>持台灣護照者(護照上有國民身分證統一編號)可免簽證入境，在180天內最多可停留90天，離開申根國家當日，護照須仍具有3個月以上的效期。</p>
                    <p>※護照上無國民身分證統一編號，不得適用免申根簽證待遇，訪歐前需辦理申根簽證。</p>
                    <p class="mt-5">在台簽證單位：</p>
                    <p>可向丹麥駐台北辦事處洽詢。</p>
                    <p class="mt-5">丹麥駐台北辦事處：</p>
                    <p>地址：105台北市敦化北路205號12樓1207室</p>
                    <p>電話：02-2718-2101</p>
                    <p class="mt-5">入境時，事先備妥並隨身攜帶以下資料，供海關查驗:</p>
                    <p>1. 訂房確認紀錄與付款證明、旅遊行程表及回程機票。</p>
                    <p>2. 足夠維持旅歐期間生活的財力證明。</p>
                    <!-- 航程區 -->
                    <h2 class="mb-3">航程</h2>
                    <p>由台北啟程至格陵蘭平均飛行時間23小時以上。</p>
                    <p>無直達飛機，多由丹麥、冰島或加拿大轉機。</p>
                    <div class="col-12 pt-4">
                        <img src="{{asset('img/prepare/Greenland/格陵蘭-伊盧利薩特機場.jpeg')}}" class="img-fluid w-100" alt="Responsive image">
                    </div>
                    <!-- 提醒區 -->
                    <h2>貼心提醒</h2>
                    <p>無</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 底部按鈕區 -->
    <section>
        <div class="d-flex justify-content-center nxet-page">
            <a class="next-btn" href="{{route('qa.list')}}">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Q&A
                <span><i class="fas fa-chevron-down"></i></span></i>
            </a>
        </div>
    </section>

@endsection



@section('js')
     <!-- leaflet Core JS -->
     <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

     <!-- 此專題的 Leaflet JS -->
    <script src="{{asset('js/leaflet-map.js')}}"></script>
    <!-- 此專題的 極光熱點選單 JS -->
    <script src="{{asset('js/hotspot-list.js')}}"></script>

@endsection