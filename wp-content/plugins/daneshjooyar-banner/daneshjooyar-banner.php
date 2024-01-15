<?php
/**
 * Plugin Name: Daneshjooyar Advertise Plugin
 * Description: This plugin show fixed banner in the website
 * Author: Hamed Moodi
 */

 define( 'DANESHJOOYAR_IMAGES_URL', plugin_dir_url( __FILE__ ) . 'assets/images/' );

function daneshjooyar_show_banner(){
    $banner_url     = DANESHJOOYAR_IMAGES_URL . 'asiatech-advertise.gif';
    $banner_link    = 'https://daneshjooyar.com';
    ?>
    <style>
        a.daneshjooyar-banner {
            display: block;
            position: fixed;
            left: 10px;
            bottom: 10px;
            z-index: 9;
            box-shadow: 0 3px 6px #00000030;
        }
    </style>
    <a href="<?php echo $banner_link;?>" class="daneshjooyar-banner" target="_blank">
        <img src="<?php echo $banner_url;?>" alt="Advertise" width="240" height="90">
    </a>
    <?php
}

add_action( 'wp_footer', 'daneshjooyar_show_banner' );