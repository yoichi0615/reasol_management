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

    .button2__arrow::before {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/button-arrow.png);
    }

    .button2__arrow::after {
      content: url(<?php echo get_template_directory_uri() ?>/assets/img/recruit/button-arrow.png);
    }
  </style>
</head>

<body>

  <div class="cursor"></div>

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

  <main id="recruit-thanks">
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
    <section class="thanks-message">
      <div class="container">
        <h1 class="thanks-message__title">ご応募ありがとうございます。</h1>
        <p class="thanks-message__text">この度はおご応募いただき、誠にありがとうございます。<br>
          受付完了メール（自動送信）を送信しましたので、ご確認ください。</p>
      </div>
    </section>

    <section class="thanks-box">
      <div class="container">
        <p class="thanks-box__text1">万が一メールが届いてない場合、以下の原因が考えられます。<br><br>

          <span>入力されたメールアドレスに誤りがある可能性があります。</span><br>
          <span>迷惑メールフォルダに振り分けられている可能性があります。</span><br>
          <span>ドメイン設定受信を行っている可能性があります。「example.com」のドメイン受信設定を行ってください。</span>
        </p>
        <h3 class="thanks-box__text2">メールが届かない場合は恐れ入りますが、<span><br class="forSp">再度ご応募</span>ください。</h3>
        <a class="button2" href="recruitment">再度お問いあわせはこちら <span class="button2__arrow"></span></a>
        <a class="thanks-box__toTop" href="index.html" target="_blank">トップページへ戻る ＞</a>
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
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/recruit-button.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/subTop.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/recruit-common.js"></script>
</body>

</html>