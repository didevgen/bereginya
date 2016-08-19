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
define('DB_NAME', 'bereginya');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '><I9j:n/oy@*lR*xsf982H(bPBdqY{^:U|O9e.]`PK2}Z:`cA7`]cV?-N0JSC]Zf');
define('SECURE_AUTH_KEY',  ')@oDB#B)aRSpf(N1,tThkaWu,d2h|d=!0My^+@E/kY}a8s)T:,?=$#:<RD?CbY04');
define('LOGGED_IN_KEY',    '+im:(h5pnq@lzzC~H>R4?rnI@d:Z@+?C;pM_I8=~Da`=_Pdto9rxBvdsIf+$D:+1');
define('NONCE_KEY',        '6Kn,cPBiAI`RzKX<x|iBO[JlQBo`]ms%EFzL-o2=2riD|w8ytF0Ui>%]D*{Os#:n');
define('AUTH_SALT',        'JU!|^j1Yd>siQ7e_{a7 Fwwf]f8zgh3tW&t4w_3[9rO@ZI!|T(3}A/bV_St^]hwH');
define('SECURE_AUTH_SALT', 'B[:Df:*MHG98S}D*JYX~kSP>1>OeY,c6X m<%gXyGR]k `jd+d->lz@L- K:rM9c');
define('LOGGED_IN_SALT',   '#vkr(7+np%kmw6qi;;<XQmSQVsCr8+E ~(~~:7YfPHDcgagKh(tq;3;Fx5JcjbP(');
define('NONCE_SALT',       'e=Ea; <NrXW^M!^6V0TPLE7Oq9mNOqS9]e3gz_{~p3cf`1|s8^epc9D_zZ[Q?2 #');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
