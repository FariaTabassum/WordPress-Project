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
define( 'DB_NAME', 'spdb' );

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
define( 'AUTH_KEY',         'N<l+%,$be}XX~B8|2@c(hDQ?~Rrs9j,^)qRqsaEs9Y}08#P!JH@ (a=`/`ZY2Nv4' );
define( 'SECURE_AUTH_KEY',  '#pgjrlsbCiTV$#+*np];aU$ IF` #m*BO+8G9#ON`$Iu#bUtBlp3>1Kw#b8$z:Tt' );
define( 'LOGGED_IN_KEY',    'E5F}FBYgns]ds4)sKdR,|CQDSD~!!Dj1#c|n*X:ZDW5vE1}WrNqpD;(,`P@T1*zL' );
define( 'NONCE_KEY',        ']riw: qIE!C(zF/,)!%3>>_#=e4WmsjC7KaK/cEl=o*ifH8m X8Ou8;V)*?%&dt~' );
define( 'AUTH_SALT',        '*48AbJDg>!pzK?7vzk4PM?}YKgbgmQ7;:O`|  c9:(N,o& A;m-Hkh7O{cxp/z f' );
define( 'SECURE_AUTH_SALT', 'Iux*Ax^4`r9-a9mE,m<Ig,E>26;g!e-tCPOp9-kY[If,[6(ZudeC0/[[WR ;ERkm' );
define( 'LOGGED_IN_SALT',   'PFZ;C+j4g|aX__^V#]A5Of<C85NN&I!>mWXN8f;x(BJB;mAvEa*2i}kJCVj|~PBC' );
define( 'NONCE_SALT',       '%a uI;nO6*VwWc2DaMn[hO<nmXbjxv^~|hIm<Alha7L]4$uc|vl<qh|D`wM|#u+=' );

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
