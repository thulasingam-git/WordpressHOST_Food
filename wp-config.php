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
define( 'AUTH_KEY',          '|<h2<lcJF,AfVB!Tt7!Rs[C -PAaV_~odc}NBV]_h}($`;HT^,0<I*TcT1FBB-aL' );
define( 'SECURE_AUTH_KEY',   '1{^SN&p4rk.rn5,iasTWsxH|,29st5oz*8wj&cSd+`L};Wc!4F:0BD*o|h.CpRcH' );
define( 'LOGGED_IN_KEY',     '8gWz6lI`dc#%`HNX0./uyyIgw*y&)K3lvht,Z,kEq{~T.=[]LCWX`c/7/c(|Cu2&' );
define( 'NONCE_KEY',         '}IzRp0ET}]W}KLz)(W0;KrUnlTHu+>;Ug_XC]DgVG`jPp/ og426{6n`#9HhD!Mk' );
define( 'AUTH_SALT',         'T,Cya#_O%|kn}|]5-%e$<Xmj;/n,h&[EL5):C?`7&B,@KXrz&ts+J2C/wVX!E+o7' );
define( 'SECURE_AUTH_SALT',  '95AJG)Eyl0sAPj9]#v*}!^`W.64QaC29gT?N[8i(cQ:OeV^,W}(;;3W]L<*X=wDd' );
define( 'LOGGED_IN_SALT',    '{V/:+q5#c(wX)%ZP;xLHMNfl@r&Ei &xVqhwj+/Jmx~fVib(^6}u1BSfYI<dRi/F' );
define( 'NONCE_SALT',        'Sj7&<T9e>Hwy?7ee}{H%a?$i#XpCo_vs*PHc]+0_PB9sae&$0EmUh<3SS_t|S85F' );
define( 'WP_CACHE_KEY_SALT', '2Reb0j~)&f+RspFaCk;GN]cS@*VyzR2P<:Z$m2a-I)M@V@/qOm;;+,l/m]2IJgFI' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
