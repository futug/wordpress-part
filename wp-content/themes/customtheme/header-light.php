<!DOCTYPE html>
<html lang="ru" class="page">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
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
  <div class="wrapper">
    <body class="page__body">
      <div class="site-container">
        <header class="header header--light">
          <div class="header__inner container">
            <a class="header__logo" href="index.php"
              ><img
                class="header__logo-image"
                loading="lazy"
                src="<?php bloginfo('template_url'); ?>/assets/img/sernero_dark-logo.svg"
                alt="company logo"
            /></a>
            <nav class="header__nav nav" title="Navigation">
              <ul class="list-reset nav__list">
                <li class="nav__item">
                  <a
                    href="about.html"
                    class="nav__list-link"
                    data-link="about"
                    >О нас</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="services.html"
                    class="nav__list-link"
                    data-link="/services.html"
                    >Услуги</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="portfolio.html"
                    class="nav__list-link"
                    data-link="/porfolio.html"
                    >Портфолио</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="blog.html"
                    class="nav__list-link"
                    data-link="/blog.html"
                    >Блог</a
                  >
                </li>
                <li class="nav__item">
                  <a
                    href="contacts.html"
                    class="nav__list-link"
                    data-link="/contacts.html"
                    >Контакты</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </header>