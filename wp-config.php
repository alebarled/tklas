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
define( 'DB_NAME', 'tklas_db' );

/** MySQL database username */
define( 'DB_USER', 'barranco' );

/** MySQL database password */
define( 'DB_PASSWORD', 'barranco' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/tlean[]|post8Z-jDjxiy/j:PCfAHf|rwGEGq`Jn=i&/LSw^w|Ysv=9$/87Py&%' );
define( 'SECURE_AUTH_KEY',  'I1b>>qwC^}gV`DNY1hq eThZk[5gx0h4s>aU5d*)CnJtbCPbyq;=JeY`O]7$#q:|' );
define( 'LOGGED_IN_KEY',    'Epeb#+8@)SX<)!rU~W?VlJRX0>lq_yBg!+P@x!6~*]GF(aPrvsLjMzXY%)cZt_Lx' );
define( 'NONCE_KEY',        '7~^^Ex{d&XTsbjdm)5{VF!L:J1{(pZ-[9&?dkqrN:etZ}1m[:z4w2De3]-X>t@E@' );
define( 'AUTH_SALT',        'A&yn?a*2{PKO4<4t~)m5eFi>1_inVCTz4m&*g$}GW)+`V;FVtaXv~%g_OXS&gqfW' );
define( 'SECURE_AUTH_SALT', '|KT:.}s#L)L[Q>R]sTH/V%4Jx|B$G[A{o|)K{t*EwZNRb$zf]^PCBwc6{}O[XGN#' );
define( 'LOGGED_IN_SALT',   'ttBC~$la04T*07PBUgr)+CjJ(W{^nKRE;mas$,L/Jq`0lH}0cC2+gcR1SYLLq1hL' );
define( 'NONCE_SALT',       'S@fYP^C&Zd}B1ghAT*_^54{~n9}iE _<l^-BaUC1,tz9;n?G b])mR`eu[hcU+VY' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
