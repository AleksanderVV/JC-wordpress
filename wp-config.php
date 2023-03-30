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
define( 'DB_NAME', 'jc' );

/** Database username */
define( 'DB_USER', 'jcdb' );

/** Database password */
define( 'DB_PASSWORD', '2805' );

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
define( 'AUTH_KEY',         ')Og8L#(&C}y`=$ZmaL::<J8%RgkK&}.},F>{f.U7LSjJ5 yb:q#@l3S/|Y4^e~+v' );
define( 'SECURE_AUTH_KEY',  '&m5WpAQ~w2z]CV/]<aR<6CGjOtSgB$awpMagC.z.*9A{icWU|hp#P!<dn=/ffAZ>' );
define( 'LOGGED_IN_KEY',    '^r6J`MmyV#vE_tX)+G;O;C:G-`uT0gaDL:&TgAfq!mFTcoYyI, ka8QOSOHrTX3?' );
define( 'NONCE_KEY',        '.,mQ%z$)GnMEdRWfKMTy!%.jNvNLKvLy1z!TZfWMY6sq%}^(P}>.F7m!te*U2}l9' );
define( 'AUTH_SALT',        '%GM8c}nP@u*$7Rc]kB|.6^!h9zt+<6?AA[J;aRglv(8DAfx%uR(!M[E@2u`6ZnX0' );
define( 'SECURE_AUTH_SALT', '[H=4R~oBn.12rze!1x^bfz5%it NQJCzj2{|-Ws/$<~vdapJwOst~E*(J<!Iih,M' );
define( 'LOGGED_IN_SALT',   '1b2v}1|/a;IF<=lgsgkiifTxe]?_4EO^Bg;Ib<NL@<Nd+w7)O@3J:=jetACQ<<8J' );
define( 'NONCE_SALT',       'tK,mf>~xTEsJEL7_{MEgH+2JqcSW7jg_bp}erCgu!r&IrJ<c/@Tp>BL9xL`Y/R>:' );

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
