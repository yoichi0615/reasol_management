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

    #recruit .job-tab-box-button.now::before {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/job-arrow-white.png);
    }

    #recruit .job-tab-box-button.hover::before {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/job-arrow-white.png);
    }

    #recruit .job-tab-box-button::before {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/job-arrow-block.png);
    }

    .footerRecruit__toTop::after {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/footerRecruit.png);
    }

    .button2__arrow::before {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/button-arrow.png);
    }

    .button2__arrow::after {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/button-arrow.png);
    }
  </style>
  <?php wp_head() ?>
</head>

<body class="open">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns/?id=GTM-T2N7HKV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->




  <header class="headerRecruit">
    <a class="headerRecruit__logo" href="<?php echo home_url() ?>" target="_blank"><img class="headerRecruit__logo--img" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"></a>
    <div class="headerRecruit-menu forPc">
      <a class="headerRecruit-menu-list" href="#services">
        <p class="headerRecruit-menu-list__en">Services</p>
        <p class="headerRecruit-menu-list__ja">事業概要</p>
      </a>
      <a class="headerRecruit-menu-list" href="#data">
        <p class="headerRecruit-menu-list__en">Data</p>
        <p class="headerRecruit-menu-list__ja">社内データ</p>
      </a>
      <a class="headerRecruit-menu-list" href="#welfare">
        <p class="headerRecruit-menu-list__en">Welfare</p>
        <p class="headerRecruit-menu-list__ja">制度・福利厚生</p>
      </a>
      <a class="headerRecruit-menu-list" href="#interview">
        <p class="headerRecruit-menu-list__en">Interview</p>
        <p class="headerRecruit-menu-list__ja">社員インタビュー</p>
      </a>
      <a class="headerRecruit-menu-list" href="#ideal">
        <p class="headerRecruit-menu-list__en">Ideal candidate</p>
        <p class="headerRecruit-menu-list__ja">求める人物像</p>
      </a>
      <a class="headerRecruit-menu-list" href="#job">
        <p class="headerRecruit-menu-list__en">Job description</p>
        <p class="headerRecruit-menu-list__ja">募集職種</p>
      </a>
      <a class="headerRecruit-menu__toTop" href="<?php echo home_url() ?>" target="_blank">
        コーポレートサイト<br>トップへ
      </a>
    </div>
    <a href="<?php echo home_url() ?>/job/#job" class="headerRecruit__entry">
      エントリー
    </a>
    <div class="header-hb forSp">
      <span class="header-hb__bar1"></span>
      <span class="header-hb__bar2"></span>
    </div>
    <div class="headerRecruit-open forSp">
      <div class="headerRecruit-open-menu">
        <a class="headerRecruit-open-menu-container" href="#service">
          <p class="headerRecruit-open-menu-container__en">Services</p>
          <p class="headerRecruit-open-menu-container__ja">サービス</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="#data">
          <p class="headerRecruit-open-menu-container__en">Data</p>
          <p class="headerRecruit-open-menu-container__ja">社内データ</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="#welfare">
          <p class="headerRecruit-open-menu-container__en">Welfare</p>
          <p class="headerRecruit-open-menu-container__ja">制度・福利厚生</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="#interview">
          <p class="headerRecruit-open-menu-container__en">Interview</p>
          <p class="headerRecruit-open-menu-container__ja">社員インタビュー</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="#ideal">
          <p class="headerRecruit-open-menu-container__en">Ideal candidate</p>
          <p class="headerRecruit-open-menu-container__ja">求める人物像</p>
        </a>
        <a class="headerRecruit-open-menu-container" href="#job">
          <p class="headerRecruit-open-menu-container__en">Job description</p>
          <p class="headerRecruit-open-menu-container__ja">募集職種</p>
        </a>
        <div class="headerRecruit-open-menu-toTop">
          <a class="headerRecruit-open-menu-toTop__inner" href="<?php echo home_url() ?>" target="_blank">
            コーポレートサイトトップへ
          </a>
        </div>
      </div>
    </div>
  </header>