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
define( 'DB_NAME', 'cleaning-website' );

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
define( 'AUTH_KEY',         'skpT1m7lo>#nlL=H>1B3,-Bb^0yuQ!+@:V99a(|Ip%dK*&|{U9/=:=v`Je`=cD<m' );
define( 'SECURE_AUTH_KEY',  'x0t7+o*no$.;PsiYKgIu3X0([R9SN{} 9F7d%LVr:{m]|%1SUs)c6Kd/&z.d#f&6' );
define( 'LOGGED_IN_KEY',    'mrF;}PdD7%a6MLf6doBt$F.[cr00h1)fq)#>Fq$;I/8[lP% 3izu?-D#e) !O$3Y' );
define( 'NONCE_KEY',        'Ge;L8+N*91OTcxr|Z*(I*OCDxo,j%$,6xc[/<Ei|bWZb%*gBS8}j3/AI8*4X5R!O' );
define( 'AUTH_SALT',        'Q~&q79iry:ZA]]J/fd*U dcntn.JXzS7o[JIj}r$aJ;bv}bFhH5uN7sGix=gLsrh' );
define( 'SECURE_AUTH_SALT', 'g1cmEP%xjLOorvCUvytZ$m@B{XS%1cv@F;o<:ke+<26PEMdgt<FqdsG19v[Tzn4S' );
define( 'LOGGED_IN_SALT',   '.p7*-.<A}g-fJQ(oBQ8)X0^{YR+T1yC5EXDBK~,|ybX1-YXp3qf=Zb(E~T@Y5%&k' );
define( 'NONCE_SALT',       'dw1M]R|#vdnq2q_3w 8E/&{ndYrQUVXi.ny^ 3kN9]Y<L05&~+tDYx=N&%t;.2.4' );

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
