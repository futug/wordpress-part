<?php get_header( 'dark' ); ?>
<?php 
/*Template Name: google-search */
?>

<main class="main">
          <section class="search-hero hero-section">
            <picture
              ><source srcset="<?php the_field('google_search-bg--webp'); ?>" type="image/webp" />
              <img
                loading="lazy"
                src="<?php the_field('google_search-bg'); ?>"
                class="search-hero__bg"
                alt="hero bg"
            /></picture>
            <div class="search-hero__content container">
              <h1 class="search-hero__content-title">
                <?php the_field('google_search-title'); ?>
              </h1>
              <p class="search-hero__content-subtitle">
              <?php the_field('google_search-descr'); ?>
              </p>
              <div class="search-hero__cta">
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
          <section class="search-how section-offset">
            <div class="search-how__content container">
              <h2 class="search-how__content-title section-title">
                <?php the_field('google_search-how-title'); ?>
              </h2>
              <ol class="search-how__list block-list">
                <?php
                $google_search_items = get_field('google_search-items');

                if ($google_search_items) :
                    foreach ($google_search_items as $item) :
                        $title = $item['google_search-item-title'];
                        $description = $item['google_search-item-descr'];
                ?>
                        <li class="search-how__list-item block-list__item">
                            <div class="search-how__list-block block-list__block">
                                <p class="search-how__list-title block-list__block-title">
                                    <?php echo esc_html($title); ?>
                                </p>
                                <p class="search-how__list-body block-list__block-body">
                                    <?php echo esc_html($description); ?>
                                </p>
                            </div>
                        </li>
                <?php
                    endforeach;
                else:
                endif;
                ?>
              </ol>
              <p class="search-how__attention attention-message">
              <?php the_field('google_search-attention'); ?>
              </p>
              <div
                action="#"
                class="search-how__form main-form-horizont horiz-black-version"
                id="search-how-form"
              >
                <h2 class="main-form-horizont__title">
                  Заполните форму и узнайте стоимость продвижения
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
          <section class="search-advantages section-offset">
            <div class="search-advantages__content container">
              <h2 class="search-advantages__content-title section-title">
                <?php the_field('google_search-adv-title'); ?>
              </h2>
              <div class="search-advantages__cards">
                <div class="search-advantages__cards-wrapper">
                    <?php
                        $advantages_items = get_field('google_search-adv--left');

                        if ($advantages_items) :
  
                            foreach ($advantages_items as $item) :
                                $title = $item['google_search-adv-title'];
                                $description = $item['google_search-adv-descr'];
                        ?>
                                <div class="search-advantages__cards-item">
                                    <p class="search-advantages__cards-title">
                                        <?php echo esc_html($title); ?>
                                    </p>
                                    <p class="search-advantages__cards-body">
                                        <?php echo esc_html($description); ?>
                                    </p>
                                </div>
                        <?php
                            endforeach;
                        else:
                          
                        endif;
                    ?>
                
                   
                </div>
                <div class="search-advantages__cards-wrapper">
                    <?php

                        $advantages_items = get_field('google_search-adv--right');


                        if ($advantages_items) :

                            foreach ($advantages_items as $item) :
                                $title = $item['google_search-adv-title'];
                                $description = $item['google_search-adv-descr'];
                        ?>
                                <div class="search-advantages__cards-item">
                                    <p class="search-advantages__cards-title">
                                        <?php echo esc_html($title); ?>
                                    </p>
                                    <p class="search-advantages__cards-body">
                                        <?php echo esc_html($description); ?>
                                    </p>
                                </div>
                        <?php
                            endforeach;
                        else:
                        endif;
                    ?>
                

                
                </div>
              </div>
              <p class="search-advantages__content-summary">
                <?php the_field('google_search-adv-summary'); ?>
              </p>
            </div>
          </section>
          <section class="search-negatives section-offset">
            <div class="search-negatives__content container">
              <h2 class="search-negatives__content-title section-title">
                <?php the_field('google_search-negatives-title'); ?>
              </h2>
              <p class="search-negatives__subtitle">
                <?php the_field('google_search-negatives-sub'); ?>
              </p>
              <div class="search-negatives__cards">
                        <?php
                $negative_items = get_field('google_search-negatives-cards');
                if ($negative_items) :
                    foreach ($negative_items as $item) :
                        $title = $item['negative_title'];
                        $description = $item['negative_descr'];
                ?>
                        <div class="search-negatives__cards-item">
                            <p class="search-negatives__cards-title">
                                <?php echo esc_html($title); ?>
                            </p>
                            <p class="search-negatives__cards-body">
                                <?php echo esc_html($description); ?>
                            </p>
                        </div>
                <?php
                    endforeach;
                else:
                endif;
                ?>
              </div>
              <p class="search-negatives__attention attention-message">
              <?php the_field('google_search-negatives-attention'); ?>
              </p>
            </div>
          </section>
          <section class="search-reasons brown-gradient-section section-offset">
            <div class="search-reasons__content container">
              <h2 class="search-reasons__content-title section-title">
                <?php the_field('google_search-list-title'); ?>
              </h2>
              <ol class="search-reasons__list list">

                <?php 
                $reasons_list = get_field('google_search-list-items');
                if ($reasons_list) :
                    foreach ($reasons_list as $item) :
                        $bold = $item['google_search-item-boldtext'];
                        $description = $item['google_search-item-text'];
                ?>
                <li class="search-reasons__list-item list-item">
                  <span><?php echo esc_html($bold); ?></span> <?php echo esc_html($description); ?>
                </li>
                <?php
                    endforeach;
                else:
                endif;
                ?>
              </ol>
              <p class="search-reasons__summary">
                <?php the_field('google_search-when-list-summary'); ?>
              </p>
            </div>
          </section>
          <section class="search-setup section-offset">
            <div class="search-setup__content container">
              <h2 class="search-setup__content-title section-title">
                <?php the_field('google_search-setup-title'); ?>
              </h2>
              <p class="search-setup__content-subtitle">
                <?php the_field('google_search-setup-sub'); ?>
              </p>
              <ol class="search-setup__list block-list">

                <?php 
                    $setup_steps = get_field('google_search-setup-list-items'); 

                    if ($setup_steps) :
                        foreach ($setup_steps as $item) :
                            $title = $item['google_search-setup-list-item-title'];
                            $description = $item['google_search-setup-list-item-descr'];
                ?>
                <li class="search-setup__list-item block-list__item">
                  <div class="search-setup__list-block block-list__block">
                    <p class="search-setup__list-title block-list__block-title">
                      <?php echo esc_html($title); ?>
                    </p>
                    <p class="search-setup__list-body block-list__block-body">
                      <?php echo esc_html($description); ?>
                    </p>
                  </div>
                </li>

                <?php
                        endforeach;
                    else:
                    endif;
                ?>
              </ol>
              <div
                action="#"
                class="search-setup__form main-form-horizont horiz-brown-version"
                id="search-setup-form"
              >
                <h2 class="main-form-horizont__title">
                  Заполните форму и узнайте стоимость продвижения
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
          <section class="search-diffs section-offset">
            <div class="search-diffs__content container">
              <h2 class="search-diffs__content-title section-title">
                <span>Отличия</span> поисковой рекламы от <br />медийной
              </h2>
              <p class="search-diffs__content-subtitle">
                Поисковая реклама и медийная реклама представляют разные подходы
                к онлайн-рекламе, которые имеют свои особенности и применение:
              </p>
              <div class="search-diffs__differences">
                <p class="search-diffs__differences-title">поисковая реклама</p>
                <p class="search-diffs__differences-title">Медийная реклама</p>
                <div class="search-diffs__differences-sub main-goal">
                  Основное назначение
                </div>
                <div class="search-diffs__differences-sub targeting">
                  таргетинг
                </div>
                <div class="search-diffs__differences-sub format">
                  Формат объявлений
                </div>
                <div class="search-diffs__differences-sub sales">
                  этап воронки продаж
                </div>
                <div
                  class="search-diffs__differences-sub main-goal-second hidden-sub"
                >
                  Основное назначение
                </div>
                <div
                  class="search-diffs__differences-sub targeting-second hidden-sub"
                >
                  таргетинг
                </div>
                <div
                  class="search-diffs__differences-sub format-second hidden-sub"
                >
                  Формат объявлений
                </div>
                <div
                  class="search-diffs__differences-sub sales-second hidden-sub"
                >
                  этап воронки продаж
                </div>
                <div class="search-diffs__differences-item first">
                  <p>
                    Направлена на привлечение клиентов, которые активно ищут
                    конкретную информацию в поисковых системах. Реклама
                    отображается в результатах поиска по ключевым словам,
                    связанным с запросами пользователей.
                  </p>
                </div>
                <div class="search-diffs__differences-item second">
                  <p>
                    Направлена на широкую аудиторию, которая может не искать
                    конкретную информацию в данный момент. Реклама размещается
                    на различных интернет-площадках, таких как веб-сайты,
                    социальные сети, видеохостинги и т. д.
                  </p>
                </div>
                <div class="search-diffs__differences-item third">
                  <p>
                    Осуществляется путем выбора ключевых слов, которые
                    соответствуют запросам пользователей. Реклама показывается
                    только тем, кто активно ищет информацию, связанную с этими
                    ключевыми словами.
                  </p>
                </div>
                <div class="search-diffs__differences-item fourth">
                  <p>
                    Использует различные методы таргетинга, такие как
                    демографический, интересы, поведение пользователей
                    и контекстное размещение. Реклама может быть показана
                    широкой аудитории, которая соответствует выбранным
                    параметрам.
                  </p>
                </div>
                <div class="search-diffs__differences-item fifth">
                  <p>
                    Объявления обычно состоят из заголовка, описания и ссылки
                    на лендинг. Формат направлен на предоставление информации
                    и решение проблемы пользователя.
                  </p>
                </div>
                <div class="search-diffs__differences-item sixth">
                  <p>
                    Может быть представлена в разнообразных форматах, таких как
                    баннеры, видео, ролики, карусели и другие интерактивные
                    формы рекламы. Форматы подобраны так, чтобы привлечь
                    внимание и запомнить бренд.
                  </p>
                </div>
                <div class="search-diffs__differences-item seventh">
                  <p>
                    Эффективна на ранних этапах воронки продаж, когда
                    пользователь активно ищет информацию и сравнивает
                    предложения. Это помогает привлечь заинтересованных
                    клиентов.
                  </p>
                </div>
                <div class="search-diffs__differences-item eighth">
                  <p>
                    Чаще всего используется на более поздних этапах воронки
                    продаж, когда нужно укрепить бренд и стимулировать повторные
                    визиты и покупки.
                  </p>
                </div>
              </div>
            </div>
          </section>
        </main>

<?php get_footer( 'dark' ); ?>