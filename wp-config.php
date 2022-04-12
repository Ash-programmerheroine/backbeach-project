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
define( 'DB_NAME', 'backbeach' );

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
define( 'AUTH_KEY',         'MFt[f,=r9t(G)L+iX =vIqpqTiR3Z1HX]6|Gns[ph~q@yqv G=^9@MR1L]3 ve.M' );
define( 'SECURE_AUTH_KEY',  '{4cyW1v<GI9@Q5at+MbItSvj|,S9#M%YIy&J-J2AxGFWi[$e;-ZNZl9QD^5}<)g:' );
define( 'LOGGED_IN_KEY',    '])_w6sd?>|51E[}KT@zvNTfSO@?#O_IrYiUe}6=NRIbYMduPEBtyqVF-8f9NWXw7' );
define( 'NONCE_KEY',        'NE>~#tz#}oK]KZoks(i&LljDo!kr~<Bq{C0t|*JG-k)vzQwKwc/~}tq2kb,6Hvzw' );
define( 'AUTH_SALT',        '/be$fl@dM%wiJ|Ohx;21{3c6-KBeX4#]~mX{UZIg u9Gwxis*d)4M[/}^cusc]Va' );
define( 'SECURE_AUTH_SALT', 'diOcJ-bZ4Xm]tM5_*P:t&u#yns}da-! 03zL){X(+C9-gt*k,}*M}{yS!k,8[8Nl' );
define( 'LOGGED_IN_SALT',   'h6};&,Fe$Aejf^uWbHJ4Q]Es($Suv;!-F]B+t;r-zum+!c{wR9jo1c]kMW*j~P<E' );
define( 'NONCE_SALT',       '8]+fs.f95xYY9|8Om7Z-[:v->,1_cn6.8zgRgE@h~2Eh|axO;/&nujnLd:o@%AM0' );

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
