</div>
<footer class="footer">
  <nav class="footer__nav">
    <ul class="footer__office">
      <li><a href="<?php echo get_option('home'); ?>">BLOCKS EBISU</a></li>
      <li><a href="https://www.blocks-office.jp/fudomae/" target="_blank">BLOCKS MEGURO FUDOMAE</a></li>
    </ul>
  </nav>
  <div class="footer__about">
    <div class="footer__flex">
      <div class="footer__logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/footer_logo.svg" alt="BLOCKS"/></div>
      <div class="footer__operating">
        <dl>
          <dt>OPERATING COMPANY</dt>
          <dd>株式会社ブロックスプラス <span>東京都千代田区丸の内3丁目1番1号</span></dd>
        </dl>
        <p>株式会社ブロックスプラスは、プロフィッツが持つコンテンツ企画力をベースとしたアセットマネジメントとRJオフィスの経験豊富なシェアオフィスの企画・運営を一体で行うことにより、これまで距離があった投資家・運営者・利用者のいずれにも新たな価値創造を実現する目的で設立されました。</p>
        <div class="footer__links">
          <ul class="footer__companyLinks">
            <li><a href="https://profitz.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/profitz_logo.svg" alt=""/></a></li>
            <li><a href="https://rj-office.co.jp/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/rj_logo.svg" alt=""/></a></li>
          </ul>
          <ul class="footer__snsLinks">
            <li><a href="https://www.instagram.com/blocks_office/" target="_blank">Instagram</a></li>
            <li><a href="https://www.facebook.com/blocksoffice" target="_blank">facebook</a></li>
          </ul>
        </div>
      </div>
    </div>
    <p class="footer__copyright"><a href="<?php echo get_option('home'); ?>/privacy-policy/">個人情報保護方針</a> <span>©<?php print(date('Y').''); ?> BLOCKS OFFICE</span></p>
  </div>
</footer>
<script src="<?php bloginfo('template_url'); ?>/assets/js/dist/script.js" ></script>
<?php if ( is_home() || is_front_page() ) : ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/dist/index.js" ></script>
<?php endif; ?>
<?php if(is_page('lp')): ?>
<script src="<?php bloginfo('template_url'); ?>/assets/js/dist/lp.js" ></script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>