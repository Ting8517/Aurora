<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    <!-- bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 此專題的 layout Core CSS -->
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    @yield('css')

</head>
<body>
    <!-- nav bar -->
    <header>
        <nav class="navbar navbar-expand-lg mt-4">
            <div class="container">
                <a class="navbar-brand" href="{{asset('/')}}">
                    <img src="{{asset('img/logo.svg')}}" width="106" alt="Aurora" title="Aurora">
                </a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger-btn">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item me-lg-3 d-flex justify-content-end">
                            <a class="nav-link d-flex justify-content-end" href="{{route('hotspots.list')}}"><span
                                    data-hover="HOTSPOT">極光熱點</span></a>
                        </li>
                        <li class="nav-item me-lg-3 d-flex justify-content-end">
                            <a class="nav-link d-flex justify-content-end" href="{{route('hotspots.list')}}#other-itinerary"><span
                                    data-hover="ITINERART">相關行程</span></a>
                        </li>
                        <li class="nav-item me-lg-3 d-flex justify-content-end">
                            <a class="nav-link d-flex justify-content-end" href="{{route('prepare.list')}}"><span
                                    data-hover="PREPARE">行前準備</span></a>
                        </li>
                        <li class="nav-item me-lg-3 d-flex justify-content-end">
                            <a class="nav-link d-flex justify-content-end" href="{{route('qa.list')}}"><span
                                    data-hover="Q&A">常見問題</span></a>
                        </li>
                        <li class="nav-item  d-flex justify-content-end">
                            <a class="nav-link d-flex justify-content-end" href="{{route('qa.list')}}#contact-us"><span
                                    data-hover="CONTENT">聯絡我們</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        @yield('main')
        <!-- 背景星星群 -->
        <section>
            <div class="scene"></div>
        </section>
    </main>


    <footer>
        <div class="footer-text py-5">
            <div class="container">
                <p class="text-center py-1">Copyright All Rights Reserved. Design by 神秘北極圈阿拉斯加的山巔</p>
                <p class="text-center py-1">僅供學習用途，如有侵權請來信告知。</p>
            </div>
        </div>
    </footer>

    <!-- bootstrap Core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- parallax Core JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    
    
    <!-- 此專題的 layout Core JS -->
    <script src="{{asset('js/layout.js')}}"></script>
    @yield('js')
    
</body>
</html>