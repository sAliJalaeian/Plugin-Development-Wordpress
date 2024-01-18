<?php
/**
 * Plugin Name: salij custom style
 */

defined('ABSPATH') || exit;

define('SALIJ_CUSTOM_STYLE_ADMIN_PATH', plugin_dir_path(__FILE__) . 'admin/');
define('SALIJ_CUSTOM_STYLE_VIEW', plugin_dir_path(__FILE__) . 'view/');
define('SALIJ_CUSTOM_STYLE_IMAGE', plugin_dir_url(__FILE__) . 'assets/images/');

if (is_admin()) {
    include( SALIJ_CUSTOM_STYLE_ADMIN_PATH . 'menus.php');
}