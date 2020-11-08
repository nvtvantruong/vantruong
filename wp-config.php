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
define( 'DB_NAME', 'tdnow_vn_vantruong' );

/** MySQL database username */
define( 'DB_USER', 'wp_vantruong' );

/** MySQL database password */
define( 'DB_PASSWORD', '$13vwJl0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '.}iP1LA]?QcW[H<739rrr@>vct&?p csH?XaK@Li03iz]K0B}Y=e,ifgW8$_yaX#' );
define( 'SECURE_AUTH_KEY',  'HmZA02X=svya#W /~?( b)EAYYKyCpz|Sf;2C]YvN EI#gn+cHa53^,7W5@Pk54d' );
define( 'LOGGED_IN_KEY',    'V[XM`=>P_FN(4OoiUychV|la7EfL!/0qS:tjlIQCI)b0+1nDgK S&V$}vosm>gFj' );
define( 'NONCE_KEY',        'y8;j/N=JG#erXeER>ZP<6K<LXGU)30PNS=FQQsacX%{&&B<;Q}QaM`tYhNbmbd~d' );
define( 'AUTH_SALT',        '[;lnEsT_@gx73c90G?-?` tP0[h`MEO{Rspv*<zIj|NMb06$6Q2T*wjR%=f?SX[-' );
define( 'SECURE_AUTH_SALT', 'A<BQ*PX,Qnu=hFc+tH1LO>8OgX&FZ8!SP^jNW;R!`t7-f[Ah 6X#z6;eRl@GE]i@' );
define( 'LOGGED_IN_SALT',   'ca([.W@2`N{eDKT%Mjm&t~nb)tuBC>:tTs?x:[-S#][apyL?~=vp];Yt|?=Xg l7' );
define( 'NONCE_SALT',       'xUmO=JBYm x.O=[]_:>P6Si=FkZWSF0y{hVa Ofy5Go,/`L5K*:qfC5YT54Yr(@U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vt_';

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
