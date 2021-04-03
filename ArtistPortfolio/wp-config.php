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
define( 'DB_NAME', 'artistportdb' );

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
define( 'AUTH_KEY',         '1!$;[b4:KB.+puFjtlUwhLbt_qh)gr<mXjpN{M|sXJF{t1^#[_43NA Y+x3-L(>M' );
define( 'SECURE_AUTH_KEY',  '$JLyIIiLlv`.Rs27.4T]@ig0G@#g6No0x3^XA/].MBsTVYT3!IV+)r5c~JDSo&e:' );
define( 'LOGGED_IN_KEY',    'R0v)O3ym$)SZ~>[`;.NIbqns@oxeOk^64JV9_ceH$mA]=QTP4(_r,j@OA[O~W#~W' );
define( 'NONCE_KEY',        '{NdEynkn}X`1/*{!HyF9`7E3KeL*d-.wlp-4c+h< j8:2Zpxrl|-kJ(kJ.=Hp.u~' );
define( 'AUTH_SALT',        'Y}EwMLT%8#~|*g;.W{DkP47=%ZFAR$&Ln4:-+Gz3|=<q&2eTq]u>$URjm{PWQR&o' );
define( 'SECURE_AUTH_SALT', 'dmV|KD`)O5+sbMySe>[&{aOfr}WtE.%FBJuWpb[[z-@(30VaG5Ilt`6q1?EYC-l;' );
define( 'LOGGED_IN_SALT',   'AAj(9*ii&6=em-ND4]bSa,#G*YtBxXa5sTb)1>7y.am-jepX*E^T@GD5(9917*wm' );
define( 'NONCE_SALT',       ',K%4JmN#G3P$S#6=m~28VGv0d5){p4P#O1s@`P*Eh9B&u:zje%*-gCgWOeyR!I_t' );

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
