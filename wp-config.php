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
define('DB_NAME', 'juanresume');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '11402617nr');

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
define('AUTH_KEY',         'WK:)Lb[Ye~cU]g?Fu~ }x;tH%3D,TF<SoA=j(nftbMiS^;@r|2k^%5Stt46P18.r');
define('SECURE_AUTH_KEY',  '1y`*uI*${Ai;4[o(;d.{UMqtMj /2qL!Xc:rt|1G`~G_W}wOpYs2R,)Xj)D:>A5Z');
define('LOGGED_IN_KEY',    'R{B{kA3M!%lEcGIgu;_QiVYF<#|!szE?|BF//mb@72+}WP0<_k#)/ke+o#HsFpLx');
define('NONCE_KEY',        '7[&u!olL]9h}rw[z.l)?)7qpz>F~y?l%Z/uLVh&Jk8u}~m*?-nIs,,TW9BmBQjcn');
define('AUTH_SALT',        'A8<u7Q9~Po$wOg__)=Dz 2ef.~B7W`w!7 -%FXrWp-5Wqv<9noK?FQ7%I;MrW.vm');
define('SECURE_AUTH_SALT', 'WOKlW|5zHsaD>_:3QX<GyIU_76`^(,_,`KD>s6:Ft&Vsp^K hhPG)`lZcCHf,V8i');
define('LOGGED_IN_SALT',   '/?R:)[x.F5 -(*ka2Ay)/(7u^}&!=AUkT2gCY5L1^k`j4/JQFGUAYJ7Ttc2m3&+x');
define('NONCE_SALT',       '(g}KT9X[S_;YA[Q^/,DjR4_qLL9&g@]Dq0Qgz*y8cER^%i5d/+`C53:(.vYoCT_]');

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
