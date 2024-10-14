<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'wo#4HGo$>veHVBuIP}d$#2.F5ZUh[Qj)X&.| `_&JF:X|@Z|?U.D;YO474)kuO~C' );
define( 'SECURE_AUTH_KEY',   'j#1,KkYv?|NXi5x_Ob2Ov?Et=3`/8e2s07P07{T@0cuk@a!i4/X5sV]kiO~L6`vG' );
define( 'LOGGED_IN_KEY',     '}cX5mc{%v`oq/8:CqB;@PciSxk&19m|wqE?4Z`M]a&&, FqbCe6VI+ntgcLR)nO9' );
define( 'NONCE_KEY',         'hNj|HL8QI;8+^>FC>_{l.j44=f6*Smze^>p0R`}g$jIEVO{nn~,FQl/1b)h+:`5}' );
define( 'AUTH_SALT',         'jCudpDj/FJ?C(HFMc^d)Er[MLPR,3!2<-PP2.`J ?][PS>ixRLr{sk$m,.M!gt6+' );
define( 'SECURE_AUTH_SALT',  '$|x0qrQF;kh0xqKJLEQK/WSxk8+>UAC3<<Y~z<U2_6dsU:iof!#|hUMQ Dvtr|,Q' );
define( 'LOGGED_IN_SALT',    'U;`0{9Xq5dBCXSkJ|e5@Svvq9?/GPuhpI8JY)b+Ea6]d]q^.&!Rz|(u|bj5!1BPh' );
define( 'NONCE_SALT',        '1(|6Wo%!tc:UM7_WG~EamY=I1.VOm@e[,#*;EjDGR~>kaEtp^O8;97H!{F{RpGy(' );
define( 'WP_CACHE_KEY_SALT', '6~@7uc%MJpV!cCD|*G* Yo%Yg X(mpLfvUI]m!UT&3fCu,zEl)^Z~F^zRzr>Q=Oy' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
