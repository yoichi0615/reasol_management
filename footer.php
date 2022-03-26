<footer class="footer">
  <?php if (!is_page('contact')) : ?>
    <div class="footer-contact">
      <div class="container">
        <div class="title">
          <h1 class="title__en">CONTACT</h1>
          <h4 class="title__ja">お問合わせ</h4>
        </div>
        <p class="footer-contact__text">リアソルマネージメントに関する<br class="forSp">ご相談・お問合わせはお気軽にご連絡ください。</p>
        <a class="button" href="<?php echo home_url() ?>/contact/">お問合わせ</a>
      </div>
    </div>
  <?php endif; ?>
  <div class="footer-menu forSp">
    <div class="container">
      <div class="footer-menu-content">
        <div class="footer-menu-content-list">
          <a class="footer-menu-content-list__main" href="<?php echo home_url() ?>/news">お知らせ</a>
        </div>
        <div class="footer-menu-content-list">
          <p class="footer-menu-content-list__main footer-open">メッセージ</p>
          <div class="open">
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message">代表メッセージ</a>
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message/#philosophy">経営理念</a>
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message/#vision">経営ビジョン</a>
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message/#policy">教育方針</a>
          </div>
        </div>
        <div class="footer-menu-content-list">
          <p class="footer-menu-content-list__main footer-open">会社概要</p>
          <div class="open">
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/company/">会社概要</a>
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/company/#map">アクセスマップ</a>
          </div>
        </div>
        <div class="footer-menu-content-list">
          <p class="footer-menu-content-list__main footer-open">サービス</p>
          <div class="open">
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/services/">サービス一覧</a>
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/ictソリューション/">ICTソリューション<br>事業内容 詳細</a>
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/services/教育ソリューション/">教育ソリューション<br>事業内容 詳細</a>
            <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/services/情報セキュリティ/">情報セキュリティ<br>事業内容 詳細</a>
          </div>
        </div>
        <div class="footer-menu-content-list">
          <a class="footer-menu-content-list__main" href="<?php echo home_url() ?>/blog/">ブログ</a>
        </div>
      </div>
      <a class="button button--recruit" href="<?php echo home_url() ?>/recruit/" target="_blank">採用情報</a>
      <a class="button button--contact" href="<?php echo home_url() ?>/contact/">お問合わせ</a>
    </div>
  </div>
  <div class="footer-menu forPc">
    <div class="container">
      <div class="footer-menu-content">
        <div class="footer-menu-content-list">
          <a class="footer-menu-content-list__main" href="<?php echo home_url() ?>/news/">お知らせ</a>
        </div>
        <div class="footer-menu-content-list">
          <a class="footer-menu-content-list__main" href="<?php echo home_url() ?>/message/">メッセージ</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message/">代表メッセージ</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message/#philosophy">経営理念</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message/#vision">経営ビジョン</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/message/#policy">教育方針</a>
        </div>
        <div class="footer-menu-content-list">
          <a class="footer-menu-content-list__main" href="<?php echo home_url() ?>/company/">会社概要</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/company/">会社概要</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/company/#map">アクセスマップ</a>
        </div>
        <div class="footer-menu-content-list">
          <a class="footer-menu-content-list__main" href="<?php echo home_url() ?>/services/">サービス</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/services/ictソリューション/">ICTソリューション<br>事業内容 詳細</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/services/教育ソリューション/">教育ソリューション<br>事業内容 詳細</a>
          <a class="footer-menu-content-list__sub" href="<?php echo home_url() ?>/services/情報セキュリティ/">情報セキュリティ<br>事業内容 詳細</a>
        </div>
        <div class="footer-menu-content-list">
          <a class="footer-menu-content-list__main" href="<?php echo home_url() ?>/blog/">ブログ</a>
        </div>
      </div>
      <a class="button button--recruit" href="<?php echo home_url() ?>/job/" target="_blank">採用情報</a>
      <a class="button button--contact" href="<?php echo home_url() ?>/contact/">お問合わせ</a>
    </div>
  </div>
  <div class="footer-end">
    <a class="footer-end__logo" href="<?php echo home_url() ?>"><img class="footer-end__img" src="<?php echo get_template_directory_uri() ?>/assets/img/common/footer-logo.png"></a>
    <div class="container">
      <div class="footer-end__link">
        <a class="footer-end__link--policy" href="<?php echo home_url() ?>/policy/">情報セキュリティ基本方針</a>
        <a class="footer-end__link--sitemap" href="<?php echo home_url() ?>/sitemap/">サイトマップ</a>
      </div>
      <p class="footer-end__copy">&copy; Reasol Management Co., Ltd.</p>
    </div>
  </div>
</footer>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!--各ページ固有のjsを読み込む-->
<?php if (is_front_page()) : ?>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/index.js"></script>
<?php endif; ?>

<?php if (!is_front_page()) : ?>
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/subTop.js"></script>
<?php endif; ?>

<!-- common js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/common.js"></script>

<?php if (is_front_page()) : ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.inview.min.js"></script>　
<?php endif; ?>
<?php wp_footer() ?>
</body>

</html>