<?php
namespace backyard;


function enqueue(){
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Raleway:400,500,600' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );
}

add_action( 'wp_enqueue_scripts', 'backyard\enqueue' );

?>
