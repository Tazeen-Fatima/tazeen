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
define( 'DB_NAME', 'tazeen' );

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
define( 'AUTH_KEY',         '*)Y0.](O 8Z&m&=k.;?$7$|jkYkb#Sso!-9I{:/#;d}5*SVedME8nt o0,8^qDez' );
define( 'SECURE_AUTH_KEY',  '~VA>VQ[)sm%gYFNo+SSKbF+~ew%R`I]I4i>he(X8OsiHUj4oBD1wU4fauH$P{-xr' );
define( 'LOGGED_IN_KEY',    'B[^a.KskBnV[&b{RPpi|DsA:Gma_~Mw s8#/+#/Hjs>DyJshWI`{:c`c^**=d-Bq' );
define( 'NONCE_KEY',        '4b,d-#.K<l2o.]drl<.}ZI;+xIvZH%x((dEJz;&TUWif7Xj,??f$bn$hguj3Xz3[' );
define( 'AUTH_SALT',        ' cI=Ac_+NOb?g0+Z0>; YSd e}?8A~4u&-8q)p>!<Ma_x&>?wIwcm5%%y+ZiD}KX' );
define( 'SECURE_AUTH_SALT', 'r/P{os5?r3F{p(S.( !c[-2Bo-h9PoRvRXQ5i&0wHuvz{43R8L<#  84rr_S~N %' );
define( 'LOGGED_IN_SALT',   'ie2k4}49CA&yTF7]H(6r*G`6/Rj.ey_Wzo/`.GcBld7^c<stn>Be~EQ99rHGw]_$' );
define( 'NONCE_SALT',       'GtHVm!c1=%7J.0=u<&qHi_X6<U5Vm%MNy57m+.Zt||&Uns-DjH?N]e#(_<}-KrLT' );

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
