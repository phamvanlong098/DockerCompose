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
define( 'DB_NAME', 'db_site' );

/** MySQL database username */
define( 'DB_USER', 'siteuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sitepass' );

/** MySQL hostname */
define( 'DB_HOST', 'my-mysql' );

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
define( 'AUTH_KEY',         'ejEnqke_]>H!@O`<BL)4Ny8b8p(a/;*Uats(eGEU)n6mgy.pjka[yo3_v>;HaqqX' );
define( 'SECURE_AUTH_KEY',  ' h[CV~x-1W_6myfO<Z:Z#a,|+bGYA{XX~mJP8f#mX.Y5%)eOjSlvm29#Rs~eF]~R' );
define( 'LOGGED_IN_KEY',    'h^xT]|d@h*b>E41oyEp>#1o6RH2<7^apNB,-h0#!ub-z=Go`2-Qb)XR&diRA%!nX' );
define( 'NONCE_KEY',        '[4qMI=ThJTOH>!yElbC+65VT:$Qz)/:1U:;w=vvmq)Mbci[A*rPu({,-&D|`8u5{' );
define( 'AUTH_SALT',        'c$tlQt{6i[-:U#<`e1{f%h@M2W!zTZr!|{QKlBf@DOdag_UV,u+XnHl*C$@Pc)~C' );
define( 'SECURE_AUTH_SALT', 'MXy!hW$+4eLreo}Q..a bbPg5`%1qWq/OwdXnE@vbS2>q+e};sPa}36keEYQpC+0' );
define( 'LOGGED_IN_SALT',   'G86xe6xaNtlN|G{+1n9oyLP7aE*p>~8Ff4:`;(|5wv7F;-Xu9Q7)MP#`Y7lJyuVS' );
define( 'NONCE_SALT',       '*b)bdt:md}h[>fxoMB>WJt:,sn?9fI5BN@^%-.K$h;wmlWD`+8.d#H]qa~48C5.[' );

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
