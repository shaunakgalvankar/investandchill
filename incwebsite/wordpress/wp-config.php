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
define( 'DB_NAME', 'investandchill_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9])3aDSCV|z:5ZCSJ)3OO&-?^ElYU9ULii>P]dXja|L8)`tHJlC!Mt^Z_W!=D$^m' );
define( 'SECURE_AUTH_KEY',  'G3kMtT.qGnP(wX;n VQVfMHk4p0lRQuW;TAlQUdW?.GW<h6|~VI>bHN8kl:)c#F+' );
define( 'LOGGED_IN_KEY',    ']fpEk,;&kBspl|keqAQK`RY{3e(} :ZXv<@LP>=BfMbcmr!&#!vuMuex[!{>E-Q ' );
define( 'NONCE_KEY',        'Pz~{<a USTLR y+mA#l(.,:52dINFpq_%cVi=D#j0i#~GHY)9!/!zPU>fZ]TB-6d' );
define( 'AUTH_SALT',        'nn&A|ZLZ>>8;|(HZ!f|/V>+n0xmV*uv>mS$eZSc(9r_CPVO7S}lbhYn>9|px}n=r' );
define( 'SECURE_AUTH_SALT', '|ELU Fw$I?0>j1JyMul d!A_,sJKER+7D6b)vo@iIcgzf@.lR(w)[4];z|{8QtZ$' );
define( 'LOGGED_IN_SALT',   'Y#l*IdS+&rSF$;>D)8O_hyXz3XcGF&@hWed.;GsKwfCECMa,P:M_w[Z0Z[w.rff1' );
define( 'NONCE_SALT',       'g7Zr[-<`.F~)aP2D8:zV53Tvj~&6E##7?6M>;JnHv&mRx-JWB]k&Mi#7FGRS9$)3' );

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
