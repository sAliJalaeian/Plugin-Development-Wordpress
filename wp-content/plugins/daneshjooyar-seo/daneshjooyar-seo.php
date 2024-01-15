<?php
/**
 * Plugin Name: Daneshjooyar Seo
 * Plugin URI: https://daneshjooyar.com/plugins/daneshjooyar-seo
 * Description: اولین <strong>افزونه</strong> من در دوره آموزشی افزونه نویسی <a href="https://wordpress.org">وردپرس</a>
 * Version: 1.0.0
 * Requires at least: 5.1
 * Requires PHP: 7.4
 * Author: Hamed Moodi
 * Author URI: https://daneshjooyar.com/teacher/h_m_mood
 * Licence: GPLv2 or later
 */

/*
This plugin is free seo
Copyright (C) 2023  Hamed Moodi

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

 register_activation_hook( __FILE__, function(){

    $php    = '7.4';
    $wp     = '5.0';

    global $wp_version;

    if( version_compare( $wp_version, $wp, '<' ) ){
        wp_die(
            sprintf( 'You must have atleast wordpress version %s, your current wordpress version is %s', $wp, $wp_version )
        );
    }

    if( version_compare( PHP_VERSION, $php, '<' ) ){
        wp_die(
            sprintf( 'You must have atleast php version %s', $php )
        );
    }

    add_option( 'daneshjooyar_seo_author', 'Hamed Moodi' );

    $logFilePath = plugin_dir_path( __FILE__ ) . 'log.txt';
    file_put_contents( $logFilePath, date('Y-m-d H:i:s') . ': Plugin Activate!' . PHP_EOL, FILE_APPEND );
 } );

 register_deactivation_hook( __FILE__, function(){
    $logFilePath = plugin_dir_path( __FILE__ ) . 'log.txt';
    file_put_contents( $logFilePath, date('Y-m-d H:i:s') . ': Plugin Deactivate!' . PHP_EOL, FILE_APPEND );
 } );
