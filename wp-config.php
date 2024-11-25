<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rahulrajputt.github.io' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'SC+sl!?ad}+]=$gkT-U _u,u]f%68Y[ej:$=jUe&t|^h~#zV?RclSiMRS=FjMnW8' );
define( 'SECURE_AUTH_KEY',  '.VAwh0sav,HZijlQ,4&OdGHMZ/K]WqJ^|n)/>j#P&wAA[RjNCEyyMna5|}5nkFGr' );
define( 'LOGGED_IN_KEY',    'SuoT~?zm#Fy~+Fw.`>9&Z`/9bWu~~Wm@*Y?OV@d5R*31`V$W_@i,*rD.R1][4Cu0' );
define( 'NONCE_KEY',        'WUymS(26/U`E&V^Vk5,i;jp{7y 9G h~+meD$H;3*6vun%lue.TUh8Q#!d<0k#CF' );
define( 'AUTH_SALT',        'M(7@.@T21b)-j{pT{(3[|U87hdDCoqM6=m<mQbbMv+/hu`Q%2yWk<Q%UZ#2-) @W' );
define( 'SECURE_AUTH_SALT', '+?w0Ayoq2y$aD@2:A5+]1|De.UbNZz%kW`*00p8lp4.g:u4[X5Lit_*9XH)mgL;*' );
define( 'LOGGED_IN_SALT',   '_X$1%YH)6e5NflX;ob;c5nOD6QfeotEQ(GgceS7{7%eL-mN)/}y]mr6p[wK(OFi,' );
define( 'NONCE_SALT',       '$rJ7#c;z%NpDMvQ>F1KhVhyPe-~ZT{{-,ad_ey/~fuX{U!Ee#Xb7MQ@rI/_g-f}V' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
