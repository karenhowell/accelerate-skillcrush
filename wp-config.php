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
define('AUTH_KEY',         'xnh+1lt?A~Ny.s8)n}1JP#I^QRi:xM5S]T6mB}*#ob?+#^22N>%OP9A%^-E-a(!b');
define('SECURE_AUTH_KEY',  '/zEn]HAM~)8eZ*x+F1amJ}:ben,HVAz+z^XI,W`y}<E%~DJvmn*K3ir-834duEy|');
define('LOGGED_IN_KEY',    '{:GT7MKIOljo*gDH (34|v rum_+;3==uv>I*y/sGP@HdniBUD =nQW]P<N-T{0Q');
define('NONCE_KEY',        '6=*mlkKG3xjR^&cb xir?^c}Ps&HeL:z8ORnJ+iSPLh[CVleNpRW}.F.Eh-+@u22');
define('AUTH_SALT',        '1ykMr0S5(^ttHgd`xu6GcE:R.&9.l+4l``)?|39+}XZv(&SZZA2+];=j/Xu4TtVO');
define('SECURE_AUTH_SALT', '&q$||ZWnA=T|#<.9^dS1|/+vQt]A&Z[ <ptv;5lDz0_ibr2I)wf34<Q(RZ_J5>9X');
define('LOGGED_IN_SALT',   ']evk^t)t Jv|_u}VxkoZ|M=F]]6Ik*V!9-E;k9EtOTV{K(;}2|a`$%+8i5_!a!;>');
define('NONCE_SALT',       '.2B}>F!),?L=KpoF!})cY:3m&~~2;dReS.T@O`D-MRgTPVA@AhZ.D1Kq0lGD iTJ');
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