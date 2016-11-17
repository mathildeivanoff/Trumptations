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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'xs`qycq]y.mX$e8N9)YR8v!rF4?XKPlW b8+.Up4@xNAw)%/+$2*gdwO]I B5>r_');
define('SECURE_AUTH_KEY',  'fB&J9s8MX;>=b{|!y?$!wz_e/]3taA(l/jD-.cIWTEa^qQ#-BP/bsCfKgH_&-qw|');
define('LOGGED_IN_KEY',    'ya.H,seDvp*J0*Xt2j!&o ^ZJ}?-1{Vc,07!G%!(<c/`)y3{T@F}O,r8l^nH/!oe');
define('NONCE_KEY',        'w+l+79j_=A6VE-KE<>O-dHC#ABh4YP G$Uh.2~[A9Ia( K9frQAdT&:NSQtsNNsQ');
define('AUTH_SALT',        'z~R><Jhdih5CL]=SbUGj#H%. 4$y59WD]R}fK3H?M$eICVO$jI<`~*K-: Gpe?G]');
define('SECURE_AUTH_SALT', 'Ebn|r.E%T|%Grb`4wTh*4cW`0Lrk%b.{e4^{[<(@b^Qz2`f3B/gT`W=sBZ@8ae?<');
define('LOGGED_IN_SALT',   '^Y]*^SY wS&1KdZ.BY@]&aZ%*ze]r4RsRO[tE]<vO:AQ201db2j~C F=?,mQGEo;');
define('NONCE_SALT',       'F?>F/ x[)8aAVpY-@$#2i;dirf@L+LMxCgbhq:dmc_w3UEmQbE!7.:-Q+zT*BAX_');

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
