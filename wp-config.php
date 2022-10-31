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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '/%`WzQs95*Cbap8D1NT{>ET1H.:6peh VtZhj rZK)?liXafUk#gz,q2_l7;8D&}' );
define( 'SECURE_AUTH_KEY',  'Q=t_vRe.BsN-&WRz~A2U@MCf]9BX!@7H~Tf8B8!RNpw!SVN_A<*_J7{x?JC6K=A4' );
define( 'LOGGED_IN_KEY',    '0)=b%2i6Az+6.[fOSZa&?q|:N<?`WCN~t8.HZgw7m!*9R[bOILc|_w^.um?ND&x@' );
define( 'NONCE_KEY',        'P_Pg>=[*}WY.n,A~Eyn{-D7cPt6@ju8pQNL,vQxWK&=AqHrh?`;V:y;8-+GBTay%' );
define( 'AUTH_SALT',        '`XS[Y_>N3{q$D+;|[axi65gjOzS+SG+ui7Ny1_&?`(fvoRY5S=#VGSZ3}42yaTYy' );
define( 'SECURE_AUTH_SALT', 'M~:^O|e=COl:Ge+=`!QMzaGc?WS)W)/@#2W*`jlv?hIyw^P.a@bqm.^AU0(MEDg<' );
define( 'LOGGED_IN_SALT',   '=/O;*1)pPlCR2I/BC$oS|Pl^U[S-S+U6_D,ar`uk#ZC:_pqkz|&OrKMZq2MpUhgn' );
define( 'NONCE_SALT',       'Wp6B1$a]G25m1i3_s>TsA~/U6^xc7NX7Nss^e}_~EBb1Ju<&NBI=%uB8HKIWaOt.' );

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
