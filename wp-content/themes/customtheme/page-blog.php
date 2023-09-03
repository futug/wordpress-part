<?php get_header('light'); ?>

<?php
/*
Template Name: Blog Page
*/

?>

<main class="main">
          <section class="blog-hero hero-section">
            <div class="blog-hero__content container">
              <h1 class="blog-hero__content-title">
                <?php the_field('blog_hero-title'); ?>
              </h1>
              <p class="blog-hero__content-subtitle">
                <?php the_field('blog_hero-sub'); ?>
              </p>
              <div class="blog-hero__content-cta">
                <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>" class="btn btn-primary btn--brown"
                  >Наши услуги</a
                >
                <a href="<?php echo home_url() . '/contacts'; ?>" class="btn btn-secondary btn--brown"
                  ><svg class="btn-msg-ico">
                  <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#prime_message"></use>
                  </svg>
                  Напиши нам</a
                >
              </div>
            </div>
          </section>
          <section class="blog-list section-offset">
  <div class="blog-list__content container">

    <?php 
    $posts = get_posts([
      'post_type' => 'post',
      'orderby' => 'date',
      'order' => 'DESC',
      'post_status' => 'publish',
      'exclude' => [],
      'include' => [],
      'metakey' => '',
      'metadesc' => '',
    ]);

    foreach ($posts as $post) : setup_postdata($post); ?>
    <div class="blog-list__content-item blog-item">
      <div class="blog-item__left">
      <div class="blog-item__image">
    <?php
        if (has_post_thumbnail()) {
            $post_thumbnail_id = get_post_thumbnail_id();
            $post_thumbnail = wp_get_attachment_image_src($post_thumbnail_id, 'large'); // 'large' можно заменить на размер изображения, который вам нужен
            if ($post_thumbnail) {
                echo '<picture>';
                echo '<source srcset="' . esc_url($post_thumbnail[0]) . '" type="image/webp" />';
                echo '<img loading="lazy" src="' . esc_url($post_thumbnail[0]) . '" class="blog-image" alt="post image" />';
                echo '</picture>';
            }
        }
    ?>
</div>
<p  class="blog-item__name">Олег</p>
<p class="blog-item__position">Основатель компании</p>


      </div>
      <div class="blog-item__right">
        <p class="blog-item__title"><?php the_title(); ?></p>
    
    
        <div class="blog-item__post">
         <?php the_content() ?>
        </div>
        <button class="btn-reset  btn-primary readBtn hidden">Читать далее</button>
        <button class="btn-reset  btn-primary hideBtn hidden">Скрыть</button>
      </div>
    </div>
    <?php endforeach; ?>
    
    <picture>
      <source srcset="<?php bloginfo('template_url'); ?>/assets/img/home-decore.webp" type="image/webp" />
      <img
        loading="lazy"
        src="<?php bloginfo('template_url'); ?>/assets/img/home-decore.png"
        class="blog-list__decore"
        width="373"
        height="361"
        alt="blog-list__decore"
      />
    </picture>
  </div>
</section>

        </main>

<?php get_footer('dark'); ?>