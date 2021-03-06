<?php

// Adds script and stylesheets
function tythetrainer_files(){
    // NAME & LOCATION FOR PARAMETERS
    wp_enqueue_style('tythetrainer_styles', get_stylesheet_uri(), NULL, microtime()); // first parameter name of styleshee & second is the location
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css"); 
    wp_enqueue_script('tythetrainer_scripts_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);

    // Flickity
    wp_enqueue_style('flickity_styles', "https://unpkg.com/flickity@2/dist/flickity.min.css");
    wp_enqueue_script('flickity_scripts', "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js");
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

// Initialize Sidebars
function tythetrainer_sidebars_widgets() {
    
    // About Info
    register_sidebar( array(
        'name' => esc_html('About Page-About Me'),
        'id' => 'sidebar-about',
        'description' => 'Your Story',
        'class' => 'about-info',
        'before_widget' => '<section id="%1$s" class="%2$s tythetrainer-widget"> ',
        'after_widget' => '</section>',
    ));

    // What I Can Do For You Info
    //Personal Training
    register_sidebar( array(
        'name' => esc_html('Services-Personal Training'),
        'id' => 'sidebar-personal-training',
        'description' => 'Your Services You Offer',
        'class' => 'services-personal-training',
        'before_widget' => '<section id="%1$s" class="%2$s tythetrainer-widget"> ',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        
    ));

    // Nutritional Plans
    register_sidebar( array(
        'name' => esc_html('Services-Nutritional Plans'),
        'id' => 'sidebar-nutritional-plans',
        'description' => 'Your Services You Offer',
        'class' => 'services-nutritional-plans',
        'before_widget' => '<section id="%1$s" class="%2$s tythetrainer-widget"> ',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // macro calculator
    register_sidebar( array(
        'name' => esc_html('Services-Macro Calculator'),
        'id' => 'sidebar-macro-calculator',
        'description' => 'Your Services You Offer',
        'class' => 'services-macro-calculator',
        'before_widget' => '<section id="%1$s" class="%2$s tythetrainer-widget"> ',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

}
add_action('widgets_init', 'tythetrainer_sidebars_widgets');




// TESTIMONIALS

function tythetrainer_testimonials(){
    register_post_type('testimonials', array( 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Testimonials', 
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All testimonials',
            'singular_name' => 'Testimonial' 
        ),

        'menu_icon' => 'dashicons-format-quote'
    ));
}

add_action('init', 'tythetrainer_testimonials');

// HOME TRAINING EQUIPMENT

function tythetrainer_equipment(){
    register_post_type('equipment', array( 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Home Equipment', 
            'add_new_item' => 'Add New Equipment',
            'edit_item' => 'Edit Equipment',
            'all_items' => 'All Equipments',
            'singular_name' => 'Equipment' 
        ),

        'menu_icon' => 'dashicons-admin-post'
    ));
}

add_action('init', 'tythetrainer_equipment');




// SUPPLEMENTS

function tythetrainer_supplements(){
    register_post_type('supplements', array( 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Supplements', 
            'add_new_item' => 'Add New Supplement',
            'edit_item' => 'Edit Supplement',
            'all_items' => 'All Supplements',
            'singular_name' => 'supplement' 
        ),

        'menu_icon' => 'dashicons-admin-post'
    ));
}

add_action('init', 'tythetrainer_supplements');


// Books

function tythetrainer_books(){
    register_post_type('books', array( 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Library', 
            'add_new_item' => 'Add New Book',
            'edit_item' => 'Edit Book',
            'all_items' => 'All Books',
            'singular_name' => 'Book' 
        ),

        'menu_icon' => 'dashicons-admin-post'
    ));
}

add_action('init', 'tythetrainer_books');


?>

