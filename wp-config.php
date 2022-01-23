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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'supervisor' );

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
define( 'AUTH_KEY',         'U<w4keMqX!IcycU&g4yCDi`l/v.X~~~77O&B1}*~4hKB(nVc-7<}`72[s|{n,&0H' );
define( 'SECURE_AUTH_KEY',  'C7jJy%K~- n~IsT~%gBwXn5X?>V%JZOZ>qJ}fs~qMFVVyZXCt#_35k^&NG.Pn`P ' );
define( 'LOGGED_IN_KEY',    'eIhw+89JUAu(Iyc&aJZd#Q[hC(cM+qP6ZH`e}b<t}HW_:H[pE`-]FZmsPUaUCb8I' );
define( 'NONCE_KEY',        'l,wD>2]{se> ij.D/b0Ry`BIaM{Vt>hRX=ncD}C(CzR`K+%x ]3cN-b4S^OB5mL~' );
define( 'AUTH_SALT',        '6S@j6<9-Qw/c17s#4TOL&b;9-HGLQsp!=_fCa^lY^{(!p-Z2J([84C*ya88lAInK' );
define( 'SECURE_AUTH_SALT', '.t<7SKqh1Bf:19$]0mGNK^jO;HTp`4s.BVkXw7p{VqF$l[Le^4s)OJ$FVALSR`Ni' );
define( 'LOGGED_IN_SALT',   'MlO+~j`wP^+zw<_22Yhl?eBSM+DUzx#eI|z-MYlq[`DjB|kmY=8IK^gV];wwTeH!' );
define( 'NONCE_SALT',       'Gsf|`]|`9z@H]L:+E]R,G.u7{H^Qr#>v]hB:<Lcn]?hXg9Xsjp8gHxo+nY3F9=!?' );

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
