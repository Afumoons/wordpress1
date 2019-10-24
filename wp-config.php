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
define('DB_NAME', 'progresi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Afumoons');
//password admin WAkiI1eh1&$*PHhGKu
/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

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
define('AUTH_KEY',         'mQMa&|E0Jbs3|./G SN!#qbt^BZY/V(FurI6;:5/;{5n.=a-.{s|M42K[?ad6?d;');
define('SECURE_AUTH_KEY',  'r;rrf!3jF#lMK.i)DN+s1>rL00o6`tEzxK67r3+W:rj.L+fB,tQpZp#&}t;vD0g.');
define('LOGGED_IN_KEY',    '(7V<{.juBt4IV!QE,ty.Fr/M??M6+v.KaZd_$H@b]bJyJo{xx}Hlm%p5ySpA.MYT');
define('NONCE_KEY',        'Z>7CDfp9=r<p@DKRYs8-!f*vKAtY#L};=Duqma{ [l>0#[O[[:0SVX5Qa@+D#AR(');
define('AUTH_SALT',        '=bCT8;UakZl1s*W3`imPbBXf[DBN!FuRXA@u>3/#l17+#j[00>(uXx4p/o!$M`%!');
define('SECURE_AUTH_SALT', 'cMav0bSoPHtt/BA&k<$f!BO{UB_^H=%rF$j3J9RlG!=kl2+P[+D%Q2jw8>13nzbp');
define('LOGGED_IN_SALT',   'zJECRO9$6kJ>N;+7A?|Qg^;r_C%OV JCto(MXID5z/oE2w=&~FF9jGpLXZ,MwW +');
define('NONCE_SALT',       'e1^Zw?Be!h^LDNJGtR@ALO%iWEq+8_Ys445(cO2;d(}K+Rd@8T{kt,ca%23Si7qS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
