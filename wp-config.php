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
define( 'DB_NAME', 'labb2' );

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
define( 'AUTH_KEY',         'jUX{a!.-8|Y3/H?cUx0O{N!8{fL^+Ul7Rn*;9v,B>4.F{A>j,ZZp2R5&=83N_Q4G' );
define( 'SECURE_AUTH_KEY',  'P0a!<nUY ]kgu ]Fpz-QG~~`{wOy5.c>F_l8Y_qrbXaDtnm=h1*l5[<6KQk`3.Al' );
define( 'LOGGED_IN_KEY',    '<1e{W)40Yr0$LbbjU-ej,F3[!]J}<FLJwVVI3@;~Fa&^uc_#BaqZdvpG.-5i]]1Y' );
define( 'NONCE_KEY',        'Fv]b[29S!7&u]0oy~)q6P+#P,9!:tFW{1VMI?N%$Cs|fD2<}0{X~^1UCp*pg3|K2' );
define( 'AUTH_SALT',        '3Kf0xvQb6[G&Z[vYWX5-=%1M!6n680riVC9WE--_QwT+~KwdQud-cUsOfe`k%[f$' );
define( 'SECURE_AUTH_SALT', 'k7Z%gMJ@9vBEa~h07@KXtXD[6{*IGL_/5|F7trDu1Z4jA)%[+auM83=?h=Hwi)/G' );
define( 'LOGGED_IN_SALT',   '%b^%mo%p:N<E:vnpkE&X%JjV.Rh!;SMtTtrJ.,Wt;|;GkHhH56Lk1]Y!@T*BNc$C' );
define( 'NONCE_SALT',       'xZA(=BLMvaA6*dFNuoqf6Z{srG|,4Z))vwcW>!7W9@%Wrp(rpp%_mevDWRJUGEzj' );

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
