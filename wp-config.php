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
define( 'DB_NAME', 'phusingh_db' );

/** MySQL database username */
define( 'DB_USER', 'phusingh_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Phusing10942' );

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
define( 'AUTH_KEY',         'LB*t5WP &:yy.J4gJ|,r[aL_yUTZ42O~CuLb9lXOZ7(Pk!8_<8^l:)3-Cm40Ps9l' );
define( 'SECURE_AUTH_KEY',  '_zudT9]<.^L1E~db65e/dg_8YWh)ELz-BpUECJ!sUSWN8Hbom[)pe&z,sZj9I.#$' );
define( 'LOGGED_IN_KEY',    ' UgP:AV;0<;Vb}U8B_9`5O*T?w>%s8}g#3=QOY)._><|Vi>bj1b^OAF2Vdhp^uoc' );
define( 'NONCE_KEY',        'j<W9){:d!3mJbTFv|<9>;$MQ:FUWS ]eo_noWdJ$l#]*`sjE7F?g[*9mkdN]#B+*' );
define( 'AUTH_SALT',        '6i9Q{i#W;)k}Bc7>2}5_Uf6!4w{UTYHWpQ4<DhdcP:B=vOTipMc}ix[O@HcjAo~j' );
define( 'SECURE_AUTH_SALT', '$T3S=p!<L$|LhMsn+2G4o(yV(jdQK(^Vk6~v==oACjR[r2T][gZ&k?^(H@T1*3Vk' );
define( 'LOGGED_IN_SALT',   ')g:[v!II2JlcjdO/*wVXwR(Z_HSsW~7uaoOc|%jELjkI8FZ?6`O`m~[H/K &]H!F' );
define( 'NONCE_SALT',       'P@pl2uXu8eGfjG,HCqkW#_,1T%J9Ke>cMany`:MCdn^].)~wL6P3g@X9QH]vM]Aw' );

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
