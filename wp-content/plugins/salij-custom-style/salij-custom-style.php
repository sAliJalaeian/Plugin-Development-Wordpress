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

function salij_custom_style_menu(): void
{
    add_menu_page(
        'استایل سفارشی',
        'استایل سفارشی',
        'manage_options',
        'salij_custom_style',
        'salij_custom_style_menu_content',
'none',
//        SALIJ_CUSTOM_STYLE_IMAGE . 'Theme-icon.png',
    );
}

add_action('admin_menu', 'salij_custom_style_menu');

add_action( 'admin_head', function () {
    ?>
    <style type="text/css">
        a.toplevel_page_salij_custom_style .wp-menu-image {
            background: url('<?php echo SALIJ_CUSTOM_STYLE_IMAGE;?>Theme-icon.png');
        }
    </style>
    <?php
});























