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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'mBv>Jk8(]JBTEv-3y>0iuH<s#,xL1E3otkg<K!6P dj1ARbxlKdn!X4]W|V0s1x?' );
define( 'SECURE_AUTH_KEY',  'K/pK6{sGL vV4kIL$6Y>+UgHt{eO@]VpXNjYQIsc&b%8CA)N6!B>& ?0*AeE_8$+' );
define( 'LOGGED_IN_KEY',    '[G7j!]ioZ&jqbliMB7YSA=qt3i,i,M4eTr,jB{r-bC7X>EX2{nZ/9.s1iV}Y;FBx' );
define( 'NONCE_KEY',        'C[xo~+R>y$ZgNGVs,F2hbEP2VAO/_2LClRb*C8K/+26EilK!iE]8zJa5?;2qY-Y+' );
define( 'AUTH_SALT',        'R |Ow9C80,;Z:,%bPHb!X&]^2Y N:*lw0Kcl)1>08 6av0tH-*:ICdfy:!=d5[Rm' );
define( 'SECURE_AUTH_SALT', '!&3yi-xL+A&;VCW823Mgl#bU4?3G!h%|43NB-L|dp?v|}Yx(Ep~7bDDk;>7wX/Dp' );
define( 'LOGGED_IN_SALT',   '/%O]y#/L+8y,gS=*e<Wsx[zm[[VyEni|A@Nk@8-x.**[rG@Rqc3,i8nf;%,8:oA>' );
define( 'NONCE_SALT',       '$V[o|lJ5lG[IY-GZ#c0$sj8(sA-x; k$<f`l/+iX_I7Z)pdWs9,>B [w;PT3q[B.' );

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
