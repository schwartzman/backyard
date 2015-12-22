<?php
namespace backyard;

function enqueue(){
	wp_enqueue_script( 'jquery-masonry', false, array('jquery'), false, true );
	
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Quattrocento+Sans:400,700|Raleway:300,400,500,600' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'backyard\enqueue' );

?>
