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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'potc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QmFJN%&TW.|Ux}cZ%wp!rGZqyk7,aa-Rr6Rs[mp2)15N?Uf`;k@y)t|>4W:Y`2pi');
define('SECURE_AUTH_KEY',  'jSy}d;!>@r6p(ot7!NR!k;CdMkrq7P _L5_|74(?EF!7,odj3J3.2!Xl(p&cm1^u');
define('LOGGED_IN_KEY',    '@g%(d_1RjZ9{(),e/&Svox2d;])&{yo{@wpzB0PjTPdq@~E]c~D-43w+F%/%X_i>');
define('NONCE_KEY',        'woCYA(|%?aUWKN7?1D@Tt8s5C&q:4HGwj&x80x-@ukd,[n.zmYkSv3i]@d.im%@a');
define('AUTH_SALT',        'o^]jby=l!H7st[[Ai%GE7i89o){=20I4`{@1X§7kk}PW§hCj<,§7jEIGJZ@S;(_|');
define('SECURE_AUTH_SALT', '^CXZ@RuJEf8&H[M>uvy.;])|HCIo5z@zke]zeJUq4?uN_K,<=,C=§FpF^I:4G1B~');
define('LOGGED_IN_SALT',   'J<PkbZRK]FEEv.9A)!$6uWd,)g^KF/XgB-!k9{WpABTjn<?9kM]1jY;qw&,R=6eY');
define('NONCE_SALT',       'p(wOA-W>!r;;@9u?TGEK~zUeiI)8Ftg}2&=Ab<!<]!@Zuj-[5YgNo0$Y/Iqj9/+T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
