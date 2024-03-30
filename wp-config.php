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
define( 'DB_NAME', '3 website' );

/** Database username */
define( 'DB_USER', 'Hasnain' );

/** Database password */
define( 'DB_PASSWORD', 'hasnainraza@01' );

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
define( 'AUTH_KEY',         'fdazJE,Z<$2JX7@q~2spb,|e Cn:JBKjubKKM6B JbvbG-V82j7WZO{D1^g5@0z_' );
define( 'SECURE_AUTH_KEY',  'ERs0eA~C[h*L;|KvVz  ?rC$i.C1/^<=V!c#|+:aZZ|/a{6tyf?JjF[+(?td-%fl' );
define( 'LOGGED_IN_KEY',    'H]m{D1J.o&?b_{|u4Z-~{uo]zUJ(k^&inAF)O2XuH3OEWyQi%To~Ki+v>~$6H5}e' );
define( 'NONCE_KEY',        'BVDW>5RwMN=b#o0|/Cn{b9hQ!a07z$aSWJFyziaxP$i+?>%T#LOn(g-vi5hCK9lm' );
define( 'AUTH_SALT',        '=/~vQT=icA3nRrh8+&8k+NI 1Ks`ld<P>@/@y5FJ2Ag5x}z`::5]A72=:kRu;,$G' );
define( 'SECURE_AUTH_SALT', 'AkGgN{FiJYBX]n7x+D%Uk`RR%OJ#w-{~u8WoSL9V;0(t:[dExV:]rn8j@FGwr7:&' );
define( 'LOGGED_IN_SALT',   'X[tq8Hndh`a48,i*K}?rr6@TSOj,K]sDV5<2X-}.mu-WRZqP{<i/_}-15-c;wA]t' );
define( 'NONCE_SALT',       '-mRf>8MNuN&)5q/DXd*RznS}17B0Q:d~G8yZuv&1a=wstVs&V,.I?/<@aTs+znHv' );

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
