<?php get_header( 'dark' ); ?>
<?php 
/*Template Name: services */
?>
<main class="main">
 <section class="services-hero hero-section">
  <picture>
    <source srcset="<?php the_field('services__hero-bg--webp'); ?>" type="image/webp" />
    <img
      loading="lazy"
      src="<?php the_field('services__hero-bg--jpeg'); ?>"
      alt="hero-bg"
      class="services-hero__image"
    />
  </picture>
  <div class="services-hero__content container">
    <p class="services-hero__content-text">
    <?php the_field('services__hero-descr'); ?>
    </p>
    <img
      loading="lazy"
      src="<?php bloginfo('template_url'); ?>/assets/img/servicesHeroImage.svg"
      class="services-hero__content-image"
      alt="services ico"
    />
  </div>
</section>
<section class="services-list section-offset">
  <div class="services-list__content container">
    <h1 class="services-list__content-title">
      <?php the_field('services_list-title'); ?>
    </h1>
    <div class="services-list__content-list">
    <?php
        $services_item_1 = get_field('services_item_1');
         if ($services_item_1): ?>
            <div class="services-list__content-item item">
                        <img
                        loading="lazy"
                        src="<?php bloginfo('template_url'); ?>/assets/img/1.svg"
                        class="item__image"
                        width="122"
                        height="122"
                        alt="services icon"
                        />
                        <p class="item__title"><?php echo $services_item_1['services_item-title']; ?></p>
                        <p class="item__desc"><?php echo $services_item_1['services_item-descr']; ?></p>
                        <a
                        href="google-search-ads.html"
                        class="btn-reset services-button item__button"
                        >
                        Подробнее
                        </a>
                    </div>     
    <?php endif; ?>
    <?php
        $services_item_2 = get_field('services_item_2');
         if ($services_item_2): ?>
            <div class="services-list__content-item item">
                        <img
                        loading="lazy"
                        src="<?php bloginfo('template_url'); ?>/assets/img/2.svg"
                        class="item__image"
                        width="122"
                        height="122"
                        alt="services icon"
                        />
                        <p class="item__title"><?php echo $services_item_2['services_item-title']; ?></p>
                        <p class="item__desc"><?php echo $services_item_2['services_item-descr']; ?></p>
                        <a
                        href="google-search-ads.html"
                        class="btn-reset services-button item__button"
                        >
                        Подробнее
                        </a>
                    </div>     
    <?php endif; ?>
    <?php
        $services_item_3 = get_field('services_item_3');
         if ($services_item_3): ?>
            <div class="services-list__content-item item">
                        <img
                        loading="lazy"
                        src="<?php bloginfo('template_url'); ?>/assets/img/3.svg"
                        class="item__image"
                        width="122"
                        height="122"
                        alt="services icon"
                        />
                        <p class="item__title"><?php echo $services_item_3['services_item-title']; ?></p>
                        <p class="item__desc"><?php echo $services_item_3['services_item-descr']; ?></p>
                        <a
                        href="google-search-ads.html"
                        class="btn-reset services-button item__button"
                        >
                        Подробнее
                        </a>
                    </div>     
    <?php endif; ?>
    <?php
        $services_item_4 = get_field('services_item_4');
         if ($services_item_4): ?>
            <div class="services-list__content-item item">
                        <img
                        loading="lazy"
                        src="<?php bloginfo('template_url'); ?>/assets/img/4.svg"
                        class="item__image"
                        width="122"
                        height="122"
                        alt="services icon"
                        />
                        <p class="item__title"><?php echo $services_item_4['services_item-title']; ?></p>
                        <p class="item__desc"><?php echo $services_item_4['services_item-descr']; ?></p>
                        <a
                        href="google-search-ads.html"
                        class="btn-reset services-button item__button"
                        >
                        Подробнее
                        </a>
                    </div>     
    <?php endif; ?>
    <?php
        $services_item_5 = get_field('services_item_5');
         if ($services_item_5): ?>
            <div class="services-list__content-item item">
                        <img
                        loading="lazy"
                        src="<?php bloginfo('template_url'); ?>/assets/img/5.svg"
                        class="item__image"
                        width="122"
                        height="122"
                        alt="services icon"
                        />
                        <p class="item__title"><?php echo $services_item_5['services_item-title']; ?></p>
                        <p class="item__desc"><?php echo $services_item_5['services_item-descr']; ?></p>
                        <a
                        href="google-search-ads.html"
                        class="btn-reset services-button item__button"
                        >
                        Подробнее
                        </a>
                    </div>     
    <?php endif; ?>
    <?php
        $services_item_6 = get_field('services_item_6');
         if ($services_item_6): ?>
            <div class="services-list__content-item item">
                        <img
                        loading="lazy"
                        src="<?php bloginfo('template_url'); ?>/assets/img/6.svg"
                        class="item__image"
                        width="122"
                        height="122"
                        alt="services icon"
                        />
                        <p class="item__title"><?php echo $services_item_6['services_item-title']; ?></p>
                        <p class="item__desc"><?php echo $services_item_6['services_item-descr']; ?></p>
                        <a
                        href="google-search-ads.html"
                        class="btn-reset services-button item__button"
                        >
                        Подробнее
                        </a>
                    </div>     
    <?php endif; ?>
    <?php
        $services_item_7 = get_field('services_item_7');
         if ($services_item_7): ?>
            <div class="services-list__content-item item">
                        <img
                        loading="lazy"
                        src="<?php bloginfo('template_url'); ?>/assets/img/7.svg"
                        class="item__image"
                        width="122"
                        height="122"
                        alt="services icon"
                        />
                        <p class="item__title"><?php echo $services_item_7['services_item-title']; ?></p>
                        <p class="item__desc"><?php echo $services_item_7['services_item-descr']; ?></p>
                        <a
                        href="google-search-ads.html"
                        class="btn-reset services-button item__button"
                        >
                        Подробнее
                        </a>
                    </div>     
    <?php endif; ?>
    </div>
  </div>
