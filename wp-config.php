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
define('DB_NAME', '09kulpreet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'xSMGwd|Wi4bUcgm?T#<f1_$+.oy,sq]m%&}JZLFVanZ!b:bCAeK|Z,^hPRn0NP<z');
define('SECURE_AUTH_KEY',  '#/%jGj0O2Wb2zuJ/i6Qor2>cpbyvx>cPt;,z%M:{#Xh~n8I->9jUid|.7UGn%.aI');
define('LOGGED_IN_KEY',    'wlV{29s[}/Blu-O-mkpcl.^B&+p,?L,0,%z %2xvfaylo/rO*>3~dypHb)#sj=W5');
define('NONCE_KEY',        'K}ZpX/ adu:]L9-/-Kgq[Fl,DJ:v*SD?J `;[bU+O-OZC-lYEv~I|g^#sjyJ1CYB');
define('AUTH_SALT',        'x7QW(!f.icmwUl$,q.u?+{KjowK5Cr;g:j5PZdPCZQsAf~l!-yrA=D`o`86V2{yM');
define('SECURE_AUTH_SALT', '.DN3y@a]8?<<M}RXak)O=TuHPE]fo9@W],M=3ac$lTt4fEw#1DusNg!B1+|_;O,-');
define('LOGGED_IN_SALT',   '&GWP`;!pd|O&oi$1.oYM|=9 3N [NNJ;Zvp7%C=(lgg/<o:v~6MRsy^W,m-y50u>');
define('NONCE_SALT',       'S0Xa4gJ8wG{o}[J$QP(GZj07N%/`y)G.zOno4y)Q!wLp0,t  E+Sb6/kX:2Lk%Vd');

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
