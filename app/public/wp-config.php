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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'JxFa4/8NPct4clarHuKRYVk5fIvp9cIOHXJs/D91o2RBcFWoiZvNiGg8BAwSwc6LO8kFAYl4bNpPfq2Q0cZKaQ==');
define('SECURE_AUTH_KEY',  'JL7l7DyuE3lKtMBVoZr5igjczyFcXFgkur3pmt3i2MfFGHPa+qwVxpAKcXHAKq/TVQ/AKY7vqD21reBzTAv0Lg==');
define('LOGGED_IN_KEY',    'XBDE965Q2tFYqsuOgGUhMcBLLU6euEfO/xZEZjwMI6k884s503IeHKs/6Sj/pUS5D1VHNvIk+p/UP5Drj2DFlQ==');
define('NONCE_KEY',        'iYTNMQ7/JQS3WPflbkLq8q8e4LGtbT0yMLgk7VSz9plEsQ9wV240LX9VeH+VzwKAmds9ThPSK5wvEJdyzjJgIw==');
define('AUTH_SALT',        '/PmzBpp8Kot3Pbo7mryYy76dh09wd0mwQgRhzI22YtJx/0i3g+JvtYFg6KViEo9yLaruhEQXLdfuKunORcZcAQ==');
define('SECURE_AUTH_SALT', 'Su4QQLrxjsku6XslkGRC/NDbmuaZ6TaOtQwVrNAH62lyY3JXhVdB0B/cusqMoJv7ok8bqwc57WmFjk/Vq8qv3Q==');
define('LOGGED_IN_SALT',   'HNKyuhuMaeHQ3J2Dky1JYiq9quTZHFGsIrOTDJWHOrSlbw2V2gdLWLc3e4pUdnSmxIUsOB3VyIAXJgND3FmAkA==');
define('NONCE_SALT',       'XExEoH88r07GctW1daP9RcHXn/FvwB981RQSpXKEMqXoNdhbNUXSftiTM8JDDn9B30wWP8nvWH7iL3VRiRNFuw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
