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

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">

  <!-- OG -->


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
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <?php wp_head() ?>
</head>

<?php if (is_front_page()) : ?>
<body class="open">
<?php endif; ?>


  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2N7HKV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header">
    <div class="header-left">
      <a class="eader-left__link" href="<?php echo home_url() ?>"><img class="header-left__link--logo" src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.png"></a>
    </div>
    <div class="header-hb">
      <span class="header-hb__bar1"></span>
      <span class="header-hb__bar2"></span>
    </div>
    <div class="header-open">
      <img class="header-open__img forPc" src="<?php echo get_template_directory_uri() ?>/assets/img/common/header-img.png">
      <div class="header-open-content">
        <ul class="header-open-content-menu">
          <li><a class="header-open-content-menu__link" href="<?php echo home_url() ?>/news/">NEWS</a></li>
          <li><a class="header-open-content-menu__link" href="<?php echo home_url() ?>/message/">MESSAGE</a></li>
          <li><a class="header-open-content-menu__link" href="<?php echo home_url() ?>/company/">COMPANY<br>PROFILE</a></li>
          <li><a class="header-open-content-menu__link" href="<?php echo home_url() ?>/services/">SERVICE</a></li>
          <li><a class="header-open-content-menu__link" href="<?php echo home_url() ?>/blog/">BLOG</a></li>
        </ul>
        <a class="button button--recruit" href="<?php echo home_url() ?>/job" target="_blank">採用情報</a>
        <a class="button button--contact" href="<?php echo home_url() ?>/contact">お問合わせ</a>
      </div>
    </div>
    <a href="<?php echo home_url() ?>/job" class="header__entry">
      採用情報
      <img class="header__entry--arrow" src="<?php echo get_template_directory_uri() ?>/assets/img/common/recruit-arrow.png">
    </a>
  </header>