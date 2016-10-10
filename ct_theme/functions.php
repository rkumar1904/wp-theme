<?php

    require_once('wp_bootstrap_navwalker.php');

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    function register_theme_menus(){
        register_nav_menus(
            array(
                'primary-menu' => _('Primary Menu')
            )
        );
    }

    add_action( 'init', 'register_theme_menus');

    function wpt_theme_styles(){
        wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('owl_theme_css', get_template_directory_uri() . '/css/owl.theme.css');
        wp_enqueue_style('owl.carousel_css', get_template_directory_uri() . '/css/owl.carousel.css');
        wp_enqueue_style('owl.transitions_css', get_template_directory_uri() . '/css/owl.transitions.css');
        wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');

        wp_enqueue_style('lightbox_css', get_template_directory_uri() . '/css/lightbox.css');

        wp_enqueue_style('master_css', get_template_directory_uri() . '/css/master.css');

    }

    add_action('wp_enqueue_scripts', 'wpt_theme_styles');

    function wpt_theme_js(){
        wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '', true);
        wp_enqueue_script('lightbox_js', get_template_directory_uri(). '/js/lightbox.js', array('jquery'), '', true);
        wp_enqueue_script('owl.carousel_js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery'), '', true);
    }
    add_action('wp_enqueue_scripts', 'wpt_theme_js');




 ?>
