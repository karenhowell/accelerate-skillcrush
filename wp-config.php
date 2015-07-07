<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'accelerate-skillcrush_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(POOZsk:Ph=}$Yw%m %2>{T^v!g1pljmTO44BUv=@-}k+l&+Ce@`z7<f$X`;FI!-');
define('SECURE_AUTH_KEY',  'P1$&:+m* x*Wu8^I#Of;,J*WvJr|U@9V*}dVHW~pJDM~2l+Psg4B W>N.l~&a!.J');
define('LOGGED_IN_KEY',    '_]t|{r)zE=J%b?4TD:8 wRp)t-Z|C)ACjptfCwk Rcr&nv2P=<>?R8U-O`w.-}*e');
define('NONCE_KEY',        '`57/`S^sX<_-IIfVpR_3z_}$fbu)U?Qiipwk2z&0}2]-nmSaqB6;S1v/0b6C~1+g');
define('AUTH_SALT',        'kN7[>3[sD+eyuF9*~kBWo;B:|wUbY>B_.6JSQ|bK_Ck-QzMhai;~:,tm/;1$f7t/');
define('SECURE_AUTH_SALT', '}R+noAwDlu|95-S4w0)iW4e(r6)]P|o!!Q}-i:=QX@&G.j:ks3/,75T>~AFNa|es');
define('LOGGED_IN_SALT',   '+Tv-p4rA`:ul#AZb=@:z1}l_=oU*IrVev{sr>wo-O^z72(y> ZDEZ>TBKRLRz;E^');
define('NONCE_SALT',       'lSr&jQ|SI|0SqxY,;4Atl7{?}q@qEEGAw%v?3a.LSuC,`PZl:+T`c5{SS.=QC3f#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
