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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'qwasik');

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
define('AUTH_KEY',         '$z,V-i;3;A@9XVt._QfAbVrY_XMJ2)yCA[:ZPs%bmFB)Zn<_iVJK<9a#KQOdDqSI');
define('SECURE_AUTH_KEY',  ']O{2>?DGvUA)c{4X6DB.LDtO bdL5sryIgqi#m`C{kUZw]{>7yYfwXs@Pmvabdo$');
define('LOGGED_IN_KEY',    '(.~v./x}AVi2wR..HLp_XgA[{3!X#0oFi!$.R*n91-hOj&JD;1*6|dzs@$it}Zh8');
define('NONCE_KEY',        '=niww$ xZF$c?}r,*[iJ8Dr!s6^@CX:3<F]vH-ZC[gQ}F&uSvHSa+ipfbs=;&vTh');
define('AUTH_SALT',        ']Sz+2*+*$2f33X>zmx0m%nT+oKN)*-5ukf~65Nfyq72>gb1)_=*XS9(d3ESCk,P=');
define('SECURE_AUTH_SALT', 'd^^K@6dEIUc1Brdi6uQ2@+8_B*6?L>!uR_vgowI[:hySCCb`J-bWe 3_CajGkH?(');
define('LOGGED_IN_SALT',   'D5iHV6/0Boa(f*ljnY4aP9]CG+/$(;+x,U.Aec.1Jz}_E?NuM@$M;os)Ga;^PYw#');
define('NONCE_SALT',       'q5h-&~46DdQ`o,CP1D=D(>iu/ntV2P.S!1Dl=u?DeNz>1zUYyBWjn3{Lqv[Ygc0R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
