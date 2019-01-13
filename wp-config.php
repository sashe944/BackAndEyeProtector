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
define('DB_NAME', 'BaE');

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
define('AUTH_KEY',         '+*&~y~un2p.FV|5~a(u^j;5oMG0[ ITghk*YNw:(CK05mAO%>q/uK7eiF(;]=fzi');
define('SECURE_AUTH_KEY',  '#heRGMQ)2HNM%A#S_vWPOj+vy.NLbn&e!YA=b&N|k<l4}p 4QE@j[]N^:W7d>>Qp');
define('LOGGED_IN_KEY',    'aTs.qD8$g$Q%6g$Ox+Q^w|a2m3~?R/BX>sNXV@9A^Ukg`J7o1:Md?w+3]gMP@[If');
define('NONCE_KEY',        'G338`c#l:1k>_^/5I<Aj9 `D1bDkZ8tj&nBNOZSjW#l6j?`BH;0hAzY24d%#Jh!Z');
define('AUTH_SALT',        '[XwFPcIs+Fo=I#AF]ja?:t75Y4|CR2qDn0zi7oYu~?egWZYP8fb8^u?;k/4Frb}2');
define('SECURE_AUTH_SALT', 'TND.F)yjAk8d!THe~;~joqnD_ NqgrJJzjrc}:YnEZm3XH/:pq7$}xeKkiKa2dF+');
define('LOGGED_IN_SALT',   'B#|`Cy1a-rWPLSIhDCCQV4nsb/}UT0rK$WmP`d}e(7%$}Un3Wobc,/sgTbk~;DAl');
define('NONCE_SALT',       'FYqKkWX(07Ue&= Bz0qJ0D>PJNgjpoGq3*z3]nYe~WnrTEG~J*.82}|I1u}w`siH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_localhost';

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
