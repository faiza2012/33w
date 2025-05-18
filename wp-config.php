<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'voyage' );

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
define( 'AUTH_KEY',         'F76Y|SHiM+>_G_ gPJ:HP<l:3^9Cz4 Z@,PVV&`c9t@SvBIU:wC3|UTCsp:CHUyB' );
define( 'SECURE_AUTH_KEY',  'vD5*tTQ-+uUihpBZBl/b)<>0!B<-a~ncjm/<bg}1t^nB4zLDl.7hv)7)xETtO})C' );
define( 'LOGGED_IN_KEY',    '}{&Hd8pwNqQ1YG&x6izgg~]FKaCzor!SOnY1sZ8#&RupPtyGHZ1CA%AjMRgV{NZ5' );
define( 'NONCE_KEY',        'g!8*R%QM{,$8;?_2qUbO<~;K .^Zx@6Gt~$Q ?n_f@klX*2+(5CVODkEg0H:0pT0' );
define( 'AUTH_SALT',        '519P:UDG^[Dh+NlnQn{<AQq,Gw?0tn!3~dfPM4G;%J.LRa(jtRv[jGB .v:(5B=O' );
define( 'SECURE_AUTH_SALT', 'Nrp&38uMsPN$Uf3sfz..O6Q}Olh`N>obvkxyyZ o[=4X-Ia<f7N}59BqhHT?Qti$' );
define( 'LOGGED_IN_SALT',   '^*6_nSk=Mn5n= pnfu0X%@ja=d/un^;%&L9hu|`dtuAMWwMh>8q9,~;C8LfJUY0v' );
define( 'NONCE_SALT',       'elN-e{%lC2#3GL)9iMm}*z;zmG-f~%/g6`RWy4&0if:A#!-,fxxF)`mR1,}`v)=u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
