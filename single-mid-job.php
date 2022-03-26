<?php get_header() ?>
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
        <p class="job__text">中途採用</p>
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
            <p class="job-lists-list__right"><?php echo get_field('recruitment_type') ?></p>
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
      <a class="footerRecruit__policy" href="policy.html">情報セキュリティ基本方針</a>
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