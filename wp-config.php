<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdemo' );

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
define( 'AUTH_KEY',         'x~<Ao:Brj[voX[(*D?owwGYYmXi%7xXbAd19S+574?|*?[`)t%xnoDVmE]3q{H23' );
define( 'SECURE_AUTH_KEY',  'Zk3)tAr*XB9#5W1hJI[3H|aEiE;0<EnOuvrx>2BKkWmXv1d%p?v_X,YUmo`(-A)$' );
define( 'LOGGED_IN_KEY',    'ynJBzH1S62Sfui;forG/Gx p#FR!et^GPK@h&y*%U526}%grtE=8$:dqzP}?cvMZ' );
define( 'NONCE_KEY',        'c1D&OQdL ;?7XTpzrrunn|!pu/TC(iZZwODON)vG4eh7gl{;UO+2}{z=_C17CqI(' );
define( 'AUTH_SALT',        '7eDO;YyEi7%F5LSm@Rf~ydJa=ASOS$8hU/Or{l_|!$Nn}&CQ/Y^tLFl!chz^#blO' );
define( 'SECURE_AUTH_SALT', 'i]lLxXgM)tso4q[1bd A^}h_TkVX0eU>wg qu!qN!1pa~k2}g<3!lnX+:u)_aYd@' );
define( 'LOGGED_IN_SALT',   'xKkd/Qj1j7i01!`&k$0R_E:3UEF>F*w=A[9RsGUHjQ4<a3_Kc0fComecG%X;MB|m' );
define( 'NONCE_SALT',       '%nIgrx^(ucC6y1giJ}e+NZxJ=fid%fnI(U@Gez|@a_lk<dDhI:q/O#@f1qc*<_Q|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
