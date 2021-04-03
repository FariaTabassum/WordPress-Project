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
define( 'DB_NAME', 'tanvirshahriardb' );

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
define( 'AUTH_KEY',         '<R=exM{w2@I/IfjUU&M-f0kx%?AQc69JvJDB4a~sDL;x!#_9&Me9/t[5q4]_,B*;' );
define( 'SECURE_AUTH_KEY',  '4$?vtT{H$X,K6Vc%k L{4z2?/I/uaPWAjeqH`OO6X!F}h#pl_Q.@++tp07p!Nim.' );
define( 'LOGGED_IN_KEY',    '!Air)*:|S9C_6!sr5xQd{,/4](`SdF*L:@/[PXPwFdE?P*)*=3-9OvNa&[+K+u;?' );
define( 'NONCE_KEY',        '&scqa[84;[(m{GX-gv1PT!`PnC85-YQI<aL%nAOPdj^z %(+fO$%[&9wU)Do@9d3' );
define( 'AUTH_SALT',        '``nd(zel`0=nP[`:coLAAb*,tzJ=` wdXJUoD.j<Zd}X?5H+`0$WT9Q9WHbZHh5R' );
define( 'SECURE_AUTH_SALT', '{Oetc6xu!v1DIsYU=V*i%&P}*HSZ0@tQF~f?a&?)][^i^07Fs4ogAcN4]-x9|AB4' );
define( 'LOGGED_IN_SALT',   'to{:|ry6-0C53&P2v%YReZR)XE H}*q~)h]8T$~}d14,^1CJy[2Cqe$rP{nF?N]Y' );
define( 'NONCE_SALT',       '+ F3$6INj6q{GF!7h30i/k7[99RJ!Dk+q+!z=~<(68$wQ~8ncc%}KAa [CNT7i1y' );

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
