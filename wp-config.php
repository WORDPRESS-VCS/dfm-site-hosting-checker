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
define( 'DB_NAME', 'x-wp-plugins' );

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
define( 'AUTH_KEY',         '_ugkqH/Q-sju!KqKsWR~%pVv*.iGa>0N&kxNa <Gq%RE9HZtM|,@ojFX^NZS^LV7' );
define( 'SECURE_AUTH_KEY',  '%`@5yv</34{Jwwfk<b>T+MUAgjbo{b_7}jr2)6mDOcrL+*G>8/8bg+2hA71Q`[vl' );
define( 'LOGGED_IN_KEY',    'q@T2RjawusJa2&X-8^K%_o`L?ES*+5%A6q4m@{i<1_iTGH}cHL#7Am(E>}E3lHAQ' );
define( 'NONCE_KEY',        'gyZ%t:O!bb8>Eevr?h?}6*InsD.82R|bA~/?i0J&r s=3WaX.oDYhPoCz(lse@=^' );
define( 'AUTH_SALT',        'lU~79#5*K1 *mWdI4[Ys{v:Zxc/4rHq#J8tbIfMeMdEBK9keD$tQQUf<qbclg$Ym' );
define( 'SECURE_AUTH_SALT', 'FUrkx.U98>y$;!6i$T.6I_KIaY57o[-dD~_/34!E!!`&|%LP0]sSimQ])UwbT!<=' );
define( 'LOGGED_IN_SALT',   'I; ]M}1naS&E+GOx (1/57d)nsx.Dx<xS$!nv,f[u_A]] 5jyB%TkwBwOiH:5--z' );
define( 'NONCE_SALT',       ')Q&~l k-mwfq$QTz /mt;qV<F?K hq55#`Ac=Ff9r?jqgDPRrU[C0lj<M:6*2}?B' );

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
