<?php get_header() ?>
<style>
  p {
    font-size: 1.4rem;
    line-height: 1.7;
    letter-spacing: 0.08em;
    margin-top: 4rem;
  }

  .wp-image-184 {
    width: 14.6rem;
    height: auto;
  }

  h1 {
    letter-spacing: 0.08em;
    font-size: 2.8rem;
    font-weight: bold;
    list-style: 1.35;
    margin-bottom: 9rem;
    position: relative;
    margin-top: 10rem;
    line-height: 1.4;
  }

  h1::after {
    content: "";
    position: absolute;
    width: 200%;
    height: 0.1rem;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    background-color: #707070;
    bottom: -5rem;
  }

  h2 {
    font-size: 2rem;
    font-weight: bold;
    letter-spacing: 0.08em;
    line-height: 1.7;
    margin-top: 6rem;
    margin-bottom: 4rem;
  }



  .top .container {
    width: 90%;
    max-width: 103rem;
    margin: 0 auto;
  }

  img {
    margin-top: 4rem;
    width: 100%;
  }
</style>
</style>
<main id="ict">
  <section class="top subTop">
    <div class="container">
      <div class="titleTop">
        <div class="titleTop__en"><?php echo get_field('service_title_em') ?></div>
        <h4 class="titleTop__ja"><?php the_title() ?></h4>
      </div>
    </div>
  </section>
  <section class="main">
    <div class="container">
      <h1 class="main__title"><?php $title = the_title();
                              echo $title . "について" ?></h1>
      <?php the_content() ?>
    </div>
  </section>
</main>
<?php get_footer() ?>