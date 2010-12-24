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
define('DB_NAME', 'wordpress');#wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');#wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress123');#wordpress123');

/** MySQL hostname */
define('WP_SITEURL','http://localhost/wordpress/');
define('WP_HOME','http://localhost/wordpress/');
define('RELOCATE',true);
define('DB_HOST', 'localhost');#localhost');

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
define('AUTH_KEY',         'O54I:xZlo6V-{m$f1aZbn%GF|3_YUpzW++~$H*@l %+rZFsj]x>9SU>_XokaBD[4');
define('SECURE_AUTH_KEY',  ']Z8mR5+EPM3A`*q5TbYn,W]669[I/S?r|jgWXT~>Wl(=W$z~caC+KW+Ls:Hxgw_C');
define('LOGGED_IN_KEY',    ':?$|^NWu,>)ZH077>;tb]EU99;C`8<M.hw&jgHvMeLAgCr]-=5ldncE4yVHK9~p=');
define('NONCE_KEY',        '-Wu9*`P$o#wr~`52esh+l.`LuH|<9% q_nn~) KL=ih$4C}wj|@Qu]+XI4kQv*27');
define('AUTH_SALT',        'Yxjh=3Sc!Am@E>Et-965=UNuTx@tFfYIIR23q!$XOttZB@E: 1_+9Ts?6BLJ<*[V');
define('SECURE_AUTH_SALT', '72H|<.TYrqNPR_Z9[2c IVwv->L$uq$dE+xV7K*h(D .i<yX+*~90-<B_sX1EJx#');
define('LOGGED_IN_SALT',   '-d,Bjwhzgqp!/aJd/r8$8D0C-x?.4sPvyf;I2Kh|R!54B].+o/0{,;1YA!%]$f0/');
define('NONCE_SALT',       '+%Dd#/#|.g.`.D0E<Bfd0ehGA1H>7xdt8H#b|}KQjJXB[-%Xg Fp.W~~2b4Zh+?(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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

