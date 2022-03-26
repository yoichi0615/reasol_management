<?php get_header() ?>
<main id="thanks">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop">
        <h1 class="titleTop__en">CONTACT</h1>
        <h4 class="titleTop__ja">お問い合わせ</h4>
      </div>
    </div>
  </section>
  <section class="thanks-message">
    <div class="container">
      <h1 class="thanks-message__title">お問い合わせいただき、ありがとうございます。</h1>
      <p class="thanks-message__text">この度はお問い合わせいただき、誠にありがとうございます。<br>受付完了メール（自動送信）を送信しましたので、ご確認ください。</p>
    </div>
  </section>
  <section class="thanks-box">
    <div class="container">
      <p class="thanks-box__text1">万が一メールが届いてない場合、以下の原因が考えられます。<br><br>

        <span>入力されたメールアドレスに誤りがある可能性があります。</span><br>
        <span>迷惑メールフォルダに振り分けられている可能性があります。</span><br>
        <span>ドメイン設定受信を行っている可能性があります。「example.com」のドメイン受信設定を行ってください。</span>
      </p>
      <h3 class="thanks-box__text2">メールが届かない場合は恐れ入りますが、<span>再度ご応募</span>ください。</h3>
      <a class="button" href="<?php echo home_url() ?>/contact/">再度お問いあわせはこちら</a>
      <a class="thanks-box__toTop" href="<?php echo home_url() ?>">トップページへ戻る ＞</a>
    </div>
  </section>
</main>
<?php get_footer() ?>