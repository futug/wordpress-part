<?php get_header('dark'); ?>
<?php
/* Template Name: seo */
?>

<main class="main">
          <section class="seo-hero hero-section">
            <picture
              ><source srcset="<?php the_field('seo_hero-bg--webp'); ?>" type="image/webp" />
              <img
                loading="lazy"
                src="<?php the_field('seo_hero-bg'); ?>"
                class="seo-hero__image"
                alt="hero bg"
            /></picture>
            <div class="seo-hero__content container">
              <h1 class="seo-hero__content-title"><?php the_field('seo_hero-title'); ?></h1>
              <p class="seo-hero__content-subtitle">
                <?php the_field('seo_hero-sub'); ?>
              </p>
              <div class="seo-hero__content-cta">
                <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>" class="btn btn-primary btn--green"
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
          <section class="seo-question section-offset">
            <div class="seo-question__content container">
              <h2 class="seo-question__content-title section-title">
                <?php the_field('seo_quest-title'); ?>
              </h2>
              <?php $seo_quest_texts = get_field('seo_quest-descr');
                if($seo_quest_texts):
                  foreach($seo_quest_texts as $seo_quest_text):
                    $text = $seo_quest_text['text'];
              ?>
              <p class="seo-question__content-subtitle">
                <?php echo wp_kses_post($text); ?>
              </p>
              <?php
                  endforeach;
                else :
                endif;
                ?>
            </div>
          </section>
          <section class="seo-result section-offset">
            <div class="seo-result__content container">
              <h2 class="seo-result__content-title section-title">
                <?php the_field('seo_result-title'); ?>
              </h2>
              <div class="seo-result__content-info">
                <div class="seo-result__content-decore"></div>
                <?php $seo_result_texts = get_field('seo_result-descr');
                  if($seo_result_texts):
                    foreach($seo_result_texts as $seo_result_text):
                      $text = $seo_result_text['text'];
                ?>
                <p class="seo-result__content-text">
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
          <section class="seo-list section-offset brown-gradient-section">
            <div class="seo-list__content container">
              <h2 class="seo-list__content-title section-title">
                <?php the_field('seo_steps-title'); ?>
              </h2>
              <div class="seo-list__list">
                <p class="seo-list__list-title">
                  <?php the_field('seo_steps-list-title'); ?>
                </p>
                <ol class="seo-list__list-items">
                  <?php $seo_steps_items = get_field('seo_steps-items');
                    if($seo_steps_items):
                      foreach($seo_steps_items as $seo_steps_item):
                        $bold = $seo_steps_item['bold'];
                        $text = $seo_steps_item['text']; ?>
                  <li>
                    <span><?php echo esc_html($bold); ?></span>
                    <?php echo esc_html($text); ?>
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
          <section class="seo-cta section-offset">
            <div class="seo-cta__content container">
              <h2 class="seo-cta__content-title section-title">
                <?php the_field('seo_why-title'); ?>
              </h2>
              <div class="seo-cta__form">
                <div
                  class="contacts-hero__content-form main-form black-version"
                  id="seo-cta-form"
                >
                  <p class="main-form__title">Запишись на консультацию</p>
                  <p class="main-form__subtitle">
                    Наши менеджеры свяжутся с вами в ближайшее время!
                  </p>
                  <?php echo do_shortcode('[contact-form-7 id="85310ec" title="main-form--black"]'); ?> 
                </div>
                <div class="seo-cta__form-right">
                  <p class="seo-cta__form-text">
                    <?php the_field('seo_why-sub'); ?>
                  </p>
                  <div class="seo-cta__social">
                    <a href="https://t.me/greenfield112" class="seo-cta__social-link"
                      ><svg>
                        <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram-ico"></use>
                      </svg> </a
                    ><a href="https://wa.me/37255551661?text=" class="seo-cta__social-link"
                      ><svg>
                        <use
                          xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp-ico"
                        ></use>
                        </svg></a>
                  </div>
                </div>
              </div>
              <div class="seo-cta__info">
                <?php $seo_why_content = get_field('seo_why-content'); 
                 if($seo_why_content):
                  foreach($seo_why_content as $seo_why_item):
                    $text = $seo_why_item['text']; ?>
                <p class="seo-cta__info-paragraph">
                  <?php echo wp_kses_post($text); ?>
                </p>
                <?php
                  endforeach;
                endif;
                ?>
            </div>
          </section>
        </main>

<?php get_footer('dark'); ?>