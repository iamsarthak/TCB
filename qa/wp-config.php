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
define('DB_NAME', 'senester_dbs3');

/** MySQL database username */
define('DB_USER', 'senester_dbs3');

/** MySQL database password */
define('DB_PASSWORD', 'senester_dbs3');

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
define('AUTH_KEY',         '+}2Gu<>l((~2]}v-XoM?k9 W,2Ov5AG$6c_@P2RGlbY2;xNb?%k IsXEu+A#)l|c');
define('SECURE_AUTH_KEY',  'q%+&a(-@~#-+57JRL0Z a)4-gbbk8O^Q<!iN7WJ56E}7O]y(9-2d-lZpt?;Hd-@S');
define('LOGGED_IN_KEY',    '+UaL<8y[Z}c+um1W/.mI[tnnd4b8+z?i0`LiML/0?]jNDUpL)JD4kH[TF>[nG,{h');
define('NONCE_KEY',        '#k!EUpnf7Jssa34[+z9do+5B$G|C#jRRu[^za;tB:MkI|{?8wgv2vjTq>q+|O^pg');
define('AUTH_SALT',        'Y.xc;aaBtUoJ@t&i$ bbyrK-K+bxnc5X3pG8l&c+HtoMr|5,]]$3ub_N?45cg%9/');
define('SECURE_AUTH_SALT', 'SY9q3O`<B,=;K@Z<A1P*[gxqRgI<ZA[4qiy q`HAAEc>|kP6V:@O|{WH~bzR02qD');
define('LOGGED_IN_SALT',   'Zyvexz}KQfzn.e+000z3sJ3e2X)!qi/cZQaHA,e4;}?~^-[j*{;hEt0NPSqhE!lu');
define('NONCE_SALT',       'f6UC?1#`R_Z)]*dM t+5:+l|?Jr06%lqaoTxBX%V93?M7%> ;v;{gJOPuT:.4:av');

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
