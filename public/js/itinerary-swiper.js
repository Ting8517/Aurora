
let newsSwiper = new Swiper(".itinerary-swiper", {
    speed: 300,            //滑動速度
    navigation: {   //按鈕換頁
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",

    },
    pagination: {   //頁面小點點
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    breakpoints: {   //RWD
        1200: {
            slidesPerView: 4,      //一次畫面要顯示幾個幻燈片
            spaceBetween: 30,      //間隔幾px     
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 35,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        375: {
            slidesPerView: 1,
            spaceBetween: 20,
        }

    }
});
