<?php
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
define('DB_NAME', 'creareco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'J=8$O4!A</OL=f]3{k.;!w7%PTp/2#FCmX :Mt^iY$lce4<JbQdQ4D.[tE$2MBhw');
define('SECURE_AUTH_KEY',  'P|#w>9DgYUf$^{FLj<7XA9y=IL/&{v0pHwLfnvYm^..Aud-EVe^%yu8xPuw_U.m1');
define('LOGGED_IN_KEY',    '8?o/jsn?3/UoqnZfnq)MDXZve$8VU3=@Utorr;YiDK0Zxc~4uZ<a[45~l|+FYQpq');
define('NONCE_KEY',        '9lQ$lw7f30XxL]ke8dr)Fi-FS45,9Do5Rn+&[XJ^%jYaf2d8#emue]jA,)n,QgBL');
define('AUTH_SALT',        'tk}!2*/n6_]xWYHT*b]vY;39gR4m3/%pgu7XxAYU%EG6:vHKMdx[Re C9E9D}=jE');
define('SECURE_AUTH_SALT', '5.EAa{tKsen2gvU9,=.j*X3%)`J8$kDt6^]Gp2Q38xQa6jdV}pF%u@b1U_G}t@&L');
define('LOGGED_IN_SALT',   'XXTm~/!NPphoNc<9y87D#Myv88,rzPB{//4GAZf|(pa]83 <*XbSdQW+_zOhWm+H');
define('NONCE_SALT',       '>I9y$LACT}p+?`ZIZ?}m(ORba5<%hq3A_Ac#oL{AEU^0dN6e1i}hzy`3xs|{<;+K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'creareco_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
