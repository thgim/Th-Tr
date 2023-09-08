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
define( 'DB_NAME', 'tmdt' );

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
define( 'AUTH_KEY',         'vRW}|IU~#=4~eI.g:i|vWQ$sp53sQuo8qDB1ZRGa$RTq}5j~f&lom)wq]2Qo ;yH' );
define( 'SECURE_AUTH_KEY',  '11RVC~9/F|4t[{C]DC-4=/1,;Mzg}V93q dP2?rSx;VB8JYxFWkyX5&M{?#-d4wD' );
define( 'LOGGED_IN_KEY',    'Yc)TLnkEig^YxfuOw#3{m2|#IP][+,2,oH,~Rf$Gi ` Z938[/[>hHO}^Y[_=&Z3' );
define( 'NONCE_KEY',        'e=jl].Ie nJ0k#WzS9kO)rIEilleILe[vMZ>Oq1-moPX+> ;S2(XF<p&&H%&v:qt' );
define( 'AUTH_SALT',        'reQ8sf%1tRg}PGq}GeKcaUW{m_f(ZpQ0MVz^x[[wmr@{B6NvQZ9D$M)kc_J:D=H;' );
define( 'SECURE_AUTH_SALT', ')g6A(n(F8S#kRsnh0w-+&)>`;Ca0Ef$M@J%e<+VOk8tu_Tm%CzEvY|] u,ee-Y)3' );
define( 'LOGGED_IN_SALT',   'Da5M+`.yC5[5i!*{Egg|xidx&Y:Cl3c<1We1E+}`nt,xlW:yIo[sc/K~R{ALA)-9' );
define( 'NONCE_SALT',       'Qn<^dgJ$.;w4|I,atwtgH4va4 %LOUt,*cq^<?2yPES_xR#rUmv%LLB!.sv<6^G+' );

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
