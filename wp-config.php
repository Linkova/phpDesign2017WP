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
define('DB_NAME', 'phpdesignwp');

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
define('AUTH_KEY',         '*s1-}[z&[tkHXW9Ol%XHStD5SHaBetWkbi{3KG1Qu8)t)]<,xL=$c~!b9?(JCj$>');
define('SECURE_AUTH_KEY',  '_sr|6;#A|m`d3o6qMyP6xuHx[@o%>;w6Nll Vj@m`vR^gj;h9Pa8JqSk%k&%hp8-');
define('LOGGED_IN_KEY',    'xvtVLbXe(6-rX_kuBdQf0A%lC6;Dr9ep<)jqA}RJ$.:plJR<=c&wP*m*Kbv8.8E`');
define('NONCE_KEY',        'qD-Io_YF<e$n[Mh1nJu/?X*|HBDjOqN)|^FJY?X6?^%Wznk)G]dH_NGuKrYX6Kd7');
define('AUTH_SALT',        'B#,x!U^YZ>Y%Fl-Tn7}2RQMyq`>nsw9 ckg%>k&7R`^k(TS,G<u~1lKRZfH[bIAx');
define('SECURE_AUTH_SALT', '3<bD,HX%JSg]W]E5k?|Z:)r]i3E H>Nl(3o z0ePK~o-~lO>n]s.pw@a>Xq``@.0');
define('LOGGED_IN_SALT',   '_`%W|Lkvk4IQ]L-_I?`lq[i@l!Bvz:psJ<H$ly3=y6V9E=vh~g/]J/j<qRgVh!<n');
define('NONCE_SALT',       'eQ}l)zodJpfTpO$_KyZQ}WYEe3=<ZXqCvBOvr6_Q>VJj%[c):&~<.eQ>#Jv)p@_f');

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
