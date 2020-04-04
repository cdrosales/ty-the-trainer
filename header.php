<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?> 
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c744376fb1.js"></script>
    <title><?php bloginfo('title');?></title>
</head>
<body <?php body_class();?>> 

<div class="header-wrapper">

    <div class="logo-wrapper">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/ty-logo-white.png'; ?>" class="header-logo"/></a>
    </div>

    <div class="nav">
            <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
        </div>
</div>
