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
define('DB_NAME', 'circa');

/** MySQL database username */
define('DB_USER', 'dylan');

/** MySQL database password */
define('DB_PASSWORD', 'shiva');

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
define('AUTH_KEY',         ':ReRAe*FqXA];r>O><wR1`FM(J|_uUs*f#=/9W/bm4IUyx5]*o_hvGuMaD.^|0rm');
define('SECURE_AUTH_KEY',  '.3:TK=JJ{&k#T>a.4=V{]* $auO]%F~;UF#7(cKaLT,/q_b/z20rrJ@#D1od=;zD');
define('LOGGED_IN_KEY',    '?a+[CS=@V_zkI&EM(,!sw;oDa?&UkyKol^*copIDCu9s7ASC[9A%H1$XyJ_yPKaF');
define('NONCE_KEY',        '}bB*q_ k1+&RD@HsO*10BmxFVXY4o|[iiFM8Ma+:ie:dM+|WkH3klb$Sh~_ @@]F');
define('AUTH_SALT',        '}j@^wk|mcJ1^ViPW5>pO.hr2dVyl+9Do>s3s<cy|sr03Z,?jg`q*|-^<fuqB;8YE');
define('SECURE_AUTH_SALT', '2}P_%hzCr?(9xKClt6ffAYR;1%.:BIRtMQ4~G+Nf{$C[w3qbk@!KxoAKR+f?[^7y');
define('LOGGED_IN_SALT',   '*%QEcN(_8&Q+yg+0/=7fW vbWI84$O^By*$v/IO8!N/Mvor]f6N|+rJ+a:Gz%D=8');
define('NONCE_SALT',       '17J^)cwNUf fG$[HVc)uU5(0Q,VB~@DCsyU[}Ppe.cfWjP>BqQJC8^wN(L@Ta:3`');

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
