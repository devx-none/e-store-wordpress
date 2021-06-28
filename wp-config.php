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
define( 'DB_NAME', 'e-storedb' );

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
define( 'AUTH_KEY',         '?[]V/%w6O[2NPc>R.P|g.Q;tPgI*wQHIeW,/4>]f@= :P[t--1zour2/3ghw[riQ' );
define( 'SECURE_AUTH_KEY',  'sBj&+p(t]<Fv4yn>P{T*nK|*c]=;}%gsbY>agO~cH=fq{x9G-Hn+=xMxHHw[x3Ii' );
define( 'LOGGED_IN_KEY',    'x>oNxb(gr{,0MGhl*y>&d55#3kjt6NYqpwH>xi,ANd}%kF[Z9gA>EnX#021<89ys' );
define( 'NONCE_KEY',        'l!gt(-DW}j#=}ur5czn6k?t-F+`NMk{&nj_2yPAdJ{P9b=:>`]`$,$xI].s-JC[Q' );
define( 'AUTH_SALT',        ',gmZ=I8bey/xFTsZ:$*3JENmqlZtS=NqbEDelUcU)FkV<P!?N$<%_im2RM&n0PX_' );
define( 'SECURE_AUTH_SALT', 'u`}[,>k0#xsKxw@s/W ODJI]w8-J5<B`zzoqT;#Z[>|^I;7U>zfN?2|><!>9l^f>' );
define( 'LOGGED_IN_SALT',   'y1U;r!Hp74DE<vK[f7B{~-&,a]Pm)M:#4O0[2<T6PQL}FRHkFEn%HJ{|1))l-X:o' );
define( 'NONCE_SALT',       'Ydck$@xuJ).?x@S`|N&UK`AX!,a(lnbNuX1qK4.5+NL>~OrnVY`+[;W%|WSmAAy-' );

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
define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
