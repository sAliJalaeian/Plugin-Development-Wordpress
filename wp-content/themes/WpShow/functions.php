<?php
/******************************************************************************
 *----------------------------- define constant
 *****************************************************************************/
define('PATH', get_template_directory());
define('URL', get_template_directory_uri());

/******************************************************************************
 *----------------------------- add object to after setup theme
 *****************************************************************************/
add_action('after_setup_theme', function () {
    // add title tag to all pages
    add_theme_support('title-tag');
    // add navbar menu to WordPress
    register_nav_menus(
        array(
            'Main_Menu' => 'منو اصلی',
            'Footer_one' => 'منو اول فوتر',
            'Footer_two' => 'منو دوم فوتر',
            'Footer_three' => 'منو سوم فوتر',
        ),
    );
});

/******************************************************************************
 *----------------------------- add style sheet and java script
 *****************************************************************************/
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', URL.'./css/bootstrap.css', [], 1.0);
    wp_enqueue_style('font-awesome', URL.'./css/font-awesome.css', [], 1.0);
    wp_enqueue_style('style', URL.'./style.css', [], 1.0);
});


















