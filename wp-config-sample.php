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
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_DEFAULT_THEME', 'wp-bootstrap');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nord');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usopen');

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
define('AUTH_KEY',         '>%0Y]VwI]>2G5wPDY8y{=5rK6W@%cWlV3Zw1vxJK.$*At$>!fG^eZd$S9CwBKe<o');
define('SECURE_AUTH_KEY',  ':C8;_QO% 3Q|%)eH5c2$/<nHjK-(4[Ehc.<F#*/#} oDz#6<.+_1&OjU:%1QD*>|');
define('LOGGED_IN_KEY',    '`!!KVsm(;r9/&t!ir*CyqH}OQW?=xG-8W|G<=/v{VF&ukyjX+ h:b3o?4roO9k!P');
define('NONCE_KEY',        'X%nIiqb`w1&Mv+%)3}MP_ra=W|l)4PJC$ {+4nG^[RZY5>~xz!c1C(2MPjy5wS8u');
define('AUTH_SALT',        'u-Lt(Y6 wWJVN>RQ~uSk,fdSK!S$Vc4in#BsKz D4`A};7>?P A/]6|F@DFC{&J&');
define('SECURE_AUTH_SALT', 'e)W}WG7vn4iV$7rS|>0|_Jq 2ys+HE!.&g2SmS)Qi|+v0*&]Bu`N*)5M+=?> H[N');
define('LOGGED_IN_SALT',   '#VWcB4Zm,f+jgJmVOt[pcz4lFc`Pjo{]-)F~ 5V7U>Q^<`dC3E;7@Xno*v/Sv!Tc');
define('NONCE_SALT',       '3=$7O= ,0X v^]XS8#*@t=UKf$s{asXi/;q[ciFF2s4l(7f]r(q%Iit%jF[{[DkN');

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
