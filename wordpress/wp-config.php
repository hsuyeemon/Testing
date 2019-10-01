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
define( 'DB_NAME', 'Todolist' );

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
define( 'AUTH_KEY',         'k,UB$</eXY]gep1e[8oP]=C,YYjrl[*?I0ciD9-3Xa>3k.J@D=$jjgaAkWkB+%!Q' );
define( 'SECURE_AUTH_KEY',  '4mSh8JOu0PCqo+#^jHZ;xglB#i^TK4q; o`6|_!2tL)[sOfcj=6?j!HNxSds2G3x' );
define( 'LOGGED_IN_KEY',    'Y)dn.^o*pAYEHQQ^l]~x,qaAD0UdWCSI432#46}7u<,{Qn$ryB4d2l/!iFj;*_M^' );
define( 'NONCE_KEY',        '{Qm^{u{p!*)*So/ &/p{9Z)NrgluZXjDR:JGBeU)V_VxWs?YsAv2jD%*%^F@#|(p' );
define( 'AUTH_SALT',        'pA23I7T3|j~z%HKE#|(.ctaG5n0)0V+Yd*?YyMBW`@W|[)nc>=S{c9Ilz+jxwbV$' );
define( 'SECURE_AUTH_SALT', 'VXgRY$`mY8eML CKu>V]0NTe0o5<LQ.6e]cH~bn~?GThbtxU`1)ayo,*e`*6r=F<' );
define( 'LOGGED_IN_SALT',   'hDwT-YzswUDCVR59-T;HTvl3if@(4.[zzp+(^9rl*TX^:al7(FkQWP0zd,4/yS{H' );
define( 'NONCE_SALT',       'D)vrNUMzVqy>wjXB##Rk&SdGB^C&DgX.:o5|,1vHvT>RzJ/rQ4:2WoN#|i17,|tv' );

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
