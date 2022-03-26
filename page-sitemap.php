<?php get_header() ?>

  <main id="sitemap">
    <section class="top subTop">
      <div class="container">
        <div class="titleTop">
          <h1 class="titleTop__en">Site map</h1>
          <h4 class="titleTop__ja">サイトマップ</h4>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container">
        <div class="content-list">
          <a class="content-list__menu" href="<?php echo home_url() ?>/news/">お知らせ</a>
        </div>
        <div class="content-list">
          <a class="content-list__menu" href="<?php echo home_url() ?>/message/">メッセージ</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/message/">代表メッセージ</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/message/#philosophy">経営理念</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/message/#vision">経営ビジョン</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/message/#policy">教育方針（教育制度）</a>
        </div>
        <div class="content-list">
          <a class="content-list__menu" href="<?php echo home_url() ?>/company/">会社概要</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/company/">会社概要</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/company/#map">アクセスマップ</a>
        </div>
        <div class="content-list">
          <a class="content-list__menu" href="<?php echo home_url() ?>/services/">サービス</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/services/ictソリューション/">ICTソリューション<br>事業内容 詳細</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/services/教育ソリューション/">教育ソリューション<br>事業内容 詳細</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/services/情報セキュリティ/">情報セキュリティ<br>事業内容 詳細</a>
        </div>
        <div class="content-list">
          <a class="content-list__menu" href="<?php echo home_url() ?>/<?php echo home_url() ?>/blog/">自社ブログ</a>
        </div>
        <div class="content-list">
          <a class="content-list__menu" href="<?php echo home_url() ?>/job/" target="_blank">採用トップ</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/job/#services" target="_blank">事業概要</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/job/#data" target="_blank">社内データ</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/job/#welfare" target="_blank">制度・福利厚生</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/job/#interview" target="_blank" target="_blank">社内インタビュー</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/job/#ideal" target="_blank">求める人物像</a>
          <a class="content-list__sub" href="<?php echo home_url() ?>/job/#job" target="_blank">募集職種</a>
        </div>
        <div class="content-list">
          <a class="content-list__menu" href="<?php echo home_url() ?>/contact/">お問いあわせ</a>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer() ?>