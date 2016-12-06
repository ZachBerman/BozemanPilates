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
define('DB_NAME', 'WP');

/** MySQL database username */
define('DB_USER', 'zberms');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '6x^Q%=-9T/5$_(E/&NuQclyg:0w8lFgtqQg?x%l*IZF_vS,S:s+P_J*Fp,0W6[xU');
define('SECURE_AUTH_KEY',  'bvJr=rChY/Hz5f%uZppNi3|F3,x7N.@vpg$dv}&}(VAAxcpuo55d:Vr:6()=}^5D');
define('LOGGED_IN_KEY',    '8,K>,x!:|sRT:u%7. l4hZ2y5`g*%DHHZ7S$MQir^t{fGItq92J%w^Gq__Qg4=nN');
define('NONCE_KEY',        '4oG:SMN}p>g6,=sOX*L[q6*E$ylPTv(<qTewE@0z@sa|r#^H=[_%A2.q}fdqYqpo');
define('AUTH_SALT',        '<g26-UwhQc5Yx_1^e97(y1_]HQlmnovj`=;GTak=& }ajIE!z~Y4YXrm3<`2_`rt');
define('SECURE_AUTH_SALT', '0F;.n em$as*~>~}Dm#:jlDO#H},lTeRF+`uLUNUU[h6ps+XX(ZHTM%}I_2D3BJT');
define('LOGGED_IN_SALT',   'c9$1R<FKpO28J`t~De|s%R+#qm[gpC f)+%*z]F)55/D?d5BJq}(u~nZ;gB*j2r@');
define('NONCE_SALT',       'Y%>,LNbpt/VRK;:OPzWSBlMMeC~ H7XVg9]6fH)@4E|w0*lLXvJ)v:Ih2|CU]q=X');

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

define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/livingstonpilates/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
