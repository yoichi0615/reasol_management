<?php get_header() ?>
<main id="service">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop">
        <h1 class="titleTop__en">SERVICE</h1>
        <h4 class="titleTop__ja">サービス</h4>
      </div>
    </div>
  </section>
  <section class="lists">
    <div class="container">
      <div class="titleContent">
        <h1 class="titleContent__en">SERVICE</h1>
        <h4 class="titleContent__ja">サービス</h4>
      </div>
      <p class="lists__text">既存事業を基盤としながらも、常にお客様への貢献や、人材の育成、会社の成長を考え、<br>挑戦し続ける、それが私たちリアソルマネージメントです。</p>
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'services', // 投稿タイプを指定
        'paged' => $paged,
        'posts_per_page' => 6, // 表示する記事数
      );

      $blog_query = new WP_Query($args); // データベースからニュースを取得
      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) :
          $blog_query->the_post();
      ?>
          <div class="lists-box">
            <?php $image = wp_get_attachment_image_src(get_field('service_img'), 'full'); ?>
            <img class="lists-box__img" src="<?php echo $image[0]; ?>">
            <div class="lists-box-text">
              <h3 class="lists-box-text__title"><?php echo get_field('service_title') ?></h3>
              <h4 class="lists-box-text__titleEn"><?php echo get_field('service_title_em') ?></h3>
              </h4>
              <p class="lists-box-text__text"><?php echo get_field('about_service') ?></p>
              <a class="button" href="<?php the_permalink(); ?>">READ MORE</a>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </section>
</main>
<?php get_footer() ?>