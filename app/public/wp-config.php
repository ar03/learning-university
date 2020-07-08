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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9Sn7dVBq0T/YqLDmjr5LXBYxjQE5OLA53cjPdGessXCD9aSUKRBvjJj+r1YPQx4xQ0AwquCXuKLSUpziRVFXyQ==');
define('SECURE_AUTH_KEY',  'WUnIaYg7qmTJuGeKjVcf1aUC3Ni4pplSjR4mtL/eLagrr+gNtAdu1Tgn4OdQPCZBr9GXY7y1apgRj3/d/iqvsQ==');
define('LOGGED_IN_KEY',    'c6EXOZm3XXHrjjpGHHccP04Bo06wbzDQi6PbOONABXJXr0GXXuTyYtjvJJQJTmn43VaL5Z/Ww8fERMNkKcUOjQ==');
define('NONCE_KEY',        'kwQ98c90Qpm1Fwfvuq/r+WhWbqyInGHhy8Heu71rvvxW/3t47M+xrMUvy5lc5JKcl+jmXsoePpmAT+SH5FrcMQ==');
define('AUTH_SALT',        'iajQKbziSDIwW61oEvXEJp0kXretet+bypE4F4JXCS3Pho1cY1iEbLLhdFbVj6UBe/HDXkEUJBmO50tWUApdnw==');
define('SECURE_AUTH_SALT', 'R30IeJPrWMY9NpR64A7mpIO7mgDDfIVJF2PjDIlRP/Ndf+ZLwJ0tEuo2R8sZkr4fAb923vjHb7pGk23hSJZdyQ==');
define('LOGGED_IN_SALT',   'ZWe5J8QIQM9Nk2BMuRuCw4soqOBW6S4yvPS+9CIL7wgFSdxu6sd4yjnW0nujk16PiEgCM9X/WHaNqGS6w51c6w==');
define('NONCE_SALT',       'ef8fvHFpWqaTnrB6KgXJJ/bqkswLtu4BCi/YulCFo6G2hYaZPqCLdcXkoaZBkjR/0BPrFClD/+HvuV27wVVQyQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
