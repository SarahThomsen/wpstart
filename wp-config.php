<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'git-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd7RODs@$Q@zdx&oyTw@@3wU2BxPvdLDFPJIxtlF5xYGlj5zA$OXTPdKD115fnPh&');
define('SECURE_AUTH_KEY',  'F3k57s#YjiMKRa*Wp&zKa*Yl^kKReQem*J%fSHU3Ns@VDZD1#asp3em@1X&$N($7');
define('LOGGED_IN_KEY',    'JQ%Hx9^TTFS4R0vM(V5B(drw^7jmgIL(d4L@%g*s03IstSe@ziyn408!GI!N5vIL');
define('NONCE_KEY',        'MdIEz6SVR#fG41sUC1fHR#%5OiqXZ!uK2wNNKm#dKc2Jjo)L)2g!$Ji)&!5S6^^!');
define('AUTH_SALT',        '&0In!a#qQy6kJ$ECOz80AXPkVF1Mumkk814d8N9UDPc!r*A&UPlfX87QZ5WT6Uju');
define('SECURE_AUTH_SALT', 'kUDi29f1UuOKy6@5(z3VtHqLJ)N*0tMcCCUo@eojrNnpPdTXBVKi%*5AjC1u9i2)');
define('LOGGED_IN_SALT',   '@K6WiLXz#^m8C^o5(7OlSeh5HTz86TJaxsjgk$XMOIZIL%w!cB$hJ8jbBa4W*aGU');
define('NONCE_SALT',       'yM%mKM943N^Q!D9Xbxs9R*T%wqP!QbSQ4lBKsz3h&i92pnqOub(j7Tf%8rdqSTqu');
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
define ('WPLANG', 'de_DE');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
