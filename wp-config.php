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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'event_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[Q<-{pO>smk{j*xkoUh,3cRNva;mQQQvs3{G6xQN~mkGU-8.ut$T)lsxrG~0y#,7' );
define( 'SECURE_AUTH_KEY',  'AZ!Gfk9787/4zD`[,P>rA&+n%moUxD3>UHEk_7bvsZ%H+YT,/pm5YJ)4,3j*xNS&' );
define( 'LOGGED_IN_KEY',    '*RN~EA$Y%6;BJ$W{h/Z-OqtmfR{FQuFy=buWn&_Mi2!s%8JBMMiIwri&`0g)^Lae' );
define( 'NONCE_KEY',        'wWn&9oUv4[.8=`hnP2,B2N#[IYX$;F9)@A34qxxL.Q ~UyIQ*9:!w+?-)jPmrcR7' );
define( 'AUTH_SALT',        '<cVQWZ>QO=+oREE&,;y>L6j0JX],{^(%YwaUQrWb<^0b86TtHC@g:.-~(rV%w1xa' );
define( 'SECURE_AUTH_SALT', 'ZLQ;Kq~drlNEzxSMvf:}U}U0]|$HJv&v@FuP`vH677n{yfqGu+9U%.ZPU0NH1+fS' );
define( 'LOGGED_IN_SALT',   '66*RYQR)7$`^^6LL|<%_z#fd}Xzr_ik2kR Va.;+JD>+QnZ},)x!n}+R4>ZX}Ak0' );
define( 'NONCE_SALT',       'VUFqh/J*B2lx)N|.hrjm2(Q@l>%qOc%*uc)rC|y#mor2)}+Dzy8iTf%Vlw!E>l<o' );

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
