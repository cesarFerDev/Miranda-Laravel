const burgerButton = document.getElementsByClassName("burger__button__closed")[0];
const burgerMenu = document.getElementsByClassName("header__menu__closed")[0];

burgerButton.addEventListener('click', () => {
    burgerButton.classList.toggle('burger__button__open');
    burgerMenu.classList.toggle('header__menu__open')
});