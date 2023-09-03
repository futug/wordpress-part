<!DOCTYPE html>
<html lang="ru" class="page">
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="theme-color" content="#111111" />
  <title>Sernero — PR agency</title>
  <link
    rel="preload"
    href="<?php bloginfo('template_url'); ?>/assets/fonts/Montserrat-Regular.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  />
  <link
    rel="preload"
    href="<?php bloginfo('template_url'); ?>/assets/fonts/RubikMonoOne-Regular.woff2"
    as="font"
    type="font/woff2"
    crossorigin
  />

  <?php wp_head(); ?>

</head>

  <body class="page__body">
    <div class="site-container">
      <header class="header">
  <div class="header__inner container">
    <a class="header__logo" href="<?php echo home_url() . '/index'; ?>">
      <img class="header__logo-image" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/sernero_logo.svg" alt="company logo" />
    </a>
    <nav class="header__nav nav" title="Navigation">
    <ul class="list-reset nav__list">
                <li class="nav__item">
                  <a
                    href="<?php echo home_url() . '/o-nas'; ?>"
                    class="nav__list-link"
                    data-link="about"
                    >О нас</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="<?php echo home_url() . '/uslugi-marketingovogo-agenstva'; ?>"
                    class="nav__list-link"
                    data-link="uslugi-marketingovogo-agenstva"
                    >Услуги</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="<?php echo home_url() . '/portfolio'; ?>"
                    class="nav__list-link"
                    data-link="portfolio"
                    >Портфолио</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="<?php echo home_url() . '/blog'; ?>"
                    class="nav__list-link"
                    data-link="blog"
                    >Блог</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="<?php echo home_url() . '/contacts'; ?>"
                    class="nav__list-link"
                    data-link="contacts"
                    >Контакты</a
                  >
                </li>
              </ul>
    </nav>
    <div class="header__burger">
      <span></span>
    </div>
  </div>
</header>