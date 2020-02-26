<?php

// Adds script and stylesheets
function tythetrainer_files(){
    // NAME & LOCATION FOR PARAMETERS
    wp_enqueue_style('tythetrainer_styles', get_stylesheet_uri(), NULL, microtime()); // first parameter name of styleshee & second is the location
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css"); 

}

add_action('wp_enqueue_scripts', 'tythetrainer_files');//add stylesheet

//Adds theme support - ex: title tag
function tythetrainer_features(){
    add_theme_support('post-thumbnails');
    add_theme_support ('title-tag'); // wordpress method
    register_nav_menus( array(
        'primary' => 'Primary Menu', 
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'tythetrainer_features');
?>