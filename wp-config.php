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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_myblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y7y~P#%U=gT?oxVP]9<nE~3p&E9:B$]#D/_`l5K)CU[SgTatL`tpQIb]K D;pN~j' );
define( 'SECURE_AUTH_KEY',  'HTZPh3T}AjR&URT37K~L3H3sRII1/ptfSu:Xg1qqISN|FCr|r~IADA}w:Ea^,Hv]' );
define( 'LOGGED_IN_KEY',    '-rE?n7@;FI9Oq+U1V@clE;S!c_d:N(sn?$WAo9/lsUPq7VOEnjI:[P?n~XUf(IPJ' );
define( 'NONCE_KEY',        'D`]#}G!|<F>YAWGr5M&}eiLFf$$SfNtR@{xYm#;!ms)joMZrcdJU5>]IV=>y^Q,H' );
define( 'AUTH_SALT',        'ihv&xDWscK$*Xx~BLdW4&{zD!h-!#vef|seuwP,YV;-xKq-gg75%3edB[(?R3|8e' );
define( 'SECURE_AUTH_SALT', 'FQNPS]NtZ_=KMvkp=Fqd,=.W}W)e: p]-ai[B@d1x?Fro>{r$>IQXt&&76{Iw6bU' );
define( 'LOGGED_IN_SALT',   'hBleB|$<P@kAHnxH 8=n],MBsX[5hIg2Q{zY$AwfeZ>A|!j@S3/!_A^gc =*,bm.' );
define( 'NONCE_SALT',       'R![{=Y7:d0_^zhxycng_]yIK<t?3/$^&-+9KOW^dZ7aE/MT]d-he~2<Ltmr=14G=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
