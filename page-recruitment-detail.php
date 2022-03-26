<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T2N7HKV');
  </script>
  <!-- End Google Tag Manager -->

  <!-- サイト情報 -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>採用ページ</title>
  <meta name="description" content="説明文が入ります">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">

  <!-- OG -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content=" ページの タイトル" />
  <meta property="og:description" content=" ページのディスクリプション" />
  <meta property="og:image" content=" サムネイル画像の URL" />

  <!-- favicon -->
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png">

  <!-- GoogleFonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/111ed88bdd.js" crossorigin="anonymous"></script>

  <!-- style sheets -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.min.css" />
  <style>
    .headerRecruit__entry::after {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/entry-arrow.png);
    }

    .footerRecruit__toTop::after {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/footerRecruit.png);
    }

    #recruit-detail .entry-button__arrow--inner::before {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/submit-arrow.png);
    }

    #recruit-detail .entry-button__arrow--inner::after {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/submit-arrow.png);
    }

    .form-wrapper__input.name {
      width: 97%;
    }

    .wpcf7-form .init .submitComtainer::before {
      content: "";
      position: absolute;
      background-color: #000000;
      width: 0rem;
      height: 0.1rem;
      left: 12rem;
      top: 49%;
      -webkit-transition: 0.1s;
      transition: 0.1s;
      opacity: 1;
      z-index: 10;
    }

    .wpcf7-form .init .submitComtainer::after {
      content: "";
      position: absolute;
      background-color: #000000;
      width: 5rem;
      height: 0.1rem;
      top: 49%;
      left: 12rem;
      opacity: 1;
    }

    .form-wrapper__input.tel {
      width: 100%;
    }

    span.wpcf7-form-control-wrap.text-589 {
      width: 50%;
    }

    .form-wrapper__input.name {
      width: 97%;
    }

    .wpcf7-form-control-wrap {
      width: 30%;
    }

    .wpcf7-form-control.wpcf7-submit.button.form__submit {
      margin: 0 auto;
    }

    .form__button input[type="checkbox"]+span {
      display: none;
      cursor: pointer;
      display: inline-block;
      position: relative;
      padding-left: 1.9rem;
      line-height: 1.6;
    }

    .wpcf7-list-item-label::before {
      content: "";
      display: block;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      width: 12px;
      height: 13px;
      top: 5px;
      left: 0;
      border: 1px solid #000;
    }

    form.wpc7-form.int.submitComtainer::before {
      content: "";
      position: absolute;
      background-color: #000000;
      width: 0rem;
      height: 0.1rem;
      left: 12rem;
      top: 49%;
      -webkit-transition: 0.1s;
      transition: 0.1s;
      opacity: 1;
      z-index: 10;
    }


    .form__button input[type="checkbox"]+.wpcf7-list-item-label::before {
      content: "";
      position: absolute;
      display: block;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      width: 12px;
      height: 13px;
      top: 5px;
      left: 0;
      border: 1px solid #000;
    }

    .form__button input[type="checkbox"]:checked+.wpcf7-list-item-label::after {
      content: "";
      position: absolute;
      display: block;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      width: 11px;
      height: 6px;
      margin-top: -4px;
      top: 10px;
      left: 1px;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      border-bottom: 2px solid;
      border-left: 2px solid;
      border-color: #707070;
    }
  </style>
