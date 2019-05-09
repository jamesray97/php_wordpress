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
define('DB_NAME', 'jamesray_wordpress2016');

/** MySQL database username */
define('DB_USER', 'jamesray_wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'jamesray');

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
define('AUTH_KEY',         ':?2R;u5x{8(D7<n]H~)+k&a}He(9M`7hc9wbSM*-CYsTH>@F+57{~e>Hhou]vR):');
define('SECURE_AUTH_KEY',  'qx/o~6gg-Z62J[fVMVtVmA,bNc%dpsYcV?Cj`NuEmM[SNK59P;2mtk?jUxVM *o:');
define('LOGGED_IN_KEY',    ':#DN&8{|f1u6M.W<B OxNj`yf$/)?1$/aCSnLh4=PnSIFuOyeEIt*{xub8!Bha (');
define('NONCE_KEY',        '-,o=:i60mqBBw^T)DR m3$uK{*=hl@>-i~pf[&`c}X_.bTAA^0}UWWkaogVahxN^');
define('AUTH_SALT',        'Hwfl zX2oEP[}GcCm[`^O.,+W$%i(g#Qk/->X<!}>cM2$KSTP^4>-s1Piu8R&5xY');
define('SECURE_AUTH_SALT', 'MOWLxZ o%Oi%PGQCCUFEOE(VVFYC-D5F4M)cJfuofDi5L40Wx.z__&m=rc9V`V;W');
define('LOGGED_IN_SALT',   '9etxr2o56h3|;E!2qAnTW?Hv5oK|m|%^F8MX8,--toSA(gHhwbsnt!usYVYd_oaF');
define('NONCE_SALT',       '(c9}]6GE*x0wVLAfGw1<Og76fA9piJYUrSr|wf[53S*7Rj,amNKL-s[x*7./)&$}');

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
