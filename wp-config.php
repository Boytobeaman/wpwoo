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
define('DB_NAME', 'wpwoo.com');

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
define('AUTH_KEY',         'r-ME>.t>C.$d3`qBT*&@7ZjY=YZJoWZn|HC-*ol^%K,GhXm$Mz,n2uE=?pQaN1f@');
define('SECURE_AUTH_KEY',  'jY0zBu+;~ADdn]LdR]Z?N_{G_2R1{2L=&!$%^qydh3yi<2`qgp`q>7;7`xoy}!L:');
define('LOGGED_IN_KEY',    'S# V]$-P%_)QtH$$P_`!DX,:Q$;$1wDbCP{?.ieXnj0}}B:7BVvYDA.SeUVSY~r[');
define('NONCE_KEY',        'ZS@op|x(/}-&W|]`^XK-h(P*?Z@AgA_#FKp.Z~1tz?r^2n8gC;c*b7nqvX9b>i0B');
define('AUTH_SALT',        '0m7(U`)gTmcvL-!A$0al5~Awug|_yTnn4z)6X.?0h/zTkH!p2vr+mKKEC-:]HXcx');
define('SECURE_AUTH_SALT', '{O2v?#f&qJF=;B KW)&tYsK/nv?I/*U^*CKM,b`_1@! :qTVJZyD&P@|/s!N*)f<');
define('LOGGED_IN_SALT',   '+n#Y!Uifz dB7w{n)BQq[}UFFP1*]P2A^UZM~8|Aody322N:p,>o$sQ$2wL<C:<s');
define('NONCE_SALT',       '4m&<x{qa/U{NaD-kW/Wf2{`~S3dgIApL0|YzZR{,F68|BtBgYA};ZpyCWW9?]@n<');

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
