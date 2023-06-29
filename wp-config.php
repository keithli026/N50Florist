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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'QvAEA~%UJT(^r/#>4,H?_X4|L$I$_TwOW^49@rG[k4&w(^+9%t],JqRKD@ncgK3B' );
define( 'SECURE_AUTH_KEY',  '[-s}I??)^SKoP0.giE>hBDv3>%piJ$|pND6Wh `p47*JD2TRnl?R9a;+2W%I#H0j' );
define( 'LOGGED_IN_KEY',    'n#p?A]CivP5m/9}FLJo-:A3L&daf}P0:[#CT~S]8!Lf$FY(Z DfCXJX|8wQmJe-C' );
define( 'NONCE_KEY',        'SAUrfA}3e &*Rrt<&U5cOT!ZMkIKOw!.dBXlJyN0Pl0@&m8L_6r29ox{mP?,bQ$q' );
define( 'AUTH_SALT',        '62;)Ty)MtiPO=LXdT=w|iK)>K46~ M`U^(whV5P{%y@PsiMb8D1R^^Y3s7e6KF10' );
define( 'SECURE_AUTH_SALT', 't:ZKzOP*f7Ewr$7YO/,Q.C2/a;p!$`Cs*c|+1aKi)&NGtZf7_1SG(IhDIxqVj~n(' );
define( 'LOGGED_IN_SALT',   'b46C:~(Tz 9&PHN]9q~0,=Z)]`xQ)3bX6A[_U6(_b8>qC:b93UW<jBnA]9,h-=3L' );
define( 'NONCE_SALT',       '?NIm.VInzd4*vXeh M<s+9i:}AO3^U5*y/.wcIO2au&|b0rZ-jP1R[p#Sv-k1Ere' );

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

/*  use the direct Filesystem Method to install and update plugins and themes from the repository on your local server. */
define('FS_METHOD','direct');