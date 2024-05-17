<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sufsalInternational' );

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
define( 'AUTH_KEY',         '$I)btDjpm&_qTFbI4p +8X`FW_&IaoBBln]YZYbtc.JBSG8%EW7J=q@8XDSQ|$iQ' );
define( 'SECURE_AUTH_KEY',  '(w70/bp1LL_XWG)gw5tcOeVLSZ`[B)FsQ7vSq!MDR+ZVQ&MZeG0=C4c4OhP0f@6:' );
define( 'LOGGED_IN_KEY',    'sCl&[)v` =ak&?(_R9@IGS$J.;#UAFzK<cwzwvJG*qwXzjdLnV5lGb<3s$9To%b ' );
define( 'NONCE_KEY',        '3k 9D5Bnez],bD-qYkV1R%P+Sw1aG*g$n[L3(@&!G|/(.Mw,i<fxB5ZH7a&x+BM[' );
define( 'AUTH_SALT',        'haRlN!2>*AM~8dv<4A8bozx-iIap!A_,_o^mNLy60}(#WcG/!|hzm;XMA^1udF^f' );
define( 'SECURE_AUTH_SALT', 'CM$|n bDZvUKcQso+h9S14Exr|T-fH#uA;F] # 5>`uk%i$`->E`lW?-<q3cisw$' );
define( 'LOGGED_IN_SALT',   '_+bVi!60:E-&j,(h<v$@B4WZ!Ev4a#6P!JO7tt{HaE1 q:TQ%vo5o.jmv46PTe.G' );
define( 'NONCE_SALT',       'em&1C LK&iKI]PI1?l9RS(oqx`C4|$^T)ZW(9lJ<sBc/+ebt9NU6.(I%%FFB$(WA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'si_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
