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
define( 'DB_NAME', 'asmaa ahmed' );

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
define( 'AUTH_KEY',         '`US,3C3yZT.pv?GD~bE,*yd#>(3C+%5@ICz,P3iI,[4;Ql+-Ak((,)WKP~esV{j4' );
define( 'SECURE_AUTH_KEY',  'a*~<U`3w+HNY/Xs5Y%B9$b/u0)_y+:L)PqPy-O4{zl9duLUc)EwEy>0?T%.box/G' );
define( 'LOGGED_IN_KEY',    '6;A4m!1Pa72+EQ10>1Pd$vXW0}S+-G$KZ64a15z]UYTZY QTCsnff{ok8G&xtF$f' );
define( 'NONCE_KEY',        'y`jm3e&Ff:]239(.NSV~4F1K/xBLV*^]xP]A*xd4a$4]G<axT,EwME^B=V)ya?v)' );
define( 'AUTH_SALT',        ' ZK,b.[0W%~w1w(Qh]8O}z|/nmSd1u_hW_hAb%U-ai,yd<GV9*q#kh9wS5(0MXos' );
define( 'SECURE_AUTH_SALT', 'Kf(%CXOaxd745B1rz:oVu%AdFJsqb`-(JG6+<k{BxUr.r.b!AW*%XMy_yJfqc_eH' );
define( 'LOGGED_IN_SALT',   'MjTMW_t(~ML6)T9K|V%fEBEPXp{-lKGwbX@,+:]@}+ql`9W)*M6M6%4p3x0w:nIR' );
define( 'NONCE_SALT',       'U yeje@4zVbYx;YCZQ9Iyl[o-L,+`(j=!-#NN|*-b[S0u2Pt,:B:TX9jdA.<6N/A' );

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
