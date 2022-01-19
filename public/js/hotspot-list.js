//地點按鈕
const locationBtns = document.querySelectorAll('.location-btn');
const locationALinks = document.querySelectorAll('.location');
const tipElement = document.querySelector('.tip');

locationBtns.forEach(function(locationBtn){
    locationBtn.addEventListener('mouseenter',function(){   //偵測到hover時
        //此按鈕的上一個元素a顯示
        setDispaly(this.previousElementSibling,'mouseenter');
       
    });

    locationBtn.addEventListener('mouseleave',function(){
        //此按鈕的上一個元素a隱藏
        setDispaly(this.previousElementSibling,'mouseleave');
        
    });
});

locationALinks.forEach(function(locationALink){
    locationALink.addEventListener('mouseenter',function(){
        setDispaly(this,'mouseenter');
    });
    locationALink.addEventListener('mouseleave',function(){
        setDispaly(this,'mouseleave');
    });
    locationALink.addEventListener('click',function(){
        if(tipElement){
            tipElement.classList.add('d-none');
        }
    });
});

function setDispaly (element, active){
    if(active == 'mouseenter'){
        element.style['transform'] = 'translateX(0%) scale(1)';
        element.style['opacity'] = 1;
    }
    else{
        element.style['transform'] = 'translateX(150%) scale(0)';
        element.style['opacity'] = 0.5;
    }
}
