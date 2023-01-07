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
define( 'DB_NAME', 'etssd' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'KQw|Cm nw@%C?wZEYD;d:VIj[D0dP}hUiS(*a|E2t7bc%uOK~NT(J_x6ka*?KVDJ' );
define( 'SECURE_AUTH_KEY',  'xoN&?>&GB//cy)5%II%-p5t:tCN<4mHeNz::$+:U(qzU1yuFRMQc %[Z3lnh6_|.' );
define( 'LOGGED_IN_KEY',    'R`a %zuYvy{S-8m2coLTJuwGNn+R{FQg:Fg4_R%: dE%IBTjK`|#](kT%~Mp)_(e' );
define( 'NONCE_KEY',        'm,wr4GkAa7^1z- ;o*flKDO{pG)%%.k?BJ^|~F*/>Pu4*r];]0AC|#WSuK<P33X:' );
define( 'AUTH_SALT',        'W3g;{InXqxTM(O#;Ut`x@qM.>>Sb5q)7MK59?f }z*Foo4#%b?8SeeAF3>P)#1fA' );
define( 'SECURE_AUTH_SALT', ' yR=NRWM@{m/fkuNj;|nML<6r*n=}R,pkeckCnH.85[/@G4=S6>/zlXPjLfz3gj=' );
define( 'LOGGED_IN_SALT',   '!KX{Ju>Q>NW/>N7r9Duxy/z=q]a2,+:vV)V4nRzxdD*kS:SUhg#RXpmgghN 0Hep' );
define( 'NONCE_SALT',       '>AENvCD+5aN{]+b2z-eemYotN+:izq)|9~rKJ]?[#+_rgN9`%Gl`G^p@$nuuOsV+' );

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
