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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'supersecure');

/** MySQL hostname */
define('DB_HOST', '192.168.0.204');

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
define('AUTH_KEY',         ' (ym>+Nrw0mYZDRwb.9UA)[SlCKKnU)xb6LiL-d5A_,Yq=HyH(wgy@$ucJ>dl=+{');
define('SECURE_AUTH_KEY',  'A`fajxf&k(;Xd7uQo[-;Jtz+GS=HYBx[($jbcn]S(PAFkV#rmz3.6V?LE]!#Odpt');
define('LOGGED_IN_KEY',    'oy=:cbOJ%%zkF6=j7t.vy{Ppu%n;xan+Y[VhBufSQa Uq<WC1iM&XUGP.Yz0/%yw');
define('NONCE_KEY',        'YJwd>NR0Hm7H+z-KRGePdi}p$d%oZ%c]{Q%:Dt^P_bh{C) *WTEX(S1jF&TMD(NP');
define('AUTH_SALT',        'xTTIQyicsE]HEm3BEl.(oB?bfKJ?7m#&M=*B9 638u8HL$Fp+GT*HKJTSs:yT47B');
define('SECURE_AUTH_SALT', '(II&9:.2c[o7Y[h9JA12*?LCflEj5iI1Fl8g0TQADu;awcZzqc^ynkQ`{R(15.mg');
define('LOGGED_IN_SALT',   'j7o5.5!tSaN4YpXP`MmD~%2KdC5HLi&65Q)Jw=>H+3 13!`v1IqrQJKS<2#t-$%3');
define('NONCE_SALT',       'S15:/i=l. fA_rFgD5TV`roV!~AfTlN;!JeZYab]Oi^,2_hs$Bp:2rt%p;]s,Wmu');

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
