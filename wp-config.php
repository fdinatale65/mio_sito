<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mio_sito' );

/** Database username */
define( 'DB_USER', 'manager' );

/** Database password */
define( 'DB_PASSWORD', 'Paperinik65$' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pmgi32cxt9y4miufgq9cf6b0p5grpbno5ynkpssrkw0vzlm9ap5bto6wzhrywqrs' );
define( 'SECURE_AUTH_KEY',  '5a4dvexpdh0wml8d9ekrtdvmm39sqyfgv7rvw3vrr1kfgvhuzxxeiwfxww8jfddf' );
define( 'LOGGED_IN_KEY',    '5aebosjtzhe3wpn2khua96bozo2ljdzxakhqf5br2kwbjey9p4uvnluqkg5tp7ca' );
define( 'NONCE_KEY',        'xez3cls5znflg4x2tiip2ezerijhbewodw4vkdc48rwdfgtudsiqzb0j8efnnoev' );
define( 'AUTH_SALT',        'u69thxotqp4d0tz9cj9qv435oc04zj0bmbftc6thzwkbup3zceqhzzm9qgiqmspa' );
define( 'SECURE_AUTH_SALT', 'sp15xt2f6or90goraebcw5edrtvxivh3g3vgwxxgkzfjp9oy8h04thno1j56rle7' );
define( 'LOGGED_IN_SALT',   'oplkyhabtkn0wwu75vjje4sqwpb1xnfswskqxfdumdspel9ilkshcu1ribfpvl0z' );
define( 'NONCE_SALT',       'wb92zfaz9qhte4v1mownsyvnlozoayfhttxsdvpd32nxu9nn1w3vcobycu72qcyo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp5o_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* define('WO_MAINTENANCE_MODE', false); */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
