const facilitiesSlider = document.getElementsByClassName("facilities__slider")[0];
const facilitiesWrapper = document.getElementsByClassName("facilities__card__container")[0];
const facilitiesCards = document.getElementsByClassName("facilities__slider__card");

//let cardSwiper;
let imgSwiper;

const cardSwiper = new Swiper('.facilities__slider__mobile', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  }
  // breakpoints: {
  //   1000: {
  //     slidesPerView: "auto",
  //     initialSlide: 0,
  //     allowSlideNext: false,
  //     allowSlidePrev: false,
  //   }
  // }
});

// let width = window.innerWidth;

// window.addEventListener("resize", () => {
//     width = window.innerWidth;
//     console.log(cardSwiper)
//     if (width >= 1000) {
//       cardSwiper.disable();
        
//     } else {
//       cardSwiper.enable();
//     }
// });

// const enableSwiper = function() {
//   cardSwiper = new Swiper('.facilities__slider', {
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//     slidesPerView: "auto"
//     // autoplay: {
//     //   delay: 5000,
//     // },
//     // breakpoints: {
//     //   1000: {
//     //     allowSlideNext: false,
//     //     allowSlidePrev: false,
//     //     initialSlide: 0,
//     //     slidesPerView: "auto"
//     //   }
//     // }
//   });
  
imgSwiper = new Swiper('.carousel-images__mobile', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  }
});





