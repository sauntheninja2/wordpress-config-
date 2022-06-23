<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
   $_SERVER['HTTPS']='on';
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );
define('FORCE_SSL', false);
define('FORCE_SSL_ADMIN', false);
/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-db.clcryk94wsz0.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'iD@]}=0,RP_-fjhx5~cwPbeEE{|u#UaYieJmr`nW42vYtAY~+N+RQryzIv|t-SE' );
define( 'SECURE_AUTH_KEY','1+wV+de9 S-<EW$ `*ticCYN//mNj+#s:1bFJ(~4Z2|-EMg|~0b}) /R9, r-Pm:' );
define( 'LOGGED_IN_KEY',    '_>XC]Cay8p@~;<VFUX`}3[7ak1+v,Q+*F;;ba)--mb5M9OVz7/F{lOk{=da&;{Wp' );
define( 'NONCE_KEY',        '>I~%3z^GD0(F-e-8#Dohn|U-t 73a-l#+rU->P%OLO(oZqm*?ol-zbjvLm!YVHFw' );
define( 'AUTH_SALT',        'r70:-zY8MpYq}HS4[(q f~Q2,n3+6OcCh-@J1PY0q5=s8}RnM/Sp2Rc%/[3lv5)U' );
define( 'SECURE_AUTH_SALT', '#AW3<Zz9y+y@^7qr|M`ou4+ua-2/bBa5jxc2GD?%))WAkpSF6o>{nmk/we`TQ_qK' );
define( 'LOGGED_IN_SALT',   '/@e>{|`9E.V-F=dj7LN7iTGm_&l4Whm)1d^Ug,ph.4XHD@Jq|BQ4q[1inO/fljYQ' );
define( 'NONCE_SALT',       'xsc3S+}Vg1d9V2.Zhx&@0OQhjT1RCS_BXd^<GL(|yprsBoK:xT.FbCO.x=#+6MF[' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
