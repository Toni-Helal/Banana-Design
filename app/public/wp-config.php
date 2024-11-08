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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '2CGHuA80C>0{ Y%S+^ny3T4p_6YDslPoJB+q|YT$[>!Ky%D^eiwi~2T>^($bo@J$' );
define( 'SECURE_AUTH_KEY',   ' VYb(sO{=g7hpjTx|+$Mr6vB>&*B[/`eKe$(8:o{w}PY>x)EbB$/e(B+`B^@3E#-' );
define( 'LOGGED_IN_KEY',     'U]KeVzY`G~2QzT&I+`G`Vo)gVHj(=%<5F}Qz36p%CWaOQ$E]>8O9OY(eVv;a.~l*' );
define( 'NONCE_KEY',         'FX::]#ahb1E}R({OI[!1Gs$8yq`DKap[zZnV7}z<$Dk&6K F_jWwgT[P2c7Pi[>p' );
define( 'AUTH_SALT',         'rsNr,OJGsl90.2:!}S &@!y<4IW!Wi2RW*u)l4C^qbw[Y-D}(y)5iHTIxV-<mF&n' );
define( 'SECURE_AUTH_SALT',  '`4xLTYEEn2Rch=V5fJuUwR[G%f8:AdQsoz3</L/Me7>:>4O1mOm5n0N<U0bizpk;' );
define( 'LOGGED_IN_SALT',    '|nW&.W;Js?QSk${8rh2ks-W|.MexJRX??A)k2tWky0NUGM;N0[sVotYjv4%rS-U6' );
define( 'NONCE_SALT',        'Deay01pjgFdq_o2=mE37de#9L:B!zhXT_-HjW#,-~9IGw%?jB7B!`>aD:.,TAq h' );
define( 'WP_CACHE_KEY_SALT', 'yP))>QUfn,ZLTRwu`1.:{p[?*;[2?]lN*T5}j{JN30EYo^Bm+gjpH<,.Nmpn3=WY' );


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
