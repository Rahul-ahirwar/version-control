<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecomm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'NL;q&tytSH|ERMz:Ng*E5EAt3xMs4<kEL*s7otUx+@9rthqiRNxu|ara;}+gxdO*');
define('SECURE_AUTH_KEY',  'C6@1]?|@w;U#++k!7+LVO |-v:*3vTghd8U!,Iej9P)aEgJXG)]{SJIp$[<or|6$');
define('LOGGED_IN_KEY',    ',OG`)&#[vcOVK(;59n&b-L7R[0N*my1N32TtiUa4w+Rm]u(WG^6@BA1w8iD#E=Og');
define('NONCE_KEY',        ';;(f}iN!?2-`e`O@Ab+N[ #<&o5@qlx$aTKWuMT]0$PXj}co.Dw._m)$nm%QJ@Mg');
define('AUTH_SALT',        'xt2x2lMZFe9&ulhWGjPZG1 k`8h[KK7nS>^MTS2),6~qj@CECO|Z^Ju%D-RPYVNd');
define('SECURE_AUTH_SALT', 'hb# 9:oSB6@x)JJYGSY*D.[Q66Z+BMG^4JF?dv,&%GS_lI;c|Zws/Hf?+mid)b?@');
define('LOGGED_IN_SALT',   '4MdT&YiWM22@lqNj~X2t/3zE63EnVg@S6P6!EIdY|AK7_[-#FR,mnq[Ul+cz)+i=');
define('NONCE_SALT',       '6V|5b%W;2]s|{f a9@F*--pb|[kRka-6AAmyAi`M?C.+>qO-G<dTrof7|@]=zu7T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ec_';

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
