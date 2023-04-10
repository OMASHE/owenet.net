<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', 'wordpress' );
/** Database username */
define( 'DB_USER', 'wordpress' );
/** Database password */
define( 'DB_PASSWORD', 'Ryu^drSzQNK@LnLAz5$^BNn=+AheSfNadK2uGqB!sRqy4DBZA&NeYfwsqZEj#3ezC=&7RYjq8AYz-3xdG8uEsDy595Z_HHLx@3swFw_rLmhUD?sTTcs4DHpYbwjfQv2Z' );
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
define( 'AUTH_KEY',         '=K$+N]LLbgEZ(j@aud7&DU| 7FwVQ:G.q1X/.^Cu&/JE$QugF|J62rcdSl)U8Sk<' );
define( 'SECURE_AUTH_KEY',  'YTS^ejG0w?mGG%1avUKrqxe!C5*L3q-YH~,h&eyDHyaYV?XiMHODX4VE6[5){<qy' );
define( 'LOGGED_IN_KEY',    'EW7(CXo[zV3fe+T{*zL@%dr!tbC7f*g-)E~;F{iCO/o,v&lz2S,WM>uuVwBq[yWc' );
define( 'NONCE_KEY',        'x>K$?MS2Za8(g6 w<v7z+N6V@`(lf!]8_rLPik47$vxk65CuF#2oJ4Khs!Fvf^$L' );
define( 'AUTH_SALT',        'Mye*Z;jW*Ac,0ZnWN{:44CzhXW*=:wF!zmsEHB}vb5!*G^<^XQHjx1%V3MtA&tEy' );
define( 'SECURE_AUTH_SALT', '&{Thv(i3WIc_1>k?@.:HmN;bDFA-6[Mjuh,jkbV7ttuw;2`{j1DV+~=%ez4dG&(:' );
define( 'LOGGED_IN_SALT',   'SgL^K}7T7unxD]].+3:BK>{= i.=VqUO&8pL){WDb;&_Kzgazp+b69r/3glN8qMJ' );
define( 'NONCE_SALT',       'vK31@m,,JRGgqq31 q]Qg-o.o?/ 9ob}Og>!J;CaK~-_W[{Js]zx[$wmv@=EaaA[' );
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