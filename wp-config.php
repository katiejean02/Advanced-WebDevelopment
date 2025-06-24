<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'katie_prohaska' );

/** Database username */
define( 'DB_USER', 'katieprohaska' );

/** Database password */
define( 'DB_PASSWORD', 'Jean57890' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'OqyoL!I9 &>0$NQ^b3DbXH.iHdBxYOr|ky&g;uLg:,wH0t^~U^~D[POW]#DWS7u)' );
define( 'SECURE_AUTH_KEY',  '-?6}!,S0fS%AX|*77j`T8,k1{8+ZEm:e=%XB 5gp-Eqb|wtj7nqU_z1-rZ]u9Zf7' );
define( 'LOGGED_IN_KEY',    ' _gc)_B0Xbf=pxNqq;mB3NEyLVN;`ApLpj:+yereyz/hJO!p7G+tU0XrnPIF?R|+' );
define( 'NONCE_KEY',        'GIRXpx#5@k!av6NDG63f4pONhkr:HT6g%qV+ Z$VhYtS_G]2F)06_,,]g`3_{E-L' );
define( 'AUTH_SALT',        '.,/dF3/FB|=`&$W28*#MTP$zbyq@wu:J&zf@-GOxAm`#1$ngcDG>O12+D1bT**J.' );
define( 'SECURE_AUTH_SALT', 'R7S[e!&xtL?yF&]5FK@&1Z~8A^d [q_B5to=AVYg4+`M0~r|vsYIRS67VTUA?6IJ' );
define( 'LOGGED_IN_SALT',   'PhHqT5(Odq:[+Vw[nGO>4~v8eH3(i.+0&a(IS]j/K%-yl(+4l-UD[4$Ibn|G1S%M' );
define( 'NONCE_SALT',       '>?X8mae4kAu5c6cXC,T0-_*&|-i%)~l{RX~Lp~u~&pQpNQ3/&&XQ?+hNLX%SuEet' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
