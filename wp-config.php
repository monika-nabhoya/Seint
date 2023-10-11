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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'seint' );

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
define( 'AUTH_KEY',         'taiZERc Vuh|yg}<p|Erq~Mhs3!}-l@9D.^X5>#?-#L2K ?%s^nk`&Q!wPzQ8M53' );
define( 'SECURE_AUTH_KEY',  '2zX].@qa*QZ@^yQPYiUGA^3QUsI^%UKhk3U9;Rivau;1jeT)Ax#Q^47snba;<I;l' );
define( 'LOGGED_IN_KEY',    'hWY+0t9Tjw`tU#HnLE7(^F:k>u`3>.K?/+NH+K=,d8*-4,Ak>>G9]<dB<4p*[n.Z' );
define( 'NONCE_KEY',        'fTB]]-W^c$`@rJNL+]bj%1FU0VUu}{L&3zR+zuX_P(!xBJ)Jy;s}T;>Bfc&Yrd~Z' );
define( 'AUTH_SALT',        '=iExj/GT^3z3D^~_C8a/E{ppZ}j@y12kPM/Hty[p]16aO^&/6)o]^.W6``j6s]h6' );
define( 'SECURE_AUTH_SALT', 'bk~24vQVGRUk$GI ijVJF/j97]OM0OG/AcCB/Y!@9G|YaQei%W`A%lhHCI_l,M4p' );
define( 'LOGGED_IN_SALT',   '*@zs*f:bwxA}.QFGHTse85Wji-eM`>&hxcvz1!ok5N5+fLr 3:%S)AOB<~0t q6i' );
define( 'NONCE_SALT',       'u&TI-tCD}LgJT`,Hs?R#8XTw7^s!HxQc.RsSR+*nsS/E*_)K sf.kW(dJj7e&kkw' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
