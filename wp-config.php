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
define( 'DB_NAME', 'elemntor_test' );

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
define( 'AUTH_KEY',         'P_7zN*oFgvsm#+}fpgZZR5Zi,GUpW*cQ1U<cxGqakik&-n=u+H,M#/!1^}?}X/!v' );
define( 'SECURE_AUTH_KEY',  'yKv17{x]2eJ($~{~^lgQ]y%l7,*b)DAc%!caVa.%vccJZ)tS4>9<|Zzv@GC|0OOJ' );
define( 'LOGGED_IN_KEY',    'yUX_YW62Bw;[[bP`;N`%o^gC.t)?har6copv&Q#NiH5+Vj~~KygY r2_O%5z*]7n' );
define( 'NONCE_KEY',        '%V!{g?]}o%mfQX`yMb@`zua~@9MY2OWBoMP.{g0ZcRa|F98GCQZ>(z`+d51#GrgD' );
define( 'AUTH_SALT',        '3T:xvSE4_y.!%:#Hz{i3co8E$YAO=,9}n-%K)gofdE1aeGxXkG%~=.s/t9x[:h;v' );
define( 'SECURE_AUTH_SALT', '.,R>:yr6Ts0vP9dy?lhfS%%clBu3~B{ATwVz+=K0)g/Nc<Mo&p:&Lx2J>`F#+9xx' );
define( 'LOGGED_IN_SALT',   '|Oa+Y(l7Kb57=E/cuT=X`!0uu_%sf`)S>0fUY7w0.![9TN%wjW+S1|<eX`9k_u-K' );
define( 'NONCE_SALT',       'pLZjnd)T*sd?j##i{kL#FC)RKCW#U@r-.CG{Aaz8;*?91%$3DX#I!cF^RZ6y|@c ' );

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
