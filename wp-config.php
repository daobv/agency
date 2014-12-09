<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'agency');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Uy#L51{XTpf)Cmw-Ld^_p=q;H4{Vt4Hh%~ald<(SwA<}fm=MX(,VJlYo=[1QX5|e');
define('SECURE_AUTH_KEY',  '#d/V|[Mi.w[$JXrk5hSRb(,6@yIAAxJUF=fBCcR(#0<e46I5nG6lb^@7~Du0vMY;');
define('LOGGED_IN_KEY',    'orYU^cSjB.DRNHDR8HnF60+<ZBg!H?+0KGPqKLJ8_1|MBd9h Nd_}vJ X,u8;68v');
define('NONCE_KEY',        'EV}|:~S2cbMg+Ir].r|S/?+/FGa)77jx!v=A+xC^^~-$T|5p7G5-k)ym+:,>.$&g');
define('AUTH_SALT',        'NiOfm_xch&4~k+A`xu_?lXGy.7SjTR)^>3ah&+Z}D@AvuY&^iDI>~t4prN5tMUY/');
define('SECURE_AUTH_SALT', 'u_9hP`_~Eql/b~5NFcEj-?A`@Rep2#!j+[v[/Gu{BV)[Oc`V>gQIu#]QHO-uav8N');
define('LOGGED_IN_SALT',   '0nbKu/8=SXP 8-ES#wx>0G@{G9FH}.)T|o4.I9yF}T*!lLXIH5M8n4K]8B1@fe.w');
define('NONCE_SALT',       '|2=7C{.;ht&]5kj>V)a8lPf(0s|J-j+7N_Ai}:|>G|a&/aE+-((QyROk3/uExh{=');

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
