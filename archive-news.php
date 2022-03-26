<?php get_header() ?>
<style>
  .page {
    font-size: 1.4rem;
  }

  body {
    font-size: 1.4rem;
  }
</style>
<main id="news">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop">
        <h1 class="titleTop__en">NEWS</h1>
        <h4 class="titleTop__ja">お知らせ</h4>
      </div>
    </div>
  </section>
  <section class="tab">
    <div class="container">
      <a href="<?php echo home_url() ?>/news">
        <p class="tab__button1 tab__button now">すべて</p>
      </a>
      <?php
      $categories = get_terms('news_lists');
      foreach ($categories as $category) :
        //dd($category->name);
      ?>
        <a href="<?php echo get_category_link($category->term_id); ?>">
          <p class="tab__button2 tab__button"><?php echo $category->name ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="news">
    <div class="container newsList1">
      <?php
      $args = array(
        'post_type' => 'news', // 投稿タイプを指定
        'paged' => $paged,
        'posts_per_page' => 10, // 表示する記事数
      );

      $news_query = new WP_Query($args); // データベースからニュースを取得
      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) :
          $news_query->the_post();
      ?>
          <a class="news-list" href="<?php the_permalink(); ?>">
            <p class="tag2 news-list__tag"><?php
                                            $news_lists = get_the_terms($post->ID, 'news_lists');
                                            foreach ($news_lists as $news_list) {
                                              echo $news_list->name;
                                            }
                                            ?></p>
            <p class="news-list__date"><?php echo get_the_date('Y.m.d'); ?></p>
            <h2 class="news-list__title"><?php the_title(); ?></h2>
          </a>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <div class="page">
      <!-- <a class="page__arrow" href="news.html"></a>
      <a class="page__number now" href="news.html">1</a>
      <a class="page__number" href="news.html">2</a>
      <a class="page__number" href="news.html">3</a>
      <a class="page__arrow next" href="news.html"></a> -->
      <?php
      if (function_exists('pagenation')) { // 関数が定義されていたらtrueになる
        pagenation();
      }
      ?>
    </div>
  </section>
</main>
<?php get_footer() ?>