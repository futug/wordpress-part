<?php get_header('light'); ?>
<?php
/* Template Name: google-analytics */
?>

<main class="main">
          <section class="ga-hero">
            <div class="ga-hero__content container">
              <h1 class="ga-hero__content-title">
                <?php the_field('analytics_hero-title'); ?>
              </h1>
              <p class="ga-hero__content-subtitle">
                <?php the_field('analytics_hero-subtitle'); ?>
              </p>
              <div class="ga-hero__content-cta">
                <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>" class="btn btn-primary btn--black"
                  >Наши услуги</a
                >
                <a href="<?php echo home_url() . '/contacts'; ?>" class="btn btn-secondary btn--black"
                  ><svg class="btn-msg-ico">
                  <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#prime_message"></use>
                  </svg>
                  Напиши нам</a
                >
              </div>
              <p class="ga-hero__content-descr">
                <?php the_field('analytics_hero-descr'); ?>
              </p>
            </div>
          </section>
          <section class="ga-provides section-offset brown-gradient-section">
            <div class="ga-provides__content container">
              <h2 class="ga-provides__title section-title">
                <?php the_field('ga-provides_title'); ?>
              </h2>
              <p class="ga-provides__subtitle">
              <?php the_field('ga-provides_descr'); ?>
              </p>
              <div
                class="ga-provides__form main-form-horizont horiz-white-version"
                id="ga-provides-form"
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
          <section class="ga-adv section-offset">
            <div class="ga-adv__content container">
              <h2 class="ga-adv__title section-title">
               <?php the_field('ga-adv_title'); ?>
              </h2>
              <div class="ga-adv__cards">
                <div class="ga-adv__cards-left">
                <?php $left_cards = get_field('ga-adv_cards-left');
                  if ($left_cards):
                    foreach ($left_cards as $left_card):
                      $descr = $left_card['descr'];
                ?>
                  <div class="ga-adv__card">
                    <?php echo  esc_html($descr); ?>
                  </div>
                <?php
                    endforeach;
                  else :
                  endif;
                ?>
                </div>
                <div class="ga-adv__cards-right">
                <?php $right_cards = get_field('ga-adv_cards-right');
                  if ($right_cards):
                    foreach ($right_cards as $right_card):
                      $descr = $right_card['descr'];
                ?>
                  <div class="ga-adv__card">
                    <?php echo  esc_html($descr); ?>
                  </div>
                <?php
                    endforeach;
                  else :
                  endif;
                ?>
                </div>
              </div>
            </div>
          </section>
          <section class="ga-why section-offset">
            <div class="ga-why__content container">
              <h2 class="ga-why__title section-title">
                <?php the_field('ga-why_title'); ?>
              </h2>
              <ol class="ga-why__list block-list">
                  <?php $ga_why_items = get_field('ga-why_list-items');
                  if ($ga_why_items):
                    foreach ($ga_why_items as $ga_why_item):
                      $title = $ga_why_item['title'];
                      $descr = $ga_why_item['descr']; ?>
                <li class="ga-why__list-item block-list__item">
                  <div class="ga-why__list-block block-list__block">
                    <p class="ga-why__list-title block-list__block-title">
                      <?php echo  esc_html($title); ?>
                    </p>
                    <p class="ga-why__list-body block-list__block-body">
                      <?php echo  esc_html($descr); ?>
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
          <section class="ga-cta section-offset">
            <div class="ga-cta__content container">
              <h2 class="ga-cta__title section-title"><?php the_field('ga-setup_title'); ?></h2>
              <div class="ga-cta__wrapper">
                <ol class="ga-cta__list">
                  <?php $ga_setup_items = get_field('ga-setup_list-items'); 
                  if ($ga_setup_items):
                    foreach ($ga_setup_items as $ga_setup_item): ?>
                  <li class="ga-cta__list-item">
                    <?php echo  esc_html($ga_setup_item['descr']); ?>
                  </li>
                  <?php
                      endforeach;
                    else :
                    endif;
                  ?>
                </ol>
                <div class="ga-cta__form">
                  <div
                   
                    class="main-form black-version"
                    id="ga-cta-form"
                  >
                    <p class="main-form__title">Запишись на консультацию</p>
                    <p class="main-form__subtitle">
                      Наши менеджеры свяжутся с вами в ближайшее время!
                    </p>
                    <?php echo do_shortcode('[contact-form-7 id="85310ec" title="main-form--black"]'); ?> 
                  </div>
                </div>
              </div>
              <p class="ga-cta__summary">
                <?php the_field('ga-setup_summary'); ?>
              </p>
            </div>
          </section>
        </main>

<?php get_footer('dark'); ?>