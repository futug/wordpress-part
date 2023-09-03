<?php 

// function custom_assets() {
//     wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css' );
//     wp_enqueue_style( 'vendorcss', get_template_directory_uri() . '/assets/css/vendor.css' );

//     wp_enqueue_script( 'mainscript', get_template_directory_uri() . '/assets/js/main.js' );
// }

// add_action( 'wp_enqueue_scripts' ,'custom_assets' );

function custom_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_style( 'vendorcss', get_template_directory_uri() . '/assets/css/vendor.css' );

    wp_enqueue_script( 'mainscript', get_template_directory_uri() . '/assets/js/main.js', array(), false, true ); // Последний параметр 'true' добавляет атрибут defer
}

add_action( 'wp_enqueue_scripts' ,'custom_assets' );

// function custom_cf7_form_shortcode($atts) {
//     $atts = shortcode_atts(array(
//         'id' => '',         // ID формы Contact Form 7
//         'class' => '',      // класс(ы) элемента
//     ), $atts);

//     // Генерируем HTML для вывода формы
//     $output = do_shortcode('[contact-form-7 id="' . esc_attr($atts['id']) . '"]');

//     // Добавляем класс(ы), если указаны
//     if (!empty($atts['class'])) {
//         $output = str_replace('<form', '<form class="' . esc_attr($atts['class']) . '"', $output);
//     }

//     return $output;
// }
// add_shortcode('cf7_form', 'custom_cf7_form_shortcode');

