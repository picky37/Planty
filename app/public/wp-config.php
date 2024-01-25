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
define( 'AUTH_KEY',          '}|Z<oG`Wg_uP5-xU!xfvqUq?8S9fBDDX|SWF$7)!#ds GNqpZ}i(Ed(6!5a1Jw)f' );
define( 'SECURE_AUTH_KEY',   ':#A?NI*e*GaR(Jx@@tSMq$hKf{$[5Yu}Ak[SUN9}vTnNF)Y81%QGDn3dmgc+PcrH' );
define( 'LOGGED_IN_KEY',     '_a3w~;7dIXCi>VC+k//N}K}Li   |j|g9g%gngxKfYyBxW*4(e9J>Vu~4m_FsrQ!' );
define( 'NONCE_KEY',         'uh)oE54&%DZ0R#Rp6hl00(irE0Q07>AKK,IV=mR-r8sa7,5Pr2])jF2}M+-}7ky&' );
define( 'AUTH_SALT',         'rO)&dYu=qeP$<?a3bC!~U,&)hTvcYnspAfBDf/VBL`DIv =]^]VCUBs m<j>*qaC' );
define( 'SECURE_AUTH_SALT',  '@]@d%h83=-5~$k)l}}7+&Lc81BPR.[x4Z[+^Q0<a+KGtA/:PGGrqmOTxH=cv~o]j' );
define( 'LOGGED_IN_SALT',    'xYM,amL,{I_q,{{F%R~bl~[W#3)5tL/(VXVqYK,Nm|e`&bbnVMc WXH.d^vomQU0' );
define( 'NONCE_SALT',        'tvJu]8,d%,dAH0,@gXffh#PnX0KVn|u(3Tb#JZv1*q|l3FO.r;+i(|L9/oG#yr0S' );
define( 'WP_CACHE_KEY_SALT', '-*8us</rRa1WA$1v*Rjq-RQueGH~#NMP6rF@!LG-J;+Xah>C178dN!}~n=}tFKT?' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
