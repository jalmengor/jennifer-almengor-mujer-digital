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
define( 'AUTH_KEY',          'ORL[kUw;q<K*r>G1(${yT(=l[nd$5n2_N?JTDT|5|(_M!9Z`$0F2F)%c]Oy/6[aC' );
define( 'SECURE_AUTH_KEY',   'M4+},!=IyJmQ^[,M$/^V@gq`;n_ ,+h;^RR&3UqZJGq>~9%s[GfNup.e0RTKJrtx' );
define( 'LOGGED_IN_KEY',     'Bu.UUM$2#tB|#2Vbm`tx2cRQmQ2kMmS`Hx?8g.Gg-MRB[q_ERlFL1J_R6S!3P%Ue' );
define( 'NONCE_KEY',         'dLM-]rv|+_ *iu1h*?<RvZdc(xFQV,AP86a7#b+qo);9ab}$9mAuPEN]E;?H$!Cg' );
define( 'AUTH_SALT',         'Mab>4FpP0)n}xBk[&J:l&[q!`$^TsOKh>hH5zgLxHnol#mtRwQZn0Dc|$#Q5^er~' );
define( 'SECURE_AUTH_SALT',  'fw~+ARx)oZ!c+#p %oHslB[..cf3T!lI??(S*F9>7.bqJJjnS/N,6#3vGHke+V t' );
define( 'LOGGED_IN_SALT',    'pD]1Z]Kj.du=b~/!{<e+[8UzYZ*z]8zoCn H+>5`vKg>T~7SBvTe@{j&+:k%PGTo' );
define( 'NONCE_SALT',        '3SLaK70^5IEZAu+)Yau+MZq0JtnA_c dO&>bg/CisBW2:aKr;>>n5Na)sNh*U=<U' );
define( 'WP_CACHE_KEY_SALT', 'b_e]Umi>^c N`+sDY=N3Ce[X4^iV~mVf%}I/~<b*@hzl>R7,q`Zv^y3Rm(aZuoPd' );


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
