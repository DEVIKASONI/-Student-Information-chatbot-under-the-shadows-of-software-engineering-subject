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
define( 'DB_NAME', 'wp_slrcl' );

/** MySQL database username */
define( 'DB_USER', 'wp_0rrqt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B&@OMq?2gC8dZ!e8' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '*M[6J1q]:iHw65!g;k33g+d7Jc10ho#X5xx2-qy/(:WWb[_RF7lQ][G|0lpmp1+C');
define('SECURE_AUTH_KEY', '%(9C7HNO-70_jr5-OX*U:r&tY2p20R)*s2(QAh4u-W)-/R4rQR]2HZ~uO]9-+@8H');
define('LOGGED_IN_KEY', '2U](L/W5-1UJJo@xY%v5(9(UX)Sj&nwiI3j3W3:34Z_-od+[n]3tf2Ya&J)zg+zf');
define('NONCE_KEY', ';+u394CQ7VuO%n|*4z;Z)[#|O6l~6z!5_N@E5IFk(2iNe%augq2:G_O8S6Uf@06g');
define('AUTH_SALT', '|Z0E:Sa!|c*4xo66&+)m:M#5-YL3/)Pyj(GP8758sNFVL;pi2ea2i6y197tw|MBA');
define('SECURE_AUTH_SALT', 'F2_vRMd1R9_eG*A_4Uocv%1pbEf_]#Jw)E~SQ%SG6Spi)L5w(g_Y*q]5gU|aHR2K');
define('LOGGED_IN_SALT', 'PQPnrziv9VRaJ(@!gGe2uUKUeHlkYo@2pEni&h#1_MN0t7|5)9)SmpLs0SO2K903');
define('NONCE_SALT', '*5w99N8gMZw1lGt!AX9+1h40Y2N|mIq0+M0i89]3Fj7#a%+#Qz8k~8wDyZ;R8i70');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'izPKBlLsG_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
