<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?> 
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c744376fb1.js"></script>
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <title><?php bloginfo('title');?></title>
</head>
<body <?php body_class();?>> 


<div class="header-wrapper" id="header-wrapper-black">

    <div class="logo-wrapper">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/ty-logo-black.png'; ?>" class="header-logo"/></a>
    </div>

    <div class="nav nav-black">
            <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
    </div>
</div>