<?php get_header( 'light' ); ?>
<?php 
/*Template Name: contacts */
?>

<main class="main">
          <section class="contacts-hero hero-section">
            <div class="contacts-hero__content container">
              <h1 class="contacts-hero__content-title"><?php the_field('contacts_title'); ?></h1>
              <p class="contacts-hero__content-subtitle">
              <?php the_field('contacts_descr'); ?>
              </p>
              <div class="contacts-hero__content-cta">
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
              <div class="contacts-hero__content-form">
                <div
                  class="main-form black-version"
                  id="contacts-hero-form"
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
        </main>

<?php get_footer( 'dark' ); ?>