</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2N7HKV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="headerRecruit">
    <a class="headerRecruit__logo" href="index.html" target="_blank"><img class="headerRecruit__logo--img" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"></a>
    <div class="headerRecruit-menu forPc">
      <a class="headerRecruit-menu-list" href="recruit.html">
        <p class="headerRecruit-menu-list__en">Services</p>
        <p class="headerRecruit-menu-list__ja">事業概要</p>
      </a>
      <a class="headerRecruit-menu-list" href="recruit.html#data">
        <p class="headerRecruit-menu-list__en">Data</p>
        <p class="headerRecruit-menu-list__ja">社内データ</p>
      </a>
      <a class="headerRecruit-menu-list" href="recruit.html#welfare">
        <p class="headerRecruit-menu-list__en">Welfare</p>
        <p class="headerRecruit-menu-list__ja">制度・福利厚生</p>
      </a>
      <a class="headerRecruit-menu-list" href="recruit.html#interview">
        <p class="headerRecruit-menu-list__en">Interview</p>
        <p class="headerRecruit-menu-list__ja">社内インタビュー</p>
      </a>
      <a class="headerRecruit-menu-list" href="recruit.html#ideal">
        <p class="headerRecruit-menu-list__en">Ideal candidate</p>
        <p class="headerRecruit-menu-list__ja">求める人物像</p>
      </a>
      <a class="headerRecruit-menu-list" href="recruit.html#job">
        <p class="headerRecruit-menu-list__en">Job description</p>
        <p class="headerRecruit-menu-list__ja">募集職種</p>
      </a>
      <a class="headerRecruit-menu__toTop" href="index.html" target="_blank">
        コーポレートサイト<br>トップへ
      </a>
    </div>
    <a href="recruit.html#job" class="headerRecruit__entry">
      エントリー
    </a>
    <div class="header-hb forSp">
      <span class="header-hb__bar1"></span>
      <span class="header-hb__bar2"></span>
    </div>
    <div class="headerRecruit-open forSp">
      <div class="headerRecruit-open-menu">
        <a class="headerRecruit-open-menu-container" href="recruit.html">
          <p class="headerRecruit-open-menu-container__en">Services</p>
          <p class="headerRecruit-open-menu-container__ja">サービス</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="recruit.html#data">
          <p class="headerRecruit-open-menu-container__en">Data</p>
          <p class="headerRecruit-open-menu-container__ja">社内データ</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="recruit.html#welfare">
          <p class="headerRecruit-open-menu-container__en">Welfare</p>
          <p class="headerRecruit-open-menu-container__ja">制度・福利厚生</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="recruit.html#interview">
          <p class="headerRecruit-open-menu-container__en">Interview</p>
          <p class="headerRecruit-open-menu-container__ja">社内インタビュー</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="recruit.html#ideal">
          <p class="headerRecruit-open-menu-container__en">Ideal candidate</p>
          <p class="headerRecruit-open-menu-container__ja">求める人物像</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="recruit.html#job">
          <p class="headerRecruit-open-menu-container__en">Job description</p>
          <p class="headerRecruit-open-menu-container__ja">募集職種</p>
        </a>
        <div class="headerRecruit-open-menu-toTop">
          <a class="headerRecruit-open-menu-toTop__inner" href="index.html" target="_blank">
            コーポレートサイトトップへ
          </a>
        </div>
      </div>
    </div>
  </header>

  <main id="recruit-detail">
    <section class="top subTop">
      <img class="top__bg" src="<?php echo get_template_directory_uri() ?>/assets/img/recruit/top-bg.png">
      <div class="container">
        <div class="titleTop">
          <h1 class="titleTop__en">RECRUITMENT</h1>
          <h4 class="titleTop__ja">採用情報</h4>
        </div>
        <!--<h2 class="top__text">説明のテキストが入ります<br>
              説明のテキストが入ります</h2>-->
      </div>
    </section>
    <section class="job">
      <div class="container">
        <h1 class="job__title">■ ITエンジニア</h1>
        <p class="job__text">新卒採用</p>
        <div class="job-lists">
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">募集内容</h3>
            <p class="job-lists-list__right"><?php echo get_field('recruitment_contents') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">特徴</h3>
            <p class="job-lists-list__right"><?php echo get_field('feature') ?></p>
            </p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">実績</h3>
            <p class="job-lists-list__right"><?php echo get_field('achievement') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">身に付くスキル・キャリアパス</h3>
            <p class="job-lists-list__right"><?php echo get_field('skill') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">応募資格</h3>
            <p class="job-lists-list__right"><?php echo get_field('qualification') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">雇用形態</h3>
            <p class="job-lists-list__right">正社員</p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">勤務地</h3>
            <p class="job-lists-list__right"><?php echo get_field('location') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">勤務時間</h3>
            <p class="job-lists-list__right"><?php echo get_field('time') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">初任給</h3>
            <p class="job-lists-list__right"><?php echo get_field('salary') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">休日休暇</h3>
            <p class="job-lists-list__right"><?php echo get_field('holiday') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">福利厚生</h3>
            <p class="job-lists-list__right"><?php echo get_field('welfare') ?></p>
          </div>
          <div class="job-lists-list">
            <h3 class="job-lists-list__left">選考プロセス</h3>
            <p class="job-lists-list__right">
              <?php echo get_field('process') ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="entry">
      <div class="container">
        <div class="titleTop">
          <h1 class="titleTop__en">Entry form</h1>
          <h4 class="titleTop__ja">応募フォーム</h4>
        </div>
        <p class="entry__text">以下の応募フォームを入力ください。<br>
          入力をいただいた内容を基に<br class="forSp">書類選考をさせていただきます。<br>
          <span>*すべて必須項目です。</span>
        </p>
        <?php echo do_shortcode('[contact-form-7 id="99" title="採用コンタクトフォーム"]'); ?>
      </div>
    </section>
  </main>

  <footer class="footerRecruit">
    <div class="container">
      <a class="footerRecruit__toTop" href="index.html" target="_blank">
        コーポレートサイトトップへ
      </a>
      <p class="footerRecruit__copy">&copy; REASOL MANAGEMENT CO., LTD., ALL RIGHTS RESERVED</p>
      <a class="footerRecruit__policy" href="policy.html">プライバシーポリシー</a>
    </div>
  </footer>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- common js -->

  <!--各ページ固有のjsを読み込む-->
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/recruit-detail.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/subTop.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/recruit-common.js"></script>
</body>

</html>