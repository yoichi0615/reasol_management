<?php get_header() ?>
<style>
  .detail .detail-content {
    line-height: 1.7;
    letter-spacing: 0.08em;
  }
</style>
<main id="news-detail" class="news-details">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop">
        <h1 class="titleTop__en">NEWS</h1>
        <h4 class="titleTop__ja">お知らせ</h4>
      </div>
    </div>
  </section>
  <section class="detail">
    <div class="container">
      <div class="detail-top">
        <p class="detail-top__date"><?php echo get_the_date('Y.m.d'); ?></p>
        <p class="detail-top__tag tag2">お知らせ</p>
        <h1 class="detail-top__title"><?php the_title(); ?></h1>
      </div>
      <div class="detail-content">
        <h2 class="detail-content__title"><?php the_title(); ?></h2>
        <h3 class="detail-content__message"></h3>
        <p class="detail-content__text">
          <?php the_content(); ?>
        </p>
      </div>
      <a class="button" href="<?php echo home_url() ?>/news/">ニュース一覧へ戻る</a>
    </div>
  </section>
</main>
<?php get_footer() ?>