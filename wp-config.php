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
define( 'DB_NAME', 'wp_omnifood' );

/** MySQL database username */
define( 'DB_USER', 'holodnyakdasha' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DKhd38wA' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'np(Du-erw0J-H&RJe=R$fZ-p4.m,u)j5J0QTWg->yS28r_p<o` |otZM,AN6O%c4' );
define( 'SECURE_AUTH_KEY',  '9W8 !D9,8>zu{918^,u#N1M`/8>1Q,n6g_Z4:en;Ec~T$0l!*|MQ6`gnvpD)i;86' );
define( 'LOGGED_IN_KEY',    'u=9%eC*YWrI}PkB{+y%XN^+dgsVY6a{4BV>0KiBN9Bt<P$7QQ t4!)yXHhQw|%_!' );
define( 'NONCE_KEY',        '/n3.G_otI.2%9z-D3B|u^Y@BWpI6tCJ- Vyw/h;7:,MdFbFKuG0On0XC<k3u0=VF' );
define( 'AUTH_SALT',        'Po`t.;d/]/BM(2ybKVAB+=@U5YWD%4aGV].i/{qme=HX~2HoQMalN,8!x@Tv0_d/' );
define( 'SECURE_AUTH_SALT', 'ld:S{BI-3H,;%X:/1WjFGWp6Evrdd1Eu?$;TJwY8@1(R&mZi;1:9o|z#Dsu@qmPF' );
define( 'LOGGED_IN_SALT',   'ng387&J<iG&4W+OF},Z251jtH|{`er(u!t[8=ZTsM?O`0ig$Ng@/U /nYim|!dS+' );
define( 'NONCE_SALT',       'y{X^YB>EwZU&c~AnS+6i4}997I#c3=gp{J>GN3W6DsW7u nT|0U016}xhw;#hy[C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
