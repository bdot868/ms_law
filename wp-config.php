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
define('DB_NAME', 'mariasegarra');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'OBUOyrq5wkV14}2} WU/i4|3XZo$%a3+sQ3f{B#1)y*W~]4bqg yPsRg%SPL`Q!J');
define('SECURE_AUTH_KEY',  'Xj^bEo:YP):8nuB^vBL|WPeR2NW56Nvn>R;7;J0QG?(QBy_Vjm*exP{{V90G]vyx');
define('LOGGED_IN_KEY',    '#,_a3]S}P#2qw3gFI92Y@&!xE-i;-CuSdGC~u=w~rl]8(aI<+>G4TNwb${]RSoap');
define('NONCE_KEY',        '3=k`]:/A%FMI HRSIVf;5qp-QktRiE-t!&)n!7UQ]oOxEGP^c133?pAz}lMi/l9c');
define('AUTH_SALT',        '#JSaec:J)%[Y)nibE,A0Xm$.geZBCxPwq5$M2tW<DOXF-N13$/+JR-MflqiSl1^Y');
define('SECURE_AUTH_SALT', '>BuPplmJ{>4q*c7N&Rz,6qZXnE|HRUF02M?i=VkwIir0zlx,1hY>[b/IT;7`0:Dm');
define('LOGGED_IN_SALT',   'Nd(pNyuNfui)JNG87hhPBA@iPT|?U{]d`<{N;+LE)_B0aXaIK?plqL&@?#qFUrqb');
define('NONCE_SALT',       '4&MBB]$P+/aC2h?6]._zM! hx lH6y,+k6X!gmCyo8+.d:r)eFGBr!3>;Dkbh<t$');

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
