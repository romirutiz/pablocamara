<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u684329365_Pvh6I' );

/** MySQL database username */
define( 'DB_USER', 'u684329365_s5QWW' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MZkF8dtNGM' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'BEx@g$L:Q,VIOIB.E)/;b{9N0PlW./!?I,FWb[B`}>K sWzEJ|i3(LV5ZBXH:,X<' );
define( 'SECURE_AUTH_KEY',   '(UUuV&c7WXhU`%ZC4v0%9m3OEH:T#c[n|tp*=+wov{)f8mp?m*Yg4*sa=/I<C1A[' );
define( 'LOGGED_IN_KEY',     'V@vi!b+LvA</Hr_=f&x<BO C!QJ%O3Hc+u;^WnKrU^RPYVPwf:OO2/4Fp_PiTOmT' );
define( 'NONCE_KEY',         'a@Ej=X;R!a^#_}1aOWZ6|r0=%%Sf#IA. CVN-B3t^PXDQxC;F|JLis}tnpn;v-p}' );
define( 'AUTH_SALT',         'Fhh1fF@L7y*!4^m~QA~W<>}/uP0vQ7Q?8GEgUhP<ru^,0jak)VDcE;H ~61x+Z`h' );
define( 'SECURE_AUTH_SALT',  'O[gx(r|%iwJt*qdI 6ie ..a,w/wVf/]c6Ur%EM$v#cwAPAG{)j ]3OvW{VPh6T0' );
define( 'LOGGED_IN_SALT',    'S]1(rU~}vg~f%eJ<>KNX1B9<@`9-F^%x-suHV_]qC~=x&x=l(qL4!fw/-Qn9v#,4' );
define( 'NONCE_SALT',        '#CKgn6P&#i6t%4xG u*A5@h0no5hJNP?n@pBSPE>@f/H@yP*/lYc;*y<o8-9.J2a' );
define( 'WP_CACHE_KEY_SALT', 'Z|w2KTf5svo*.e<)U}|?A{p;9uhu`:QzQAKp(&D;ZsJ3A[<+0-xTr8^9cN#|6+[e' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', false );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
