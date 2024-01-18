<?php
defined('ABSPATH') || exit;
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
    $menu_suffix = add_menu_page(
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

    /*add_action('load-' . $menu_suffix, function () {
        die('menu loaded');
    });*/

    $submenu_suffix = add_media_page(
//    $submenu_suffix = add_submenu_page(
//        'salij-custom-style',
        'اسکریپت سفارشی',
        'اسکریپت سفارشی',
        'manage_options',
        'salij-custom-script',
        'salij_custom_script_menu_content',
    );

    /*add_action('load-' . $submenu_suffix, function () {
        die('menu loaded');
    });*/
}

add_action('admin_menu', 'salij_custom_style_menu');

add_action('admin_head', function () {
    ?>
    <style type="text/css">
        a.toplevel_page_salij-custom-style .wp-menu-image {
            background: url(http://plugindev.local/wp-content/plugins/salij-custom-style/assets/images/Theme-icon.png) no-repeat center;
            background-size: 70%;
        }
    </style>
    <?php
});

function salij_get_menu_position($slug, $menu): bool|int|string
{
//    var_dump($slug);exit;
    foreach ($menu as $position => $menu_item) {
        if ($menu_item[2] == $slug) {
            return $position;
        }
    }
    return false;
}

function salij_manage_menus(): void
{
    global $menu;
    global $submenu;

    $uploadSub = $submenu['upload.php'];
    $uploadPos = salij_get_menu_position('upload.php', $uploadSub);
    $scriptPos = salij_get_menu_position('salij-custom-script', $uploadSub);
//    var_dump($uploadPos);
//    var_dump($scriptPos); exit;

    if ($uploadPos >= 0 && $scriptPos >= 0) {
        $uploadBackup = $uploadSub[$uploadPos];
        $uploadSub[$uploadPos] = $uploadSub[$scriptPos];
        $uploadSub[$scriptPos] = $uploadBackup;
        $submenu['upload.php'] = $uploadSub;
    }

    $commentPos = salij_get_menu_position('edit-comments.php', $menu);
    $PostPos = salij_get_menu_position('edit.php', $menu);

    if ($commentPos === false || $PostPos === false) {
        return;
    }

    $commentBackup = $menu[$commentPos];
    $menu[$commentPos] = $menu[$PostPos];
    $menu[$PostPos] = $commentBackup;

//    print_r($menu);
}

add_action('admin_menu', 'salij_manage_menus', 999);