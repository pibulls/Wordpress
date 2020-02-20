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
define( 'DB_NAME', 'sachfredrick' );

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
define( 'AUTH_KEY',         '%FRp#W}2xRBC}CwT,VTaBZv6.jty5EMF Bvg=%|U|b:#;!YFG7XFu@8NC_2!)!9I' );
define( 'SECURE_AUTH_KEY',  '*k3C@kM|fY!|EPwzm0C91C:t?&O=RS6KlaKP75:n2%StFyp-$9fx>l]9+]!?iC:Z' );
define( 'LOGGED_IN_KEY',    'hC!=_xAU02HQR9G7}#af.6fbdwC1H%XTku/6h@x)@|B=Yo)u+.]4TG+}(2Q%Ev;>' );
define( 'NONCE_KEY',        'Z4YXdiOAAA3&*7kO?OsqJg0_Q8=&3kD5drs2*:+14>10MM%P/M_a=OB*w rz3J{i' );
define( 'AUTH_SALT',        'v!wTFT5*E.%8%jLaz _x}6zOX_8Z~c.}:axV:Dh(7=Byq1IzRIA3m26v)TSPnD<}' );
define( 'SECURE_AUTH_SALT', '2${l^ {dM{q*W|BxpOSzz=S7ph(.IG-z7JuiQEtd7b6=Wpn.J3s=x-f_:}A7CJ.f' );
define( 'LOGGED_IN_SALT',   'w5LG:OAx(og2WR0yf>k-XIfC<)p[2JtZGESMm_w<(ZW+Oa7LhZ&`dsSTO3a>}i^w' );
define( 'NONCE_SALT',       '{*&<`zU`$5F/BX3f~I$(Wl>Y&=rm%}(j!QMVS1hwVlGq?d=Uu+cH95RGAfRt6^iw' );

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
