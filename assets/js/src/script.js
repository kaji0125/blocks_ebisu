import jquery from 'jquery';
window.$ = jquery;
window.jQuery = jquery


//画面の高さ制御
if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)) {
  window.addEventListener('orientationchange', () => {
    setTimeout(function () {
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);
    }, 100);
	  
  });
} else {
  window.addEventListener('resize', () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
	  
  });
}

//webfontが読み込まれないときの対応
setTimeout(function () {
const htmlElement = document.querySelector('html');
if (!htmlElement.classList.contains('wf-active')) {
htmlElement.classList.add('loading-delay');
}
}, 3000);

const spMenu = document.querySelector('.sp_h_menu');
const spNavi = document.querySelector('.sp_navi');

spMenu.addEventListener('click', function () {
this.classList.toggle('action');
spNavi.classList.toggle('open');
});


window.addEventListener('load', function() {
  // ページ内リンク
  const urlHash = location.hash; // URLハッシュを取得
  const animeSpeed = 2000; // スクロールのアニメーションスピード
  const mq = window.matchMedia("(min-width: 767px)");
  const headerHeight = mq.matches ? 0 : 60;

  if (urlHash) {
    jQuery('body, html').stop().scrollTop(0);
    setTimeout(function() {
      const target = jQuery(urlHash);
      const position = target.offset().top - headerHeight;
      jQuery('body, html').stop().animate({
        scrollTop: position
      }, animeSpeed);
    }, 1000);
  }

  jQuery('a[href^="#"]').on({
    'click': function() {
      const href = jQuery(this).attr('href');
      const target = jQuery(href);
      const position = target.offset().top - headerHeight;
      jQuery('.sp_navi').removeClass('open');
      jQuery('.sp_h_menu').removeClass('action');
      jQuery('body, html').stop().animate({
        scrollTop: position
      }, animeSpeed);
    }
  });
});

jQuery(function($) {
  // クリックで開閉
  $('.cell.number').on('click', function() {
    $(this).toggleClass('open');
    $(this).next('.lp-planlist_accordion, .index_floorlist_accordion').stop().slideToggle();
  });

  $('.faq dt').on('click', function() {
    $(this).toggleClass('open');
    $(this).next('dd').stop().slideToggle();
  });

  // modal
  $('body').on('click', '.modalbtn', function() {
    const modalId = $(this).data('id');
    $(modalId).addClass('modal_open');
  });

  $('.modal_close').on('click', function() {
    $('.modal').removeClass('modal_open');
  });
});
