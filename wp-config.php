<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopstore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '[buyBw+`=|<Qgo;^=vOfWUsMrU_4WWH_=b<21zkeBoAIO`HouP2sokVh?PY{g*Sc' );
define( 'SECURE_AUTH_KEY',  'NUm#CQxy>6^1`A{kjT5:q/<`seq^I_ `ALun}#&<vqruQr: l2oY?}*ED`N~Kp27' );
define( 'LOGGED_IN_KEY',    '3j,u@E6ckW/k}.j!E4ut*3b3]:(;5cPig$~!JM{|}NA`fi}$xkp~n.ORK1oP_=Jv' );
define( 'NONCE_KEY',        '_=^^#P>`PA<8?Q3G6I*%Ltk@y|od.iQdYHH_GvMLRiy/M;%*_+$-dMe#`1xAHJ5i' );
define( 'AUTH_SALT',        'XLBoyHDJq_S}nAH$?^C?*tx[nh4V 5H&UUz+P4*J&VEk~<M|nl]yu?t_A^P&cvi^' );
define( 'SECURE_AUTH_SALT', '=]/Os-WdUTu1#ffs~tn==$(uQHRC?ky)?d2YkK;D.5FQk6ykE7C<i1](3<2IR.FE' );
define( 'LOGGED_IN_SALT',   'Y#9?*s%:h.9$ b;^D9&+[@S1_9K}/iys@PJz|C@w oIWjv+/Upp5PbsX%~R~m6$W' );
define( 'NONCE_SALT',       '6F-e-b#TFr5D@<+#Dg/[>8^VKA4.|t%.%r5bjRofs;=76lh/Rgm@Gn~#aI!B3Uu/' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
