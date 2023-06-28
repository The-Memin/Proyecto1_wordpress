<?php
add_action( 'wp_enqueue_scripts', 'add_styles');
add_action( 'wp_enqueue_scripts', 'add_scripts');
function add_styles(){
    wp_enqueue_style('main_style', get_template_directory_uri().'/style.css', '', '', 'all');
}

function add_scripts(){
    wp_enqueue_script('main_script', get_template_directory_uri().'/assets/code/code.js', '', '', 'all');
}


?>