<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

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
 */
define('AUTH_KEY',         'W8Z._7]+l?J/`*-|yPYUt57PqE@VA-?l0&XrTR-D6&`%q`KL<+W-P;Og>C|M2mr|');
define('SECURE_AUTH_KEY',  'sdol,apVyoz{cwWK0%;g7KuK:5J,?1*Q_=XF@*%o]9OYXD`C|7{o^#|PQnGiRnK|');
define('LOGGED_IN_KEY',    ']TmqURICtXuG^`3BzcZc#^sMo9y,hE2xbC6toA2S^P{vRa/k|vl5.d:{Ay](^j$s');
define('NONCE_KEY',        ' xD7hr~pGcajj$D<a)~K|P<)@1d5}Qp7oBF++L#_co& /peaVVb./v1uhM=gvlAV');
define('AUTH_SALT',        'D|4V^`};+l?v@DO67y~-nq_*XU.H=QAlVsZE|P-R*d*8SW:}NcRG]h;xO+EQ@-dO');
define('SECURE_AUTH_SALT', 'Xbr9ed&&Br-A680|73|~ZAryn#A+G:(a{g8~KNZH*^}h6^IxgW(i7-0{k!zQCDsQ');
define('LOGGED_IN_SALT',   '-_JQ8y3[%r?75I`![>u!V-%YCt|+3,rf8H~4,#z#h%X%4*3T|YiJLl}]cU%+t7}d');
define('NONCE_SALT',       'M Fm_$))?`+W0ry(V>woK[p*4hZ)UR}UMM:}nT>0%Bf3$Wzj4^Zgo@>Iz[DbcTi+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
