<?php get_header('dark'); ?>
<?php
/* Template Name: google-ads */
?>

<main class="main">
    <section class="google-hero hero-section">
        <picture class="google-hero__picture">
            <source srcset="<?php the_field('google_ads-bg--webp'); ?>" type="image/webp" />
            <source srcset="<?php the_field('google_ads-bg'); ?>" type="image/png" />
            <img loading="lazy" src="<?php the_field('google_ads-bg'); ?>" class="google-hero__picture"
                alt="google-hero" />
        </picture>
        <div class="google-hero__content container">
            <h1 class="google-hero__content-title">
                <?php the_field('google-ads_hero-title'); ?>
            </h1>
            <p class="google-hero__content-subtitle">
                <?php the_field('google-ads_hero-subtitle'); ?>
            </p>
            <div class="google-hero__content-cta">
                <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>" class="btn btn-primary btn--white">Наши услуги</a>
                <a href="<?php echo home_url() . '/contacts'; ?>" class="btn btn-secondary btn--white">
                    <svg class="btn-msg-ico">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#prime_message"></use>
                    </svg>
                    Напиши нам
                </a>
            </div>
        </div>
    </section>
    <section class="google-content section-offset">
        <div class="google-content__content container">
            <h2 class="google-content__content-title section-title">
                <?php the_field('google-ads_principles-title'); ?>
            </h2>
            <?php
            $principles_subs = get_field('google-ads_principles-subtitles');
            if ($principles_subs) :
                foreach ($principles_subs as $sub) :
                    $subtitle = $sub['google-ads_principles-subtitle'];
            ?>
                    <p class="google-content__content-paragraph">
                        <?php echo esc_html($subtitle); ?>
                    </p>
            <?php
                endforeach;
            else :
            endif;
            ?>
            <div class="google-content__list">
                <p class="google-content__list-title">
                    <?php the_field('google-ads_principles-list-title'); ?>
                </p>
                <ul class="google-content__list-list">
                    <?php
                    $principles_items_first = get_field('google-ads_first-list-items');
                    if ($principles_items_first) :
                        foreach ($principles_items_first as $item) :
                            $bold = $item['bold-text'];
                            $text = $item['text'];
                    ?>
                            <li>
                                <span><?php echo esc_html($bold); ?></span> <?php echo esc_html($text); ?>
                            </li>
                    <?php
                        endforeach;
                    else :
                    endif;
                    ?>
                </ul>
            </div>
            <div action="#" class="google-content__content-form main-form-horizont horiz-black-version"
                id="google-content-form">
                <h2 class="main-form-horizont__title">
                    Заполните форму и узнайте стоимость продвижения
                </h2>
                <p class="main-form-horizont__subtitle">
                    Наши менеджеры свяжутся с вами в ближайшее время!
                </p>
                <div class="main-form-horizont__form-body">
                <?php echo do_shortcode('[contact-form-7 id="61f81f1" title="main-form-horizont--black"]'); ?>
                </div>
                <p class="main-form-horizont__privacy-warn">
                    Нажимая кнопку, вы соглашаетесь с <a href="<?php echo home_url() . '/privacy-policy'; ?>">политикой конфиденциальности</a>
                    сайта.
                </p>
            </div>
            <div class="google-content__list">
                <p class="google-content__list-title">
                    <?php the_field('google-ads_principles-list-title_second'); ?>
                </p>
                <ul class="google-content__list-list">
                    <?php
                    $principles_items_second = get_field('google-ads_second-list-items-second');
                    if ($principles_items_second) :
                        foreach ($principles_items_second as $item) :
                            $bold = $item['bold-text'];
                            $text = $item['text'];
                    ?>
                            <li>
                                <span><?php echo esc_html($bold); ?></span> <?php echo esc_html($text); ?>
                            </li>
                    <?php
                        endforeach;
                    else :
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="google-args section-offset">
        <div class="container">
            <h2 class="google-args__title section-title">
                <?php the_field('google-ads_args-title'); ?>
            </h2>
            <div class="google-args__box">
                <ol class="google-args__list" data-list="list1">
                    <?php
                    $positiv_args = get_field('google-ads_posargs-items');
                    if ($positiv_args) :
                        foreach ($positiv_args as $item) :
                            $description = $item['google-ads_posargs-text'];
                    ?>
                            <li class="google-args__item google-args__item--left">
                                <?php echo esc_html($description); ?>
                            </li>
                    <?php
                        endforeach;
                    else :
                    endif;
                    ?>
                </ol>
                <ol class="google-args__list google-args__list--green" data-list="list2">
                    <?php
                    $negativ_args = get_field('google-ads_negargs-items');
                    if ($negativ_args) :
                        foreach ($negativ_args as $item) :
                            $description = $item['google-ads_negargs-text'];
                    ?>
                            <li class="google-args__item google-args__item--right">
                                <?php echo esc_html($description); ?>
                            </li>
                    <?php
                        endforeach;
                    else :
                    endif;
                    ?>
                </ol>
            </div>
        </div>
    </section>
</main>

<?php get_footer('dark'); ?>
