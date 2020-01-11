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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'kjat4hhGt7]]P:4$ODF?*MTTZJ,@soBHF_nX{YMSg237}kGO7,n/0O]!{oK],;`x' );
define( 'SECURE_AUTH_KEY',  'ReB3e76%6WyR^R2FF9;4|X?O%=~1~#g2IL6xt`u.tgT7.h<D~Ecw}Q>Jha!![b2a' );
define( 'LOGGED_IN_KEY',    'YFBPFuN*4MEy,fNg2drbsH9&MPE4bJ#C-j7[~|(tch_CB2s`}>fTV;Zv1#v9b7Ck' );
define( 'NONCE_KEY',        'Mmd6-5#B}NG&-1HDE]^#(O6?+l lKZjXoQ5J/m>*So(w2.,b/NM/%*$5}d(.5XiK' );
define( 'AUTH_SALT',        'Vx@g,_l28]IXJ:E?$#?j/jx.Aa8TYA:<GgB*ZpZ%}7f_A&cqj>^i0>|ZZHrkU[=!' );
define( 'SECURE_AUTH_SALT', '1MLIK|N6p@q(4,4S8<p()9/vNoK(5}:4&FNP6*C)dNyPIJoY/ZNv0|cU>F*V`}{2' );
define( 'LOGGED_IN_SALT',   'i{6bb#G@CKEuej.L1g|V}q_js/I(eYvYw~l8t<#mmVZd 9-p0)SQZH+w bbMC?]M' );
define( 'NONCE_SALT',       '%Zikf4[u3-p|QQdoc:qGa&r^E0_6+U-v%.LCDqtK<kN-LX-QI:LAte>Xx/H`|t47' );

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
