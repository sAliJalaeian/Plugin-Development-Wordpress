<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "php" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c>F?PkGxTsF8Ic/s;J0HD1 Epl5:%*X2=5r}w7]**LILMG*`#^(-!a#YrohM1HT@' );
define( 'SECURE_AUTH_KEY',  'L0wvg5VRvu4K,^ov<M@wx21*f>@j!HghK;qg%4cad!7_q?Qb.<@RhEzK4>2+(O&y' );
define( 'LOGGED_IN_KEY',    'W|4N:g6#cB|(o mtjvo|IT+5)FA?]x0bdz 2B3#159,Kh%}[&5 wNn!>zMHb((8n' );
define( 'NONCE_KEY',        '-oe){uhGx6IG)A[H_eZA9lrC$~*gcF9Ud&0bdET$vM:ifCN1bcy])P%pAHU2=$B{' );
define( 'AUTH_SALT',        'c-^+y(`&S~q@re0u_-Lvq|oZ%e{8M)dW+8lZ0EoE)KJ[yF`v`c^gMJnz:>P+aPQV' );
define( 'SECURE_AUTH_SALT', 'jTCYE&U!aN&=&27SgMz}<@%Dg}R`&_+7J!6g-w#yb.H&*e^:_H.ZW_+}njK!O<f*' );
define( 'LOGGED_IN_SALT',   'mMuH0l@VV2A=Z^hXfsJ95eA]z,@@H#jC1qlLqoY7MR8 (/fF*uMBXIr+N#|Mz=vy' );
define( 'NONCE_SALT',       'sU@CPGE({?4#km|!k]5!/$LSVL!Jd}e Hl@}PWCO~G%@`n=;dz10G&/W$`N nk6U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

define( 'SCRIPT_DEBUG', true );

define( 'SAVEQUERIES', true );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_SITEURL', 'http://plugindev.local/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
