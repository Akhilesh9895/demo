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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_machine_test' );

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

define('WP_HOME', 'http://localhost/demo');
define('WP_SITEURL', 'http://localhost/demo');

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
define( 'AUTH_KEY',         'D!?3lHbK e{!wy:/5i{ bVlTo_2b?;:#9BSXdUg_IAN0cK6~On)xWHt,:f|]lQF2' );
define( 'SECURE_AUTH_KEY',  '77fB+{ E#l.S% eL8@wV6:ZX#:4!j>1z]VtrdasbYmb8rlGu FfkLk)yTq2qR$&3' );
define( 'LOGGED_IN_KEY',    '%3O2GD%udWDH4!yP4-ld5,FYJaIH~f-3Yw+>h+[on[[{*+p6W{RrERD5N)T0;=SD' );
define( 'NONCE_KEY',        'I=#{>s1:X{ffq2!,Nn/e:mVWbw*[/>nkPLQnWhE:1dN)a^18<0CkGgMi[x 7upAf' );
define( 'AUTH_SALT',        '(W-yaUJHx~fO^9d|<-bbXvedCl}U#UZ63z8U45dV=va{0X@3W;98C[]^ ku)d.;i' );
define( 'SECURE_AUTH_SALT', '5jVc^+MSz(yC%vWD*=CcHT#:m,W/=/e%W#FbEB ZG|Fjtzs[ot{.goI$`1/x7IH ' );
define( 'LOGGED_IN_SALT',   '2-Kn3$<-(IhES9Na4*=!bF}6X/q7c)>8SE?NpmmfDnNEie=Z$u<`Z-YU)7#/ .>E' );
define( 'NONCE_SALT',       '+cto|&s dUFi{ymEN31DF5>go5ezyK&aIQ]?QxYC~@|*Hewj]M52%=UAsz@5hha2' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
