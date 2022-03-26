<footer class="footerRecruit">
  <div class="container">
    <a class="footerRecruit__toTop" href="<?php echo home_url() ?>" target="_blank">
      コーポレートサイトトップへ
    </a>
    <p class="footerRecruit__copy">&copy; Reasol Management Co., Ltd.</p>
    <a class="footerRecruit__policy" href="<?php echo home_url() ?>/policy/">情報セキュリティ基本方針</a>
  </div>
</footer>


<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
<!--IE11用-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
<!--不必要なら削除してください-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js"></script>
<!--不必要なら削除してください-->
<!--各ページ固有のjsを読み込む-->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/recruit.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/recruit-button.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/recruit-common.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/subTop.js"></script>
<?php wp_footer(); ?>
</body>

</html>