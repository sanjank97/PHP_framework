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
define( 'DB_NAME', 'insolvenzmonitor' );

/** MySQL database username */
define( 'DB_USER', 'insolvns_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HC5rwnq7emGQbLWH' );

/** MySQL hostname */
define( 'DB_HOST', 'sql309.your-server.de:3306' );

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
define('AUTH_KEY', 'I4t[0W3K~2;4R9W4#m;uX#13:%)Igg|4J9t7e9s77)(t85+T8z6u%@!YMc#~9l[C');
define('SECURE_AUTH_KEY', '(1732;dv[86Xv(DpiQb64D1K;#eGU4H-!8QN|]-K3tf:a)kSp(2x]5ey496cz2aF');
define('LOGGED_IN_KEY', 'm%buw56W4ym)2!:_;|6&|)mbPO)[350o8532)Sjm3L49o50d4@S4:Lr7+3GNTj8;');
define('NONCE_KEY', ':]u~&y:FPz4SFB7/3&oi9[ujh%38:C*4)vGm/!)+76c3|o7V-Mw0suesP|8JR4)G');
define('AUTH_SALT', '+56t9;u5Xv7L9IEM221b*XB*#IT9s:/sQ4OSk])UBu/-@JcqZ*|8x6H%_C0Lwq0r');
define('SECURE_AUTH_SALT', '&y#T@BKB93;zu7![j14im9%9k[wgKj51!_8RajTIQU;9)Wj]w48RG3k7O##XQ(06');
define('LOGGED_IN_SALT', '_276NmM:OgO~T(478W62hD(/B6lAWD4FQ:_0bvz8ludBt1#q&k5UFWLJ;w]rCpkl');
define('NONCE_SALT', 'AIQ3193R:35HndTeD3KTL-*]6TF/kS2ILbvN|kq|~__wu]S91pr3Ahx4A8m/l2Dl');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'di6g7AjmF_';


define('WP_ALLOW_MULTISITE', false);
define( 'DISABLE_WP_CRON', true );
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
