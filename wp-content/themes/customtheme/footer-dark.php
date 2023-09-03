<footer class="footer footer_dark">
  <div class="footer__container container">
    <div class="footer__contacts-bar">
      <a href="tel:+3726188161" class="footer__contacts-bar-item">
        <svg class="footer__contacts-bar-ico">
          <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#phone"></use>
        </svg>
        <div class="footer__contacts-bar-content">
          <p class="footer__contacts-bar-top">Позвоните нам</p>
          <p class="footer__contacts-bar-bot">+372 618 81 61</p>
        </div>
      </a>
      <a href="mailto:info@sernero.com" class="footer__contacts-bar-item">
        <svg class="footer__contacts-bar-ico">
          <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#mail"></use>
        </svg>
        <div class="footer__contacts-bar-content">
          <p class="footer__contacts-bar-top">Напишите нам</p>
          <p class="footer__contacts-bar-bot">info@sernero.com</p>
        </div>
      </a>
      <a href="#" class="footer__contacts-bar-item">
        <svg class="footer__contacts-bar-ico">
          <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#clock"></use>
        </svg>
        <div class="footer__contacts-bar-content">
          <p class="footer__contacts-bar-top">Рабочие часы</p>
          <p class="footer__contacts-bar-bot">Пн-Пт 9:00–18:00</p>
        </div>
      </a>
    </div>
    <div class="footer__address">
      <p class="footer__subtitle">наш адрес</p>
      <div class="footer__address-content">
        <svg class="footer__address-ico">
          <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#geo-mark"></use>
        </svg>
        <p class="footer__address-text">
          SERNERO ADVERTISING LTD 42 Lynwood Terrace Newcastle Upon Tyne NE4 6UN
        </p>
      </div>
    </div>
    <div class="footer__service">
      <p class="footer__subtitle">наши услуги</p>
      <ul class="footer__service-list">
        <li class="footer__service-item">
          <a href="<?php echo home_url() . '/nastroika-poiskovoi-reklami-google-ads'; ?>">Реклама в поиске</a>
        </li>
        <li class="footer__service-item">
          <a href="<?php echo home_url() . '/nastroika-reklami-bannerov-v-google'; ?>">Медийная реклама</a>
        </li>
        <li class="footer__service-item">
          <a href="<?php echo home_url() . '/nastroika-youtube-reklami'; ?>">Видеореклама</a>
        </li>
        <li class="footer__service-item">
          <a href="<?php echo home_url() . '/nastroika-google-analytics'; ?>">Веб-аналитика</a>
        </li>
        <li class="footer__service-item">
          <a href="<?php echo home_url() . '/audit-reklamnih-kampanij'; ?>">Аудит</a>
        </li>
        <li class="footer__service-item">
          <a href="<?php echo home_url() . '/sozdanie-landing-stranic'; ?>">Создание лендингов</a>
        </li>
        <li class="footer__service-item">
          <a href="<?php echo home_url() . '/seo-prodvizhenie'; ?>">SEO</a>
        </li>
      </ul>
    </div>
    <div class="footer__contacts">
      <p class="footer__subtitle">контакты</p>
      <div class="footer__contacts-list">
        <a href="tel:+3726188161" class="footer__contacts-item">
          <svg class="footer__contacts-ico">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#phone"></use>
          </svg>
          <p class="footer__contacts-text">+372 618 81 61</p>
        </a>
        <a href="mailto:info@sernero.com" class="footer__contacts-item">
          <svg class="footer__contacts-ico">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#mail"></use>
          </svg>
          <p class="footer__contacts-text">info@sernero.com</p>
        </a>
        <div class="footer__contacts-item">
          <svg class="footer__contacts-ico">
            <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#clock"></use>
          </svg>
          <p class="footer__contacts-text">Пн-Пт 9:00–18:00</p>
        </div>
      </div>
    </div>
    <a href="<?php echo home_url() . '/privacy-policy'; ?>" class="footer__privacy">
      Политика конфиденциальности и условия использования
    </a>
    <div class="footer__socials-bar socials-bar">
      <a
        class="socials-bar__item"
        href="https://t.me/greenfield112"
        aria-label="Telegram link"
        target="_blank"
      >
        <svg class="socials-bar__ico">
          <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram-ico"></use>
        </svg>
      </a>
      <a
        class="socials-bar__item"
        href="https://wa.me/37255551661?text="
        aria-label="WhatsApp link"
        target="_blank"
      >
        <svg class="socials-bar__ico">
          <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp-ico"></use>
        </svg>
      </a>
    </div>
    <p class="footer__copy">© 2023 Sernero.com</p>
  </div>
</footer>

      <div class="preloader">
  <div class="lds-circle"><div></div></div>
</div>
<div class="to-top">
  <svg class="to-top__button-ico">
    <use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#top-button"></use>
  </svg>
</div>

    </div>

    <?php wp_footer(); ?>
  </body>

</html>