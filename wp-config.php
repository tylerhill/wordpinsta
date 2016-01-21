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
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'r7g$P<^vG*FN:+_ [m+d&p.RANTPzj*)1E(fjAESvfm& %8~Mg-5<sFs@4PLrE_`');
define('SECURE_AUTH_KEY',  'm,K@8p)o*][.>SKl/G~), HNoZho5O*5dHp7Cqo>!Y+2W7WVhi;wZ>0}_kTQ/(G{');
define('LOGGED_IN_KEY',    ']k+]*659|0%^PA _`rc8NKX(yLX3U}g@0q)v|ABq-EeLDXK,+Kcj5 >RH% DG+Qy');
define('NONCE_KEY',        '8<b(Y~1V-zz4]$!13~4h^9hjQVoc+6j,C0aa_-15jeQob}g&:^GS,@OgSi`&rpI@');
define('AUTH_SALT',        'X&f`Y1U24/,bMi_Z3kTwE[Ria=T3@n;A{R?zOMUX_5m?_IX~meLi4+,tdnU711]A');
define('SECURE_AUTH_SALT', 'amG~M:+-+vTSI4-}mLbv/@j.yDN*d4}MBw$*H1)<y>=k=wLw>_{VOoVs&__34=>|');
define('LOGGED_IN_SALT',   '^J -b:s8n(#J>7uxbK!o`G<IKPm-pE:ZJ:*O4.@HI=CWgP+Si}-=t{D38=^5hw/s');
define('NONCE_SALT',       'ZfR1r|zI#O/ZiFVUlEaJ5**s-qsSO; sI6f[K&jVP.ecbQoDlh>Vc8B`5LF)<W&;');

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

