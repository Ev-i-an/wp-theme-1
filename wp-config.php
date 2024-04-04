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
define( 'DB_NAME', 'site_1_wp' );

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
define( 'AUTH_KEY',         '5_h[/b,&jD{,Zs^&s[i#P5:jNf=Ac2}f<]$Pb[ZKw2UG0{?lxv8QpBBQ+fm>Z;^G' );
define( 'SECURE_AUTH_KEY',  'K110 Zzm>L$}c o-B(zmu`,n-N}a>S`H3F$&K`*s~FC2c-vP/sU5n^UMMc^&@:ue' );
define( 'LOGGED_IN_KEY',    'tB0(} +|tPvg?HK]a{W9,-PG7g{~v{xhu`U>=d<_WIkPqT3 DUVm&(.~C]o,Gb1A' );
define( 'NONCE_KEY',        'E`/d3pcAy%AlTtP~L.S.~-!q)_AiyzTl;|wqjo>B2kR{M}1jvnKely|GSm-oc>TM' );
define( 'AUTH_SALT',        'PKW!lI~gP:ph<{4qSTh)5t00;Mg7{^=A__eNeRR=MeF2Dh#1aLVz2Q3R@RE$1Z|j' );
define( 'SECURE_AUTH_SALT', 'R@mbW@}sX.}ZJN!hv8R^-8A0bI#A+as7cqY*-#!wL}@!GkR+k8]&/iYqCkKf>XKP' );
define( 'LOGGED_IN_SALT',   'wTZbTLuZawP=,Qn5Aw$XM]-O%P<W@(G<+0![ws8~$5[DUQ]DUi{ Y,<vmu<2;%lB' );
define( 'NONCE_SALT',       'ifu<e(cA$Z<XPHY5):F0^vN>C=/KWD+a@4V8=tXo#-%E:kwZ/fq49AO!H/Q3xy9^' );

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
