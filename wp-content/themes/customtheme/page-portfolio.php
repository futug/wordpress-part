<?php get_header('dark'); ?>
<?php 
/* Template Name: portfolio */
?>

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
                <a href="/services.html" class="btn btn-primary btn--green">Наши услуги</a>
                <a href="/contacts.html" class="btn btn-secondary btn--white ">
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
            
            if ($portfolio_items) {
                foreach ($portfolio_items as $item) {
            ?>
                <div class="portfolio-list__item">
                    <picture>
                        <source srcset="<?php echo $item['portfolio_image-webp']; ?>" type="image/webp" />
                        <img
                            loading="lazy"
                            src="<?php echo $item['portfolio_image-jpg']; ?>"
                            class="portfolio__item-image"
                            width="558"
                            height="336"
                            alt="successfull case"
                        />
                    </picture>
                    <div class="portfolio__item-text">
                        <?php
                        $portfolio_paragraphs = $item['portfolio_item-paragraphs'];

                        if ($portfolio_paragraphs) {
                            foreach ($portfolio_paragraphs as $paragraph) {
                        ?>
                            <p class="item__text-paragraph">
                                <?php echo $paragraph['portfolio_item-paragraph']; ?>
                            </p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
</main>

<?php get_footer('dark'); ?>
