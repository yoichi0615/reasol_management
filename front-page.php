<?php get_header() ?>
<style>
  #index .recruit-box__title {
    width: 36rem;
    margin-bottom: 2rem;
  }
</style>
<div class="loader" id="loading">
  <div class="loader-spinner">
    <div class="loader-spinner__box"></div>
    <p class="loader-spinner__text">Loading</p>
  </div>
</div>
<main id="index">
  <section class="lead">
    <div class="container">
      <h1 class="lead__title"> REASOL<br>MANAGEMENT</h1>
      <div class="lead-message">
        <p class="lead-message__text">知識集約型の</p>
        <p class="lead-message__text">ソリューション企業へ</p>
      </div>
    </div>
    <div class="lead-images">
      <div class="lead-images-container">
        <img class="lead-images-container__img slide1" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern1-1.png">
        <img class="lead-images-container__img slide1" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern2-1.png">
        <img class="lead-images-container__img slide1" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern3-1.png">
      </div>
      <div class="lead-images-container">
        <img class="lead-images-container__img slide2" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern1-2.png">
        <img class="lead-images-container__img slide2" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern2-2.png">
        <img class="lead-images-container__img slide2" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern3-2.png">
      </div>
      <div class="lead-images-container">
        <img class="lead-images-container__img slide3" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern1-3.png">
        <img class="lead-images-container__img slide3" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern2-3.png">
        <img class="lead-images-container__img slide3" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern3-3.png">
      </div>
      <div class="lead-images-container">
        <img class="lead-images-container__img slide4" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern1-4.png">
        <img class="lead-images-container__img slide4" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern2-4.png">
        <img class="lead-images-container__img slide4" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern3-4.png">
      </div>
      <div class="lead-images-container">
        <img class="lead-images-container__img slide5" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern1-5.png">
        <img class="lead-images-container__img slide5" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern2-5.png">
        <img class="lead-images-container__img slide5" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern3-5.png">
      </div>
      <div class="lead-images-container">
        <img class="lead-images-container__img slide6" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern1-6.png">
        <img class="lead-images-container__img slide6" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern2-6.png">
        <img class="lead-images-container__img slide6" src="<?php echo get_template_directory_uri() ?>/assets/img/index/pattern3-6.png">
      </div>
    </div>
  </section>
  <section class="news">
    <div class="container">
      <div class="news__bg"></div>
      <div class="news-wrapper">
        <div class="news-wrapper-left">
          <div class="titleTop">
            <h1 class="titleTop__en">NEWS</h1>
            <h4 class="titleTop__ja">お知らせ</h4>
          </div>
          <p class="news-wrapper-left__text">実績紹介や、プレスリリースなど、<br>最新の情報をお知らせします。</p>
          <a class="button forPc" href="<?php echo home_url() ?>/news/">READ MORE</a>
        </div>
        <div class="news-wrapper-right">
          <?php
          $args = array(
            'post_type' => 'news', // 投稿タイプを指定
            'posts_per_page' => 3, // 表示する記事数
          );

          $news_query = new WP_Query($args); // データベースからニュースを取得
          if ($news_query->have_posts()) :
            while ($news_query->have_posts()) :
              $news_query->the_post();
          ?>
              <a class="news-wrapper-right__list" href="<?php the_permalink(); ?>">
                <p class="tag2 news-wrapper-right__list--tag"><?php $news_list = get_the_terms($post->ID, 'news_lists');
                                                              foreach ($news_list as $news_lis) {
                                                                echo $news_lis->name;
                                                              }
                                                              ?></p>
                <p class="news-wrapper-right__list--date"><?php echo get_the_date('Y.m.d'); ?></p>
                <h2 class="news-wrapper-right__list--title"><?php the_title(); ?></h2>
              </a>
              <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
              <a class="button forSp" href="<?php echo home_url() ?>/news/">READ MORE</a>
        </div>
      </div>
    </div>
  </section>
  <section class="common message">
    <img class="common__img forSp" src="<?php echo get_template_directory_uri() ?>/assets/img/index/message-img.png">
    <div class="container">
      <img class="common__img forPc" src="<?php echo get_template_directory_uri() ?>/assets/img/index/message-img.png">
      <div class="common-text">
        <img class="common__bg" src="<?php echo get_template_directory_uri() ?>/assets/img/index/message-bg.png">
        <div class="titleContent">
          <h1 class="titleContent__en">MESSAGE</h1>
          <h4 class="titleContent__ja">メッセージ</h4>
        </div>
        <p class="common-text__text">
        リアソルマネージメントはICT分野に強みを持ちながら、新しい分野でのシステム開発の可能性を広げています。私たちの提供するソリューションで、お客様が望む利便性の高い世界を実現して参ります。
        </p>
        <a class="button" href="<?php echo home_url() ?>/message/">READ MORE</a>
      </div>
    </div>
  </section>
  <section class="common company">
    <img class="common__img forSp" src="<?php echo get_template_directory_uri() ?>/assets/img/index/company-img.png">
    <div class="container company">
      <img class="common__img forPc" src="<?php echo get_template_directory_uri() ?>/assets/img/index/company-img.png">
      <div class="common-text">
        <div class="titleContent company">
          <h1 class="titleContent__en">COMPANY<br>PROFILE</h1>
          <h4 class="titleContent__ja">会社概要</h4>
        </div>
        <p class="common-text__text">
          リアソルマネージメントの基本情報は<br>こちらからご覧いただけます。
        </p>
        <a class="button" href="<?php echo home_url() ?>/company/">READ MORE</a>
      </div>
    </div>
  </section>
  <section class="service">
    <div class="container">
      <div class="titleContent">
        <h1 class="titleContent__en">SERVICE</h1>
        <h4 class="titleContent__ja">サービス</h4>
      </div>
      <p class="service__text">
        弊社は、2019年10月に事業をスタートさせたICTソリューション事業を中心に生業とする会社です。<br>「お客様に満足を提供」をモットーに、高技術、高品質、高サービスを目指してまいりました。
        <a class="button" href="<?php echo home_url() ?>/services/">READ MORE</a>
      </p>
      <div class="service-wrapper">
        <a class="service-wrapper-box" href="<?php echo home_url() ?>/services/ictソリューション/">
          <p class="service-wrapper-box__text forPc">弊社では、ICT全般における<br>
            ソリューションサービスの提供を<br>
            目指しております。
          </p>
          <span class="service-wrapper-box__arrow box__arrow"><img class="service-wrapper-box__arrow--inner" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-arrow.png"></span>
          <div class="service-wrapper-box-title">
            <h3 class="service-wrapper-box-title__ja">ICTソリューション</h3>
            <h4 class="service-wrapper-box-title__en">ICT solution</h4>
            <span class="service-wrapper-box__arrow forSp"><img class="service-wrapper-box__arrow--inner" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-arrow.png"></span>
          </div>
          <img class="service-wrapper-box__img" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-img1.png">
        </a>
        <a class="service-wrapper-box" href="<?php echo home_url() ?>/services/教育ソリューション/">
          <p class="service-wrapper-box__text forPc">新卒新人や中途採用社員から中堅社員、リーダークラスまでを対象に、社員教育過程において様々なジャンルの教育カリキュラムを策定し、改善向上を加えノウハウを蓄積しております。
          </p>
          <span class="service-wrapper-box__arrow box__arrow"><img class="service-wrapper-box__arrow--inner" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-arrow.png"></span>
          <div class="service-wrapper-box-title">
            <h3 class="service-wrapper-box-title__ja">教育ソリューション</h3>
            <h4 class="service-wrapper-box-title__en">Educational solution</h4>
            <span class="service-wrapper-box__arrow forSp"><img class="service-wrapper-box__arrow--inner" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-arrow.png"></span>
          </div>
          <img class="service-wrapper-box__img" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-img2.png">
        </a>
        <a class="service-wrapper-box" href="<?php echo home_url() ?>/services/情報ソリューション/">
          <p class="service-wrapper-box__text forPc">PMS（プライバシーマーク）<br>
            ／ISMS（ISO27001）に準拠した<br>
            情報管理・運用を行っております。
          </p>
          <span class="service-wrapper-box__arrow box__arrow"><img class="service-wrapper-box__arrow--inner" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-arrow.png"></span>
          <div class="service-wrapper-box-title">
            <h3 class="service-wrapper-box-title__ja">情報セキュリティ</h3>
            <h4 class="service-wrapper-box-title__en">Information security</h4>
            <span class="service-wrapper-box__arrow forSp"><img class="service-wrapper-box__arrow--inner" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-arrow.png"></span>
          </div>
          <img class="service-wrapper-box__img" src="<?php echo get_template_directory_uri() ?>/assets/img/index/service-img3.png">
        </a>
      </div>
    </div>
  </section>
  <section class="blog">
    <div class="container">
      <div class="titleContent">
        <h1 class="titleContent__en">LATEST BLOG<br>POSTS</h1>
        <h4 class="titleContent__ja">ブログ</h4>
        <a class="button" href="<?php echo home_url() ?>/blog/">READ MORE</a>
      </div>
      <div class="blog-wrapper">

        <?php
        $args = array(
          'post_type' => 'blog', // 投稿タイプを指定
          'posts_per_page' => 3, // 表示する記事数
        );
        $blog_query = new WP_Query($args); // データベースからニュースを取得
        if ($blog_query->have_posts()) :
          while ($blog_query->have_posts()) :
            $blog_query->the_post();
        ?>



            <a class="blog-wrapper-box" href="<?php the_permalink() ?>">
              <p class="blog-wrapper-box__tag tag"><?php
                                                    $blog_lists = get_the_terms($post->ID, 'blog_lists');
                                                    foreach ($blog_lists as $blog_list) {
                                                      echo '<p class="blog-lists-list-text__tag tag">' . $blog_list->name . '</p>';
                                                    }
                                                    ?></p>
              <p class="blog-wrapper-box__date"><?php echo get_the_date('Y.m.d'); ?></p>
              <h3 class="blog-wrapper-box__title"><?php the_title(); ?></h3>
              <p class="blog-wrapper-box__text">
                <?php
                echo wp_trim_words(get_the_content(), 110, '・・・');
                ?>
              </p>
            </a>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <section class="recruit">
    <div class="container">
      <div class="titleContent">
        <h1 class="titleContent__en">RECRUIT</h1>
        <h4 class="titleContent__ja">採用情報</h4>
      </div>
      <div class="recruit-box">
        <img class="recruit-box__title forPc" src="<?php echo get_template_directory_uri() ?>/assets/img/index/recruit-title.png">
        <img class="recruit-box__title forSp" src="<?php echo get_template_directory_uri() ?>/assets/img/index/recruit-title-sp.png">
        <p class="recruit-box__text">私達が重要視するのはやる気・熱意です。技術や経験は不要です。<br>
          人の育成が会社の成長につながるという観点から新卒新人や中途採用社員から中堅社員、リーダークラスまでを対象に、社員教育には特に力を入れています。<br>
          充実した環境下で、あなたも一緒に働いてみませんか？
        </p>
        <a class="button" href="<?php echo home_url() ?>/job/" target="_blank">READ MORE</a>
      </div>
      <img class="recruit__img forPc" src="<?php echo get_template_directory_uri() ?>/assets/img/index/recruit-img.png">
    </div>
    <img class="recruit__img forSp" src="<?php echo get_template_directory_uri() ?>/assets/img/index/recruit-img-sp.png">
  </section>
</main>
<?php get_footer() ?>