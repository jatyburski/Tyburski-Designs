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
define('AUTH_KEY',         '8FQ+K1/pIqppvbKRA1lQ4zVhr94gNJROiutnjDI9uCEe5TMviGAZlYkQHHYtyFpwm6NO38oD7StN1ZjMDI8iBA==');
define('SECURE_AUTH_KEY',  'YvmUs1C/PK+hYYjAt8HxohwHRlnAycqE0cwFfD0TsphHNtyic2XLov7bkXGbSaylMHSXl5H4VAs1lytQRYwTQA==');
define('LOGGED_IN_KEY',    'dOtfsZn9V5jgPcDbtYAyHRJfgJu7i+E9/ejM4ozohv5TdlTgNDlSVA7EIhIUoUyZf6iCj/i/KZm2hR74Aio3ag==');
define('NONCE_KEY',        'BRxMdJn+AZdMeLaNu70mSayDBuyalPUM8/JZUdTUNHaDewIAjdWNEUSPLm0ysuj2gjanb/pz9rGQbu2oaYA4tA==');
define('AUTH_SALT',        'kMH+SZmFFy2+vmQslQry48dIyNqJHXBXxZ2IRS4uLCGVikEHsokbKC7s8VTVPkaqorZ1mkEF3W3PC8A3d9WfBQ==');
define('SECURE_AUTH_SALT', 'sfvF3Rz7MbyaWYbp0+HiiKxbVpAemJKot/33X/8og4idURW/7zEEKcwQzYwpQYW/9QKnzPW2Riw1xmuzkgKZZA==');
define('LOGGED_IN_SALT',   'nbZf7U4szW0pRk7yP3yzfC5upx56GwmcSetaAmaVlDXjFuDRwvgfkkjdwDT6OjgnFLVCmhOw7TGo/UcNjiQWAQ==');
define('NONCE_SALT',       'KXoHXS1zU7D6ybkghkQGcdph8arlXdT4wAPcV8uPOBpGEgaPpLWvPnnPO+fdKBjjSm8w9bvD4sg+jbrZYDA9qw==');

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
