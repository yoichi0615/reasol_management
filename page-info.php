<?php get_header() ?>
<style>
  #information .titleTop.widthh {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
</style>
<main id="information">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop forSp">
        <h1 class="titleTop__en">INFORMATION</h1>
      </div>
      <div class="titleTop widthh">
        <h1 class="titleTop__en forPc">INFORMATION SECURITY</h1>
        <h1 class="titleTop__en forSp">SECURITY</h1>
        <h4 class="titleTop__ja">情報セキュリティ</h4>
      </div>
    </div>
  </section>
  <section class="main">
    <div class="container">
      <h1 class="main__title">情報セキュリティ管理・運用</h1>
      <p class="main__text">弊社では、PMS（プライバシーマーク）／ISMS（ISO27001）に準拠した情報管理・運用を行っております。<br>
        これらの活動は全て「継続的業務改善プロセス」＝PDCAサイクルを回す事で運用の見直しおよび<br>
        継続的な改善・向上に努めております。<br>
        認証資格：ISO27001認証取得（審査登録番号 JP14/080317）
      </p>
      <img class="main__img main__img--icon" src="<?php echo get_template_directory_uri() ?>/assets/img/information/permit-icon.png">
      <h2 class="main__subTitle">具体的な運用例</h2>
      <p class="main__text"><span>情報資産の定期的な棚卸 (取扱う個人情報/貸与物/システムアカウント等)</span><br>
        <span>客先常駐作業終了時の機密情報返却・廃棄管理</span><br>
        <span>トラブル対応フローに基づくセキュリティインシデント対応　etc...</span>
      </p>
      <div class="main__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/information/img1.png">
      </div>
      <h1 class="main__title">人材育成への取組み</h1>
      <p class="main__text">社員に対する情報セキュリティ教育として、定期的にセキュリティ教育を実施しております。<br>
        それぞれの教育実施記録を保管し、証跡を残すと共に継続的改善プロセス＝PDCAサイクルを回す為の<br>
        インプットとして利活用しています。
      </p>
      <h2 class="main__subTitle">主な教育内容</h2>
      <p class="main__text"><span>情報セキュリティ教育資料の読み合わせ</span><br>
        <span>インシデント発生時を想定したトラブル報告訓練</span><br>
        <span>理解度テスト</span>
      </p>
      <div class="main__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/information/img2.png">
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>