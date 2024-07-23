<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'PluginDevelopment' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':;,@M-~O(Wh{fnIb}`K|A3st?* gQ})_e:AS<8/r)zEyDbAEQcrO=h!> ]{>-s9:' );
define( 'SECURE_AUTH_KEY',  '+F9|>0X&)Kx&HF{%KhKoeYi-G.e*o%v{:3hzdXJI#yc2J m6PUO/m!;jdHNZc:wV' );
define( 'LOGGED_IN_KEY',    'P7e|#(MoeHc~S=O.Mh&U7d:?eb9O^|~z.~*j{NP){B$jRH,#NV$`;6+ijl,[T_<C' );
define( 'NONCE_KEY',        '[EZ.J1qE+2eEDr(/NmVtJ1viao`Pe0+0n$lUxl`H+|Xn}S&9$|%Y.v6xZ/agu(@[' );
define( 'AUTH_SALT',        't:gR6I8?7dI[6qO+ig,n(hcgz5qu2m*IRSeVX!)QV-n!p7?)QSkQRArxFF/1HNE{' );
define( 'SECURE_AUTH_SALT', 'j@oNOr+$|j!W>|vai~9V+2A#ZZuE0QCJvA{IW%%s)$)-:$n#&qZk;<5v<4zm.J+U' );
define( 'LOGGED_IN_SALT',   'V:d#/:yO=7l<UG#4Px8 [@VapfNLR(^qgVNIrmEoAb<3i.5&5w$^Ms:pfYDHn]/P' );
define( 'NONCE_SALT',       '0Cu7MonuccbUOI5,}B`xrw90%gkWFYt]EDI W;t?R=mc?3&T7K`$k&#2cBgay@5s' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
