<?php 

function goalball_enqueue_assets() {
    
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'goalball_enqueue_assets' );