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
define('DB_USER', 'wp-user');

/** MySQL database password */
define('DB_PASSWORD', 'abc123');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         '!;>l-S,leU}h2Vx<L~R+he+t}-XSw<&IXVC`xVjR}L`2yMA&qUaphU&.s<.GWboh');
define('SECURE_AUTH_KEY',  'p65c6[:,Fk-kS!|qU] n[]MIHXx~zDb$Gm*;en,X *iJ!sUNzn}hy+6suZ+o:Z2o');
define('LOGGED_IN_KEY',    'KmYECJ)WF%|FO!:1!n-h32]kD4ff!g}C3Tu;6Kcy2uhoIJ$vOtbkwy(p.[`KRM^C');
define('NONCE_KEY',        '{cDh`H?Fy[6c=+4;U/54OB[O? % 7?2[fz|NGp9o 4i1HG4v{L-RB`,@VM7`nS(:');
define('AUTH_SALT',        '%$tMkf5b3 4D&../$J-~0f]Bg-=DY&ntAm5#BF{Ky}G#pI(9m<:#R(8=l@[}LC|<');
define('SECURE_AUTH_SALT', 'whS{ylcE`gI^^JS^p(]kll*h~e~.q_2)Jy`Q!]YxYnMYO#wehmcHkWH!vSr67Wj6');
define('LOGGED_IN_SALT',   ';Lv$nLJur_FZGHmqMu|g)_aC#wLdxo];7_P:.gZwnEM$zoU*OeZ[:u{7d[ZcbJTV');
define('NONCE_SALT',       'o%dzHFSKpba92(u8BD o6FhOmU|x}pO08|yoypc^<a|F&Pw#k.u3=Fw~DHzi~ry&');

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
