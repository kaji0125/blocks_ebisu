<?php
/*
Template Name:BLOCKS EBISU LP
*/
?>
<?php get_header(); ?>
<div id="campaign" class="lp-contents">
  <div class="lp-hero">
    <?php if( have_rows('hero_title') ): ?>
    <?php while( have_rows('hero_title') ): the_row(); ?>
    <div class="lp-hero__wrap">
      <div class="lp-hero__title">
        <div class="lp-hero__logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/logo.svg" alt="BLOCKS OFFICE"/></div>
        <div class="lp-hero__h1">
          <h1><span>
            <?php the_sub_field('hero_sub_title'); ?>
            </span><br>
            <?php the_sub_field('hero_main_title'); ?>
          </h1>
          <p class="lp-hero__date">
            <?php the_sub_field('hero_period'); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="lp-hero__img"><img src="<?php the_sub_field('hero_img'); ?>" alt=""/></div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="lp-info">
    <div class="lp-info__flex">
      <div class="lp-info__photo">
        <ul class="lp-info__photoList">
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/info_photo_001.webp" alt=""/></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/info_photo_002.webp" alt=""/></li>
        </ul>
      </div>
      <div class="lp-info__discription">
        <p class="lp-info__read">JR山手線・東京メトロ日比谷線「恵比寿」駅徒歩7分の好立地に、NEWオープン!!</p>
        <h2 class="lp-info__h2"><span>BLOCKS EBISU</span></h2>
        <p>BLOCKSは、家よりも集中できて、家のようにくつろげるシェアオフィス。ONの時間とOFFの時間、どちらも充実できる場所なら「はたらく」はまだまだ楽しくなる</p>
        <p>1〜2名で使える小さな区画から、4〜10名向けの小規模なオフィス空間まで、「はたらく」場や環境をサポートする幅広いラインアップ。また、肩を並べる植栽が温もり溢れる「GREEN LOUNGE」と落ち着いた空間の「WOOD LOUNGE」、雰囲気の異なる2つの共用ラウンジでは、シチュエーションに合わせて柔軟に使い分けができます。リモートワークにもチークワークにも、仕事しやすい理想的な環境が整うBLOCK OFFICE EBISUで、自分らしく働き、自然なコミュニケーションを育むきっかけ作りを。来客や採用時、訪れた人にも心地良い印象を与えます。</p>
      </div>
    </div>
    <div class="lp-info__contact"> <a href="<?php echo get_option('home'); ?>/contact/" class="lp-contactBtn">
      <div><span>まずはご相談</span><br>
        お問い合わせはこちらから</div>
      </a> <a href="<?php echo get_option('home'); ?>/" class="lp-siteBtn">もっと詳しく見てみる</a> </div>
  </div>
  <div class="lp-campaign">
    <div class="lp-campaign__wrap">
      <?php if( have_rows('hero_title') ): ?>
      <?php while( have_rows('hero_title') ): the_row(); ?>
      <p class="lp-campaign__read"><span class="sub">
        <?php the_sub_field('hero_sub_title'); ?>
        </span><br>
        <span class="read">
        <?php the_sub_field('hero_main_title'); ?>
        </span></p>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php if( get_field('campagin_read') ) { ?>
      <p class="lp-campaign__sub">
        <?php the_field('campagin_read'); ?>
      </p>
      <?php } ?>
      <div class="lp-campaign__detail">
        <div class="lp-campaign__image">
          <?php if( get_field('campagin_image_pc') ) { ?>
          <div class="lp-campaign__image___pc"> <img src="<?php the_field('campagin_image_pc'); ?>" alt=""/> </div>
          <?php } ?>
          <?php if( get_field('campagin_image_sp') ) { ?>
          <div class="lp-campaign__image___sp"> <img src="<?php the_field('campagin_image_sp'); ?>" alt=""/> </div>
          <?php } else {?>
          <?php if( get_field('campagin_image_pc') ) { ?>
          <div class="lp-campaign__image___sp"> <img src="<?php the_field('campagin_image_pc'); ?>" alt=""/> </div>
          <?php } ?>
          <?php } ?>
        </div>
        <?php if( get_field('campagin_description') ) { ?>
        <p class="lp-campaign__caption">
          <?php the_field('campagin_description'); ?>
        </p>
        <?php } ?>
        <?php if( get_field('campagin_note') ) { ?>
        <p class="lp-campaign__note">
          <?php the_field('campagin_note'); ?>
        </p>
        <?php } ?>
      </div>
      <div class="lp-campaign__contact">
        <div class="lp-campaign__preview"><span>内覧会実施中（平日10:00-17:00）</span><br>
          気になること等ございましたら、ぜひお気軽にお問い合わせください！</div>
        <a href="<?php echo get_option('home'); ?>/contact/" class="lp-contactBtn">
        <div>内覧予約・お申し込みはこちらから</div>
        </a> <a href="<?php echo get_option('home'); ?>/" class="lp-siteBtn">どんな物件か知りたい</a> </div>
    </div>
  </div>
  <div class="lp-feature">
    <h2 class="lp-feature__h2"><span>BLOCKS EBISUの特長</span></h2>
    <div class="lp-location">
      <h3 class="lp-feature__h3"><span><b>ロケーション</b></span><br>
        LOCATION / ACCESS</h3>
      <p class="lp-location__read">都内の主要エリアへアクセス良好な路線を利用でき、駅やオフィス周辺にはおしゃれな商業施設や飲食店、カフェ、コンビニエンスストアのほか、働く環境を豊かにする施設が充実。人や車が行き交う活気溢れる明治通り沿いにあり、オフィスの内外からは春に見事な桜を望めます。都心にいながら自然を感じられ、くつろぐ時間も心の巡りを整えてくれそうです。</p>
      <div class="lp-location__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12968.672793247886!2d139.7153718!3d35.6482274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcdef3157380c2639!2z44Ki44Kk44Kq44K55bqD5bC-44OT44Or!5e0!3m2!1sja!2sjp!4v1672892271648!5m2!1sja!2sjp" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="lp-location__flex">
        <div class="lp-location__address">
          <address>
          〒150-0012<br>
          東京都渋谷区広尾1丁目11-2 BLOCKS OFFICE 恵比寿
          </address>
          <div class="lp-location__access">JR山手線・東京メトロ日比谷線「恵比寿」駅より徒歩7分<br>
            東京メトロ日比谷線「広尾」駅より徒歩10分</div>
        </div>
        <div class="lp-location__link"> <a href="https://goo.gl/maps/o7BD3brEB8fCStZg7" target="_blank">Google map</a> </div>
      </div>
    </div>
    <div class="lp-facility">
      <h3 class="lp-feature__h3"><span><b>設備紹介</b></span><br>
        FACILITY</h3>
      <div class="lp-facility__detail">
        <ul class="lp-facility__list">
          <li>
            <div class="lp-facility__box">
              <div class="lp-facility__title">サービスデスク</div>
              <p>1階にコミュニティマネージャーが常駐し、オフィスの運営管理や利用者様のお問い合わせの受付、コミュニティ活性化のお手伝いなど、安心できる環境づくりをおこないます。</p>
            </div>
          </li>
          <li>
            <div class="lp-facility__box">
              <div class="lp-facility__title">ラウンジ</div>
              <p>広さの異なる2種類のラウンジ「GREEN LOUNGE」「WOOD LOUNGE」は絶好のリフレッシュ空間。自律的に働く時間と場所を選択する、柔軟性の高いワークスタイルをサポート。</p>
