<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3ggqC?yt*=TX1mxg`&B!OFux}4y]w}A~3/-lYkRRo$6PW+dY,ZN/]4t`Q{=IsP/1' );
define( 'SECURE_AUTH_KEY',   'd#IsN%HW;1x(;.CK&>~Dh_O$>$qzZdAD2%`Wl-0[! y7%n5Pqr}J-1O7(REq{he~' );
define( 'LOGGED_IN_KEY',     'JZ@k><;5^_$:BaEU ^O7W8k5d1)GW.lnOhy(0`Q!Pk2odOkOVXdRv0qYmg 0PVph' );
define( 'NONCE_KEY',         'TN!=YjWBUbVJn$;$:1LHW,a4iCHApVXn{G=~9dESD,<k*HC(a;;LLXywFO|<`^C{' );
define( 'AUTH_SALT',         '(bXAJV r!x6FUDkf/}vNey&;CzICuc|M+Ysk3>3<u3:XV(*OZAlOu|_E#sO_XmT=' );
define( 'SECURE_AUTH_SALT',  'VAGQ#tD7K[P*5sl*)X`-Jwq9)*,C<=<cfoUGx3UHPz8/HcjOn|-HA2e?=f*PqU$X' );
define( 'LOGGED_IN_SALT',    'Jf$*Md4,sW{H:t(E{3UY<e0equ9[JO&.O!~zl#zj{,B&Y7v8G<W}RU~|OwrZXH2?' );
define( 'NONCE_SALT',        '01B[_;vNrp2v+/Zp.`1ewjUkl&tF;$grOA*{y>pVg(L#-#,3W( 4z{+ A4RFK-WX' );
define( 'WP_CACHE_KEY_SALT', '>1td67}>pnQVv7(/<euw!#z_N5SRzU }#L.uyVJ1<C&4(<#{e<>MbS~-.^SjejC0' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
