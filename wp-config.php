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
define( 'DB_NAME', 'vjisziqo_wp258' );

/** MySQL database username */
define( 'DB_USER', 'vjisziqo_wp258' );

/** MySQL database password */
define( 'DB_PASSWORD', '0p]A(2PS3V' );

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
define( 'AUTH_KEY',         '3zllht5i22nkgumdfzwogh0qwxw0zwftxufek98faxxrhishhuyucmmvgvxgddm6' );
define( 'SECURE_AUTH_KEY',  'bijkji7g30xdtt5pgc7mgcvnzrvfi4nptswdmixcssi3eeirnd4ek9h5mj7obzni' );
define( 'LOGGED_IN_KEY',    'jhonuz6pfcfcjjobmtdonblwl1b38fhwuw8rgrvw4jly4jld2pkr2mnxk8soifs2' );
define( 'NONCE_KEY',        't5qefwclyznevodk8pdl72tmt9x4bg8rg8z0tku3bcau9emqgg9dyuvjtecck0hn' );
define( 'AUTH_SALT',        'fwmvywvi4txmt7a7wbsd2erlrg2oqerexl7j6k6hvbv4hqtmcajrytmqtqnphwlb' );
define( 'SECURE_AUTH_SALT', 'd2voiwcwydqfkkkoowex8rdry7b3mddqdsfj4nlagiji2peonzvdqqojqhzsh0jb' );
define( 'LOGGED_IN_SALT',   'kkg5zby8ecelq6b218afmxnomzyh9pemmplngcdd658i3icptsnjzo1gkue1vxwq' );
define( 'NONCE_SALT',       'q8sc57ua8sjjsuatiornlcghvgoo8kmzifyxxbmydk4rhivgbkuxyaehmmikcww0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp00_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
