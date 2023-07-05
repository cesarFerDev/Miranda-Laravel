

const roomSwiper = new Swiper('.home__rooms__card__slider__mobile', {
    loop: true,
    slidesPerView: 1,
    // autoplay: {
    //     delay: 10000,
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1000: {
            slidesPerView: 1.5,
            spaceBetween: 100,
            centeredSlides: true,
        }
    }    
});
const popularRoomSwiper = new Swiper('.popular__rooms__card__slider__mobile', {
    loop: true,
    slidesPerView: 1,
    // autoplay: {
    //     delay: 10000,
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },    
});

const foodSwiper = new Swiper('.menu__section__slider', {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1000: {
            slidesPerView: 2
        }
        
    }
});


