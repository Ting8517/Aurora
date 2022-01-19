const locationElements = document.querySelectorAll('.location');

// const locationsName = ['冰島', '挪威', '瑞典', '芬蘭', '俄羅斯', '美國', '加拿大', '格陵蘭'];
const locations = {
    '冰島': { 'coordinate': [64.1335484, -21.9224813], 'locationName': "冰島 雷克雅維克", },
    '挪威': { 'coordinate': [69.6652941, 18.8477109], 'locationName': "挪威 特羅姆瑟", },
    '瑞典': { 'coordinate': [67.8537518, 20.1863911], 'locationName': "瑞典 基律納市", },
    '芬蘭': { 'coordinate': [66.6670512, 24.9110026], 'locationName': "芬蘭 羅瓦涅米", },
    '俄羅斯': { 'coordinate': [68.9641689, 32.9460331], 'locationName': "俄羅斯 莫曼斯克", },
    '美國': { 'coordinate': [64.828421, -147.7390416], 'locationName': "美國 費爾班克斯", },
    '加拿大': { 'coordinate': [62.4749237, -114.479034], 'locationName': "加拿大 黃刀鎮", },
    '格陵蘭': { 'coordinate': [69.2279806, -51.121874], 'locationName': "格陵蘭 伊盧利薩特", }
};


let corner1 = L.latLng(90, 3600);      //左上經緯度 //其實經度最多就-180~180 弄超過的話就可以一直左右滑
let corner2 = L.latLng(-90, -3600);	    //右下經緯度
let bounds = L.latLngBounds(corner1, corner2); //構建限制範圍
let center = [64.1334231, -21.9925226];
const map = L.map('map', {
    center: center, // 中心點座標
    // crs: L.CRS.EPSG3857,  //使用的座標系統
    maxBounds: bounds,
    zoom: 3, // 0 - 18
    minZoom: 2,
    maxZoom: 18,
    maxBoundsViscosity: 0.5,   //滑超過邊界的彈性 0是最軟的 1是最硬的
    attributionControl: false, // 是否秀出「leaflet」的貢獻標記
    zoomControl: false, // 是否秀出 - + 按鈕
});


// const markerIcon = L.icon({  //自訂marker
//     iconUrl: '/js/map-json/icon.gif',
//     iconSize: [50, 50], // size of the icon
//     iconAnchor: [22, 50], // point of the icon which will correspond to marker's location
//     popupAnchor: [0, -50] // point from which the popup should open relative to the iconAnchor
// });

L.tileLayer('https://cartocdn_{s}.global.ssl.fastly.net/base-midnight/{z}/{x}/{y}.png').addTo(map);

let country = {};
let myGeoJSONPath = "/js/map-json/冰島.json";   //給被選擇的國家圖層
let myCustomStyle = {    //圖層樣式
        stroke: false,
        fill: true,
        fillColor: '#00ff66',
        fillOpacity: 1
    }
$.getJSON(myGeoJSONPath, function (data) {  //將圖層加入地圖
    country = L.geoJson(data, {
        clickable: false,
        style: myCustomStyle,
        // color: '#999',
    }).addTo(map);
})

let marker = {};
marker = L.marker(locations['冰島']['coordinate'], {   //加入標記
    title: '',
    opacity: 1.0,
    // icon: markerIcon,
}).addTo(map).bindPopup(`<b style="font-size:20px;">${locations['冰島']['locationName']}</b><br>`).openPopup();


//初始其他相關行程
setDispalyItineraries('冰島');

locationElements.forEach(function (locationElement) {
    locationElement.addEventListener('click', function () {
        let centerName = locationElement.getAttribute('data-tag');

         //移除上一次加進去的國家圖層
        map.removeLayer(country); 
        myGeoJSONPath = `/js/map-json/${centerName}.json`;   //給被選擇的國家圖層
        $.getJSON(myGeoJSONPath, function (data) {  //將圖層加入地圖
            country = L.geoJson(data, {
                clickable: false,
                style: myCustomStyle,
                color: '#999',
            }).addTo(map);
        })
        
        //刪除上一次加進去的標記
        map.removeLayer(marker);
        map.flyTo(locations[centerName]['coordinate']);   //飛到此地
        marker = L.marker(locations[centerName]['coordinate'], {   //加入標記
            title: '',
            opacity: 1.0,
            // icon: markerIcon,
        }).addTo(map).bindPopup(`<b style="font-size:20px;">${locations[centerName]['locationName']}</b><br>`).openPopup();

        //移除上一次顯示的國家
        let preActiveLocation = document.querySelector('.location-item.active');
        preActiveLocation.classList.add('d-none');
        preActiveLocation.classList.remove('active');
        //顯示這一次要顯示的國家
        let location = document.querySelector(`[data-location=${centerName}]`);
        location.classList.remove('d-none');
        location.classList.add('active');

        setDispalyItineraries(centerName);
    });
});

//其他相關行程顯示設定
function setDispalyItineraries(selectCountry){
    let  swiperItineraries = document.querySelectorAll('.swiper-slide');
    swiperItineraries.forEach(function(swiperItinerary){
        let country = swiperItinerary.getAttribute('data-country');
        //相關行程的國家為選擇的國家時avtive
        if(country == selectCountry){
            swiperItinerary.classList.remove('d-none');
            swiperItinerary.classList.add('avtive');
        }
        else{   //相關行程的國家不是選擇的國家時d-none
            swiperItinerary.classList.add('d-none');
            swiperItinerary.classList.remove('avtive');
        }
    });
}