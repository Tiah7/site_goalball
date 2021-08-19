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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_goalball' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '5<[z2,<&QgIXpL2oP%Iiu83)MF:DU&i,Nzj|FHF@sEF[[d?c<:;5s2334Nj0x(tp' );
define( 'SECURE_AUTH_KEY',  '2lu2Ur^C,,hb*/SH&?nbC0)RAo#6E~BhmHHw.-8(S7Mg48dRam/Hrwq_e=dM]ujE' );
define( 'LOGGED_IN_KEY',    'OLB*Z{3CoJWkqufPX}#hd:QN_t.)R-`6-U(RX1oMZIt#M:cCBAt-w,N:u1;/rPb[' );
define( 'NONCE_KEY',        'IXV$ok{BOk1I%l+dGg3#^3&,+puZoD_(E]X ^c|.WO|DfLljO??1tr6A6QqqHZZo' );
define( 'AUTH_SALT',        '-*H-AHlv|$J<NqEH*NK4/f:VDBoxNwLp1S9o0Dm=A3G0-nG#6{8u9?Q~uBH!(=Ci' );
define( 'SECURE_AUTH_SALT', '#0/53!~6ab|@o^H(qGEGgcTJy1M/]L<fFLH$-$WR9x._zJ<U.M$yi@,/8*.QJjo6' );
define( 'LOGGED_IN_SALT',   ']EZ5vsGes{{wCU5VZH;[M=9{Wv-3J{.GY|I[O.rEt]sx &Q?CEVSw(<nUAr3i!?M' );
define( 'NONCE_SALT',       'l,:|122!aAn|m5X86--GU*SwRICDyOKhWY ru[J.fa%9:sgCZV<DIyPF)F-o?FR/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gb_';

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
