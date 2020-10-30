//슬라이드 5장 시작

var slide = document.querySelector('#slide-wrapper');




var slideNum = 2;

function toNextSlide() {
    
    var cons = ["<strong>대구/경북지역</strong> 이사 전문업체!", "<strong>10년경력</strong>의 이사 베테랑이 이사를 직접 도와드립니다", "무료 간편 견적측정 가능! <strong>전화상담/ 카톡 오픈상담/ 사진상담/ 홈페이지 상담!</strong>"];
    
    if (slideNum > 3) {
        slideNum = 1;
    }
    slide.style.backgroundImage = `url(image/slide-${slideNum}.jpg)`;
    
    document.querySelector("#js-text").innerHTML = cons[slideNum-1];
    
    slideNum++;
}

setInterval(toNextSlide, 6000);

//슬라이드 5장 끝


