//토글 메뉴 부분

const menuToggle = document.querySelector('#menu-toggle');

document.querySelector('#hamburger').addEventListener('click', () => {
    menuToggle.classList.toggle("hide");
})


document.querySelector('#menu-close-button').addEventListener('click', () => {
    
    menuToggle.classList.toggle("hide");
});





