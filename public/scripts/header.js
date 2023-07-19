
let lastScrollTop;
navbar = document.getElementsByClassName('header')[0];
document.onmousemove= mouseCoordinates;

window.addEventListener('scroll',function(){
    let scrollTop = window.scrollY || document.documentElement.scrollTop;

    if(scrollTop > lastScrollTop){
        navbar.style.top='-180px';
    }
    lastScrollTop = scrollTop;
});


function mouseCoordinates(event) {
    let yPos= event.clientY;
    if (yPos < 200  || window.scrollY <= 50) {
        navbar.style.top='0px';
    } else {
        navbar.style.top='-180px';
    }
}
