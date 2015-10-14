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
define('DB_NAME', 'thaisnutricionista_com_b');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ba~*Hb@p*f?ojyQ6*2AgoMwim|3tn@By;j6#SSME?rmUukcF+7f7)I!JSs)qMZTN');
define('SECURE_AUTH_KEY',  '?sbyI?ULBGgO%@xpV(V*F~g;CEgyOV#2lbKh:o1tJkIe2dYQG64GZB/|RKQa6i"%');
define('LOGGED_IN_KEY',    'F_!SjSRjb4/h_Pza"Fp;e4~Zq&V;m!eVuVk0H7gvOk|ThRNeS|O4*FdM0:dbWUeE');
define('NONCE_KEY',        'zA6nnGC%3#E^X0_iEa8*!@M0xM46/MbFNPF~S_S?%KCKi+8HDt13D|bgH3";F*xh');
define('AUTH_SALT',        '|Z0Cds8mY:`Qymyi+?Ls"m$~|AKr`Z#zd9f`d35RWzv9593roHouuN/NFn++8ACd');
define('SECURE_AUTH_SALT', 'i4#4DALjc*~RnB0sVizlsgv65eaw2MJvIisE0y;G8WTXE@f6L6e:OLMTcR4(;LRf');
define('LOGGED_IN_SALT',   '(BzDbjNR&EHT7NvRa9Dx&2uk9cALFG1:s*^C?;Ey2x~cmD?*p|QL)WlpZxZ#Lh%Z');
define('NONCE_SALT',       'C!L!s%`22qLG/gOofu_CvhAIkCx6p!B%$^8@jQP8qAx&H?fYF)m^:(XCP6H5hb@z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_q44hy2_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

