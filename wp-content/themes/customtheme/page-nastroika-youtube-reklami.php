<?php get_header('light'); ?>
<?php
/* Template Name: video-marketing */
?>

<main class="main">
          <section class="video-hero hero-section">
            <div class="video-hero__content container">
              <h1 class="video-hero__content-title">
                <?php the_field('video-marketing_hero-title'); ?>
              </h1>
              <p class="video-hero__content-subtitle">
                <?php the_field('video-marketing_hero-subtitle'); ?>
              </p>
              <div class="video-hero__content-cta">
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
              <div class="video-hero__content-form">
                <div
                  action="#"
                  class="main-form brown-version"
                  id="video-hero-form"
                >
                  <p class="main-form__title">Запишись на консультацию</p>
                  <p class="main-form__subtitle">
                    Наши менеджеры свяжутся с вами в ближайшее время!
                  </p>
                  <?php echo do_shortcode('[contact-form-7 id="85310ec" title="main-form--black"]'); ?> 
                </div>
              </div>
            </div>
          </section>
          <section class="video-question section-offset brown-gradient-section">
            <div class="video-question__content container">
              <h2 class="video-question__content-title section-title">
                <?php the_field('video-question_content-title'); ?>
              </h2>
              <ol class="video-question__list block-list">

                <?php $video_question_list = get_field('video-question_list-items'); 
                if ($video_question_list) :
                  foreach ($video_question_list as $item) :
                    $title = $item['video-question_list-title'];
                    $descr = $item['video-question_list-descr'];

                ?>

                <li class="video-question__list-block block-list__item">
                  <div class="video-question__list-item block-item__block">
                    <p
                      class="video-question__list-title block-list__block-title"
                    >
                      <?php echo esc_html($title); ?>
                    </p>
                    <p class="video-question__list-text block-list__block-body">
                      <?php echo esc_html($descr); ?>
                    </p>
                  </div>
                </li>

                <?php
                  endforeach;
                else :
                endif;
                ?>
              </ol>
              <div
                class="video-question__content-form main-form-horizont horiz-white-version"
                id="video-question-form"
              >
                <h2 class="main-form-horizont__title">
                  Заполните форму и узнайте стоимость продвижения
                </h2>
                <p class="main-form-horizont__subtitle">
                  Наши менеджеры свяжутся с вами в ближайшее время!
                </p>
                <div class="main-form-horizont__form-body">
                <?php echo do_shortcode('[contact-form-7 id="949e3d2" title="main-form-horizont"]'); ?>
                </div>
                <p class="main-form-horizont__privacy-warn">
                  Нажимая кнопку, вы соглашаетесь с
                  <a href="<?php echo home_url() . '/privacy-policy'; ?>">политикой конфиденциальности</a>
                  сайта.
                </p>
              </div>
            </div>
          </section>
          <section class="video-variants section-offset">
            <div class="video-variants__content container">
              <h2 class="video-variants__content-title section-title">
                <?php the_field('video-marketing_variants-title'); ?>
              </h2>
              <div class="video-variants__cards">
                    <?php
                    $video_variants = get_field('video-marketing_variants-cards'); 
                    if ($video_variants) :
                        foreach ($video_variants as $variant) :
                            $title = $variant['title'];
                            $descr = $variant['descr'];
                            $list_items = $variant['card-list_items'];
                    ?>
                            <div class="video-variants__cards-item">
                                <p class="video-variants__cards-title"><?php echo esc_html($title); ?></p>
                                <p class="video-variants__cards-desc"><?php echo esc_html($descr); ?></p>
                                <ul>
                                    <?php
                                    if ($list_items) :
                                        foreach ($list_items as $list_item) :
                                            $item_text = $list_item['list-item'];
                                    ?>
                                            <li><?php echo esc_html($item_text); ?></li>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </ul>
                                <p></p>
                                <a href="#video-properties-form" class="video-variants__cards-btn">Подробнее</a>
                            </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
              </div>
            </div>
          </section>
          <section class="video-advantages section-offset">
            <div class="video-advantages__content container">
              <h2 class="video-advantages__content-title section-title">
                <?php the_field('video-marketing_adv-title'); ?>
              </h2>
              <ol class="video-advantages__list">
                    <?php $adv_items = get_field('video-marketing_adv-list-items');
                    if ($adv_items) :
                        foreach ($adv_items as $item) :
                            $bold = $item['bold'];
                            $text = $item['text']; ?>

                <li class="video-advantages__list-item">
                  <span><?php echo esc_html($bold); ?></span> <?php echo esc_html($text); ?>
                </li>
                    <?php
                        endforeach;
                    else :
                    endif;
                    ?>
              </ol>
            </div>
          </section>
          <section class="video-properties section-offset">
            <div class="video-properties__content container">
              <h2 class="video-properties__content-title secondary-title">
                <?php the_field('video-marketing_prop-title'); ?>
              </h2>
              <ul class="video-properties__list">

                <?php $video_properties_list = get_field('video-marketing_prop-list-items'); 
                if ($video_properties_list) :
                  foreach ($video_properties_list as $item) :
                    $text = $item['text']; ?>

                <li class="video-properties__list-item">
                <?php echo wp_kses_post($text); ?>
                </li>
                <?php
                  endforeach;
                endif;
                ?>
              </ul>
              <div
                class="video-properties__form main-form-horizont horiz-black-version"
                id="video-properties-form"
              >
                <h2 class="main-form-horizont__title">
                  Заполните форму и узнайте стоимость ролика
                </h2>
                <p class="main-form-horizont__subtitle">
                  Наши менеджеры свяжутся с вами в ближайшее время!
                </p>
                <div class="main-form-horizont__form-body">
                <?php echo do_shortcode('[contact-form-7 id="61f81f1" title="main-form-horizont--black"]'); ?>
                </div>
                <p class="main-form-horizont__privacy-warn">
                  Нажимая кнопку, вы соглашаетесь с
                  <a href="<?php echo home_url() . '/privacy-policy'; ?>">политикой конфиденциальности</a>
                  сайта.
                </p>
              </div>
            </div>
          </section>
          <section class="video-analysis section-offset green-gradient-section">
            <div class="video-analysis__content container">
              <h2 class="video-analysis__content-title section-title">
                <?php the_field('video-marketing_analyse-title'); ?>
              </h2>
              <div class="video-analysis__list">
                <p class="video-analysis__list-desc">
                  <?php the_field('video-marketing_analyse-list-title'); ?>
                </p>
                <ol class="video-analysis__list-list">
                  <?php $video_analysis_list = get_field('video-marketing_analyse-list-items');
                  if ($video_analysis_list) :
                    foreach ($video_analysis_list as $item) :
                        $bold = $item['bold'];
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
                </ol>
              </div>
              <div class="video-analysis__list">
                <p class="video-analysis__list-desc">
                  <?php the_field('video-marketing_analyse-list-title-sec'); ?>
                </p>
                <ol class="video-analysis__list-list">
                <?php $video_analysis_list_second = get_field('video-marketing_analyse-second-list-items');
                  if ($video_analysis_list_second):
                    foreach ($video_analysis_list_second as $item):
                        $bold = $item['bold'];
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
                </ol>
              </div>
            </div>
          </section>
        </main>

<?php get_footer('dark'); ?>