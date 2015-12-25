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
define('DB_NAME', 'profruss');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'f138h5Yr');

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
define('AUTH_KEY',         '<T.;07^c [D1o+y3`!)bJxj=?5h<|L_~Cl}JFBcKoB84{2]oa=0o&Ey6UyyAj9Pq');
define('SECURE_AUTH_KEY',  'I:ExuM7K.iGOPrVm|.KK[)T|]LPuTX@_+OBl#3OM^?q|C>1VrA>K6(+l3=AsoC;|');
define('LOGGED_IN_KEY',    'km+BA}9Qw`ZKU?T<-Sj%m<Z ^.d(=1~&=_?JR{+>0?tQ*g(Ng+F+1.;-jf|=.2XU');
define('NONCE_KEY',        'bR/M<PM>(ms~S=+w.eYM.0|^q?ERGI~:0Af7:5.=t8Q^ #YNA6*^z!mMPqwl=k8%');
define('AUTH_SALT',        'J0L:pY+09r^Y|kn*MS=F$_I7`juWZ}XNhm{Y%89N`UvZLm-|l(QNZwKR)raJ+=O.');
define('SECURE_AUTH_SALT', '(^jEWl9Uxii$I74UL_u[49Y(pV#|(<l {vzzV?|}%ivJyKJ`[U|C1kA>h0M1gyvn');
define('LOGGED_IN_SALT',   '>Czg0o#?;ir$ScS6u=&MX[je%%h+)Tr$1T6Cwc)J8A!@K3%$<rIMBbewtz#Nd-#2');
define('NONCE_SALT',       '3eHE~AOL[,]n :-zOD5P8Mzj|@}7I8WDov~*[`r{L**_HY^U|FrFG5t:cF:~HQUV');

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
