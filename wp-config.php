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
define( 'DB_NAME', 'sisenorprueba' );

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
define( 'AUTH_KEY',         '76lD}|Ii0GRhHN-R<@>#s2HtR$^78fs~2-qgQMt/cSr]2bg!uTNW#j=/l@b*z#Vi' );
define( 'SECURE_AUTH_KEY',  'khgw{WI1NlEbUqX5`NcX}Hox$ZVPtlsXnRmL|3R$CUZK[E#j4&Vcr%gtL|gGU$~1' );
define( 'LOGGED_IN_KEY',    'eNh+n!x0z35;,FipK@%=mH@B8=}iSX@Z.Frd?]ch1?y}cC+J.:.c{u[:J=|.sv7l' );
define( 'NONCE_KEY',        'JP#tGZ#WohHjn5x+9PI^NzhBZFV5n-Iij}U&3je.:]Zbs!M+@n5JHi_$Mm/=Em@B' );
define( 'AUTH_SALT',        'nC6Z-4I;s9Bt9@fL&ZTC<n]Pb$$J^!@r?Ll7o(X$N%6aE0]gSlR3XXo<z]nK=$k6' );
define( 'SECURE_AUTH_SALT', 'Cv[^zI0#<up%DZ|&6qsq&u0k[^ijcv_p^[st.nZGBw96Fi0)n6KnVvt(HGgI+Ezt' );
define( 'LOGGED_IN_SALT',   '~qnC,]rt>D]#12*Y]O`uCK_}P~b$xK#sD@TE|.u5FFb)_>yzH]T}7]Wz0qU[ o)i' );
define( 'NONCE_SALT',       'JX<rU5)[!b%{DB@d9q?D+d$X?0cQb6$4py^i[@at&BX84[/Sr!.2DZmdnjB[h4Hp' );

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
