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
 
define('DISALLOW_FILE_EDIT', true);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cpapstor_lasvegas');

/** MySQL database username */
define('DB_USER', 'cpapstor_ulasveg');

/** MySQL database password */
define('DB_PASSWORD', 'v6bd1]O+*H_z');

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
define('AUTH_KEY',         '8#z@;%0xM@xD^A&gM[Bes__qL6UU78n2CEL+djg?I1*xP^tyKwiww]L /8/7)9Mt');
define('SECURE_AUTH_KEY',  '= %7j{TdZ*-dfX|i?~1x*vco%]0K&(OqL5t wAc%dF?vo8OfBlZI}wt}:|`bW-YI');
define('LOGGED_IN_KEY',    'SbY8r4ymiLYT|s;wGHGI=$+|1w)PX?--d<U|{9% z2!P|_A*2H?D-l2YLFdq2H}v');
define('NONCE_KEY',        'J(Y:KJTXCA1$ _0?o|gG_Mr1Kg_<Sf//@b`;ml@M&]$<J?8IU1gON`WuEJn<b`25');
define('AUTH_SALT',        '&Ft;&om$JHt$`r=sDl;.>uOJV1m}`&yTR?1e:/=Fzw/e<id3KmV<|eL`WVQjskGC');
define('SECURE_AUTH_SALT', 'Vy}O?l|-B1n=4;yLc*/stdjNf8E&WbSUnl9L5!R+L^19>eYO]yXRV*fPM=UR7vED');
define('LOGGED_IN_SALT',   '&~$,RrR]`Z-mt&l0`kJZ$gEO_X}+8rbaYw*N( [xY nO`(VQFX0FxhV>GtLdLwg-');
define('NONCE_SALT',       'Z%^gHZQDk;9p8C[7Ah{_|2r=ZZp.j6A|Mr}Xz!Fg+&[r+:Hf&*~_e=j6w9||gQMn');

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
