<?php get_header() ?>
<style>
  .form-wrapper__input.name {
    width: 97%;
  }

  .init .submitComtainer::before {
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

  span.wpcf7-form-control-wrap.text-3 {
    width: 49%;
  }

  .form-wrapper__input.name {
    width: 100%;
  }

  .wpcf7-form-control-wrap.given_name {
    width: 49%;
  }

  .wpcf7-form-control-wrap {
    width: 30%;
  }

  .wpcf7-form-control.wpcf7-submit.button.form__submit {
    margin: 0 auto;
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

  .form__button input[type="checkbox"]+span {
    display: none;
    cursor: pointer;
    display: inline-block;
    position: relative;
    padding-left: 1.9rem;
    line-height: 1.6;
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


  /* 送信ボタンの黒い線のbefore要素記述している、sassでの記述箇所を.formからwpcf7-form.initに変更 */
</style>
<main id="contact">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop">
        <h1 class="titleTop__en">CONTACT</h1>
        <h4 class="titleTop__ja">お問い合わせ</h4>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="container">
      <p class="contact__text">弊社へのお問い合わせは以下のフォームよりお願いいたします。<br>
        弊社より折り返しご連絡させて<br class="forSp">いただきます。<br>
        <span>*はすべて必須項目です。</span>
      </p>
      <?php echo do_shortcode('[contact-form-7 id="41" title="コンタクトフォーム 1"]'); ?>
    </div>
  </section>
</main>
<?php get_footer() ?>