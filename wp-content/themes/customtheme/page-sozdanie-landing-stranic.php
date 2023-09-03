<?php get_header('dark'); ?>
<?php
/* Template Name: landing-pages */
?>

<main class="main">
          <section class="landing-hero hero-section">
            <picture
              ><source srcset="<?php the_field('lp_background-webp'); ?>" type="image/webp" />
              <img
                loading="lazy"
                src="<?php the_field('lp_background-jpg'); ?>"
                class="landing-hero__image"
                alt="hero-bg"
            /></picture>
            <div class="landing-hero__content container">
              <h1 class="landing-hero__content-title"><?php the_field('lp_hero-title'); ?></h1>
              <p class="landing-hero__content-subtitle">
                <?php the_field('lp_hero-sub'); ?>
              </p>
              <div class="landing-hero__content-cta">
                <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>" class="btn btn-primary btn--white"
                  >Наши услуги</a
                >
                <a href="<?php echo home_url() . '/contacts'; ?>" class="btn btn-secondary btn--white"
                  ><svg class="btn-msg-ico">
                  <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#prime_message"></use>
                  </svg>
                  Напиши нам</a
                >
              </div>
            </div>
          </section>
          <section class="landing-diff section-offset">
            <div class="landing-diff__content container">
              <h2 class="landing-diff__content-title section-title">
                <?php the_field('lp_diffs-title'); ?>
              </h2>
              <p class="landing-diff__content-text">
                <?php the_field('lp_diffs-sub'); ?>
              </p>
              <a
                href="<?php echo home_url() . '/portfolio'; ?>"
                class="btn-reset advantages-cta case-button"
                >Наши кейсы</a
              >
              <div class="contacts-hero__content-form">
                <div
                  class="main-form black-version"
                  id="landing-diff-form"
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
          <section class="landing-list section-offset brown-gradient-section">
            <div class="landing-list__content container">
              <h2 class="landing-list__content-title section-title">
                <?php the_field('lp_maingoal-title'); ?>
              </h2>
              <p class="landing-list__content-subtitle">
                <?php the_field('lp_maingoal-sub'); ?>
              </p>
              <p class="landing-list__content-subtitle">
                <?php the_field('lp_maingoal-list-title'); ?>
              </p>
              <ol class="landing-list__content-list">
                <?php $lp_items = get_field('lp_maingoal-items');
                  if($lp_items):
                    foreach ($lp_items as $item):
                      $text = $item['text'];
                      ?>
                <li>
                <?php echo esc_html($text); ?>
                </li>
                <?php
                  endforeach;
                else :
                endif;
                ?>
              </ol>
              <p class="landing-list__content-subtitle">
                <?php the_field('lp_maingoal-summary'); ?>
              </p>
              <div
                
                class="google-content__content-form main-form-horizont horiz-white-version"
                id="landing-list-form"
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
              <p class="landing-list__content-subtitle">
                Перейти к списку <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>">всех услуг</a>
              </p>
            </div>
          </section>
          <section class="landing-structure section-offset">
            <div class="landing-structure__content container">
              <h2 class="landing-structure__content-title section-title">
                <?php the_field('lp_struc-title'); ?>
              </h2>
              <p class="landing-structure__content-subtitle">
                <?php the_field('lp_struc-list-item'); ?>
              </p>
              <ol class="landing-structure__list">
                <?php $lp_struc_items = get_field('lp_struc-items');
                  if($lp_struc_items):
                    foreach ($lp_struc_items as $item):
                      $title = $item['title'];
                      $descr = $item['descr'];
                      ?>
                <li class="landing-structure__list-item">
                  <div class="landing-structure__list-block">
                    <p class="landing-structure__list-title">
                      <?php echo esc_html($title); ?>
                    </p>
                    <p class="landing-structure__list-body">
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
            </div>
          </section>
          <section class="landing-variants section-offset">
            <div class="landing-variants__content container">
              <h2 class="landing-variants__content-title">
                <?php the_field('lp_var-title'); ?>
              </h2>
              <div class="landing-variants__cards">
                <?php $lp_var_cards = get_field('lp_vars-items');
                 if($lp_var_cards):
                   foreach ($lp_var_cards as $card):
                     $title = $card['title'];
                     $text = $card['text'];
                     ?>
                <div class="landing-variants__cards-item">
                  <p class="landing-variants__cards-title">
                    <?php echo esc_html($title); ?>
                  </p>
                  <p class="landing-variants__cards-desc">
                 
                    <?php echo esc_html($text); ?>
                  </p>
                  <a href="#variants" class="landing-variants__cards-btn"
                    >Узнать стоимость</a
                  >
                </div>
                <?php
                   endforeach;
                 else :
                 endif;
                 ?>
              </div>
              <?php $lp_summ_items = get_field('lp_summary-items');
                if($lp_summ_items):
                  foreach ($lp_summ_items as $item):
                    $text = $item['text'];
                    ?>
              <p class="landing-variants__content-paragraph">
                <?php echo esc_html($text); ?>
              </p>
              <?php
                  endforeach;
                else :
                endif;
                ?>
            </div>
          </section>
          <section class="landing-order section-offset" id="variants">
            <div class="landing-order__content container">
              <h2 class="landing-order__content-title section-title">
                <?php the_field('lp_order-title'); ?>
              </h2>
              <div
                action="#"
                class="google-content__content-form main-form-horizont horiz-black-version"
                id="landing-order-form"
              >
                <h2 class="main-form-horizont__title">
                  Заполните форму и узнайте стоимость создания лендинга
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
              <?php $lp_order_summary = get_field('lp_order-summary');
                if($lp_order_summary):
                  foreach ($lp_order_summary as $item):
                    $text = $item['text'];
                    ?>
              <p class="landing-order__content-paragraph">
                <?php echo wp_kses_post($text); ?>
              </p>
              <?php
                  endforeach;
                else :
                endif;
                ?>
            </div>
          </section>
        </main>

<?php get_footer('light'); ?>