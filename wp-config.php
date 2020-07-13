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
define( 'DB_NAME', '8taj_usaly_co_2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'r4*b7NmN([u.S%,em9YZ(G0Ysi6nh{gD5BP?n`q7vzrnjH5`@*Lo~Uq&1znNirBU' );
define( 'SECURE_AUTH_KEY',  '1:R$vrFHGhv4s_K=x}{=36^T=oGRJw+}[{t$F}jBE6$UuQB]VTqDwWZ%^~>FAR:P' );
define( 'LOGGED_IN_KEY',    '9@^*htuoio3$wY48h Iu5QlYa6~RimSrhtblyBAG-aq%&Un8f)6p0z8]3VX%}O3O' );
define( 'NONCE_KEY',        '_jVb8o~<]3`_w0K]s~2F?<)0^&&F+YL%]UJ9h=L5(C7]YL-p!bz{RLP&7w*d1dzQ' );
define( 'AUTH_SALT',        'U~!(`~sacT@i4tPb X($D;U4@3hFwS)eRFokIL+Y}Fad]BXmEPgc!S(B[1|PWA6~' );
define( 'SECURE_AUTH_SALT', '4V9TORlZVCA% </MZ_OXRN@YFI)~,XX8{/_iPDkw~!Zl4=LW|)>l:m~v6u9,l5n%' );
define( 'LOGGED_IN_SALT',   '>?oQ&nk+),Ak~_!mvrNuny(Sn)?#.^ouW>&cjBRL7fAZtk;Bl_m);ViRd~Z2N*yW' );
define( 'NONCE_SALT',       'I-0^T.*Z}Rgg+I(S16+v-^6El!pjDpo1cXzstv|zZu_Wm^VE]agg*CLhX1B]#h7Y' );

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
