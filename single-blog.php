<?php get_header() ?>
<style>
  p {
    font-size: 1.4rem;
    letter-spacing: 0.08em;
    line-height: 1.7;
  }

  .content-main h2 {
    font-size: 2.4rem;
    font-weight: bold;
    letter-spacing: 0.08em;
    line-height: 1.6;
    position: relative;
    left: 2rem;
    width: 97%;
  }

  .content-main h2::before {
    content: "";
    background-color: #000;
    width: 0.4rem;
    height: 2.4rem;
    position: absolute;
    top: 0.7rem;
    left: -2rem;
  }

  .content-main h2::after {
    content: "";
    position: absolute;
    height: 0.1rem;
    width: 103%;
    background-color: #707070;
    left: -2rem;
    top: -5rem;
  }
</style>
<main id="blog-detail">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop">
        <h1 class="titleTop__en">BLOG</h1>
        <h4 class="titleTop__ja">自社ブログ</h4>
      </div>
    </div>
  </section>
  <section class="blog-detail">
    <div class="container">
      <div class="content">
        <div class="content-top">
          <p class="content-top__date"><?php echo get_the_date('Y.m.d'); ?></p>
          <p class="content-top__tag tag"><?php
                                          $blog_lists = get_the_terms($post->ID, 'blog_lists');
                                          foreach ($blog_lists as $blog_list) {
                                            echo $blog_list->name;
                                          }
                                          ?></p>
          <h1 class="content-top__title"><?php the_title(); ?></h1>
        </div>
        <div class="content-main">
          <p class="content-main__text"><?php the_content() ?></p>
          <a class="button" href="<?php echo home_url() ?>/blog/">ブログ一覧へ戻る</a>
        </div>
      </div>
      <div class="side">
        <div class="side-category">
          <h2 class="side-category__title">カテゴリ</h2>
          <?php
          $categories = get_terms('blog_lists');
          foreach ($categories as $category) :
            //dd($category->name);
          ?>
            <a class="side-category__tag tag" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name ?></a>
          <?php endforeach; ?>
        </div>
        <div class="side-neew">
          <h2 class="side-new__title">最近の投稿</h2>
          <?php
          $args = array(
            'post_type' => 'blog', // 投稿タイプを指定
            'posts_per_page' => 5, // 表示する記事数
          );

          $blog_query = new WP_Query($args); // データベースからニュースを取得
          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) :
              $blog_query->the_post();
          ?>
              <a class="side-new__topic" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>