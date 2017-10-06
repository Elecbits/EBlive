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
define('DB_NAME', 'elecbksb_blog');

/** MySQL database username */
define('DB_USER', 'elecbksb_blog');

/** MySQL database password */
define('DB_PASSWORD', 'gtbit@1216');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'U5u!9cFHcwq koW@5}u#beN;FqGJC!HL#Ig+mOXY#].BGrICDG9r%5LrX W 6u@6');
define('SECURE_AUTH_KEY',  '2|DwMnH8=?eo25<_s$9[md>?+O<1EKBQia92dEH`AHozAB,%0b&/}}*M@k-Qq!z)');
define('LOGGED_IN_KEY',    'BK~DjcT{i!3.4g@]|]bYM3!Sr5M.M^zxmm9RUH=osLm.d6{pU]qd6V|lvjQkb{*R');
define('NONCE_KEY',        '?.,Jv22b,7qUvI|5@I$xGl%$r={H0qr 4Seziy/VT*yr>381X`r,#G-^vs<vJ<P,');
define('AUTH_SALT',        'nJ $cr_{5*IY>)y*%E3kxYV;eM/,Zv(>Gv8Yt[;X]8}832f#/s3LUEw% |u]vWTt');
define('SECURE_AUTH_SALT', 'LkL< !9?x~EsC>uCTs+Bu52[96Ie>H{,!@UuWWBw16RpSfV_n(1AF},(R#xaxnNS');
define('LOGGED_IN_SALT',   '_Q%A?mKg4@MIwFDTRiewMH5pY_J4qR96<Le_yiH[28Kcb5@^2pq:U{ec*nzOb)pj');
define('NONCE_SALT',       'qG(sn)(`jYvbPD(r9L>a9 ~NS4*PEia=pZX6MD;C(b_,NP^G#}?)Uq9.I<}Gd5b+');

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
