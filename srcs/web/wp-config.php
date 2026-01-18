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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'fweivC<A7V+J3m8O-;p$^1>u=5aRUVFR-lGw6ip|YRv0J@Rn).l&>J%#&^e.H|^]' );
define( 'SECURE_AUTH_KEY',   '!{[@V+o6#*:8bzj2iJgjz%L8j)Vm&?-5lOH./ljbm1pYK#GC#L-g}Xs5@Z:hDhY{' );
define( 'LOGGED_IN_KEY',     '$WI>1@h?r*Y]zv+MH`<%[V-I557?%l6XyRt_.{hsBLVC(nB1K9H;/n %*L1/Y@w7' );
define( 'NONCE_KEY',         '4AZP6{/TKG,xbC0~KbEeV,D~L9/|8R82xV5]x[KW1FarZ8lvw[9smjKLlF6.C@J4' );
define( 'AUTH_SALT',         'k#IGbPGulb67D5jc>D1]O(h3E.Ei%:7=]NO-|jT7iqdST/O.}zsiN,V>!6:bfN!|' );
define( 'SECURE_AUTH_SALT',  'UgVgJMkc4ps|QTxhT</MY{t~.>hEH6H#~{l?EA*QA`9vEZ eXt# M.4Y!S-WXX$r' );
define( 'LOGGED_IN_SALT',    'si2GN^D4ukV0vie}xbu|oi$^2PPhMG*;*.K<3[g[=}7jWE-h]4#x?(X#^!-,y{S7' );
define( 'NONCE_SALT',        'C.j?j r?*%)v7E4~u$g*7|`|PZ}%2C>s3F>B~TF$d+us|Vkzr@XU)k|T/yJ<kcc&' );
define( 'WP_CACHE_KEY_SALT', 'cN!x*I9:ukdv^jCkyG~,env3o}yr/nl*NL!p;Msod*vt|B[WvP9)N*|C3tZoPTzq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
