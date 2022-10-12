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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bmagazine' );

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
define( 'AUTH_KEY',         '!T2=fywIWg;G2L/7tX}eG!9P8$I!Vof%WqVFSC&OBwAL&gh&ss*CjC1drC^Lt>1)' );
define( 'SECURE_AUTH_KEY',  'D^aB,zs.Ba k%utBl*PAbi2$IGAw5oih[QWN~q5-f8R=bv-k<*S[Kswh[]zapPqu' );
define( 'LOGGED_IN_KEY',    'K7{for*f*T9KQ4.sOK$dzH^vND`k/R= a.r~w{JdB|{n6`ivGvV2D& ^`.9w#vPt' );
define( 'NONCE_KEY',        '0RX(*[Pbt2{l^=AW&t?Tl~Fg=V@c3m`rp[7[C&1l-<aH5/)XB*OyvlM:w=$>hDR&' );
define( 'AUTH_SALT',        '#;|+(O/|OHp9+=n#[DeamV7il*4#}0y<o#m(1.;}(3Kje>_kx)UU#akbr9JM%n|3' );
define( 'SECURE_AUTH_SALT', '>wewvnJt~eHfO.4@$WI;vFm(|MUrukE;cy~86A?v7>PGHd0-b+V7^(wDh:4XuOsH' );
define( 'LOGGED_IN_SALT',   'n=H2/=c`4uvl^RURmN4Lc @*bKVCvWM6;;Jy90r~Ws*SO:qRCdCmW*AOn[v9z8T*' );
define( 'NONCE_SALT',       'fMwU2%l(??::SX)Gb%61Y4:Y7om:9,O0lFz-QtQ7gF(eExm:-o)<}`!XG_+t3ar-' );

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
