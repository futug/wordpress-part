<?php get_header( 'light' ); ?>

<?php 
/*Template Name: o-nas */
?>
        <main class="main">
          <section class="about-hero hero-section">
            <div class="about-hero__content container">
              <div class="about-hero__content-top">
                <p class="about-hero__content-text">
                 <?php the_field('Descr'); ?>
                </p>
                <div class="about-hero__content-cta">
                  <a href="<?php echo home_url() . '/portfolio'; ?>" class="btn btn-secondary btn--brown"
                    >Наши кейсы</a
                  >
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
              <p class="about-hero__content-text">
              <?php the_field('descr_second'); ?>
              </p>
              <p class="about-hero__content-text">
              <?php the_field('descr_third'); ?>
              </p>
              <div
                class="about-hero__form main-form-horizont horiz-brown-version"
                id="about-hero__form"
              >
                <h2 class="main-form-horizont__title">
                  Заполните форму и узнайте стоимость продвижения
                </h2>
                <p class="main-form-horizont__subtitle">
                  Наши менеджеры свяжутся с вами в ближайшее время!
                </p>
                <div class="main-form-horizont__form-body">
                <?php echo do_shortcode('[contact-form-7 id="ca0a540" title="main-form-horizont--brown"]'); ?>
                      <!-- <label class="main-form-horizont__label"
                        ><input
                          type="text"
                          name="Имя"
                          class="input-reset name__input main-form-horizont__input"
                          placeholder="Ваше имя"
                      /></label>
                      <label class="main-form-horizont__label"
                        ><input
                          type="tel"
                          name="Телефон"
                          class="input-reset tel__input main-form-horizont__input"
                          placeholder="Ваш телефон"
                      /></label>
                      <label class="main-form-horizont__label"
                        ><input
                          type="text"
                          name="Почта"
                          class="input-reset email__input main-form-horizont__input"
                          placeholder="Ваш e-mail"
                      /></label>
                      <label class="main-form-horizont__label"
                        ><input
                          type="text"
                          name="Сайт"
                          class="input-reset url__input main-form-horizont__input"
                          placeholder="Ваш сайт"
                      /></label>

                  <button class="btn-reset main-form-horizont__button">
                    Отправить
                  </button> -->
                </div>
                <p class="main-form-horizont__privacy-warn">
                  Нажимая кнопку, вы соглашаетесь с
                  <a href="<?php echo home_url() . '/privacy-policy'; ?>">политикой конфиденциальности</a>
                  сайта.
                </p>
              </div>
            </div>
          </section>
          
          <section class="team section-offset">
            <div class="team__content container">
              <h2 class="team__content-title section-title"><?php the_field('second_title'); ?></h2>
              <div class="team__content-list">

              <?php
                $employee_1 = get_field('employee_1');

                if ($employee_1): ?>
                    <div class="team__content-item">
                        <div class="image-wrapper">
                            <picture>
                                <source srcset="<?php echo $employee_1['employee_photo_webp']; ?>" type="image/webp" />
                                <img
                                    loading="lazy"
                                    src="<?php echo $employee_1['employee_photo']; ?>"
                                    class="image team__content-image"
                                    alt="<?php echo $employee_1['alt']; ?>"
                                />
                            </picture>
                        </div>
                        <p class="team__content-item-title"><?php echo $employee_1['employe_name']; ?></p>
                        <p class="team__content-item-subtitle"><?php echo $employee_1['working_sphere']; ?></p>
                    </div>
              <?php endif; ?>
              <?php
                $employee_2 = get_field('employee_2');

                if ($employee_2): ?>
                    <div class="team__content-item">
                        <div class="image-wrapper">
                            <picture>
                                <source srcset="<?php echo $employee_2['employee_photo_webp']; ?>" type="image/webp" />
                                <img
                                    loading="lazy"
                                    src="<?php echo $employee_2['employee_photo']; ?>"
                                    class="image team__content-image"
                                    alt="<?php echo $employee_2['alt']; ?>"
                                />
                            </picture>
                        </div>
                        <p class="team__content-item-title"><?php echo $employee_2['employe_name']; ?></p>
                        <p class="team__content-item-subtitle"><?php echo $employee_2['working_sphere']; ?></p>
                    </div>
              <?php endif; ?>
              <?php
                $employee_3 = get_field('employee_3');

                if ($employee_3): ?>
                    <div class="team__content-item">
                        <div class="image-wrapper">
                            <picture>
                                <source srcset="<?php echo $employee_3['employee_photo_webp']; ?>" type="image/webp" />
                                <img
                                    loading="lazy"
                                    src="<?php echo $employee_3['employee_photo']; ?>"
                                    class="image team__content-image"
                                    alt="<?php echo $employee_3['alt']; ?>"
                                />
                            </picture>
                        </div>
                        <p class="team__content-item-title"><?php echo $employee_3['employe_name']; ?></p>
                        <p class="team__content-item-subtitle"><?php echo $employee_3['working_sphere']; ?></p>
                    </div>
              <?php endif; ?>
              <?php
                $employee_4 = get_field('employee_4');

                if ($employee_4): ?>
                    <div class="team__content-item">
                        <div class="image-wrapper">
                            <picture>
                                <source srcset="<?php echo $employee_4['employee_photo_webp']; ?>" type="image/webp" />
                                <img
                                    loading="lazy"
                                    src="<?php echo $employee_4['employee_photo']; ?>"
                                    class="image team__content-image"
                                    alt="<?php echo $employee_4['alt']; ?>"
                                />
                            </picture>
                        </div>
                        <p class="team__content-item-title"><?php echo $employee_4['employe_name']; ?></p>
                        <p class="team__content-item-subtitle"><?php echo $employee_4['working_sphere']; ?></p>
                    </div>
              <?php endif; ?>
              <?php
                $employee_5 = get_field('employee_5');

                if ($employee_5): ?>
                    <div class="team__content-item">
                        <div class="image-wrapper">
                            <picture>
                                <source srcset="<?php echo $employee_5['employee_photo_webp']; ?>" type="image/webp" />
                                <img
                                    loading="lazy"
                                    src="<?php echo $employee_5['employee_photo']; ?>"
                                    class="image team__content-image"
                                    alt="<?php echo $employee_5['alt']; ?>"
                                />
                            </picture>
                        </div>
                        <p class="team__content-item-title"><?php echo $employee_5['employe_name']; ?></p>
                        <p class="team__content-item-subtitle"><?php echo $employee_5['working_sphere']; ?></p>
                    </div>
              <?php endif; ?>
              <?php
                $employee_6 = get_field('employee_6');

                if ($employee_6): ?>
                    <div class="team__content-item">
                        <div class="image-wrapper">
                            <picture>
                                <source srcset="<?php echo $employee_6['employee_photo_webp']; ?>" type="image/webp" />
                                <img
                                    loading="lazy"
                                    src="<?php echo $employee_6['employee_photo']; ?>"
                                    class="image team__content-image"
                                    alt="<?php echo $employee_6['alt']; ?>"
                                />
                            </picture>
                        </div>
                        <p class="team__content-item-title"><?php echo $employee_6['employe_name']; ?></p>
                        <p class="team__content-item-subtitle"><?php echo $employee_6['working_sphere']; ?></p>
                    </div>
              <?php endif; ?>
              </div>
            </div>
          </section>
          <section
            class="about-represent section-offset brown-gradient-section"
          >
            <div class="about-represent__content container">
              <picture
                ><source
                  srcset="<?php the_field('descr_photo_webp'); ?>"
                  type="image/webp" />
                <img
                  loading="lazy"
                  src="<?php the_field('descr_photo_jpg'); ?>"
                  class="about-represent__content-image"
                  width="294"
                  height="580"
                  alt="working man"
              /></picture>
              <div class="about-represent__content-text">
                <p class="content-text-paragraph">
                <?php the_field('third_screen_descr_first'); ?>
                </p>
                <p class="content-text-paragraph">
                <?php the_field('third_screen_descr_second'); ?>
                </p>
                <p class="content-text-paragraph">
                <?php the_field('third_screen_descr_third'); ?>
                </p>
              </div>
              <picture
                ><source
                  srcset="<?php the_field('descr_photo_mobile_webp'); ?>"
                  type="image/webp" />
                <img
                  loading="lazy"
                  src="<?php the_field('descr_photo_mobile_jpg'); ?>"
                  class="about-represent__content-image-mobile"
                  width="378"
                  height="213"
                  alt="working guy"
              /></picture>
            </div>
          </section>
        </main>
        <?php get_footer( 'dark' ); ?>
