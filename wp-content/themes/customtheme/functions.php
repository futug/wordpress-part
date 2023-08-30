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
