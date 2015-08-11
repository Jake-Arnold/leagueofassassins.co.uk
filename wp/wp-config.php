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
define('DB_NAME', 'leagu112_wpdatabase');

/** MySQL database username */
define('DB_USER', 'leagu112_jake');

/** MySQL database password */
define('DB_PASSWORD', 'database');

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
define('AUTH_KEY',         'c:Sv:b6HeP!2^ZZ-U>1<=*QG+~3(]JDA%0f.oL7aEw{<pq<J)StsCF{n| #$AFIq');
define('SECURE_AUTH_KEY',  '|3V>jHr+r;QGk<hUrkL.-1Q8R&Z]=]CjbiR{Gp2lFz |RVE&-$hJ@L9L:>TdJ7LC');
define('LOGGED_IN_KEY',    'JrU+1fb;txiUe-$YP-whn}Pv)JL?^g^/s`FWEHP<5+8D/0.w[RyOo%9 0|F fLjU');
define('NONCE_KEY',        '8YTl!^;J~< D9L.LH-v]7$qIDRE$5vV.7cT,)e=KZjbI+!S]ku]U7cV%%3{gH[(;');
define('AUTH_SALT',        ',4^*~oZ@H09>bFBm5X.iZVN(vQNF+)j8I6[U-w&o}pI._5O-q]uC0$VGW2oT5@|D');
define('SECURE_AUTH_SALT', 'BA@b-IA&Aa, 5$?CHqbo<~f^[UYc|kl5|[3Wr&F=)q> &v{W?vdRSs-97f*#}5$1');
define('LOGGED_IN_SALT',   'h2KddG36pTfn%kOBudFN1h58P>Uo+KPQ~c}uqt*j~OW6ubXUI/!+y|deHTVrk@nq');
define('NONCE_SALT',       '0-P<c;_c^nM*aOa!)k8*Z90zHL{%Qaqih|bD* V+n6[%7e&]uEazPH9xZgO-,-)+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
