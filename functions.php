<?php

    function fc_wp_styles(){
        wp_enqueue_style('style_css1', get_stylesheet_directory_uri() . '/assets/style.css');
        wp_enqueue_style('font_mont','https://fonts.googleapis.com/css?family=Montserrat');
        wp_enqueue_style('fonts_jose','https://fonts.googleapis.com/css?family=Josefin+Sans');
    }

    add_action('wp_enqueue_style','fc_wp_styles');
    add_action('wp_enqueue_scripts', 'fc_wp_styles');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

?>