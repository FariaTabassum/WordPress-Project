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
define( 'DB_NAME', 'baidudb' );

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
define( 'AUTH_KEY',         'u^kgxA6XKx~.yuK@p0<G&NL(u0Zs3D-wv7C8H?.^,P(.GW8^h01dsNo$/rKA>^L,' );
define( 'SECURE_AUTH_KEY',  '+bGD/FuhsW}i/pt hn;]nS0n=zpYr$;sja>D0D hwDZRz&]>nP[Fp=;J}1>f8.i/' );
define( 'LOGGED_IN_KEY',    '9fr.u^Qw*#{m-6&|5BBX@B#b3(3L13[&CnsLC8)eqisyc3oQY^F1v=d~bj{8KRVn' );
define( 'NONCE_KEY',        '(<NRqk%KzQi;n#T4VogTm^d>w(TNW_x4fUd9RnF#SNVK2&iz9l $=(t}`p3b!c}i' );
define( 'AUTH_SALT',        '+$0d)BHvfVjX;sK:Ak}wgBX}2lyg-9vQ{k)9qfvp<w+v]D+ECwC45fHFHXs6ErRq' );
define( 'SECURE_AUTH_SALT', '`Jv:H2Th,ohuexmUx5BkVczl#T-Gk|-Y!l{>^,|@@2sHLLw$EW.EVa&lHul9iCV=' );
define( 'LOGGED_IN_SALT',   '2Uzfy%~+.;&1#2+0/&Er&L?w/s8|Sq>-IW,!kw}_w,*XaCCJSA3S9R)jNQk1[v1{' );
define( 'NONCE_SALT',       'fWC+SYfzN6>?tvhA#*]6`[X9j{LG?vcYCEOOmU5/Bkib5$Ndlr2}@1Hkr{Vf$.G?' );

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
