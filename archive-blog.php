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
    <?php
    $month = date('m');
    $pwd = get_template_directory_uri();
    if ($month == "01") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/1.png\">";
    }
    if ($month == "02") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/2.png\">";
    }

    if ($month == "03") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/3.png\">";
    }

    if ($month == "04") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/4.png\">";
    }

    if ($month == "05") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/5.png\">";
    }

    if ($month == "06") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/6.png\">";
    }

    if ($month == "07") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/7.png\">";
    }

    if ($month == "08") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/8.png\">";
    }

    if ($month == "09") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/9.png\">";
    }

    if ($month == "10") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/10.png\">";
    }

    if ($month == "11") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/11.png\">";
    }

    if ($month == "12") {
      echo "<img class=\"top__img\" src=\"$pwd/assets/img/blog/12.png\">";
    }

    ?>

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
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'blog', // 投稿タイプを指定
            'paged' => $paged,
            'posts_per_page' => 6, // 表示する記事数
          );

          $blog_query = new WP_Query($args); // データベースからニュースを取得
          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) :
              $blog_query->the_post();
          ?>
              <a class="blog-lists-list" href="<?php the_permalink(); ?>">
                <?php
                $image = wp_get_attachment_image_src(get_field('blog_img'));
                ?>
                <img class="blog-lists-list__img" src="<?php echo $image[0]; ?>">
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
                    echo wp_trim_words(get_the_content(), 30, '・・・');
                    ?>
                  </p>
                  <p class="blog-lists-list-text__date"> <?php echo get_the_date('Y.m.d'); ?></p>
                </div>
              </a>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
          <div class="page forSp">
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
<?php get_footer() ?>