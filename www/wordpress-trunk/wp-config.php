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
define('DB_NAME', 'wordpress_trunk');

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
define('AUTH_KEY',         '|+RjbNe.G^f/P*Qga&73G6o+@uR5l6XXuDTP|]0e_96hrG*FWc+z:<~+|-> k.v|');
define('SECURE_AUTH_KEY',  'zrregf*LCM-ZUz@Jb0R7D?RI!,!>:agxnmd/#%#,EDKSTH>LbT>j|m *H4awP=y?');
define('LOGGED_IN_KEY',    '#}OSP7[ts;Xi/w7D+*KjMpn3x8=UY-@m%HL=}?j)EM-o,QUdL~NopR_R!bNE<RT;');
define('NONCE_KEY',        'i[9L/IqsXYVi{D^}$v!HrRYD75}y&OC_~FB,1-@fIzs,Na.]De[v}=d CY79.D@~');
define('AUTH_SALT',        'ci cXbcE0es`0I-fIoCgh c&T4B8OHte=Ruc/t:D3$PqDmt4iiH;P$S|r>h3`3KR');
define('SECURE_AUTH_SALT', 'wPmFf9~1l/3szMn}$7[t8>HH^q_ uH!tqPrb_iwLC4135B(l3F}$?2038swdS#bn');
define('LOGGED_IN_SALT',   '||PfZzGlh0X|I!5c/`m0-Hksc(5eNWp+->J<_P#O+J <-q wDS43tP.biIl`8AwQ');
define('NONCE_SALT',       's~(5H=[Tu6_]F-1j,%C!<cd%M6NL,=(a;zi_2*gPtLc+-yq g_P]-_5-UC?]{yV^');

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
