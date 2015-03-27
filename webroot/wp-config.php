<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv("DB_1_ENV_MYSQL_DATABASE"));

/** MySQL database username */
define('DB_USER', getenv("DB_1_ENV_MYSQL_USER"));

/** MySQL database password */
define('DB_PASSWORD', getenv("DB_1_ENV_MYSQL_PASSWORD"));

/** MySQL hostname */
define('DB_HOST', getenv("DB_1_PORT_3306_TCP_ADDR") . ':' . getenv("DB_1_PORT_3306_TCP_PORT"));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Bfltzw6O;3)2<3|8kc-2 !-0<UHV|>BtG>|@L!gIS.<@&Q|g+dMHz5*T?][CLO~U');
define('SECURE_AUTH_KEY',  '{|%y.ag07v_?@-Z,*8[&OH=WQd,Qeh;z+<)Nh{%r/kTM/l23m-tKSw)]$2$FOl3T');
define('LOGGED_IN_KEY',    'K0DZ5T.UaM4T`Z#w]$+f:KTSoN-_2v#>IQ-kDYfi|k/G!W2L|>]k`]^bEucrpu]1');
define('NONCE_KEY',        '!no)%8J8P=26a~bLAnNyi:Oeq?DK@B}|A3 0$Ii jPb3oh]lS=|o`{Wa*j3UYCcp');
define('AUTH_SALT',        ':RD =4b.-/xol`hCDTltw~qtT<=KjMkSR6H+9<mPJ7),tqHJ2y[M=p[DjML~}PH-');
define('SECURE_AUTH_SALT', 'VI=#$vn4Hu3Jt@!.&LJDS;lz76-+~Jx0y!SoeeFe^&sdL`US-y)f_-K63Kg{^A@S');
define('LOGGED_IN_SALT',   'xX<!($^b|eC(HH1Z{;a]m/=i21gVa+?XrF9$6LY2tr:Wgf,-D`{qeo>&[Nx,z}| ');
define('NONCE_SALT',       'I6q.rn;).?X*4^?sJ-CwY8f2xfYJtE8Bu$aFHq|*PD4|B_4xk=K# WT|b[Z*qpr(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

$debug = (getenv('WP_DEBUG') == 1) ? true : false;

define('WP_DEBUG', $debug);
define('WP_DEBUG_DISPLAY', $debug);
define('SAVEQUERIES', $debug);
define('DISABLE_WP_CRON', $debug);

define( 'WP_AUTO_UPDATE_CORE', false );

$memcached_servers = array(
  'default' => array(
    getenv("MEMCACHE_1_PORT_11211_TCP_ADDR") . ":" . getenv("MEMCACHE_1_PORT_11211_TCP_PORT"),
  )
);

$hostname = (getenv("SITE_URL")) ? getenv("SITE_URL") : "http://docker.local:8000";
define('WP_HOME',$hostname);
define('WP_SITEURL',$hostname . '/wp');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

define('WP_CONTENT_DIR', realpath(ABSPATH . '../content/'));
define('WP_CONTENT_URL', WP_HOME . '/content');
define('UPLOADS', '../uploads');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
