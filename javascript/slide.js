

//슬라이드 5장 시작
const slide = document.querySelector('#slide-wrapper');

var slideNum = 2;

function toNextSlide() {
    
    if (slideNum > 3) {
        slideNum = 1;
    }
    slide.style.backgroundImage = `url(image/slide-${slideNum}.jpg)`;
    slideNum++;
}

setInterval(toNextSlide, 6000);

//슬라이드 5장 끝


