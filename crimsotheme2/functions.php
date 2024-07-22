<?php

function enqueue_theme_styles() {    
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.3', 'all' );
    wp_enqueue_style( 'animate-min', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'odometer-min', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), '0.4.8', 'all' );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '2.0.8', 'all' );
    wp_enqueue_style( 'magnific-popup-min', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all' );
    wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/all.min.css', array(), '5.15.4', 'all' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'dark-style', get_template_directory_uri() . '/assets/css/dark.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );


function my_theme_enqueue_scripts() {
       
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), null, true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array('jquery'), null, true);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), null, true);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array('jquery'), null, true);
    wp_enqueue_script('form-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array('jquery'), null, true);
    wp_enqueue_script('contact-form', get_template_directory_uri() . '/assets/js/contact-form-script.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


?>

