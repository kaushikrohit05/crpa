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
define('DB_NAME', 'crpa');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'XN`_#Ubz9*CY?81KvzkML>hw(+ow.5{|NuV0h5&_F kK0J,LodU9Jlksdt{*0@ov');
define('SECURE_AUTH_KEY',  'XymS]z78}ecdIuCfi27C#|1pKX$Q5hC_(#>vsgeH4SZ1mF,nvSFC:M<;z7$Xicnf');
define('LOGGED_IN_KEY',    '|^pd*i_$q!Ve}{ttY:]7W6-KJS.9p$%;P3_I[!T_mO4cX93L?X.P/t}4+5ZhP0VY');
define('NONCE_KEY',        'f*>Up0: S@;bz~@6Wp[O!x|Lsdke#C,;e>f5/OTuWrx9ZARbs[b79mJA3:?C{qQ6');
define('AUTH_SALT',        '4p91Jc@hU.2oGhnEok2|Q*1[<wJ]AtWr&]~+ OIm%+oUrP^$Q9j}sJTr:#J4O;T(');
define('SECURE_AUTH_SALT', 'F*jMfV)?V8xLhJAZA]_qZ+~-CKJ5 e``FwLHMP]?FN|9=*0Wj)-nNco0@d0@_fB@');
define('LOGGED_IN_SALT',   'v@eqWzal4o-q~gu..rFZeI5V<@(oCv3<@i.oax4IytH1J/Jr3~F0?X+6Gkqp&]!#');
define('NONCE_SALT',       '0]v%:wkbyK.#Ld;:UA&W6ItHD.D07q~$iTwih4FmMF^;./?STLa<W<XXGYOo)h/B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'crpa_';

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
