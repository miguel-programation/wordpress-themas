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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themas' );

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
define( 'AUTH_KEY',         '-S87,1ims9AbEO3Z.sIG(g#?W]?HHPwg#P26eJ[82`&8Iu>UtLo[wa6N|S0ER4AG' );
define( 'SECURE_AUTH_KEY',  '5AiO2[F){jBCL!I-f(::GL8CLm&6}:QYb77;d.9l-Mk6<yU.^J~F4O*Y3de_cs {' );
define( 'LOGGED_IN_KEY',    'DHsiTW{lFZu5<2IVdoJ9Nt}]cn:TzX;+]w;&3]22-WGL92&XdggpJ@z!_ifs>|%C' );
define( 'NONCE_KEY',        'uuOS]uFA))X0l+Sze|8f}@FOu[)>wqz&XkUa8PC8iko rWRE-Mx5WgN?4X7C<U&6' );
define( 'AUTH_SALT',        'N?2N4T %N/KJsM0eR^FJ*E8XS5vAg5Y!tR75m+pl{4?}RNNCm1?~Ca!E=2>O90]Z' );
define( 'SECURE_AUTH_SALT', 'w`L7Z0.{##WchQ4%Rdnmo{3NbVEQkE#@|^p!zL}8F6<zIhMp5+~Q:|c&fj.2x8QZ' );
define( 'LOGGED_IN_SALT',   '][C,;JV]uV0I+3w*w{fxM32t<+BPBy0.Rpd)!E3k(~~&4M{^zElKe,j{O1]+.C#*' );
define( 'NONCE_SALT',       'F<`jOMAh[T_1*`PwERg6*ez`,8.yKwYFA;S!$qHm2h7vfJP>a>h<hMm!*Z%=phC5' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
