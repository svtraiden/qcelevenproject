<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp-qceleven');

/** MySQL database username */
define('DB_USER', 'wp-root');

/** MySQL database password */
define('DB_PASSWORD', 'password-qc11');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#Z[eMJO*8Q{EgnfwDKPStGq;Psg~5=&~eO!jo--oaJhhPX%~dSM1xh)G[}k[z&!m');
define('SECURE_AUTH_KEY',  '6c4@)Jx!Srhso9Hh*8L7}]Bg~yLu<9*jBXq0IHl6`}!ZFSfd-n[BffL_|E? n)x;');
define('LOGGED_IN_KEY',    'ehnUxIIUtALyJ@/t/cuRyvBbaKvMm,s(gampQ%Q?t!PqNa!o8#>/kW/>V%YT58R*');
define('NONCE_KEY',        '1!vOduSE]H^mrm7C11?L1(oqQ(Znaa)3lo?V2f?9UR*++q1(R0d_;#,QV4hc<Ts8');
define('AUTH_SALT',        'k*H{p,1X?quS#:M8mC t{ERPaB`Zi}VqU^@qy%.y%Dr8*nGE&oYgm$a:,|k`%E)x');
define('SECURE_AUTH_SALT', 'o7bPY0e++!r3,VyBD|%tAnH.>NY!Z a`pE7rPKgi)@4{V$P4HLs m^8}Y_r5fqd?');
define('LOGGED_IN_SALT',   '!SctCm#~GF_Et^; 2`aFV[K{XIcQ0@?u8mo<AVv} zrD[XS0|}-G%0=k_44J[|, ');
define('NONCE_SALT',       'st*M+}w6*{t00?w*[YNGklI1s1Q+aVymG&(7gwv+-|diYnsaaRdN?j8=9x5G5{:K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qce_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
