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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smoke' );

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
define( 'AUTH_KEY',         '?f ?b/z;>BwZlqO]?-l1OoO{[Isj>.kEX,/`wMfqDZtLlOk`^:LOftQu$kN6_<qk' );
define( 'SECURE_AUTH_KEY',  'h<A:2ZC-xj[77t>tF,3;p;yv~SgT&X |sbIpF{cQs^HJj6{&c;H7P2sG:})g8_bw' );
define( 'LOGGED_IN_KEY',    'XM;L%+br}2:`A.mB`6KQ_0iHFp,cF_;|N)D)rxIiF6tF#21LtPtH<w`:/!zX(:Bm' );
define( 'NONCE_KEY',        '}u9}:vj$(p;sMo0Mz$@!QeN|@P*CXB..s&J|:m/bSDf1(~$lQ.=^SN,`COJ%g9HF' );
define( 'AUTH_SALT',        '!jBm.`N|!sPHWmTb__`nfs)YOy@5,TM2aByU#CiV8dZV.=4.E/6kRaut{gZ:8<VX' );
define( 'SECURE_AUTH_SALT', 'WvRf[-_qkjP]2.vC5xP4x+f&NSlQ)=hFqh.SP<u]E>?YtzO[Kjb:E@iuG:me.itS' );
define( 'LOGGED_IN_SALT',   'n{ 2RcqI7ie[4dMBZs!HmTw@?{N_VJXHU<14kNgPb;63S2s-EtLT<X}~-SM/IjCW' );
define( 'NONCE_SALT',       'Sn4mk#mW|?xB2NRfY9X.dmCAq|VrcqtMmXR:gSI*t#hXnR!?@dz#lsLL.p1/)iHi' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
