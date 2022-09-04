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
define( 'DB_NAME', 'setyourjourney' );

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
define( 'AUTH_KEY',         ':kPF)abs^Lj(=#L%kMkT6d*]h%q]4Oh>|%h4LM~.3ii?ONTm5Sk]tg.@XZxA]L$T' );
define( 'SECURE_AUTH_KEY',  '@T-Iqpppwl/[]FCDtGmcZ6/r~6[WPdVo?Cf%Fib*3aSkG~St-JvLv09aAx;|!la-' );
define( 'LOGGED_IN_KEY',    'd}N+Y}>dm+d:6cWrQr6pAsk9v&3:9aGF<6K =b00<+?mXu ?;&9;{k|3bh7>3V o' );
define( 'NONCE_KEY',        'd>vgKDXWkakU(vqIq;`%S`5,^;,Q4s7L$=d}1rnv.x0F`_h3O7OK1G@&t3Ijf}#%' );
define( 'AUTH_SALT',        'Zk_0cC_x.~}3q`:b*8x!$M.4PQ@J7N>@EuTX3W-*etr8:4mB3iaChfXV$EM~dWub' );
define( 'SECURE_AUTH_SALT', 'N*%Py*?*M$=21Q~Lh d0Bz#eb2wD|J=h!_R! ru*DVD+;pco2 ~!,>c`eqedmM3y' );
define( 'LOGGED_IN_SALT',   '/E-qk)KU?2]!>xYFPE.r9[5!}[`_L1MhHi7<;mjWdgC/ED!V7WH}*gOPF4lMxqF,' );
define( 'NONCE_SALT',       'jh%K)<cFFG}{29?~K<x#j(4j5) CMV7|[M1?F`hGwP}0.FaQuN[|%{P+Lbn1_ L7' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
