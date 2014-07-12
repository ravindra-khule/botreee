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
define('DB_NAME', 'botree');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ravindra');

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
define('AUTH_KEY',         'f ]yJsK%_MK=l],9=s[,)s98?&`y+-)8vhv6moq5i+<>E,.5,+AkP xkX{eMH/3<');
define('SECURE_AUTH_KEY',  'P*.!}Qe#pJ-gy0L/ZTE YI9FU$+(Tnm KP9L/o1cOmM$Yt~McOMAuMi`P<c,(hpY');
define('LOGGED_IN_KEY',    ';,+#P:8b#tRb-H1|X1F}[vZy9|X?|4%E*3gc7VS<w=??_$h(TD8fe^GwH->kRrn ');
define('NONCE_KEY',        'n<|E=MqZ|%+H}X?~8M>I~`-`;*s(5RW5_P{ceEPP[ #}fFomZ+O0+E,u59k{jk:X');
define('AUTH_SALT',        '3P]52IJqePhfS5VNO<},|C~N_%K6x_)#K9{qwa|&jFdVsQ^w|9RV`=Ztr`i g7_l');
define('SECURE_AUTH_SALT', 'A>e^,d >nT:a@0QniVOR+k:B;GkyO(EIkeu>@dSUorgZX~WBt|x!,F6$MZ;12zKm');
define('LOGGED_IN_SALT',   'JP+^[]KM+-mD={|+R6P-+G6d-;lc=(J%T7c[:f{kp<xo~%;Xz-]!kx#GD/UE:5Gl');
define('NONCE_SALT',       '!15l[0(NH1T^Qqxu|1HynEE5kVKB)`>f*CV|D9-U5y`0zdcP3N}](py4L{6}?+Vt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', TRUE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

