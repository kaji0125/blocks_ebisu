<?php
/*
Template Name:contact
*/
?>
<?php get_header(); ?>
<div id="page">
<div id="contact">
    <h1 class="pg_title"><span>CONTACT</span></h1>
    <p class="pg_subtitle">内覧予約・お問い合わせ</p>
    <?php echo do_shortcode('[mwform_formkey key="33"]'); ?>
    <div class="contact_tel">
      <p class="contact_tel__read">お電話でのお問い合わせはこちらから</p>
      <dl>
        <dt class="contact_tel__title">TEL</dt>
        <dd class="contact_tel__number"><a href="tel:0334408330">03-3440-8330</a></dd>
      </dl>
    </div>
  </div>
 </div>
<?php get_footer(); ?>
