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
define( 'DB_NAME', 'wdpf60_wp2' );

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
define( 'AUTH_KEY',         '+bMQ*H,yPd^ XURTB6Fb`]W8KqYcBab3Ue8&g{XEJ[T[NTi;J6 ,(Fke%|}Wd_m?' );
define( 'SECURE_AUTH_KEY',  'n}IH3!e$?hfoTye@}{:*Jp(ZyR8Tb$cbkOY/+Rc6a|syWC=5EV&i{-7{YfC)Lh%+' );
define( 'LOGGED_IN_KEY',    'd|ScFUS;iM!iX7u3UO6`^EV$l2,c4XteI`GZuL?+A|6o+sdCLk^FcQr8o`&=ccxZ' );
define( 'NONCE_KEY',        'v9!y[}Z$+]DC/~lWZgd`F8bd;)CL{O|p[.ifqv5d8}[Q}OZE/`Im-V@3ItoyR!dl' );
define( 'AUTH_SALT',        '5<soLcpet?nW} iA<<)<dSvqtH13nXi>Brp8KdQs9aQl@]Wd`EQj8S9`pRdU4t*y' );
define( 'SECURE_AUTH_SALT', '{1$U|/~T)Wpl[M_j-s$c$G=zxhCap;>*!3e&%}D@_V*{RyB5>~LO*xg|A^!*)U(2' );
define( 'LOGGED_IN_SALT',   'h4TbU88U1Q5UF`!k6KW*QW8ja6HgGZkx #umL9ItGwSN8j9<+z<T;(=DeX:{XCQw' );
define( 'NONCE_SALT',       'X8MuY`UUkS.jxk!%0tQWd?s&l/@9mY(I5`=G^4/S:OWso3IW)a)lqZwl{CG!5X7F' );

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
