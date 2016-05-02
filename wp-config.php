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
define('DB_NAME', 'girldayshop');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '123Cfvaojd#(@22(!s');

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
define('AUTH_KEY',         'T?_q]nOIGuegM73[6lDy;w!(!nu= N@yp#!BFlN?srjz~tbBqa6Mcg#Wiy%[3-=u');
define('SECURE_AUTH_KEY',  'm $AW>X(9(Z}h6XQD(;EX7Zt/kx3,DhP^hVa,xX9-8^a/^4<r MM{~m[eep76M8!');
define('LOGGED_IN_KEY',    '`cTK.KrA>BT}pp2CCb7y.P0nTZy(([g3KllQ>P%lqq3g*!ZlRwO0_!|scD{B7RB#');
define('NONCE_KEY',        'Id1P&n$B|7~tMhvuYxBHKGuy@h}Qy3L>woLduqKLW+T)UA=^ L4%Mb6f2x/Tv:+*');
define('AUTH_SALT',        '0< lU0B^-;ew.go{C8o&?zf&oCLo9JvY;]Qh7Ba xREbB7M8pJ+)l(O[m9HL+O_b');
define('SECURE_AUTH_SALT', 'craY0gJHB;vjT6P2XYa>KqW^rt~jWUBEi$ ku6<9%Fkjn);Q[<dbv]z:@iR,p-]/');
define('LOGGED_IN_SALT',   '|RVvpCN#Rzg5qy/Ob8mc(gpwgF6l=|&/BO1S<.t*yS X)qZNh~dt20z#-c>67a}<');
define('NONCE_SALT',       '`?[Z3t&N? 8bT:|GMJ3*+yN?SoEyD(JjvS&jG3]L;$^0C<HOEwiuf0}2zhQD>p>7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gds_';

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
