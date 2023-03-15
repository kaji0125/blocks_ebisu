import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';


/*swiperで無限スクロール*/

window.addEventListener('load', function () {
  setTimeout(function () {
    sliderInit();
  }, 500);
}, false);


function sliderInit() {
  const slider = new Swiper('.photoSlider', {
    slidesPerView: 1.2,
    loop: true,
    speed: 20000,
    allowTouchMove: false,

    centeredSlides: true,
    autoplay: {
      delay: 0, // 途切れなくループ
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
    on: {
      resize: function () {
        slider.autoplay.start();
      }
    },
    breakpoints: {
      1280: {
        slidesPerView: 3
      },
      960: {
        slidesPerView: 2.4
      },
      768: {
        slidesPerView: 1.8
      }
    }
  });


}
