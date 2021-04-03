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
define( 'DB_NAME', 'mobileshopdb' );

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
define( 'AUTH_KEY',         '?$)ybmMEG:1x0lV803ge=yRU`LJ{WVFUHrw/1hKcYs>*/hk/[KkP7E4GiP8L{Jxb' );
define( 'SECURE_AUTH_KEY',  'Q|UEW9$[)b_`hDzi)>DGUEkD=|nsN,S#ej^ngIGb0dL>06X_#W?cSX~F]D3s[-n!' );
define( 'LOGGED_IN_KEY',    '%y&fpa(>jh|Y@HD&J%FZYnyLAj+dJQIWWwpHyxm!T.xHb8_*EwLC@$tPmSN$Zh3A' );
define( 'NONCE_KEY',        'g?<QL/{ 0b^VG(bavTM} NI)lV<k006X5l?5S:|G!70OsEBU/%2K$I7rENnda`W$' );
define( 'AUTH_SALT',        'GO:%TYbc;psIF-lcfs9Csj4 EX5?0qL)nbZK%t4>8cQIP-7nDvl^GcSyCD1(%TvZ' );
define( 'SECURE_AUTH_SALT', 'ZFi,aL(acnIu3)G{|OZc>4tSFIac9gtWkvi9[0j|JysyGk -IsGuDRFIBnV?~JyU' );
define( 'LOGGED_IN_SALT',   'rnr@?fcn^YkJSNL#57yhSTDV/MHO|[jTg^X.}1)^*G?Lnub~4UI#Ykprv17,@&h+' );
define( 'NONCE_SALT',       'ZVO% =V=E9q+zL$1p&}<BgTu_2X.Mw=Z@~b{Y,0P3#/-$nwbJ7FB9<*A.MrwMkQk' );

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
