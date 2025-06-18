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
define( 'DB_NAME', 'ecogrid' );

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
define( 'AUTH_KEY',         '_STF$>< +YA:.6Zy@+Vnn)bKQB9%tl!;&15EdBl33&f3]J_k[W@~8]NN&5rxL Mg' );
define( 'SECURE_AUTH_KEY',  'Emws%-3R-[.4aIvT;-J=dt`U4 Dej54&^(:bOc_-S/BREdO6MUS~!4W t{((S917' );
define( 'LOGGED_IN_KEY',    '77*r/;N|B$3>X@dOo6j<>:*& ^po]+lSXdb/vElx|J9JYc:@_N=^*:{+hDoA2|;V' );
define( 'NONCE_KEY',        '&]nknakB!a~+-8?6CZSqoVhC-VDJPpT)1XK8V-_8KM!*x+Hd^h1c2EvCRl(#S(IN' );
define( 'AUTH_SALT',        'eM< ~7Fp//P#4ha=u;v*a{HsyvXoyhFXq>~a`yiv)FHK{-BNp]kM_#JzFAvZh1J{' );
define( 'SECURE_AUTH_SALT', '.54k:Y}1$X}xnzl g~*>RyCHcQQ#ARx,wHzLj&UiCJC[CX3v|b<]wZ`oLM(wO 0.' );
define( 'LOGGED_IN_SALT',   'xdZ(kFUNeBWaq%FG#BV/JH1|/{OkT{pRnm8sn,6e4k=Hq nt=$Rwi>1J-18b;[PC' );
define( 'NONCE_SALT',       '+3x?C28>nV,{yi%]Fx{d$ndRnA!~r<SA,S6@Kk;c.S5&AYH09gO0z7n0p9@,*P F' );

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
