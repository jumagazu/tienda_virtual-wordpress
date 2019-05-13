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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carolinaspa_wc' );

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
define( 'AUTH_KEY',         'KdXk!}5Cdd$.k%Xthp/b:A><a7)kRy&{DSPJ;>#e<Om,u4[mC1o1*%75+; LGP:c' );
define( 'SECURE_AUTH_KEY',  'l`b4qPTZ*N6:a`H;?9eQ|Fuoly<K0EV@[1~7}5 `1uvWam2HhplA NJ<$fnjy!>X' );
define( 'LOGGED_IN_KEY',    'N0s,B+6CG393bx/XAFRo/WOW`4Cf?p1*pQ_VCThI =r3$J^P>5yw@_/OGz.oQlf*' );
define( 'NONCE_KEY',        'IfoYrdcl8x=+=7HJ&^{G.D|V:SWDK>AkI7#<;Uc JB5KrOYwQ#z}5Sz&D{*@iwKj' );
define( 'AUTH_SALT',        'ji04?fq6Ca>v;&GG?8X&q;f~mn(}E^g(@T{flT8yR=Ew}S;nd/+!dm3{~$gmf/2@' );
define( 'SECURE_AUTH_SALT', '8fatyb53+miTcxt,/3ds-A /|)dBADFyqS=m}OF%Dw_a<D>5 +WXWEg,ulLbA)HK' );
define( 'LOGGED_IN_SALT',   'Q~)>e/x@rm$rk(gTY[+6db,8#tnGIi{CDmHl/Q}Z0;-f *w2BzV:9rGl,U~) %K;' );
define( 'NONCE_SALT',       '=,}vr>T5JTDMoZS*7jcc/J(=0K>_BSZ.!1bD*5>_<U@4B)@Af q  ~CR8=Szk}[a' );

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
