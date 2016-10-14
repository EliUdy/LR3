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
define('DB_NAME', 'wp2');

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

/** Allows Plugin upload directly to File server */
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fC){A3 wr1E8dkb$b>+?wce=I^D`x0Hlc![/oR#9]M!pj[SlcSWM4e})9?@6Ub}S');
define('SECURE_AUTH_KEY',  'nGN(j@-,HeizUJurT-67BM(2>}Wf^RVa ~={b? [x8:J,i>}u!4s|z8s~CIKqIDI');
define('LOGGED_IN_KEY',    'vwhQ(s8z9$~c,XW7/Z6I&@)%ss4wH+yO.KbN{WAq(df^uPw GuhR(< :B}b>HJ!~');
define('NONCE_KEY',        '%0H)Oq]6`6Uq(2/y60U4:y1{,BMy,!IwHo#9AzAW<`5BWEm6$u#mJ?tPhkh>WZvZ');
define('AUTH_SALT',        'xu447 oW7cQ%iJJenTFBjn[[Q&W.ta&`A:OpY9g>h`I@~5j6Q~2BPeDpQ*^zE1PX');
define('SECURE_AUTH_SALT', 'Fdpla>{5!ahKR7]xEUdI0q6f mwBf/IN`!t3NRc1}VlH:1Bcc#*4~Sw,7j&k=vR6');
define('LOGGED_IN_SALT',   '0QT$U{>:2lg7a2aUU>~Qf=[ZKdWPwC}ePjBy*g(#Jk@4)S1fN7yRJYG}HZTH~2|U');
define('NONCE_SALT',       '?F$eG8}!B$.RFIfCP&/1b$;.4-y[U};[L/#>7pfB{UXq.Yw]%$Tl}`QN#``dl_:O');

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
