<?php get_header('dark'); ?>

<?php /* Template Name: portfolio */ ?>

<main class="main">
    <section class="portfolio-hero hero-section">
        <picture>
            <source srcset="<?php the_field('portfolio_background-webp'); ?>" type="image/webp" />
            <img
                loading="lazy"
                src="<?php the_field('portfolio_background-jpg'); ?>"
                class="portfolio-hero__image"
                alt="hero background"
            />
        </picture>
        <div class="portfolio-hero__content container">
            <div class="content__top">
                <h1 class="content__top-title"><?php the_field('portfolio_title'); ?></h1>
                <p class="content__top-text">
                    <?php the_field('portfolio_subtitle'); ?>
                </p>
            </div>
            <div class="content__bottom">
                <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>" class="btn btn-primary btn--green">Наши услуги</a>
                <a href="<?php echo home_url() . '/contacts'; ?>" class="btn btn-secondary btn--white ">
                    <svg class="btn-msg-ico">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#prime_message"></use>
                    </svg>
                    Напиши нам
                </a>
            </div>
        </div>
    </section>

    <section class="portfolio-list section-offset">
        <div class="portfolio-list__content container">
            <?php
            $portfolio_items = get_field('portfolio_items');

            if ($portfolio_items):
                foreach ($portfolio_items as $item):
                    $portfolio_image_jpg = $item['portfolio_image-jpg'];
                    $portfolio_image_webp = $item['portfolio_image-webp'];
                    $portfolio_paragraphs = $item['portfolio_item-paragraphs'];
                    ?>
                    <div class="portfolio-list__item">
                        <picture class="portfolio-list__item-image">
                            <source srcset="<?php echo $portfolio_image_webp; ?>" type="image/webp" />
                            <img loading="lazy" src="<?php echo $portfolio_image_jpg; ?>" class="portfolio-list__item-image" alt="successfull case"
                                 data-lightbox="gallery" />
                        </picture>
                        <div class="portfolio-list__item-text">
                            <?php
                            if ($portfolio_paragraphs):
                                foreach ($portfolio_paragraphs as $paragraph):
                                    ?>
                                    <p class="portfolio-list__text-paragraph">
                                        <?php echo $paragraph['portfolio_item-paragraph']; ?>
                                    </p>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </section>

  
    <div class="overlay">
  <div class="lightbox">
    <img src="" class="lightbox__image" >
    <img src="<?php bloginfo('template_url'); ?>/assets/img/close-button.png" alt="close" class="close-button">
  </div>
</div>
</main>

<?php get_footer('dark'); ?>
