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
define('DB_NAME', 'test_wp_funwalk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '7/TRThgN_u&B');

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
define('AUTH_KEY',         ',K<b[KQ;2{fh;2op@^zWNf9I~:Wg6!6mh4aX!.*_QEk[5+O~vu,BfG#OpId]*pK:');
define('SECURE_AUTH_KEY',  'SqJf,U^XZ|ruBNOhO:Z}uY2j9M!1.E!7dwHAC34Zda C38ft8{>gB]MbMTha%$dY');
define('LOGGED_IN_KEY',    '<&-N~g)IofknNP{u-<a`*mF(>.i]j?lVlUo]UJ53^oAsT3@nXC.K#K$[8p8+A!+ ');
define('NONCE_KEY',        'GJvUQ1c{H?-}[.i+clsr^w7=p0|L(HB/{Or5t<}qM=_2wH<2UE(>hw}K^nvvD_9S');
define('AUTH_SALT',        'Yp7O(Dx-QrLbIJ+7_$44c}YfvY+iG<PO1wGsKfkQpAIxvn7NxGDj_*Cp<V/.;Jg?');
define('SECURE_AUTH_SALT', '. w-JU#n$`[dM?WtV`&-IltOcrt43(l y&0%PfY)+@vJv6}>`KlJdR6zs^P(1b<5');
define('LOGGED_IN_SALT',   'n-|11$QV.wXc|FZCwqNrMW=M!^[a+SBh8ZG6fpjaRJ,p?G0y_SWA2B=X|dZmXNjU');
define('NONCE_SALT',       '{DY|]`kow&7R,B|?/-pBZNedbTWNBOtI:l%r#($nh-#+F>!#mT:0Iw<c/2Jd.D5x');

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