</section>
<section class="services-cta section-offset green-gradient-section">
  <div class="services-cta__content container">
    <div class="title-group">
      <h2 class="title-group__title section-title">
        <?php the_field('services_cta-title'); ?>
      </h2>
      <p class="title-group__subtitle">
      <?php the_field('services_cta-subtitle'); ?>
      </p>
    </div>
    <form
      action="#"
      class="google-content__content-form main-form-horizont horiz-white-version"
      id="services-cta-form"
    >
      <h2 class="main-form-horizont__title">
        Заполните форму и узнайте стоимость продвижения
      </h2>
      <p class="main-form-horizont__subtitle">
        Наши менеджеры свяжутся с вами в ближайшее время!
      </p>
      <div class="main-form-horizont__form-body">
        <div class="main-form-horizont__inputs">
          <div class="main-form-horizont__inputs-top">
            <label class="main-form-horizont__label">
              <input
                type="text"
                name="Имя"
                class="input-reset name__input main-form-horizont__input"
                placeholder="Ваше имя"
              />
            </label>
            <label class="main-form-horizont__label">
              <input
                type="tel"
                name="Телефон"
                class="input-reset tel__input main-form-horizont__input"
                placeholder="Ваш телефон"
              />
            </label>
            <label class="main-form-horizont__label">
              <input
                type="email"
                name="Почта"
                class="input-reset email__input main-form-horizont__input"
                placeholder="Ваш e-mail"
              />
            </label>
            <div class="main-form-horizont__select">
              <select class="input-reset main-form-horizont__input">
                <option value="search-advertisement">Реклама в поиске</option>
                <option value="media-advertisement">Медийная реклама</option>
                <option value="video-advertisement">Видеореклама</option>
                <option value="web-analytics">Веб-аналитика</option>
                <option value="audit">Аудит</option>
                <option value="landings-creation">Создание лендингов</option>
                <option value="seo">SEO</option>
              </select>
              <svg class="downarrow">
                <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#coolicon"></use>
              </svg>
            </div>
          </div>
          <label class="main-form-horizont__label">
            <input
              type="text"
              name="Сайт"
              class="input-reset url__input main-form-horizont__input"
              placeholder="Ваш сайт"
            />
          </label>
        </div>
        <button class="btn-reset main-form-horizont__button">Отправить</button>
      </div>
      <p class="main-form-horizont__privacy-warn">
        Нажимая кнопку, вы соглашаетесь с
        <a href="privat-policy.html">политикой конфиденциальности</a> сайта.
      </p>
    </form>
  </div>
</section>

        </main>

        <?php get_footer( 'dark' ); ?>