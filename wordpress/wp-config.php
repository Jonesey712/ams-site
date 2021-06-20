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
if (getenv('LANDO')){
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*}zo~cs=z8Ek rwo$Qn7(rsL,c+4i6bf8=>&?F/|j2>FDkn{nQ:`8?241iOmYp]P' );
define( 'SECURE_AUTH_KEY',  'L{h{i<y,&BhZw}-!X^wH@hha^OR|cN_FpS*uWcmP<3ys0hntN&g-H+y=SPD>J`Pl' );
define( 'LOGGED_IN_KEY',    'z[JdptrHXv0K!LC-g~M}T^v+&TcL_t,/2-7OkxQFEN`#x_pwD3SzIFJM_K+sh)Nw' );
define( 'NONCE_KEY',        'l>{<V,pwA-09]dm+YjF^A]+7S+iqc`V4W2|NPMAz>]-0?{d!;<s 8UuuklL(3]!C' );
define( 'AUTH_SALT',        'sl4LZ^9)f:~ w_PVR5|Fg{-hbQo}L|By|Zi9 cRo41HwVh.R2~kU~w!R{Dau,Ley' );
define( 'SECURE_AUTH_SALT', '-ZE%,95o|4Sba}gk-%J|[~r<,qR/bzH7#G7Mbh57u0IA.&ACb2OK<T,=]dirqH$0' );
define( 'LOGGED_IN_SALT',   'F58xQ+*h1WB=%XY%/[${-5#Z+M<s/w3%[@>cxYrq2l3Ure0-k7hmf!Mu*Z-35ZZR' );
define( 'NONCE_SALT',       '^|8~f1{6W6d<z4+TuKfdAZk45{uzJ%3vAy@50hgWkCI=w$ (v1?kJjczvnI]Eb$Y' );

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