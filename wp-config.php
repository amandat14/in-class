<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'amanda_tomlinson');

/** MySQL database username */
define('DB_USER', 'amanda_wp_0315');

/** MySQL database password */
define('DB_PASSWORD', 'UdcEmew4GJ5znmnu');

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
define('AUTH_KEY',         'QI?#cW0%p#P)C2Pb7DoE%0>&M!ealCwf.nB_tXj878/WA}.NwP)aCEjqNz%jc)aT');
define('SECURE_AUTH_KEY',  'd[+klMK[E;%0.X5e`HbtLgF0>vooN21)i=&b-@]LC-Y/T6^+FZ5*LG^!IreT[wA7');
define('LOGGED_IN_KEY',    'yd`/c45ABN-1bN+dlWW0xs3:0b86I1%G)?UNw*|k+<4, m1Iy0FM7T<,.}%t=j8]');
define('NONCE_KEY',        'f*u!-V|-R:#4`?|scP^{<L}y#}-Rux.wB`d$LZNr+a*?P+oE*$nA<b!DN)MZ-mI)');
define('AUTH_SALT',        '@m`;q,LuG|*iZ`r96ZaP/?oz&>iAn3w2+Ykyx^>@EmE;A$-(=rvIVt2OAC3L=CYr');
define('SECURE_AUTH_SALT', '.F+ [RhM5^!y30ng(7Fi,7Ax^5U{1vJR^xNvx|P,4Y0t2Tyar3tLTTK my{p.ieb');
define('LOGGED_IN_SALT',   ']X1yVj!T~Hz^6gQ#WLE)wz2/M@hO/p[5ILpnUQElAsjN2KEu56HFxNn-.h_$$XI#');
define('NONCE_SALT',       ')3_dVU:kIENPN`<nNo0T:vXQ6Ov^ewDfFkR@]smis*DwmSua5GNU?LU+0Y>tM],;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'monsterpup_';

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
