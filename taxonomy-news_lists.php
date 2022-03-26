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
        <p class="tab__button1 tab__button">すべて</p>
      </a>

      <?php
      $url = $_SERVER['REQUEST_URI'];

      $categories = get_terms('news_lists');
      foreach ($categories as $category) :
      ?>
        <a href="<?php echo get_category_link($category->term_id); ?>">
          <?php
          // $term = wp_get_object_terms($post->ID, 'news_lists');
          // $terms = wp_get_object_terms($category->term_id, $category->id);


          $class = "";
          if ($url === "/news_lists/" . $category->slug . "/") {
            $class = "now";
          }
          ?>
          <p class="tab__button2 tab__button <?php echo $class ?>"><?php echo $category->name ?></p>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="news">
    <div class="container newsList1">
      <?php
      $term = wp_get_object_terms($post->ID, 'news_lists');
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type'    => 'news',
        'paged' => $paged,
        'tax_query'    => array(
          array(
            'taxonomy'  => 'news_lists',
            'field'    => 'slug',
            'terms'    => $term[0]->slug
          )
        ),
      );
      $custom_query = new WP_Query($args);
      if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) :
          $custom_query->the_post();
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
      <?php
      if (function_exists('pagenation')) { // 関数が定義されていたらtrueになる
        pagenation();
      }
      ?>
    </div>
  </section>
</main>
<?php get_footer() ?>