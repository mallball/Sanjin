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
define( 'DB_NAME', 'dbxvcnh876ub4b' );

/** MySQL database username */
define( 'DB_USER', 'ufzzxsqpb28he' );

/** MySQL database password */
define( 'DB_PASSWORD', 'y7egyxntpzwt' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          ',P$NYi>{_,c==8P?lq;~b;$J;|HI>?~nLVdN?CK2.p}D-2%NC8~dE=.FC^b]BIer' );
define( 'SECURE_AUTH_KEY',   'Lt0%Kdp9e?<)K|~4Z.(eXJb2PEdL+m@+v5qZx!#NUg*-.Hle( Uz{WFH06mTWu;q' );
define( 'LOGGED_IN_KEY',     'N&Ac7^&uF/v78@oMPJDB/17%&rxF<ZC(DsftD7Gy]_FWRLL(a0j%gaKR:WnA557|' );
define( 'NONCE_KEY',         'Z?P&<eZ{q4H8s;|tS$8h).EaqdL])kCZ3*x+|};B?*aig![19ROK217vwRGenY~:' );
define( 'AUTH_SALT',         'C*fy$o7/Y/C_FuSfYZ_KuN%_]<e::N8(eAfih/ZA`s:8=:Hi&lpq]Z4j9!Vjq`9@' );
define( 'SECURE_AUTH_SALT',  'E~j>Uf4J*/p.@&q73mm|v$oYvQPp0JK~$E3/xLCdcR4OQ^I1{.tyEW<+_g6!zI0A' );
define( 'LOGGED_IN_SALT',    '.-KPCRzm?{`_ZZ*sOKa/dc)?hU:]`h7aO+.F)~_.LL8XTUFM3%WHi^oU!/)V1%sv' );
define( 'NONCE_SALT',        'q^v(nA@:)  b96kEO^u%h|=TfrpMFHMi=6%(P1>2N@F7iutm69l64}[_Cv`&&)x-' );
define( 'WP_CACHE_KEY_SALT', 'PD1?+:v)b/O)ST?xYkN#J*j^eN*8q)Rh8QDP7l3?Tm>OPc#A?A9[JrOtD|t}K{4s' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
