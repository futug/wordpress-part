<?php get_header('light'); ?>
<?php
/* Template Name: audit-reklamnih-kampanij*/
?>

<main class="main">
          <section class="audit-hero hero-section">
            <div class="audit-hero__content container">
              <h1 class="audit-hero__content-title">
                <?php the_field('audit_hero-title'); ?>
              </h1>
              <p class="audit-hero__content-subtitle">
                <?php the_field('audit_hero-descr'); ?>
              </p>
              <div class="audit-hero__content-cta">
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
              <div class="audit-hero__content-form">
                <div
                  class="main-form black-version"
                  id="audit-hero-form"
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
          <section class="audit-quote section-offset">
            <div class="audit-quote__content container">
              <h2 class="audit-quote__title section-title">
                <?php the_field('audit_maingoal-title'); ?>
              </h2>
              <p class="audit-quote__subtitle">
                <?php the_field('audit_maingoal-descr'); ?>
              </p>
            </div>
          </section>
          <section class="audit-need section-offset green-gradient-section">
            <div class="container audit-need__content">
              <h2 class="audit-need__title section-title">
                <?php the_field('audit_need-title'); ?>
              </h2>
              <div class="audit-need__text">
                <ul class="audit-need__text-column">
                  <?php $left_items = get_field('audit_need-items--left');
                    if ($left_items):
                    foreach ($left_items as $item):
                      $descr = $item['descr'];
                  ?>
                  <li class="audit_need__text-item">
                  <?php echo  wp_kses_post($descr); ?>
                  </li>
                  <?php
                      endforeach;
                    else :
                    endif;
                  ?>
                </ul>
                <ul class="audit-need__text-column">
                <?php $right_items = get_field('audit_need-items--right');
                    if ($right_items):
                    foreach ($right_items as $item):
                      $descr = $item['descr'];
                  ?>
                  <li class="audit_need__text-item">
                  <?php echo  wp_kses_post($descr); ?>
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
          <section class="audit-tasks section-offset">
            <div class="container audit-tasks__content">
              <h2 class="audit-tasks__title section-title">
                <?php the_field('audit_tasks-title'); ?>
              </h2>
              <ol class="audit-tasks__list">
                <?php $audit_tasks_list = get_field('audit_tasks-items');
                    if ($audit_tasks_list) :
                    foreach ($audit_tasks_list as $item):
                      $bold = $item['bold'];
                      $text = $item['text'];
                  ?>
                <li class="audit-tasks__item">
                  <span><?php echo esc_html($bold); ?></span> <?php echo esc_html($text); ?>
                </li>
                <?php
                      endforeach;
                    else :
                    endif;
                  ?>
              </ol>
              <p class="audit-tasks__attention attention-message">
                <?php the_field('audit_tasks-attention'); ?>
              </p>
            </div>
          </section>
          <section class="audit-problems section-offset">
            <div class="container audit-problems__content">
              <h2 class="audit-problems__title section-title">
                <?php the_field('audit_problems-title'); ?>
              </h2>
              <div class="audit-problems__list">
                <?php $problems_items = get_field('audit_problems-items');
                  if($problems_items):
                  foreach ($problems_items as $item):
                    $title = $item['title'];
                    $descr = $item['descr'];
                ?>
                <div class="audit-problems__item">
                  <h3 class="audit-problems__item-title">
                    <?php echo esc_html($title); ?>
                  </h3>
                  <p class="audit-problems__item-text">
                    <?php echo esc_html($descr); ?>
                  </p>
                </div>
                <?php
                      endforeach;
                    else :
                    endif;
                  ?>
              </div>
              <div class="audit-problems__bot">
              <?php the_field('audit_problems-summary'); ?>
              </div>
            </div>
          </section>
          <section class="audit-product section-offset">
            <div class="container audit-product__content">
              <h2 class="audit-product__title section-title">
                <?php the_field('audit_product-title'); ?>
              </h2>
              <p class="audit-product__text">
                <?php the_field('audit_product-subtitle'); ?>
              </p>
              <h3 class="audit-product__subtitle">
                <?php the_field('audit_product-list-title'); ?>
              </h3>
              <ol class="audit-product__list">
                <?php $audit_prod_list = get_field('audit_product-list'); 
                  if($audit_prod_list):
                  foreach ($audit_prod_list as $item):
                    $bold = $item['bold'];
                    $text = $item['text'];
                ?>

                    
                <li class="audit-product__item">
                  <span
                    ><?php echo esc_html($bold); ?>
                  </span>
                  <?php echo esc_html($text); ?>
                </li>
                <?php
                      endforeach;
                    else :
                    endif;
                  ?>
              </ol>
              <h3 class="audit-product__subtitle">
                <?php the_field('audit_product-list-title-second'); ?>
              </h3>
              <ol class="audit-product__list">
                <?php $audit_prod_list_second = get_field('audit_product-list-second'); 
                  if($audit_prod_list_second):
                  foreach ($audit_prod_list_second as $item):
                    $text = $item['text'];
                ?>
                <li class="audit-product__item">
                  <?php echo esc_html($text); ?>
                </li>
                <?php
                      endforeach;
                    else :
                    endif;
                  ?>
              </ol>
            </div>
          </section>
          <section class="audit-price section-offset green-gradient-section">
            <div class="audit-price__content container">
              <h2 class="audit-price__title section-title">
                <?php the_field('audit_price-title'); ?>
              </h2>
              <div class="audit-price__main">
                <div class="audit-price__left">
                  <?php $audit_price_subs = get_field('about_price-descr'); 
                    if($audit_price_subs):
                    foreach ($audit_price_subs as $item):
                      $text = $item['text'];
                  ?>
                  <p class="audit-price__text">
                    <?php echo esc_html($text); ?>
                  </p>
                  <?php
                        endforeach;
                      else :
                      endif;
                    ?>
                  <div class="audit-price__socials-bar socials-bar">
                    <a
                      class="socials-bar__item"
                      href="https://t.me/greenfield112"
                      aria-label="Telegram link"
                      target="_blank"
                      ><svg class="socials-bar__ico">
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram-ico"></use>
                      </svg> </a
                    ><a
                      class="socials-bar__item"
                      href="https://wa.me/37255551661?text="
                      aria-label="WhatsApp link"
                      target="_blank"
                      ><svg class="socials-bar__ico">
                        <use
                          xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp-ico"
                        ></use>
                        </svg></a>
                  </div>
                </div>
                <div
               
                  class="audit-price__form main-form light-version"
                  id="audit-price-form"
                >
                  <p class="main-form__title">Запишись на консультацию</p>
                  <p class="main-form__subtitle">
                    Наши менеджеры свяжутся с вами в ближайшее время!
                  </p>
                  <?php echo do_shortcode('[contact-form-7 id="60ba3a1" title="main-form"]'); ?> 
                </div>
              </div>
            </div>
          </section>
          <section class="audit-result section-offset">
            <div class="container audit-result__content">
              <h2 class="audit-result__title section-title">
                <?php the_field('audit_result-title'); ?>
              </h2>
              <div class="audit-result__text">
                <?php $result_texts = get_field('audit_result-descr'); 
                  if($result_texts):
                  foreach ($result_texts as $item):
                    $text = $item['text'];
                ?>
                <p class="audit-result__paragraph">
                  <?php echo wp_kses_post($text); ?>
                </p>
                <?php
                      endforeach;
                    else :
                    endif;
                  ?>
              </div>
            </div>
          </section>
        </main>

<?php get_footer('light'); ?>