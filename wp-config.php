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
define( 'DB_NAME', 'ttsdemo_db' );

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
define( 'AUTH_KEY',         'W)n],hT}>gWSX!(f<}nanB)I,:O(w:%{$9)3`<]yDxD~ PNaN4 vt3>Y7.2Jx+V8' );
define( 'SECURE_AUTH_KEY',  'l5$kRcPEQAUt:-7V{iPM)Ktz,nd& i$>>=abm/WIX;_|t0J%l<O/kM4F@G]kY#bl' );
define( 'LOGGED_IN_KEY',    '9p`O2/$fVUFd-iy3qQcVW4$*i+0VG[DXUJROQQnRi=8M_SR@$5:-)$s?jnjWNvyC' );
define( 'NONCE_KEY',        'erF(hl`cZ*pBxG*P36vAig $E4_ox `+IJ[Gqav#M21>BEN,.D2T;d) {z]C{w+i' );
define( 'AUTH_SALT',        ':<P=uWYMij}*v-O>[t%_hzVRVX}6h7XtRvi_~@wKd#jv8K2f8TQQZ(~@cyBFPr:w' );
define( 'SECURE_AUTH_SALT', '~=6Y(`}//EmIY8<J6?CFlNHcg@u##oY#2*KVR@ii45hu#_;TV!#tQ/sGm7hOUs^f' );
define( 'LOGGED_IN_SALT',   'k+G3-o@A&1bhm0li=hhbsY$%f_JkM<ya(4AOrvEeLVH,2`zaq79{-73R><eV_R98' );
define( 'NONCE_SALT',       'zw}UE=C4.{bXUe@FYJRGg/h)LJF^K$3XlnA@HSHD;#7Nsb-9aQn8>dLZ+c2?-!D,' );

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
