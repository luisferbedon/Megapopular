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
define('DB_NAME', 'iecaporg_megapopular');

/** MySQL database username */
define('DB_USER', 'iecaporg');

/** MySQL database password */
define('DB_PASSWORD', 'luisfer061991');

/** MySQL hostname */
define('DB_HOST', 'iecap.org');

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
define('AUTH_KEY',         '`cZ?RWqKLf#6huN|[&tC`=wXy0uN~`V[@+Na`lb?%1l8HXkl0OZVUVR;Dyc;*!p?');
define('SECURE_AUTH_KEY',  ';XKlZMTLaWOFG~?8$~8XmpQdYDWC*`Uqiahm9nH(Vp./@u4<(_tU@#S.=l0_*=.U');
define('LOGGED_IN_KEY',    '!h7M`KCsMzDH|p#w|>Nwvg/gJ{uiqxILsc*RUBXQGF<k_$?1(w|mIosdxqI7<y;z');
define('NONCE_KEY',        'FjxZ.OIZ}s8r!(QTi%:D8oZ)gzrfhC]lS0IvpI!4|=!D43goq8PEE9WXp|[>ew]R');
define('AUTH_SALT',        '_`dZL?CRhI}&t]ZZMT=#p,KCIC:3Mi#OdAeAG%WiazSd&1< I*V 547?RIFY/KVA');
define('SECURE_AUTH_SALT', 'Q$B31zJRM:_%Ti(P*dTLh3vO&k}G[oIwx@ =yL]/~[!_BZwB1F{p?NHK{DVrn9N>');
define('LOGGED_IN_SALT',   '2PE?wBk|C{(DQm.rrTW-<!~GJfDWZ?gxcbo$xIHl.5^*awdHN}C&F7ou3^w {q;o');
define('NONCE_SALT',       '@(nEt5WCi.$]Sg(>7!dX8%|>ORLH]x1H:`$/X@/%Q=%r*w6UfOU~ti.o-67e1lQ$');

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
