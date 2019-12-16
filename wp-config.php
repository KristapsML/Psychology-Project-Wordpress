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
define( 'DB_NAME', 'krismway_psychology' );

/** MySQL database username */
define( 'DB_USER', 'krismway_psychology' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bandits1' );

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
define( 'AUTH_KEY',         'tHFwcKzt;#~VUHVSnK$Z0^8+mW$6EWz]oKV7t2W()-.~%I-{]T8-o&IICA`&csZ(' );
define( 'SECURE_AUTH_KEY',  '/Xwadm0qJr%`d cQ4boO=<yj0$`Ej:2(>2]O`IlHN!2>EQi21% L/LW)Z@p7}I@s' );
define( 'LOGGED_IN_KEY',    'Mt3+g:rL`^~#= v@6{F1A7-,`Y5?SC+Oqd Fc-ulH `v=oEn]|;+L^EkR<Z!#!-{' );
define( 'NONCE_KEY',        'e=D^S-JChMWMNSq./mz%/-y2HkhmT^jYNlQ1 =+#)+@m(r3i4P}kvmjU,mx}j`Z5' );
define( 'AUTH_SALT',        'Hw5N2B9ct$<<u>}(cy72; )37_r:_g40]TW)$F/+wbiU8/j3~#Q,3na&*+ o?Mr`' );
define( 'SECURE_AUTH_SALT', 'G._3Rfx.S_}Q<H~;_Qjj/~E4__CY4mxnymTn`] U(BU6$+wI{!j0&ez~UQR<%EhU' );
define( 'LOGGED_IN_SALT',   '>Z84bR7~{<9^_Y$!%V;gaR&r~fHcI~F6=%S]PeDixq>GoQ3XWMON*7*nHMjuNA(:' );
define( 'NONCE_SALT',       '>u%![A}SI7<;wjL|vRV!}Fu.e>WJ e<0G vsf|q9Muzfj*8<%6U,MbSUMP9B_1R3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ps_';

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
