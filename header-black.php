<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?> 
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c744376fb1.js"></script>
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"c8821d49dfda29df2614af2be","lid":"1af4e15eaf","uniqueMethods":true}) })</script>
    <script data-ad-client="ca-pub-2871490665352330" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <title><?php bloginfo('title');?></title>
</head>
<body <?php body_class();?>> 


<div class="header-wrapper" id="header-wrapper-black">

    <div class="logo-wrapper">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/ty-logo-black.png'; ?>" class="header-logo"/></a>
    </div>

    <div class="hamburger-container">
    <i class="fas fa-bars"></i> 
    <i class="fas fa-times"></i>
    </div>

    <div class="nav nav-black">
            <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
    </div>
</div>
