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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

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
define( 'AUTH_KEY',         'tbCw!QHz8KOJeFd9D!/s?GSq5`3yN-~BB[7KWDnC&X=kG5$Lz2QIe4p(/c1ORVsF' );
define( 'SECURE_AUTH_KEY',  ':N&0i=M{+635sIDg/EVw|,8z_&-THkf9doH549abbuF1_VdBleJWl%@i!qB(A6gR' );
define( 'LOGGED_IN_KEY',    'lL%GsKMZG.,&N>P4f}PB-&R)OJXx14IR[)e QP?Ey<:OmJ0df8MjN)iNYB#*Gd4/' );
define( 'NONCE_KEY',        '+h|L{O+OBX]#/ 0`c*{If~zx~pG_UL*OfDYm5[aFHfugyAR$l3_o-$CVW#PPxJA/' );
define( 'AUTH_SALT',        '/NtChe^I$(kZlQ.?W|ii+%BxlvP- p./)7gI?|O]B[ebT=eRD&X.c<f6trVy_HMN' );
define( 'SECURE_AUTH_SALT', 'e:3fl90pY@3IKETyl`4wFFd!H&wTN<vo2b{KJQ.|<.i~]tA}T=SZ[,rquFQ^~+j{' );
define( 'LOGGED_IN_SALT',   'at_Bd!`%l;p2>|[Yl?JqT+dW$[vhiv29%mF70NdS+v:mJ*S`5}|c5D0LDp|hAkT)' );
define( 'NONCE_SALT',       'EV#hbN|>!o=dX8U>S|#HditgGD>_?{Bv9Gr|)Z7aBv^;JL0Ew zbaKsRPDg~I`/6' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
