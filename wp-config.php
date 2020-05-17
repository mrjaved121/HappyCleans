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
define( 'DB_NAME', 'happycleans' );

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
define( 'AUTH_KEY',         '!Bq&G-HB|P}PL9 B>yv*iN>cp3r;=)l)H!,Jk3r7P@T2w,yMq2?gcKO(%khpv/S|' );
define( 'SECURE_AUTH_KEY',  '^Jg4jrc%ZT6)m7PrpEkSy:}}1wL}W4jMEyZ4a|KGpe=DS$D_bDPbG^]p+c+b^J= ' );
define( 'LOGGED_IN_KEY',    '3;O108Xz%|w8O{~v5W}T>rn6N!LfZ=D467Vbq>{~#VxXAAB#zQMKs[6BNYB<BDbS' );
define( 'NONCE_KEY',        'ia:@:.=8]My8+1l%>q+1,A,@Fo4)xUA5$*LkGyq|$M-E^-K_jF+hX,:fCa=>DZX9' );
define( 'AUTH_SALT',        'OQcC#qBC&m~*?Lfx4AD[l*7VMNIZ`/`nQxNC8|L46IA{5A%2}J#9e-FYY,@}REp7' );
define( 'SECURE_AUTH_SALT', '5Fos#Z+UA~_zp+DGh*0yP]jbuI)@noWMOz>^,.x.}FTmBq@nQZ1(;9&]0nE4rlM2' );
define( 'LOGGED_IN_SALT',   ';ll1kKi1saPF@Jm~1eHUh3LhE`GDFT,!)$:^urSt#SQX&vZBhFf$R7+*7.(7(JW*' );
define( 'NONCE_SALT',       'yri-l3f/R+Rr#eY<u9jIDH$wewq3&4VSL4hWkIBSOL~eD^nj;?(q!T6hsr=i)Fsh' );

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
