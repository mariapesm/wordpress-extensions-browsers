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


define('DB_NAME', 'website1');

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
define('AUTH_KEY',         '59JKSD]SZdu>z}WMSsh)v{rCGa4ea. d8Nu*}@;u,rdn$6Erf~sZ8pcU|&4iT7cI');
define('SECURE_AUTH_KEY',  'n>BN=4,C|bD)JIE|&CV`Rf19{i{h`Z/`qoY,s[!|7>K{,)1Ltfo@^]Q8I>iK(}+Q');
define('LOGGED_IN_KEY',    'KNT>:YY%RO]-I*UW]$VN~;BFcC/9zO;QuG01SwstZ [T%ECtAiDR)Cy*.$+f:=KS');
define('NONCE_KEY',        '7qA< WG#&xtbG*]YZzn;4x6!zw)+96U5_tlA4nIqy9%dnAY}n(_A}s#E/WBmzi6T');
define('AUTH_SALT',        'G8jLZJ1G5td!CtEq>Tjo0k[M|2)oUe`yY 7;n$7!so4m/mx*)b])Ie.5HJkOp~7&');
define('SECURE_AUTH_SALT', '$j}&[/`qw=6+P(rIQx#<m^U`F5IDT{%p$fm2r9#XOdNjA%VII_/,*M,50BGl_%Cn');
define('LOGGED_IN_SALT',   '3RPfNR<d:BHTM}{31 ,6Fw4D>V&JE-uu{Dq!P.[4/0aG/[J5H24;iWh{qJUGN1G0');
define('NONCE_SALT',       'h7uWWHr2 kJ?Db`z6eG8_*X4rDJ#=jq0hFJ4JI*m.zi3Q^LA~xttF|(_v!n?Fy%8');

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