<p class="lp-facility__note">※WOOD LOUNGEは別途オプション 月額33,000円。</p>
            </div>
          </li>
          <li>
            <div class="lp-facility__box">
              <div class="lp-facility__title">WEBブース</div>
              <p>オンライン会議や通話可能なwebブースが5席完備され、リモート業務も快適。簡単にプライバシーを確保でき、セキュリティが保たれた静かな空間で仕事がはかどります。</p>
            </div>
          </li>
          <li>
            <div class="lp-facility__box">
              <div class="lp-facility__title">365日24時間</div>
              <p>365日24時間いつでも利用が可能。早朝や深夜など時間にとらわれず、自分のペースで利用できます。 </p>
              <p class="lp-facility__note">※サービスデスク、ラウンジスペースのご利用は営業時間のみ。</p>
            </div>
          </li>
          <li>
            <div class="lp-facility__box">
              <div class="lp-facility__title">定員以上の入居アクセス可</div>
              <p>定員以上の人が集まる対面ミーティングなどの場合も対応可能。人が入れずスペース不足、という不都合がなく、利用者が重なったときも円滑に仕事に取り組めて、コミュニティ形成ができます。</p>
            </div>
          </li>
          <li>
            <div class="lp-facility__box">
              <div class="lp-facility__title">法人登記</div>
              <p>好立地な渋谷区の恵比寿・広尾エリアで、実質的なオフィスとして法人登記が可能。名刺や自社のwebサイトでの住所利用もできます。各種許認可取得もお問い合わせください。</p>
            </div>
          </li>
        </ul>
        <ul class="lp-facility__icons">
          <li>
            <div class="lp-facility__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_p_room.svg" alt=""/></div>
            <div class="lp-facility__caption">完全個室オフィス</div>
          </li>
          <li>
            <div class="lp-facility__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_desk.svg" alt=""/></div>
            <div class="lp-facility__caption">デスクセットつき</div>
          </li>
          <li>
            <div class="lp-facility__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_internet.svg" alt=""/></div>
            <div class="lp-facility__caption">インターネット完備</div>
          </li>
          <li>
            <div class="lp-facility__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_copy_w.svg" alt=""/></div>
            <div class="lp-facility__caption">コピー複合機</div>
          </li>
          <li>
            <div class="lp-facility__icon"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_meeting_space.svg" alt=""/></div>
            <div class="lp-facility__caption">会議室</div>
          </li>
        </ul>
      </div>
    </div>
    <div class="lp-feature__contact"> <a href="<?php echo get_option('home'); ?>/contact/" class="lp-contactBtn">内覧予約・お申し込みはこちらから</a> <a href="<?php echo get_option('home'); ?>/" class="lp-siteBtn">設備を詳しく知りたい</a> </div>
  </div>
  <div class="lp-plan">
    <h2 class="lp-plan__h2"><span><b>ご利用可能プラン</b></span><br>
      FLOOR PLAN</h2>
    <p class="lp-plan__read">全9フロアからなるBLOCKS OFFICE EBISU。2階には2つの異なるラウンジと、少人数様専用の個室を完備。3〜9階では利用する人数によって最適な広さの個室オフィスを選ぶことができ、快適で高いセキュリティ環境の中で仕事に集中できるワークスペースを提供しています。</p>
    <div class="lp-plan__wrap">
      <div class="lp-plan__floor01">
        <div class="lp-floor01_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/floor_001.svg" alt=""/></div>
        <div class="lp-floor01_description"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/floor_001_description.svg" alt=""/></div>
        <div class="lp-plan__floor01___sp">
          <ul>
            <li>
              <div class="floor_number">9F</div>
              <div class="floor_name">SMALL OFFICE</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_smoke.svg" alt=""/></i> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_kettle.svg" alt=""/></i>  </div>
            </li>
            <li>
              <div class="floor_number">8F</div>
              <div class="floor_name">SMALL OFFICE</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_trash.svg" alt=""/></i> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_kettle.svg" alt=""/></i>  </div>
            </li>
            <li>
              <div class="floor_number">7F</div>
              <div class="floor_name">SMALL OFFICE<br>
                WEB BOOTH</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_monitor.svg" alt=""/></i> </div>
            </li>
            <li>
              <div class="floor_number">6F</div>
              <div class="floor_name">SMALL OFFICE</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_trash.svg" alt=""/></i> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_kettle.svg" alt=""/></i> </div>
            </li>
            <li>
              <div class="floor_number">5F</div>
              <div class="floor_name">SMALL OFFICE<br>
                WEB BOOTH</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_monitor.svg" alt=""/></i></div>
            </li>
            <li>
              <div class="floor_number">4F</div>
              <div class="floor_name">SMALL OFFICE</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_vendor.svg" alt=""/></i><i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_copy_m.svg" alt=""/></i> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_kettle.svg" alt=""/></i> </div>
            </li>
            <li>
              <div class="floor_number">3F</div>
              <div class="floor_name">SMALL OFFICE</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_trash.svg" alt=""/></i> </div>
            </li>
            <li>
              <div class="floor_number">2F</div>
              <div class="floor_name">PRIVATE OFFICE<br>
                MEETING ROOM<br>
                WOOD LOUNGE<br>
                GREEN LOUNGE</div>
              <div class="floor_icons"> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_meeting.svg" alt=""/></i> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_wd.svg" alt=""/></i> <i><img src="<?php bloginfo('template_url'); ?>/assets/img/common/icon_gr.svg" alt=""/></i></div>
            </li>
            <li>
              <div class="floor_number">1F</div>
              <div class="floor_name">RECEPTION</div>
            </li>
          </ul>
        </div>
      </div>
		<div class="lp-feature__contact"><a href="<?php echo get_option('home'); ?>/" class="lp-siteBtn">物件の内容を知りたい</a> </div>
      <div class="lp-plan__floor02">
        <h3 class="lp-floor__h3"><span>2F</span></h3>
        <div class="lp-floor02_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/floor_002_lp.svg" alt=""/></div>
        <div class="lp-floor02_rooms">
          <div class="lp-rooms_detail">
            <p class="lp-rooms_name__sp">ROOM_206</p>
            <div class="lp-rooms_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/room_001.webp" alt="" width="197" class="room01" /></div>
            <div class="lp-rooms_description">
              <p class="lp-rooms_name">ROOM_206</p>
              <p class="lp-rooms_type">1名向け個室</p>
              <p>自分専用の理想的なプライベート空間を確保する完全個室。仕事に必須のデスク、チェア、棚が備え付けられ、Wi-Fi、電源なども整備。小規模スペースながら、壁面のガラスサッシや高い天井によって開放感を感じられます。</p>
				<div class="lp-rooms_photo"> <img src="<?php bloginfo('template_url'); ?>/assets/img/common/room_photo_003.webp" alt=""/> </div>
            </div>
          </div>
          <div class="lp-rooms_detail">
            <p class="lp-rooms_name__sp">ROOM_207</p>
            <div class="lp-rooms_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/room_002.webp" alt="" width="304"/></div>
            <div class="lp-rooms_description">
              <p class="lp-rooms_name">ROOM_207</p>
              <p class="lp-rooms_type">2名向け個室</p>
              <p>デスクやチェア、棚などの家具があらかじめ設置された2名専用のワークスペースとして活躍。完全個室のタイプなのでセキュリティ面でも安心でき、少人数での打ち合わせやオンラインミーティングなどでも重宝します。</p>
            </div>
          </div>
        </div>
      </div>
      <div class="lp-plan__floor03">
        <h3 class="lp-floor__h3"><span>3-9F</span></h3>
        <div class="lp-floor03_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/common/floor_003_lp.svg" alt=""/></div>
        <div class="lp-floor03_rooms">
          <div class="lp-rooms_detail">
            <p class="lp-rooms_name__sp">ROOM_305</p>
            <div class="lp-rooms_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/room_003.webp" alt="" width="164"/></div>
            <div class="lp-rooms_description">
              <p class="lp-rooms_name">ROOM_305</p>
              <p class="lp-rooms_type">4名向け個室</p>
              <p>チームやグループで活用できる4名様向けの完全個室を完備。適度な広さのスペースも、シンプルな内装と高さのある天井により見通しが良く、セキュリティ重視の会議も快適に利用できます。</p>
              <div class="lp-rooms_photo"> <img src="<?php bloginfo('template_url'); ?>/assets/img/common/room_photo_001.webp" alt=""/> </div>
            </div>
          </div>
          <div class="lp-rooms_detail">
            <p class="lp-rooms_name__sp">ROOM_509</p>
            <div class="lp-rooms_image"><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/room_004.webp" alt="" width="260"/></div>
            <div class="lp-rooms_description">
              <p class="lp-rooms_name">ROOM_509</p>
              <p class="lp-rooms_type">6名向け個室</p>
              <p>6〜8名の大人数に対応できる安心・安全の個室スペースも設けられています。セキュリティ対策も整っているので、ベストな環境であらゆる利用者の「はたらく」をサポートしてくれます。</p>
              <div class="lp-rooms_photo"> <img src="<?php bloginfo('template_url'); ?>/assets/img/common/room_photo_002.webp" alt=""/> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lp-planlist">
      <div class="lp-planlist__wrap">
        <div class="lp-planlist__header">
          <div class="number cell">部屋番号</div>
          <div class="lp-planlist_accordion">
            <div class="area cell">面積（㎡）/ 定員</div>
            <div class="rent cell">賃料</div>
            <div class="service_fee cell">共益費</div>
            <div class="monthly cell">月額合計</div>
            <div class="note cell">備考</div>
            <div class="move_in cell">入居日</div>
          </div>
        </div>
        <?php if(have_rows('room_info','75')): ?>
        <?php while(have_rows('room_info','75')): the_row(); ?>
        <div class="lp-planlist__line">
          <div class="number cell"> <span class="icon"></span>
            <?php the_sub_field('room_number'); ?>
            <span class="sp"><b>面積（㎡）/ 定員</b>
            <?php the_sub_field('room_area'); ?>
            </span> </div>
          <div class="lp-planlist_accordion">
            <div class="area cell">
              <?php the_sub_field('room_area'); ?>
            </div>
            <div class="rent cell"><span>¥<?php
              $rent = number_format( get_sub_field( 'room_rent' ) );
              echo $rent;
              ?>
              <br>
              <span class="tax">（税込）</span>¥<?php
              $rent_tax = number_format( get_sub_field( 'room_rent' ) * 1.1 );
              echo $rent_tax;
              ?>
              </span> </div>
            <div class="service_fee cell"><span>¥<?php
              $service_fee = number_format( get_sub_field( 'room_service_fee' ) );
              echo $service_fee;
              ?>
              <br>
              <span class="tax">（税込）</span>¥<?php
              $service_fee_tax = number_format( get_sub_field( 'room_service_fee' ) * 1.1 );
              echo $service_fee_tax;
              ?>
              </span></div>
            <div class="monthly cell"><span>¥<?php
              $monthly = number_format( get_sub_field( 'room_rent' ) + get_sub_field( 'room_service_fee' ) );
              echo $monthly;
              ?>
              <br>
              <span class="tax">（税込）</span>¥<?php
              $monthly_tax = number_format( get_sub_field( 'room_rent' ) * 1.1 + get_sub_field( 'room_service_fee' ) * 1.1 );
              echo $monthly_tax;
              ?>
              </span></div>
            <div class="note cell">
              <?php the_sub_field('room_note'); ?>
            </div>
            <div class="move_in cell">
              <?php the_sub_field('room_move_in'); ?>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="lp-photoSlide">
    <div class="swiper-container photoSlider">
      <ul class="swiper-wrapper">
        <li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_001.webp" alt=""/></li>
        <li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_002.webp" alt=""/></li>
        <li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_003.webp" alt=""/></li>
        <li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_004.webp" alt=""/></li> 
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_005.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_006.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_007.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_008.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_009.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_010.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_011.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_012.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_013.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_014.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_015.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_016.webp" alt=""/></li>
		<li class="swiper-slide"> <img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/slide_photo_017.webp" alt=""/></li>
      </ul>
    </div>
  </div>
  <div class="lp-outline">
    <div class="lp-outline__wrap">
      <div class="lp-outline__flex">
        <h2 class="lp-outline__h2"><span><b>物件概要</b></span><br>
          OUTLINE</h2>
        <div class="lp-outlin_outline">
          <dl>
            <dt>所在地</dt>
            <dd>東京都渋谷区広尾1丁目11-2</dd>
            <dt>交通</dt>
            <dd>JR山手線・東京メトロ日比谷線　「恵比寿」駅 徒歩7分<br>
              東京メトロ日比谷線「広尾」駅 徒歩10分</dd>
            <dt>竣工</dt>
            <dd>1987年1月 新耐震基準<br>（2023年3月 大規模リニューアル工事実施）</dd>
            <dt>建物</dt>
            <dd>鉄骨鉄筋コンクリート造9階建</dd>
            <dt>用途</dt>
            <dd>事務所</dd>
            <dt>貸出区画数</dt>
            <dd>全74室</dd>
            <dt>貸室タイプ</dt>
            <dd>最小2.32㎡～最大24.26㎡</dd>
          </dl>
        </div>
      </div>
      <div class="lp-outlin__contact"> <a href="<?php echo get_option('home'); ?>/contact/" class="lp-contactBtn">
        <div>CONTACT<br>
          <span>内覧予約・お問い合わせはこちらから</span></div>
        </a> <a href="<?php echo get_option('home'); ?>/" class="lp-siteBtn">詳細は物件サイトもご確認下さい</a> </div>
    </div>
  </div>
  <div class="lp-sns">
    <ul class="lp-sns_links">
      <li><a href="" target="_blank"><i><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/icon_instagram.svg" alt=""/></i>Instagram</a></li>
      <li><a href="" target="_blank"><i><img src="<?php bloginfo('template_url'); ?>/assets/img/lp/lp01/icon_facebook.svg" alt=""/></i>facebook</a></li>
    </ul>
  </div>
</div>
<?php get_footer(); ?>