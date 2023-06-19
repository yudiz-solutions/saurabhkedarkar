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
define( 'DB_NAME', 'wrapp' );

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
define( 'AUTH_KEY',         'Wyy[AjGTx@,X#FvrE?hBq6K: rCsm+UW^pASnZV$dF#d~nIC&=h*#`!,}.FwTVKE' );
define( 'SECURE_AUTH_KEY',  's@e$SR$6?an>-%(qrE]_~B})`rCvM$NtbLpnRLDX[S:xa^[Dg1X{g8eW3Q%Go-^9' );
define( 'LOGGED_IN_KEY',    'J%eL&$Vu~Cra!-DKWo2eJfY634~`OL/cAgSnGILc5#t}iWa4&ze(TMfn}!J;!/A-' );
define( 'NONCE_KEY',        'k6V[.NnojmFok(h^n& q;w.aHmRz+mi:$t.WVLK?r47}9BQx?&}KZKhcR;f`fx>K' );
define( 'AUTH_SALT',        '4Ryo{J#wyn/E=(1?3E:HfFqYyqdJM7]2%bj% ag[-J!Of~nhb3C-Xq2ecj*Fg2.d' );
define( 'SECURE_AUTH_SALT', '^9njB+D5+D*IB!:pdN4E+E^K))ot=BEk>P~8x]kZj9xG&]]GYgv+BT&|(Y&dON@y' );
define( 'LOGGED_IN_SALT',   'jgVFcm(!|v0_8Z+mntenO{c WwOHo8XmFHz445;N.7oAhi[}l2YZK~`/mmbL&^=I' );
define( 'NONCE_SALT',       '/RS{3NJ>Z6p$/[Z^5&QjmlvDYNw/D(ddv%:IB6EpE1P[978y-A/`pon2g7xAHp2@' );

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
