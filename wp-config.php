<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'casaqenqo');

/** MySQL database username */
define('DB_USER', 'Matt');

/** MySQL database password */
define('DB_PASSWORD', 'Lawford1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@-3W42JAvAG<hH|nRT|Zzf.=Qh^78*mT+KR,3B|Vp-{MZwcv$~g(fwONDF.%h>G2');
define('SECURE_AUTH_KEY',  'TcpM?<E}66yxHmFN.[kSkeEetlZoZG[<S6Hak#-` pxD-wRvO7Ss_v2u+]G17P1V');
define('LOGGED_IN_KEY',    ']>#-,&mj@9P+v}A>1QTv2`m]D( 2W`5j6{.JXHeIw912B[.*HL5?-ntqj<T@n6,B');
define('NONCE_KEY',        'q8x5<T&&ZM]slAm&qi+_0xmYKlU Yfj[{O9{KZSISw1Ovn@-:leks3S|r,[2K-dC');
define('AUTH_SALT',        'LsmDNBvEV;&%0.BEQB4l$@IJ@qLs]gdEifpN&yJ1P&f~oB-6@p-CknmB2noYL :~');
define('SECURE_AUTH_SALT', 's_)<!~^D4I5Qe}Vsv2B268$b7r=GGvq5AJ}0V)]_8lqjH7Bv}sLehLdnpsrLVYvh');
define('LOGGED_IN_SALT',   'YR|!VFt`J%f^7z{Rt]F^f%Pz;b]4XM@!d:8E6#Z!R9YHzy@0!r2fEQZ]0!uv^6 8');
define('NONCE_SALT',       'hQd wys/iRj1ygctV#!CEY;~^x 9a>pJt K2dlL%X6wC`*gWH&hNAAR(*c!)if7C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
