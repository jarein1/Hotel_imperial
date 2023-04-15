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
define( 'DB_NAME', 'imp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         '&ycROw;fq& RfP)rOHPCx]C-g=AfT8 &jsx5<a#XOx(9ooLoStgg34V Rmel3l{0' );
define( 'SECURE_AUTH_KEY',  'ge,y!_rVvul|xF|&T9rK$@3|JK8TLYzkUZ:Q sAwst`F7#Sb]Ot?FXSUIpy.L9P/' );
define( 'LOGGED_IN_KEY',    '{lZD6NeT(1EBVnWOCrrODYy/*<n{w{}7=sFgd83YON}_!3#^L<TrG!}yAv)Yh;|^' );
define( 'NONCE_KEY',        '%1Pa#3%Bwp}lC3:y,qDM2t&id8-V^VQU.Sf;+6Hdw,6&|YrS_Ezfv)iYr/k7!hfX' );
define( 'AUTH_SALT',        '7)ZFDzR<[PVd8Rf5sYg+GUP`GQHed9@[1+eX|NE-$wi|Yk #^@y.dJQ}JNu/(N9!' );
define( 'SECURE_AUTH_SALT', 'ZcP#9[[!8oB*AguL$Z=ZX~*w[P%{9yn(M>>_;I.9+Ponn|K0c?{tVy0BtbvJ=9w|' );
define( 'LOGGED_IN_SALT',   'Q<U1S$=Uh0_|57>cC?|04H2$dEnQM2r5vg)9%V`: f%8,}MT5vuS_Zv*8l[@[nK8' );
define( 'NONCE_SALT',       'h,I05H!1e&FA,7Mo4au1S[]Rw1j=>ak!sAHU,~O?Q[Xo,:r,f^gEr/0,MYF!|`pR' );

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
