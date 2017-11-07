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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'sshreyastheglitch');

/** MySQL database password */
define('DB_PASSWORD', 'Glitch@123');

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
define('AUTH_KEY',         '%U46L992Hvi,1`J^+c$H*tkY[^(x]rH~B^,bE_%&iQE:qYa3Xn59Dx#V*n$9$U#M');
define('SECURE_AUTH_KEY',  ':83{aQa=Do1D(4ne~o*0w?7~rIlw|yqd3$<R5hqsivr{?Zgoq:VJsP}>{~WS,^LX');
define('LOGGED_IN_KEY',    'D83q|.Nsu[dr>t)#n`n{]m71}z1^2VHb8jHFwAm)WKH%M>zJgh&{%o{mKtvr&!1j');
define('NONCE_KEY',        'EB0SK+scM.IIUOrvYjvEj{l9Md8(:CxkZ!/ov]k0[m^P A![(hJLeOPdz5|Qwq1h');
define('AUTH_SALT',        'Y}/mHL=&IG/0mf%eD5Ogwk5,=DAEA0FW%#zCFs*^ID$=k8}!k*t2TlKksOV4Rug2');
define('SECURE_AUTH_SALT', 'T8e=C,gKz<NU/3Jbh[{ydmH?|X:l@ qIf~uwqZ2>z[_[[q4PHbd4<EQ]n?QyBk%P');
define('LOGGED_IN_SALT',   ',TA K>v-#[Yn,C<r$J 8`C^2EJh7b4c<yU4h,tXs6Wq:vj{Yl1mH|4:)EtaH>_Qm');
define('NONCE_SALT',       '9$R?i5eEQ]q>gCS*tGgI@Wb~mKw<n[.2(H!q/ybrkL95U ^9}vWrxIez7bJYy%X^');

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
