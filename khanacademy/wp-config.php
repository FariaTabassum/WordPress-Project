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
define( 'DB_NAME', 'khanacademydb' );

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
define( 'AUTH_KEY',         'r<v.Hh#o?<OSRm(4=[89uih2SWGb;$+FyI.<*qE>yD~AFq,6B,IBI,@~9a&i4-v`' );
define( 'SECURE_AUTH_KEY',  'hf X3B6Vuy.ts}AK2X4rA7;|*zjZ@HFJi6D#Vq5)W-9f^D-_w9QhhW0id-Q#SK2F' );
define( 'LOGGED_IN_KEY',    'Su?&J`^+$~|ue} m<CF/Fcd*0=?s&:*f)*j#|AL2@C*%*n=25lF^n}3&tVT+d1d8' );
define( 'NONCE_KEY',        'fkZxe`fqf^h,ya@^Z;OJ4F$kNGGPs9i}}S}OG%#[>4Hk-U5yWNd_l[UDp]Zw[||[' );
define( 'AUTH_SALT',        '9_68x&F._]SSw*=}P/i1mL**N(Xr2GDmvj9MEX]Ln$npfpys|rL*b5/8/?(nko{;' );
define( 'SECURE_AUTH_SALT', 'Pv|ak9vq:K{rk_~hxM[Wko3eMl=$:+ZI3N/+z0@lPxx{LKaI1;T=+b~G25jo|/Ec' );
define( 'LOGGED_IN_SALT',   'xQ!RaeaXmO&`B}8<K6*<Jk0zWE8jL;e5?ac(Zc*%C7+n9R*BR*H|N[N {E2R2{1l' );
define( 'NONCE_SALT',       ' qG{M!>8Hc2N}kp!xPKz:xa[0E2/kD;/CPo3mqq+wUtx1E K0M&_?:wsk*){.$46' );

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
