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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ofkdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')26AVU8S#Tr4/oZlIVmO7e*]n(S E3`_b_9[7X+U:KadJ!y`@l:GL^7z{>$~acCS' );
define( 'SECURE_AUTH_KEY',  '_k$t}w-i0}Z@U;LmpVD!y*mfuF)#K. GJL4bQ#=$n:&E(`yF/P9fpTv;=o%hQ+`n' );
define( 'LOGGED_IN_KEY',    'fIq d*B7-Na&kajT^F75!k+U`=K:Eff5/<CZdc|G~e]>0gwF._)we61DFZ*Lg!n4' );
define( 'NONCE_KEY',        '`(6jEB*-1Y|^Q,##eY,?,vt6TWEc`nI;Ek1(y^nLzQ`g].<]yJ!(C:9cQ>|VXtN5' );
define( 'AUTH_SALT',        '[TBl(+N4Z 10c:QU{>~TzD$2)2U3ZyZ_a$:{(B72fyK^v4oH5!BANzxwz{H^h2WY' );
define( 'SECURE_AUTH_SALT', 's*bj-jm5-HRF4Vx59%[rU]dRXv2#xPODAi&,3,&~+wB&owY@IypJsd__!2JyR]-P' );
define( 'LOGGED_IN_SALT',   'n/j*PI7f>`5}.ALl;f;0oGWMhl`a^gT#`z,]N_E>(]SoW#;JEvfL7>lj#:;jA?A%' );
define( 'NONCE_SALT',       '~S/t@F.vSupd3|rUBpT>znd+O5s;7SuQCh[%C3[=pk*UYV72Q![+:|hC=`e(e:k4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
