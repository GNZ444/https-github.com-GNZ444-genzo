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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'A:q3[o|}3K.qt&M:[~H38L#Cf8.!GmrbNf{rK04J7!np7Rvn|Kei|MUo.>[0`sNC' );
define( 'SECURE_AUTH_KEY',   '}`]`ef5suC%vD7#)($:6*_ BAL9i6af<De;~r,bORoOWXUg5uSj(5YEfgBvi9i3f' );
define( 'LOGGED_IN_KEY',     '2&rda0&iWc|I:,urkh_75Fem`utX,d-d@^7;h+(k%2`xemY4F[fkZGSoEKW(tC_X' );
define( 'NONCE_KEY',         'Wb7(4L|k(6S*qRwwJ5#T9o?|&z4>8cjdd }Z(OkS1TN7D7CZIVI.F5Zwx5|O9-{$' );
define( 'AUTH_SALT',         'R;[`>pv5]z|TqnE#]J~Gp/-lfXdhUz4JeASk8!phLabt!I^Is_L2|^yt)Umnbs0H' );
define( 'SECURE_AUTH_SALT',  'iJeM7oh6C4iyH7)&GDr7|-_S30;Hf&71`Z)_>Qyw7D(Bv9yxt&&vz7mrwz4~iF5|' );
define( 'LOGGED_IN_SALT',    'N8fxOb2A}bxNOJGxZ#HVx:`Md,v=6HW<&mBQdzX<KdqMx_Xb Py:FbZ(p;h|dIDK' );
define( 'NONCE_SALT',        '[;0Ua9lo`rTpPC,t9pA4YoRQV1o(/ K_Gk?bPT{1USPM!{m9:u@`bB<H{]_v|[[r' );
define( 'WP_CACHE_KEY_SALT', 'vg^LV~tS<{,8HLPHfW3uAgQ,{X}eq&u^Oi|,0$SJsTr$=qh|?Pv5?8[2Y!N%B$L*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'genzoinchp.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
