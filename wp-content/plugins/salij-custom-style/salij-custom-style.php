<?php
/**
 * Plugin Name: salij custom style
 */

defined('ABSPATH') || exit;

define('SALIJ_CUSTOM_STYLE_VIEW', plugin_dir_path(__FILE__) . 'view/');
define( 'SALIJ_CUSTOM_STYLE_IMAGE', plugin_dir_url( __FILE__ ) . 'assets/images/' );

function salij_custom_style_menu_content(): void
{
    include(SALIJ_CUSTOM_STYLE_VIEW . 'custom_style_page.php');
}

function salij_custom_script_menu_content(): void
{
    include(SALIJ_CUSTOM_STYLE_VIEW . 'custom_script_page.php');
}

function salij_custom_style_menu(): void
{
    add_menu_page(
        'استایل سفارشی',
        'استایل سفارشی',
        'read',
        'salij-custom-style',
        'salij_custom_style_menu_content',
//        'dashicons-shortcode',
        'none',
//        SALIJ_CUSTOM_STYLE_IMAGE . 'Theme-icon.png',
        67
    );

    add_submenu_page(
        'salij-custom-style',
        'اسکریپت سفارشی',
        'اسکریپت سفارشی',
        'manage_options',
        'salij-custom-script',
        'salij_custom_script_menu_content',

    );
}

add_action('admin_menu', 'salij_custom_style_menu');

add_action( 'admin_head', function () {
    ?>
    <style type="text/css">
        a.toplevel_page_salij-custom-style .wp-menu-image {
            background: url(http://plugindev.local/wp-content/plugins/salij-custom-style/assets/images/Theme-icon.png) no-repeat center;
            background-size: 70%;
        }
    </style>
    <?php
});























