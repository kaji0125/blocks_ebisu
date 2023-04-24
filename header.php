<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="format-detection" content="telephone=no, email=no, address=no">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<meta name="apple-mobile-web-app-title" content="BLOCKS OFFICE EBISU">
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="keywords" content="恵比寿,オフィス,BLOCKS,<?php wp_title('', true, 'right'); ?>">	
<?php
if ( is_singular( 'post' ) ) {
  if ( have_posts() ): while ( have_posts() ): the_post();
  echo '<meta name="description" content="' . mb_substr( get_the_excerpt(), 0, 100 ) . '" />';
  echo "\n";
  endwhile;
  endif;
} else {
  echo '<meta name="description" content="BLOCKS OFFICE EBISU｜JR山手線・東京メトロ日比谷線「恵比寿」駅徒歩7分の好立地に、NEWオープン!!" />';
  echo "\n";
}
?>	
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>" />
<meta property="og:type" content="article" />
<?php
if ( is_single() ) {
  ?>
<meta property="og:url" content="<?php the_permalink(); ?>" />
<?php } else if( is_page() ) {?>
<meta property="og:url" content="<?php the_permalink(); ?>" />
<?php } else  {?>
<meta property="og:url" content="https://www.blocks-office.jp/ebisu/" />
<?php }?>
<?php
if ( is_singular( 'post' ) ) {
  if ( have_posts() ): while ( have_posts() ): the_post();
  echo '<meta property="og:description" content="' . mb_substr( get_the_excerpt(), 0, 100 ) . '" />';
  echo "\n";
  endwhile;
  endif;
} else {
  echo '<meta property="og:description" content="BLOCKS OFFICE EBISU｜JR山手線・東京メトロ日比谷線「恵比寿」駅徒歩7分の好立地に、NEWオープン!!" />';
  echo "\n";
}
?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
<?php if(is_single()): ?>
<?php
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i'; //投稿にイメージがあるか調べる
if ( has_post_thumbnail() && !is_archive() ) { //投稿にサムネイルがある場合の処理
  $image_id = get_post_thumbnail_id();
  $image = wp_get_attachment_image_src( $image_id, 'full' );
  echo '<meta property="og:image" content="' . $image[ 0 ] . '" />';
  echo "\n";
} else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive() ) { //投稿にサムネイルは無いが画像がある場合の処理
  echo '<meta property="og:image" content="' . $imgurl[ 2 ] . '" />';
  echo "\n";
} else { //投稿にサムネイルも画像も無い場合、もしくはアーカイブページの処理
  echo '<meta property="og:image" content="https://www.blocks-office.jp/ebisu/wp-content/themes/blocks_ebisu/assets/img/common/fb.png" />';
  echo "\n";
}
?>
<?php else: ?>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/assets/img/common/fb.png" />
<?php endif; ?>
<meta name="twitter:card" content="summary">	
<meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>" />
<?php
if ( is_singular( 'post' ) ) {
  if ( have_posts() ): while ( have_posts() ): the_post();
  echo '<meta name="twitter:description" content="' . mb_substr( get_the_excerpt(), 0, 100 ) . '" />';
  echo "\n";
  endwhile;
  endif;
} else {
  echo '<meta name="twitter:description" content="BLOCKS OFFICE EBISU｜JR山手線・東京メトロ日比谷線「恵比寿」駅徒歩7分の好立地に、NEWオープン!!" />';
  echo "\n";
}
?>
<?php if(is_single()): ?>
<?php
$str = $post->post_content;
$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i'; //投稿にイメージがあるか調べる
if ( has_post_thumbnail() && !is_archive() ) { //投稿にサムネイルがある場合の処理
  $image_id = get_post_thumbnail_id();
  $image = wp_get_attachment_image_src( $image_id, 'full' );
  echo '<meta name="twitter:image" content="' . $image[ 0 ] . '" />';
  echo "\n";
} else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive() ) { //投稿にサムネイルは無いが画像がある場合の処理
  echo '<meta name="twitter:image" content="' . $imgurl[ 2 ] . '" />';
  echo "\n";
} else { //投稿にサムネイルも画像も無い場合、もしくはアーカイブページの処理
  echo '<meta name="twitter:image" content="https://www.blocks-office.jp/ebisu/wp-content/themes/blocks_ebisu/assets/img/common/fb.png" />';
  echo "\n";
}
?>
<?php else: ?>
<meta name="twitter:image" content="<?php bloginfo('template_url'); ?>/assets/img/common/fb.png" />
<?php endif; ?>
<!--icons-->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/common/favicon.ico" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/img/common/apple-touch-icon.png">
<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/common/favicon.ico">
<!--FONT--> 
<script>
  (function(d) {
    var config = {
      kitId: 'frm2wue',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!--FONT / STYLE-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Inter:wght@500;600&family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?t=20221102" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/lp/lp01.css" type="text/css" media="all" />
<script type='text/javascript' src='<?php echo get_option('home'); ?>/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script> 
<script type='text/javascript' src='<?php echo get_option('home'); ?>/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.2' id='jquery-ui-datepicker-js'></script>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
<?php if ( is_home() || is_front_page() ) : ?>
<header class="header_top">
  <h1 class="header_top__logo"><a href="<?php echo get_option('home'); ?>/">
    <svg version="1.1" class="svg_logo" x="0px" y="0px"  width="244px" height="25px" viewBox="0 0 244 25" style="enable-background:new 0 0 244 25;"xml:space="preserve">
      <path d="M0,24.2V0.4h8c4.7,0,7.6,2.1,7.6,6.6c0,3.2-1.6,4.8-3.4,4.9C14,12,16,13.8,16,17.2c0,3.7-2.3,7-7.5,7H0z
	 M4.2,10.1H8c1.9,0,3.2-1.2,3.2-2.9s-1.4-2.6-3-2.6h-4V10.1z M4.2,20.1h4c1.8,0,3.5-1,3.5-2.9c0-1.8-1.4-2.9-3.5-2.9h-4V20.1z"/>
      <path d="M23.2,24.2V0.4h4.2V20h9.5v4.2H23.2z"/>
      <path d="M42.9,15.3V9.5c0-4.8,2.8-9.5,8.7-9.5s8.7,4.7,8.7,9.5v5.7c0,4.8-2.8,9.3-8.7,9.3
	C45.7,24.6,42.9,20.1,42.9,15.3z M56,14.7V10c0-2.4-0.7-5.7-4.4-5.7s-4.4,3.3-4.4,5.7v4.6c0,2.7,1,5.6,4.4,5.6S56,17.4,56,14.7z"/>
      <path d="M66.9,14.9V9.8c0-5.4,3-9.8,8.6-9.8c4.3,0,7.5,2.7,8.2,6.7l-4.3,0.7c-0.5-2-2.1-3-3.9-3c-3.1,0-4.4,2.5-4.4,5.5
	v3.9c0,3.6,0.8,6.3,4.1,6.3c2.3,0,3.9-1.4,4.1-3.4l4.4,0.3c-0.4,4.4-3.9,7.5-8.6,7.5C70.1,24.6,66.9,20.8,66.9,14.9z"/>
      <path d="M103.9,24.2L97.6,14L95,17.5v6.7h-4.3V0.4H95v10.2l7.8-10.2h5.1l-7.4,9.8l8.7,14H103.9z"/>
      <path d="M113.2,17.3l4.4-0.5c0.4,2.4,2.1,3.6,4,3.7c1.6,0.1,3.5-0.5,3.8-2.2c0.1-0.9-0.2-2-3-3.2l-3.2-1.3
	c-3.6-1.6-5.3-3.7-5.3-6.9c0-4.1,3.2-6.9,7.8-6.9c4.4,0,7.2,2.7,7.9,6.6l-4.2,0.6c-0.3-1.7-1.6-3.1-3.7-3.1c-1.8,0-3.4,1-3.4,2.8
	c0,1.4,0.9,2.1,3.5,3.2l3.6,1.5c3.2,1.3,4.5,3.4,4.5,6.1c0,4.1-3.4,6.9-8,6.9C117.4,24.6,113.8,21.6,113.2,17.3z"/>
      <path d="M146.5,24.2V0.4h14.3v4.2h-10.1V10h7.5v4.2h-7.5V20h10.6v4.2H146.5z"/>
      <path d="M168.4,24.2V0.4h8c4.7,0,7.6,2.1,7.6,6.6c0,3.2-1.6,4.8-3.4,4.9c1.8,0.1,3.8,1.9,3.8,5.3c0,3.7-2.3,7-7.5,7
	H168.4z M172.6,10.1h3.8c1.9,0,3.2-1.2,3.2-2.9s-1.4-2.6-3-2.6h-4V10.1z M172.6,20.1h4c1.8,0,3.5-1,3.5-2.9c0-1.8-1.4-2.9-3.5-2.9
	h-4V20.1z"/>
      <path d="M191.6,24.2V0.4h4.2v23.8C195.8,24.2,191.6,24.2,191.6,24.2z"/>
      <path d="M202.6,17.3l4.4-0.5c0.4,2.4,2.1,3.6,4,3.7c1.6,0.1,3.5-0.5,3.8-2.2c0.1-0.9-0.2-2-3-3.2l-3.2-1.3
	c-3.6-1.6-5.3-3.7-5.3-6.9c0-4.1,3.2-6.9,7.8-6.9c4.4,0,7.2,2.7,7.9,6.6l-4.2,0.6c-0.3-1.7-1.6-3.1-3.7-3.1c-1.8,0-3.4,1-3.4,2.8
	c0,1.4,0.9,2.1,3.5,3.2l3.6,1.5c3.2,1.3,4.5,3.4,4.5,6.1c0,4.1-3.4,6.9-8,6.9C206.8,24.6,203.2,21.6,202.6,17.3z"/>
      <path d="M226.1,14.9V0.4h4.3v14.5c0,2.8,1.3,5.2,4.4,5.2s4.4-2.4,4.4-5.2V0.4h4.3v14.5c0,5.1-2.9,9.7-8.6,9.7
	C228.9,24.6,226.1,20,226.1,14.9z"/>
    </svg>
    </a></h1>
  <div class="header_top__contact"><a href="<?php echo get_option('home'); ?>/contact/">内覧予約・お問い合わせ</a></div>
  <nav class="header_top__navi">
    <ul>
      <li><a href="#index_concept" class="scroll-btn">CONCEPT</a></li>
      <li><a href="#index_access" class="scroll-btn">ACCESS</a></li>
      <li><a href="#index_plan" class="scroll-btn">PLAN</a></li>
      <li><a href="#index_faq" class="scroll-btn">FAQ</a></li>
      <li><a href="#index_news" class="scroll-btn">NEWS</a></li>
    </ul>
  </nav>
  <div class="sp_h_menu">
    <div class="sp_h_btn">
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </div>
</header>
<nav class="sp_navi">
  <ul>
    <li><a href="#index_concept" class="scroll-btn">CONCEPT</a></li>
    <li><a href="#index_access" class="scroll-btn">ACCESS</a></li>
    <li><a href="#index_plan" class="scroll-btn">PLAN</a></li>
    <li><a href="#index_faq" class="scroll-btn">FAQ</a></li>
    <li><a href="#index_news" class="scroll-btn">NEWS</a></li>
    <li><a href="<?php echo get_option('home'); ?>/contact/">内覧予約・お問い合わせ</a></li>
  </ul>
</nav>
<?php else: ?>
<header class="header_page">
  <div class="header_page__logo"><a href="<?php echo get_option('home'); ?>/">
    <svg version="1.1" class="svg_logo" x="0px" y="0px"  width="244px" height="25px" viewBox="0 0 244 25" style="enable-background:new 0 0 244 25;"xml:space="preserve">
      <path d="M0,24.2V0.4h8c4.7,0,7.6,2.1,7.6,6.6c0,3.2-1.6,4.8-3.4,4.9C14,12,16,13.8,16,17.2c0,3.7-2.3,7-7.5,7H0z
	 M4.2,10.1H8c1.9,0,3.2-1.2,3.2-2.9s-1.4-2.6-3-2.6h-4V10.1z M4.2,20.1h4c1.8,0,3.5-1,3.5-2.9c0-1.8-1.4-2.9-3.5-2.9h-4V20.1z"/>
      <path d="M23.2,24.2V0.4h4.2V20h9.5v4.2H23.2z"/>
      <path d="M42.9,15.3V9.5c0-4.8,2.8-9.5,8.7-9.5s8.7,4.7,8.7,9.5v5.7c0,4.8-2.8,9.3-8.7,9.3
	C45.7,24.6,42.9,20.1,42.9,15.3z M56,14.7V10c0-2.4-0.7-5.7-4.4-5.7s-4.4,3.3-4.4,5.7v4.6c0,2.7,1,5.6,4.4,5.6S56,17.4,56,14.7z"/>
      <path d="M66.9,14.9V9.8c0-5.4,3-9.8,8.6-9.8c4.3,0,7.5,2.7,8.2,6.7l-4.3,0.7c-0.5-2-2.1-3-3.9-3c-3.1,0-4.4,2.5-4.4,5.5
	v3.9c0,3.6,0.8,6.3,4.1,6.3c2.3,0,3.9-1.4,4.1-3.4l4.4,0.3c-0.4,4.4-3.9,7.5-8.6,7.5C70.1,24.6,66.9,20.8,66.9,14.9z"/>
      <path d="M103.9,24.2L97.6,14L95,17.5v6.7h-4.3V0.4H95v10.2l7.8-10.2h5.1l-7.4,9.8l8.7,14H103.9z"/>
      <path d="M113.2,17.3l4.4-0.5c0.4,2.4,2.1,3.6,4,3.7c1.6,0.1,3.5-0.5,3.8-2.2c0.1-0.9-0.2-2-3-3.2l-3.2-1.3
	c-3.6-1.6-5.3-3.7-5.3-6.9c0-4.1,3.2-6.9,7.8-6.9c4.4,0,7.2,2.7,7.9,6.6l-4.2,0.6c-0.3-1.7-1.6-3.1-3.7-3.1c-1.8,0-3.4,1-3.4,2.8
	c0,1.4,0.9,2.1,3.5,3.2l3.6,1.5c3.2,1.3,4.5,3.4,4.5,6.1c0,4.1-3.4,6.9-8,6.9C117.4,24.6,113.8,21.6,113.2,17.3z"/>
      <path d="M146.5,24.2V0.4h14.3v4.2h-10.1V10h7.5v4.2h-7.5V20h10.6v4.2H146.5z"/>
      <path d="M168.4,24.2V0.4h8c4.7,0,7.6,2.1,7.6,6.6c0,3.2-1.6,4.8-3.4,4.9c1.8,0.1,3.8,1.9,3.8,5.3c0,3.7-2.3,7-7.5,7
	H168.4z M172.6,10.1h3.8c1.9,0,3.2-1.2,3.2-2.9s-1.4-2.6-3-2.6h-4V10.1z M172.6,20.1h4c1.8,0,3.5-1,3.5-2.9c0-1.8-1.4-2.9-3.5-2.9
	h-4V20.1z"/>
      <path d="M191.6,24.2V0.4h4.2v23.8C195.8,24.2,191.6,24.2,191.6,24.2z"/>
      <path d="M202.6,17.3l4.4-0.5c0.4,2.4,2.1,3.6,4,3.7c1.6,0.1,3.5-0.5,3.8-2.2c0.1-0.9-0.2-2-3-3.2l-3.2-1.3
	c-3.6-1.6-5.3-3.7-5.3-6.9c0-4.1,3.2-6.9,7.8-6.9c4.4,0,7.2,2.7,7.9,6.6l-4.2,0.6c-0.3-1.7-1.6-3.1-3.7-3.1c-1.8,0-3.4,1-3.4,2.8
	c0,1.4,0.9,2.1,3.5,3.2l3.6,1.5c3.2,1.3,4.5,3.4,4.5,6.1c0,4.1-3.4,6.9-8,6.9C206.8,24.6,203.2,21.6,202.6,17.3z"/>
      <path d="M226.1,14.9V0.4h4.3v14.5c0,2.8,1.3,5.2,4.4,5.2s4.4-2.4,4.4-5.2V0.4h4.3v14.5c0,5.1-2.9,9.7-8.6,9.7
	C228.9,24.6,226.1,20,226.1,14.9z"/>
    </svg>
    </a></div>
  <div class="header_page__contact"><a href="<?php echo get_option('home'); ?>/contact/">内覧予約・お問い合わせ</a></div>
  <nav class="header_page__navi">
    <ul>
      <li><a href="<?php echo get_option('home'); ?>/#index_concept">CONCEPT</a></li>
      <li><a href="<?php echo get_option('home'); ?>/#index_access">ACCESS</a></li>
      <li><a href="<?php echo get_option('home'); ?>/#index_plan">PLAN</a></li>
      <li><a href="<?php echo get_option('home'); ?>/#index_faq">FAQ</a></li>
      <li><a href="<?php echo get_option('home'); ?>/#index_news">NEWS</a></li>
    </ul>
  </nav>
  <div class="sp_h_menu">
    <div class="sp_h_btn">
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </div>
</header>
<nav class="sp_navi">
  <ul>
    <li><a href="<?php echo get_option('home'); ?>/#index_concept" >CONCEPT</a></li>
    <li><a href="<?php echo get_option('home'); ?>/#index_access">ACCESS</a></li>
    <li><a href="<?php echo get_option('home'); ?>/#index_plan">PLAN</a></li>
    <li><a href="<?php echo get_option('home'); ?>/#index_faq">FAQ</a></li>
    <li><a href="<?php echo get_option('home'); ?>/#index_news">NEWS</a></li>
    <li><a href="<?php echo get_option('home'); ?>/contact/">内覧予約・お問い合わせ</a></li>
  </ul>
</nav>
<?php endif; ?>