//토글 메뉴 부분

const menuToggle = document.querySelector('#menu-toggle');

document.querySelector('#hamburger').addEventListener('click', () => {
    menuToggle.classList.toggle("hide");
})


document.querySelector('#menu-close-button').addEventListener('click', () => {
    
    menuToggle.classList.toggle("hide");
});







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


//다음 간단 주소 부분

function DaumPostcode() {
    new daum.Postcode({
        oncomplete: function(data) {

            // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var roadAddr = data.roadAddress; // 도로명 주소 변수
            var extraRoadAddr = ''; // 참고 항목 변수 

            var completeAddr = '';

            // 법정동명이 있을 경우 추가한다. (법정리는 제외)
            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
            if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraRoadAddr += data.bname;
                }
            // 건물명이 있고, 공동주택일 경우 추가한다.
            if(data.buildingName !== '' && data.apartment === 'Y'){
                    extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
            if(extraRoadAddr !== ''){
                    extraRoadAddr = ' (' + extraRoadAddr + ')';
                }
                    
            var completeAddr = roadAddr + extraRoadAddr;
                    
            document.getElementById('simple_now_address').value = completeAddr;
                        


            }
        }).open();
    }