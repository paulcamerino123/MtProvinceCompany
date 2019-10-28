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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itec101' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dedpol123' );

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
define( 'AUTH_KEY',         'C+jCV(U=h];;fi(?hl1>B(vD)H;WCd|1gd_wE|bDmEWFW<NHW3/G/~8};ZHKK|SE' );
define( 'SECURE_AUTH_KEY',  'L@9Fw3DGZl%?:K^r2QCs|$nxU1{gn%zT|V2?]1N2~uZtF} v=r]}1PcFU>1@G-}U' );
define( 'LOGGED_IN_KEY',    'zcMaB4E ~sAeHF:~W07&5Zd)2B|5Hz:6rqyTQy0i5huXw^6J&j7w.t~o-Xn[%$K8' );
define( 'NONCE_KEY',        '|7n<[3M@4@NcXADESXJ%%fg*b<h:+khI6..Hz;XfFE[>7krGb1DXa##]u>+Wa]D{' );
define( 'AUTH_SALT',        '%#R@F{ODA*1X@zbP.LhpGkT7b/ljRM^dma*ECB2i0IA;>VkO`9x%uNM9T_qxea.P' );
define( 'SECURE_AUTH_SALT', '<Q$l=C;DZ]}/4?m ISt@8.fCMT3.oIzTU;Y9gj%-H?nOdZ[vgp-y $KbW=#^PPe-' );
define( 'LOGGED_IN_SALT',   'ap.AU}:5UG3T:N@uldyEQ1V@~;&LmH$,H.Xe-E^-iqru44tMKb>TiTYuQ1?GT^gJ' );
define( 'NONCE_SALT',       'CN`+Bp)+mw/@&~$& 2|gUo4u%XPzKy_LfIxT-fiO{pZVZ n(J.FmV@jwdOM~A gM' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
