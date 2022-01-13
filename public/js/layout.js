//漢堡條開關
const hamburgerElement = document.querySelector('.hamburger-btn');

let isHamburgerOpen = false;
hamburgerElement.addEventListener('click', function () {
    isHamburgerOpen = !isHamburgerOpen;
    isHamburgerOpen ? hamburgerElement.classList.add('open') : hamburgerElement.classList.remove('open')
});


    