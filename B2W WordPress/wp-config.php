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
define( 'DB_NAME', 'bootstrap2wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bootman' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Yy2fbtfY1ggz6Exs' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#jin^7v95E:cc8Yu*#=d@Rv4d_*vKR|E)G!qM|>-8Eb`/VSFdGgeS*E+LBT}<~<z');
define('SECURE_AUTH_KEY',  ';:-#(L]#0U5[e#rzuu[eVhIG8,}umtAx|?|x8mySg`,*JCtNY6&:T-AxeRS4BH%+');
define('LOGGED_IN_KEY',    '+Rnqf+X<I{`VuBiqv(e:-u6L-|^CWH%hh{@Xn.!ck|Dzu<,hn@7kk$ #W`|NCk,$');
define('NONCE_KEY',        'aYw_hyk7v6gh|Wa201!=o0+`gEq`]bd_-#AQ,XFX7hGQ {rT((<%/U-:<ecoc`c:');
define('AUTH_SALT',        'FQUp/6/,;Ir23l7Jo^z[$l8=Ua*&o28|>9+C X.-ytj?p+WCmoN9g<XT+,N#uxr<');
define('SECURE_AUTH_SALT', 'RDMay_B+hX=x A7y~(~=:8 8}2DMKRm&2oKU|(w%`-dR!D ^F>9DLKvfRg@B{XUb');
define('LOGGED_IN_SALT',   ')1u`M>[j%G*^B9Z@Z@,r>8HW](4It~ ~]V@8wJA6=|/3bXAdHn$Y2}fM>sKdnJil');
define('NONCE_SALT',       '^>lv{vmDA* 67I*aPhvS)N(7D~7Sg6W};$Umh/^j,_IqK9tI23`|GUaO~qwgh2#Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbbs_';

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
