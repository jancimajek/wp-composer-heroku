<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


$url = getenv('JAWSDB_URL');

$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $database);

/** MySQL database username */
define('DB_USER', $username);

/** MySQL database password */
define('DB_PASSWORD', $password);

/** MySQL hostname */
define('DB_HOST', $hostname);

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
define('AUTH_KEY',         'b46ca65bbe994494514eac46d7cc268d9ff303e11cf559d5673206a273e6dbdc');
define('SECURE_AUTH_KEY',  '3af1a4c4a512ff588ace0e3b0144212d34d263446becee2aa8fa5595528b11fa');
define('LOGGED_IN_KEY',    'e67caac2eff387b7d2736a6a6c0cab987a105e876bd3af43e8338b803c48040e');
define('NONCE_KEY',        '3ae2bccb24f9c4b38a9f88fb0cfa9feee787904b841a4c497f576758e7d2e1ef');
define('AUTH_SALT',        'e05b0ada4dc63ba4961e1d5155c5394f96c6b32ccdf7fb138056b2fd05db81e3');
define('SECURE_AUTH_SALT', 'deb9f2f4230eb327ed27b6e65b9adc4425223e8513da9a02cfbdf628c72a952a');
define('LOGGED_IN_SALT',   '8ea62e672277b402b676fed3c504982348838155c26e085b710ac750e1278c83');
define('NONCE_SALT',       'b9adc4425223e8513da9a02cfbdf628c72a952a3ae2bccb24f9c4b38a9f88fb0');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
