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
define( 'DB_NAME', 'pv_db' );

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
define( 'AUTH_KEY',         '_OXK.7-&}3+s3Dq(F:qj~7b!01$_ZL2t &ZWz20zV<o>Bqo{M!r}V8gMFc()2u )' );
define( 'SECURE_AUTH_KEY',  'E`y^(?j,@s>8zJ<az{I<tm*%:tx@fai)aPX3feBq(G)8Li<:kf~[3WSx~IsC(*-n' );
define( 'LOGGED_IN_KEY',    'SD7DkK0~w#~y&x*[]qIsXLgkQA%}2s%e:tqTR`$rb8s|`aqT,K(9kG0$Bi4y0vi~' );
define( 'NONCE_KEY',        '-C/gYz MGneK@g&&o0z}0.zzLg>+`e&IlzofHe;:qi}yvYzAU+d-}#OiwI;Xw> L' );
define( 'AUTH_SALT',        'L)r~UIexZhrNlBb&3 _s<P2h{?zO(9nZ:SKQ2+;=S1`TJnON<mF7,RZQ?7sxBX0k' );
define( 'SECURE_AUTH_SALT', '|qcpbk})J4AQD~v7UZ&?lTZl@ToY3G1{U6,GtJWl]^g%IcXx Q=o$4l<TC]C<>5_' );
define( 'LOGGED_IN_SALT',   'BvPe5Wg,M 1j)E=oz>H^z3,r_VNpdb(hJE3A~P,$]bi1&pbQJi;`~Z1IYIp-+YrJ' );
define( 'NONCE_SALT',       'b5M;P%aG}.46UHyDFcb^rD@`jv7HBbEKs+:fF;V!R}:h[/,u>#]Oq*uEZK$1;K:}' );

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
define('WP_MEMEORY_LIMIT','1024M');
@ini_set('upload_max_size' , '1024M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
