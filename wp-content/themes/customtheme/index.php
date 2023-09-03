<?php get_header('dark'); ?>

<?php
/* Template Name: index */
?>

<main class="main">
  <section class="hero hero-section">
    <picture>
      <source srcset="<?php the_field('hero-bg_webp'); ?>" type="image/webp" />
      <img
        loading="lazy"
        src="<?php the_field('hero-bg_jpg'); ?>"
        class="hero__bg"
        alt="hero-bg"
      />
    </picture>
    <div class="hero__content container">
      <div class="hero__content-text" data-aos="fade-up">
        <h1 class="hero__content-title">
          <?php the_field('hero-title'); ?>
        </h1>
        <p class="hero__content-subtitle">
          <?php the_field('hero-subtitle'); ?>
        </p>
        <div class="hero__content-cta">
          <a href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>" class="btn btn-primary btn--green">
            Наши услуги
          </a>
          <a href="<?php echo home_url() . '/contacts'; ?>" class="btn btn-secondary btn--white">
            <svg class="btn-msg-ico">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#prime_message"></use>
            </svg>
            Напиши нам
          </a>
        </div>
      </div>
      <div class="hero__form main-form green-version" id="hero__form">
        <p class="main-form__title">Запишись на консультацию</p>
        <p class="main-form__subtitle">
          Наши менеджеры свяжутся с вами в ближайшее время!
        </p>
         <?php echo do_shortcode('[contact-form-7 id="60ba3a1" title="main-form"]'); ?> 
      </div>
    </div>
  </section>
  <section class="services section-offset">
    <div class="services__content container">
      <h2 class="services__content-title section-title">
        <?php the_field('adv_title'); ?>
      </h2>
      <div class="services__content-offers">

        <?php $first_offer = get_field('adv_card_1'); 
          if($first_offer):
            $first_offer_title = $first_offer['title'];
            $first_offer_quanity = $first_offer['quanity'];
        ?>
        <a class="services__content-link beauty" href="<?php echo home_url() . '/portfolio'; ?>">
          <p><?php echo $first_offer_title; ?></p>
          <p><?php echo $first_offer_quanity; ?></p>
        </a>
        <?php endif; ?>
        <?php $second_offer = get_field('adv_card_2'); 
          if($second_offer):
            $second_offer_title = $second_offer['title'];
            $second_offer_quanity = $second_offer['quanity'];
        ?>
        <a class="services__content-link clip-link" href="<?php echo home_url() . '/portfolio'; ?>">
          <p><?php echo $second_offer_title; ?></p>
          <p><?php echo $second_offer_quanity; ?></p>
        </a>
        <?php endif; ?>
        <div class="services__content-right-wrapper">
          <div class="buttons">
            <a
              href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>"
              class="btn-reset primary-button services__content-btn light"
            >
              Наши услуги
            </a>
            <a
              href="<?php echo home_url() . '/portfolio'; ?>"
              class="btn-reset case-button services__content-btn"
            >
              Наши кейсы
            </a>
          </div>
          <?php $third_offer = get_field('adv_card_3'); 
          if($third_offer):
            $third_offer_title = $third_offer['title'];
            $third_offer_quanity = $third_offer['quanity']; ?>
          <a class="services__content-link it" href="<?php echo home_url() . '/portfolio'; ?>">
            <p><?php echo $third_offer_title; ?></p>
            <p><?php echo $third_offer_quanity; ?></p>
          </a>
          <?php endif; ?>
        </div>
        <?php $fourth_offer = get_field('adv_card_4'); 
          if($fourth_offer):
            $fourth_offer_title = $fourth_offer['title'];
            $fourth_offer_quanity = $fourth_offer['quanity']; ?>
          <a class="services__content-link emergency" href="<?php echo home_url() . '/portfolio'; ?>">
            <p><?php echo $fourth_offer_title; ?></p>
            <p><?php echo $fourth_offer_quanity; ?></p>
          </a>
        <?php endif; ?>
      </div>
    </div>

    <div class="services-mobile__content container">
      <h2 class="services-mobile__content-title">
        МЫ <span>ЭКСПЕРТЫ</span> В РЕКЛАМЕ ТОВАРОВ И УСЛУГ ИЗ ДАННЫХ ОТРАСЛЕЙ:
      </h2>
      <div class="services-mobile__content-offers">
        <?php $first_offer = get_field('adv_card_1');
          if($first_offer):
            $first_offer_title = $first_offer['title'];
            $first_offer_quanity = $first_offer['quanity']; ?>
        <a class="services-mobile__content-link" href="<?php echo home_url() . '/portfolio'; ?>">
          <p><?php echo $first_offer_title; ?></p>
          <p><?php echo $first_offer_quanity; ?></p>
        </a>
        <?php endif; ?>
        <?php $second_offer = get_field('adv_card_2');
          if($second_offer):
            $second_offer_title = $second_offer['title'];
            $second_offer_quanity = $second_offer['quanity']; ?>
        <a class="services-mobile__content-link" href="<?php echo home_url() . '/portfolio'; ?>">
          <p><?php echo $second_offer_title; ?></p>
          <p><?php echo $second_offer_quanity; ?></p>
        </a>
        <?php endif; ?>
        <?php $fourth_offer = get_field('adv_card_4');
          if($fourth_offer):
            $fourth_offer_title = $fourth_offer['title'];
            $fourth_offer_quanity = $fourth_offer['quanity']; ?>
            <a class="services-mobile__content-link" href="<?php echo home_url() . '/portfolio'; ?>">
              <p><?php echo $fourth_offer_title; ?></p>
              <p><?php echo $fourth_offer_quanity; ?></p>
            </a>
          <?php endif; ?>
        <div class="wrapper">
          <div class="buttons">
            <a
              href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>"
              class="btn-reset primary-button services-mobile__content-btn light"
            >
              Наши услуги
            </a>
            <a
              href="<?php echo home_url() . '/portfolio'; ?>"
              class="btn-reset case-button services-mobile__content-btn"
            >
              Наши кейсы
            </a>
          </div>
          <?php $third_offer = get_field('adv_card_3');
          if($third_offer):
            $third_offer_title = $third_offer['title'];
            $third_offer_quanity = $third_offer['quanity']; ?>
            <a class="services-mobile__content-clip-link" href="<?php echo home_url() . '/portfolio'; ?>">
              <p><?php echo $third_offer_title; ?></p>
              <p><?php echo $third_offer_quanity; ?></p>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="advantages section-offset">
    <div class="container">
      <h2 class="advantages-title section-title">
        <?php the_field('why_we-title'); ?>
      </h2>
      <div class="advantages__list">
        <ol>
          <?php $why_items = get_field('why_we-items');
            if($why_items):
              foreach ($why_items as $item):
                $bold = $item['bold'];
                $text = $item['text'];  ?>
          <li class="advantages__list-item">
            <span><?php echo esc_html($bold); ?></span> <?php echo esc_html($text); ?>
          </li>
          <?php endforeach; endif; ?>
        </ol>
      </div>
      <a href="<?php echo home_url() . '/portfolio'; ?>" class="btn-reset advantages-cta case-button">
        Наши кейсы
      </a>
      <picture>
        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/home-decore.webp" type="image/webp" />
        <img
          loading="lazy"
          src="<?php bloginfo('template_url'); ?>/assets/img/home-decore.png"
          class="image"
          width="373px"
          height="361px"
          alt="decorepic"
        />
      </picture>
    </div>
  </section>

  <section class="offer section-offset brown-gradient-section">
    <div class="offer-content container">
      <div class="offer-content__title-group">
        <h2 class="title-group__title section-title">
          <?php the_field('offer-title'); ?>
        </h2>
        <p class="title-group__subtitle">
          <?php the_field('offer-descr'); ?>
        </p>
      </div>
      <div
        class="google-content__content-form home-horiz-form main-form-horizont horiz-white-version"
        id="offer-form"
      >
        <h2 class="main-form-horizont__title">
          Заполните форму и узнайте стоимость продвижения
        </h2>
        <p class="main-form-horizont__subtitle">
          Наши менеджеры свяжутся с вами в ближайшее время!
        </p>
        <div class="main-form-horizont__form-body">

        <?php echo do_shortcode('[contact-form-7 id="949e3d2" title="main-form-horizont"]'); ?>
        </div>
        <p class="main-form-horizont__privacy-warn">
          Нажимая кнопку, вы соглашаетесь с
          <a href="<?php echo home_url() . '/privacy-policy'; ?>">политикой конфиденциальности</a> сайта.
        </p>
      </div>
    </div>
  </section>

  <section class="team section-offset">
    <div class="team__content container">
      <h2 class="team__content-title section-title">
        <?php the_field('team-title'); ?>
      </h2>
      <div class="team__content-list">
        <?php $employee = get_field('employee'); 
          if($employee):
          foreach ($employee as $item):
            $jpg_photo = $item['photo-jpg'];
            $webp_photo = $item['photo-webp']; ?>
        <div class="team__content-item">
          <div class="image-wrapper">
            <picture>
              <source srcset="<?php echo $webp_photo; ?>" type="image/webp" />
              <img
                loading="lazy"
                src="<?php echo $jpg_photo; ?>"
                class="image team__content-image"
                alt="Юрий, Google Ads, GA4, GTM"
              />
            </picture>
          </div>
          <?php $employee_descr = $item['descr'];
           if($employee_descr):
            foreach ($employee_descr as $item):
              $name = $item['name'];
              $skills = $item['skills']; ?>
          <p class="team__content-item-title"><?php echo esc_html($name); ?></p>
          <p class="team__content-item-subtitle"><?php echo esc_html($skills); ?></p>
          <?php endforeach; endif; ?>
        </div>
        <?php
              endforeach;
            else :
            endif;
          ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer('dark'); ?>
