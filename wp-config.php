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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '97j]N-Uc4ZcDkw8JCw%AEa14Y@?lvKeaJ]buoBeT=5X9|9i}Y?l;I4os}ra9Sq%E' );
define( 'SECURE_AUTH_KEY',  'h4zF8+v(C+3V@3cw.3.D/Y5sa=CQfd*}ELe8I`y0D5d,2k9z BIc;c16)fO5CA|6' );
define( 'LOGGED_IN_KEY',    '}{wa7Ugf`De%>:e~$y-K}eQSv!T<]<m7Yi#^OpY4;~i6^8kU3]r*99U5:vfj=NcA' );
define( 'NONCE_KEY',        '-jSjgi@BI6SA0:6#@F&Tn[t16J!B aZkO>J}Aj~a5Xc>`= pHw,!;3O>!DTqYC]l' );
define( 'AUTH_SALT',        '!+**M2 )6aC<W+*U 5X8_9TWfPU2?p0n.Vd(:Wb?x@U-``ZhBTxIC0DB)M2@!|D7' );
define( 'SECURE_AUTH_SALT', 'E41,bk:%O*I/a&l+hh1{L]0P=}v{Ja<*h-bizTc!E2BW3DDGHe2[rdw g.oF^Ohd' );
define( 'LOGGED_IN_SALT',   '(x~UU8A$HdxZ5JO3!g)zbhAL=ty-t4jpH)d:.9jyK ?lVx/].l7dGl^N`(jQWxYh' );
define( 'NONCE_SALT',       'ST<_,:s4I84E@0r-iu~qjqxK]d`]iwhI!^i4-L!<^/Ryek|wT%PF1sj{JY|L+Yc*' );

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
