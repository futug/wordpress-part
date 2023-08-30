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
define( 'DB_NAME', 'wp_database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'av$+47@{ Dk+RV`l{_O{UUrWNf,BNG^4?|@9 625m(KH:FZKrMG<K:,VNfp%}n9c' );
define( 'SECURE_AUTH_KEY',  '4Hu/_#X]LfvLH<!8TPIO[A}s>Xmk5/(0+,EG0;$PV!PMmJvJ|xeqgn|@Y+[M:;4H' );
define( 'LOGGED_IN_KEY',    'l9CZ<u[]CQLAlkoXiZGkB*OyQqjke0b][@O(~TUYz8QK-gO^;e8X]kO?XpY}m`>E' );
define( 'NONCE_KEY',        '4B~ZIKlGcfT$-HB=2VFKo1spFw~I$z.-fOSe1(=2}|5{Q{X[2s$5ZPQtq~Om3sKd' );
define( 'AUTH_SALT',        't.0vg&#:%V&m% XjFC#SinO:0cSk%{_+wrRIbq#+qEg=P+L $vF%Fp.!+FK$V^zD' );
define( 'SECURE_AUTH_SALT', 'KX}?ar04hC`:R&2e$5x[>7cO70r;owD?ZFtA5eN`rWB0k7[i!5RcY<3H$1uOgYw$' );
define( 'LOGGED_IN_SALT',   'vGY4q`bnX/_]!a[k<c<1/aWm[tj~]Rg[|}FMh_:`3|Q 0QA:h:xB]*/(=nH&h]#i' );
define( 'NONCE_SALT',       'C*b2:F>faA@4&qe(cAQn1XzUB7?LuIIniePfZs}7cRu}QE@D5_&?xE~C4jDlyZV~' );

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
