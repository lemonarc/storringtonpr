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
define('DB_NAME', 'storrington');

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
define('AUTH_KEY',         '117.FK4XXk^Isibd9#D:.9S-r,C8CCBRC5xJ0XN+,u@l=-5&R(49^/-oM~2()HTq');
define('SECURE_AUTH_KEY',  'Y=4q-&]^$j^;NrB) D1C-PpqJ{lr9zP j}%7Q~qQt^iI|dyA]e9[|?kBzF}PaeI!');
define('LOGGED_IN_KEY',    '0/pgxdq*pn?2Ol3lrY8P$nvCyAF(42:YlF1U$9}@TJ[l$suj|C=f)1nYt},yg9.t');
define('NONCE_KEY',        '-Y[}Jh29C]s;}~Q>^YF9liuZE#L#+a~2brunXS_S:S<MiH#/KfSy^lfc|LFL}.:}');
define('AUTH_SALT',        'LdHVizh=J;#x<G`arw@`rF{.oV8g$$3FlhWHy3h0bd4sCN|)5ty2bMMz`[0azl4I');
define('SECURE_AUTH_SALT', '5p[E4[ry}XL!/%iO=._TCP}a!7npdP=kQ7S/-W>Vy U-CnVMy-2r|NfB:x=X:$dQ');
define('LOGGED_IN_SALT',   'X3E:_~w!xS!`Y`z97,`f8_ZHJ[KQbXZ&FAE`#L>`Bk#c3NClY[UL#EneX+),{2JF');
define('NONCE_SALT',       '(m~KyS/9wx0GgE5C,aX{Y,bL.g~AJP-]<DFB?&Oy/qk<I`Ggpv4zQK~RT AofR!&');

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
