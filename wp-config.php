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
define('DB_NAME', 'telehealth');

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
define('AUTH_KEY',         '?+;oh-W@k$1d;RLm#w$ 7cyjq#@W[a|5MO59pPaj7,tdod Lre8|C$qgRdj`suT7');
define('SECURE_AUTH_KEY',  '{~=Rgvd):F9;t6#E0.Hke`ZDmy!qg#wynZO,<ob@|.TWK2c9c((?VQ/n}oA!6k~W');
define('LOGGED_IN_KEY',    'wr$i&p:Dh,}#p:H=x|];sg.hI7VP$Z4Ic%/9FdahAJ5L(]i+3@YN-E^o>/],W}LL');
define('NONCE_KEY',        '&tAeK;Yxz}cGFVwsWZiiqXTk)uhujc3*:N):VT&i:Du]oI0|y#DiLgr7SSrE1_=0');
define('AUTH_SALT',        '->7*$$*]3<(kX4srM+e2KmgB]S?{DdhrqZU_ZGxdYm-9]}$zN$,u#@Az.#[>oKP&');
define('SECURE_AUTH_SALT', '_+@+!aHc8ty@.02~yB}Z&VwKQ3$7x??aj/`#I[GM=Tu}0eH@4]W{stxa|G1/=B#^');
define('LOGGED_IN_SALT',   '%4C/hkGSQprX`|NZwZGR^1L7=4q/5V!Cww}_:<gxQ*cW.j4o(^,S&3M?X<*jY{7<');
define('NONCE_SALT',       'ahPBFiJVrpgskKSad*17P`a3aEP5pT(PlPGFMoi^<FUT-WaHs)JCi/C,.RQ$Ds4{');

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
