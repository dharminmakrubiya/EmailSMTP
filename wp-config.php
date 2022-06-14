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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eStore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'bwpN4W`yaozFJa}_=0j}sd])gS~;0y^W>Ymj-^.eo6Am$JrlRMIVSER8+ou^X= Q' );
define( 'SECURE_AUTH_KEY',  'HWe~?.sOGBO:VpGGvq<3za&B3&61+hqOj~{8fT{kH+P@?H^Kb9Kuv,,>1K!Y+I[.' );
define( 'LOGGED_IN_KEY',    'qi{dcLh7+}[5G 5JV@0b2k<avvxX&6}>>t<Y0^y)MqjP]FeK/CMQ46%jC=<TCOc4' );
define( 'NONCE_KEY',        's/7?yJ}d<Y^?ayla>~=?bUSIB-,jj+nbxdc#JQ%pE&)S!?f|jn4@q+ePH0~v3)XW' );
define( 'AUTH_SALT',        '`x]7wR;a$uP52aI3K:(d` K(hLJa#hGdFo{7r5y2P3^tNpx|M+F.8|NXk4sUa9_M' );
define( 'SECURE_AUTH_SALT', 'aw)>Uf6>J|.J7=NADyu44Z]CEJ-,JEbi]HdDPtcu&pn}l>=@_66A:;Op C]kX8LD' );
define( 'LOGGED_IN_SALT',   '$TNvr,b@d-W379HD)!6>NgHy86G6U0 a7fVme$,0I=VEbF6xl 0o?6fu}Er6g.}E' );
define( 'NONCE_SALT',       '9)YJD FT %W?xy]jSgiaG&ax@H<LmT-(dYx$c9&J3Q#FC,tjwhynUm-+)P|J[k,z' );

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
define( 'FS_METHOD', 'direct' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
