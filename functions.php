<?php

add_action( 'wp_enqueue_scripts', function() {

//    wp_enqueue_style( 'font-googleapis', 'https://fonts.googleapis.com' );
//    wp_enqueue_style( 'font-gstatic', 'https://fonts.gstatic.com' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,400;0,600;1,600&display=swap' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );


    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.0.js');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'gsap', get_template_directory_uri() . '/assets/libs/gsap/gsap.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'ScrollSmoother', get_template_directory_uri() . '/assets/libs/gsap/ScrollSmoother.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'ScrollTrigger', get_template_directory_uri() . '/assets/libs/gsap/ScrollTrigger.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), 'null', true );

});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    // WP 5.1 +
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    }
    else {
        $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if( $dosvg ){

        // разрешим
        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext']  = false;
            $data['type'] = false;
        }

    }

    return $data;
}

?>
