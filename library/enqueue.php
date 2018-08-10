<?php
namespace backyard;

function enqueue(){
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Quattrocento+Sans:400,700|Raleway:300,400,500,600' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

    if (is_page('news')) {
		wp_enqueue_script( 'jquery-masonry', false, array('jquery'), false, true );
    }

    if (is_page('cleanses')) {
		wp_enqueue_script( 'accordion-byc', get_template_directory_uri().'/library/js/accordion.js', array('jquery'), false, true );
		wp_enqueue_script( 'smooth-scroll', '//cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js', array(), false, true );
		wp_enqueue_script( 'scroll', get_template_directory_uri().'/library/js/scroll.js', array('smooth-scroll'), false, true );
    }
    wp_dequeue_script( 'devicepx' );
}

add_action( 'wp_enqueue_scripts', 'backyard\enqueue' );
