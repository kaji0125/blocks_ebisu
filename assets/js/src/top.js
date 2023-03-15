import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import lottie from 'lottie-web'
import StickySidebar from 'sticky-sidebar'
import 'rellax'
/**lottie.jsロゴアニメーション（初回のみ）*/

//トップアニメーション
const keyName = 'visited';
const keyValue = true;
//const url_hash = location.hash;
const intro_logo = document.querySelector('.logo_animation');
const intro_logo_animation = lottie.loadAnimation({
  container: intro_logo,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: '/ebisu/wp-content/themes/blocks_ebisu/assets/json/toplogo.json'
});
intro_logo_animation.onComplete = () => {
  document.querySelector('html').classList.add("load_complete");
}

window.addEventListener('DOMContentLoaded', function () {
  //sessionStorageで初回のみスプラッシュアニメを再生

  /*if (url_hash) {
  	 setTimeout(function () {
            intro_logo_animation.play();
         }, 500);
  } else{	*/
  if (!sessionStorage.getItem(keyName)) {
    //sessionStorageにキーと値を追加
    sessionStorage.setItem(keyName, keyValue);
    setTimeout(function () {
      intro_logo_animation.play();
    }, 500);
  } else {
    //ここに通常アクセス時の処理
    document.querySelector('#splash').classList.add("visited");
    document.querySelector('html').classList.add("visited");
  }

  //}
});

//スクロールアローアニメーション
const arrow_scroll = document.querySelector('.arrow_animation');
const arrow_scroll_animation = lottie.loadAnimation({
  container: arrow_scroll,
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/ebisu/wp-content/themes/blocks_ebisu/assets/json/arrow.json'
});

//モアアローアニメーション
const more_arrow = document.querySelector('.more_animation');
const more_arrow_animation = lottie.loadAnimation({
  container: more_arrow,
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/ebisu/wp-content/themes/blocks_ebisu/assets/json/more.json'
});

//モアアローアニメーション
const info_more_arrow = document.querySelector('.info_more_animation');
const info_more_arrow_animation = lottie.loadAnimation({
  container: info_more_arrow,
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/ebisu/wp-content/themes/blocks_ebisu/assets/json/more.json'
});

//コンセプトアニメーション
const concept_logo = document.querySelector('.concept_animation');
const concept_logo_animation = lottie.loadAnimation({
  container: concept_logo,
  renderer: 'svg',
  loop: false,
  autoplay: false,
  path: '/ebisu/wp-content/themes/blocks_ebisu/assets/json/conceptlogo.json'
});


/*Intersection Observer API*/
//要素が画面にはいったらin_view付与
const hidden = document.querySelectorAll('.in_view');
const options = {
  root: null,
  rootMargin: '-1% 0px',
  threshold: 0.3
}
const observer = new IntersectionObserver(InView, options);
hidden.forEach(hidden => {
  observer.observe(hidden);
});

function InView(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('js-active');
      concept_logo_animation.play(); //ロゴアニメスタート
    };
  });
};


//コンセプトをsticky

const sidebar = new StickySidebar('.sticky01', {
  containerSelector: '.index_feature',
  innerWrapperSelector: '.index_feature__block',
  topSpacing: 0,
  bottomSpacing: 0
});

const sidebar02 = new StickySidebar('.sticky02', {
  containerSelector: '.index_feature02',
  innerWrapperSelector: '.index_feature__block',
  topSpacing: 0,
  bottomSpacing: 0
});

const sidebar03 = new StickySidebar('.sticky03', {
  containerSelector: '.index_feature03',
  innerWrapperSelector: '.index_feature__block',
  topSpacing: 0,
  bottomSpacing: 0
});

const sidebar04 = new StickySidebar('.sticky04', {
  containerSelector: '.index_feature04',
  innerWrapperSelector: '.index_feature__block',
  topSpacing: 0,
  bottomSpacing: 0
});


//コンセプトをすこしパララックス
window.onload = function () {
  const Rellax = require('rellax');
  const rellax = new Rellax('.js-rellax')
  if (window.matchMedia('(max-width: 959px)').matches) {
    rellax.destroy();
  } else {
    rellax.refresh();
  }
}


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


    autoplay: {
      delay: 0, // 途切れなくループ
      disableOnInteraction: false,
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

  const location_slider = new Swiper('.locationSlider', {
    slidesPerView: 1.2,
    loop: true,
    speed: 20000,
    allowTouchMove: false,

    autoplay: {
      delay: 0, // 途切れなくループ
      disableOnInteraction: false,
    },
    on: {
      resize: function () {
        location_slider.autoplay.start();
      }
    },

    breakpoints: {

      768: {
        slidesPerView: 4
      }
    }
  });

  const fudomae_slider = new Swiper('.fudomaeSlider', {
    slidesPerView: 1.4,
    loop: true,
    speed: 20000,
    allowTouchMove: false,


    autoplay: {
      delay: 0, // 途切れなくループ
      disableOnInteraction: false,
    },
    on: {
      resize: function () {
        fudomae_slider.autoplay.start();
      }
    },
    breakpoints: {

      1400: {
        slidesPerView: 6
      },
      1280: {
        slidesPerView: 5
      },
      768: {
        slidesPerView: 3
      },
      400: {
        slidesPerView: 2
      }
    }
  })

  const word_slider_left01 = new Swiper('.move_left01', {
    slidesPerView: 0.5,

    loop: true,
    loopAdditionalSlides: 5,
    speed: 24000,
    allowTouchMove: false,


    autoplay: {
      delay: 0, // 途切れなくループ
      disableOnInteraction: false,
    },
    on: {
      resize: function () {

        setTimeout(function () {
          word_slider_left01.autoplay.start();
        }, 500);
      }
    },
    breakpoints: {
      768: {
        slidesPerView: 1
      }
    }
  });

  const word_slider_right01 = new Swiper('.move_right01', {
    slidesPerView: 0.5,

    loop: true,
    loopAdditionalSlides: 5,
    speed: 30000,
    allowTouchMove: false,
    autoplay: {
      delay: 0, // 途切れなくループ
      reverseDirection: true,
      disableOnInteraction: false,
    },
    on: {
      resize: function () {

        setTimeout(function () {
          word_slider_right01.autoplay.start();
        }, 500);
      }
    },
    breakpoints: {
      768: {
        slidesPerView: 1
      }
    }
  });

  const word_slider_left02 = new Swiper('.move_left02', {
    slidesPerView: 0.5,

    loop: true,
    loopAdditionalSlides: 5,
    speed: 20000,
    allowTouchMove: false,


    autoplay: {
      delay: 0, // 途切れなくループ
      disableOnInteraction: false,
    },
    on: {
      resize: function () {

        setTimeout(function () {
          word_slider_left02.autoplay.start();
        }, 500);
      }
    },
    breakpoints: {
      768: {
        slidesPerView: 1
      }
    }

  });

  const word_slider_right02 = new Swiper('.move_right02', {
    slidesPerView: 0.5,

    loop: true,
    loopAdditionalSlides: 5,
    speed: 18000,
    allowTouchMove: false,
    autoplay: {
      delay: 0, // 途切れなくループ
      reverseDirection: true,
      disableOnInteraction: false,
    },
    on: {
      resize: function () {
        setTimeout(function () {
          word_slider_right02.autoplay.start();
        }, 500);
      }
    },
    breakpoints: {
      768: {
        slidesPerView: 1
      }
    }
  });

}
