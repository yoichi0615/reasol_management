<?php get_header() ?>
<style>
  .page.forSp {
    font-size: 1.4rem;
  }

  .page {
    font-size: 1.4rem;
  }
</style>
<main id="blog">
  <section class="top">
    <img class="top__img" src="<?php echo get_template_directory_uri() ?>/assets/img/blog/blog-top.png">
    <div class="container">
      <div class="titleTop">
        <h1 class="titleTop__en">BLOG</h1>
        <h4 class="titleTop__ja">自社ブログ</h4>
      </div>
    </div>
  </section>

  <section class="blog">
    <div class="container">
      <div class="titleContent">
        <h1 class="titleContent__en">BLOG</h1>
        <h4 class="titleContent__ja">ブログ一覧</h4>
      </div>
      <div class="content">
        <div class="blog-lists">
          <?php
          $terms = array(
            'saiyo', 'kyoiku', 'uncategorized'
          );
          $url = $_SERVER['REQUEST_URI'];
          //dd($url); /blog_lists/saiyo/
          if ($url == '/blog_lists/saiyo/') {
            $term = $terms[0];
          }

          if ($url == '/blog_lists/kyoiku/') {
            $term = $terms[1];
          }

          if ($url == '/blog_lists/uncategorized/') {
            $term = $terms[2];
          }

          $args = array(
            'post_type'    => 'blog',
            'tax_query'    => array(
              array(
                'taxonomy'  => 'blog_lists',
                'field'    => 'slug',
                'terms'    => $term
              )
            ),
          );

          $blog_query = new WP_Query($args); // データベースからニュースを取得
          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) :
              $blog_query->the_post();
          ?>
              <a class="blog-lists-list" href="<?php the_permalink(); ?>">
                <div class="blog-lists-list-text">
                  <p class="blog-lists-list-text__tag tag"><?php
                                                            $blog_lists = get_the_terms($post->ID, 'blog_lists');
                                                            foreach ($blog_lists as $blog_list) {
                                                              echo '<p class="blog-lists-list-text__tag tag">' . $blog_list->name . '</p>';
                                                            }
                                                            ?></p>
                  <h2 class="blog-lists-list-text__title"><?php the_title(); ?></h2>
                  <p class="blog-lists-list-text__topic">
                    <?php
                    if (mb_strlen($post->post_content, "UTF-8") > 30) {
                      echo wp_trim_words(get_the_content(), 30, '・・・');
                    } else {
                      echo $post->post_content;
                    }
                    ?></p>
                  <p class="blog-lists-list-text__date"> <?php echo get_the_date('Y.m.d'); ?></p>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
          <div class="page forSp">
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
            <a class="side-new__topic" href="blog-detail.html">リーダーマインド研修</a>
            <a class="side-new__topic" href="blog-detail.html">新人研修打ち上げ</a>
            <a class="side-new__topic" href="blog-detail.html">2021年7月度<br>事業本部総会開催</a>
            <a class="side-new__topic" href="blog-detail.html">【採用】2022卒向け<br>会社説明会実施中</a>
            <a class="side-new__topic" href="blog-detail.html">リーダーマインド研修</a>
          </div>
        </div>
      </div>
      <div class="page forPc">
        <?php
        if (function_exists('pagenation')) {
          pagenation();
        }
        ?>
      </div>
    </div>
  </section>
</main>