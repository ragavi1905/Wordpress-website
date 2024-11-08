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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'pZEE5_38VFcn~!wa@2)H<X[PgrDuZcYPUaVwf`V0jiQ-?B2HN1*-fPElUNjU^>-#' );
define( 'SECURE_AUTH_KEY',  '054Y4Ex<{~dN>+Y~J8-%rm}FiQqh`m-RZeoSUfBiKbYH%M(a,GH5?6$3d_MYw5k,' );
define( 'LOGGED_IN_KEY',    '|X/6>H%Tu<k[*5luZw1;G!gtFkab|@$d9B!Z7`b9S)[cNr;R|*+sF|S4p,aDFx^,' );
define( 'NONCE_KEY',        '>f@;G2k{inGD)#W>1n`ptx=_i;-;G|Q4mss-3|*-Q$ggcHvC6]<fO` Xdcd}6e.w' );
define( 'AUTH_SALT',        'U(<.7[AdJHEKLiX/<5H$r|q`YJbDU2 >ST~9{m2Z?[ycnsj-0:]sz[ma>2Ki0NMZ' );
define( 'SECURE_AUTH_SALT', 'w%3-<5!3Q;x,V[MZ=1yy_]*%6@JH> _,v4y_!=A_~[8a!aT.Wa` QsiZ9}ikwAFs' );
define( 'LOGGED_IN_SALT',   't_O<H%oY&#qJl(-, RGG9W+iUlAgaV=]#rwj]9%&#h=^4r2$f>])3i p%s<,.^.[' );
define( 'NONCE_SALT',       'qYWe9QQ.VunKv}0X0i3;:wj 2}#5f~/o4jhYyU}YZG?x~#M~u;NP|:{.lV1fV4O4' );

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
