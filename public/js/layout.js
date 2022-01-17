//漢堡條開關
const hamburgerElement = document.querySelector('.hamburger-btn');

let isHamburgerOpen = false;
hamburgerElement.addEventListener('click', function () {
    isHamburgerOpen = !isHamburgerOpen;
    isHamburgerOpen ? hamburgerElement.classList.add('open') : hamburgerElement.classList.remove('open')
});

//產生星星
const scene = document.querySelector('.scene');
function creatStars(){
    let count = 200;
    
    for(let i=0; i<count; i++){
        let star = document.createElement("i");
        let x = Math.floor(Math.random() * window.innerWidth);
        let y = Math.floor(Math.random() * window.innerHeight);
        let duration = Math.random()*10;
        let size = Math.random() * 2;

        star.style['left'] = x + 'px';
        star.style['top'] = y + 'px';
        star.style['width'] = 1 + size + 'px';
        star.style['height'] = 1 +size + 'px';
        star.style['animation-duration'] = 5 +duration + 's';
        star.style['animation-delay'] = duration + 's';


        scene.appendChild(star);
    }
}
creatStars();
