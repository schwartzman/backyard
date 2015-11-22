<?php
namespace backyard;


function enqueue(){

    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Raleway:400,500,600' );

}

add_action( 'wp_enqueue_scripts', 'backyard\enqueue' );

?>
