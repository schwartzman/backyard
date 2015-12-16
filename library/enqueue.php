<?php
namespace backyard;

function enqueue(){
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700|Raleway:400,100,200,300,500,600,700,800,900' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'backyard\enqueue' );

?>
