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
define('DB_NAME', 'mayoDecisionAide');

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
define('AUTH_KEY',         '^xym/K6n4^sh.DriM@7)zpQBQsDCt!OqkKk(`X3sfbj&Ccox=*k@E`$zfC@li_(?');
define('SECURE_AUTH_KEY',  'Jk)&IonuROWM]Ss=NeFrpx}q;+lb+LL_7/UcRU%k9+hO1+@G9ibx8*yYW!4bIfI[');
define('LOGGED_IN_KEY',    'M Xw [338xB7&)aj.u/nd8P~52,rcW?vn>C{@(@,v?1u$[#uKHnnpZ|U)Rh0z{uB');
define('NONCE_KEY',        '.62AJQ{d[i0c12^moe,Y~~f$n;L[{&p~:Cl!TU+b^NkG&njOPT`sC]bivcNahes|');
define('AUTH_SALT',        '|7e95#Uz4sT/Az]6Za)hO:Nu-IciEpwG_k$,zv-E>sGc_;?^ZZbb]gvEA3_!pV`0');
define('SECURE_AUTH_SALT', 'Zkq8,JXsBv)w{t.Kb(}JbV<}N*@v6-W[. k+cA81fy,}Jk4nf0951GE9|+It~xh1');
define('LOGGED_IN_SALT',   '** Aodq#UT)|8C37%F#ACdb56Wv@;a{Ha!3OGUG54XKd6VFtGH$=CTWZtQ>ohrZ5');
define('NONCE_SALT',       'NmhNhCD ZXE2^:*d}hXL)z](/lKIvmzU7hOO&qnso:Jk>R ! 6nLJm9|rht/7d D');

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
