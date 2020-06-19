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
define( 'DB_NAME', 'wordpress-beginner' );

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
define( 'AUTH_KEY',         'b,2+!0$0,F0!96{7]2>>vCU3g#jfH3`:t$B?~uC-MGT=4c$+V4`&1bk_S+(#`< n' );
define( 'SECURE_AUTH_KEY',  'z=;)r*gu8/V ~8Dtn#Fw>b]W{[-uUu,-YH_WzB_EoNee[95~3jfYu-4]ezCX@dom' );
define( 'LOGGED_IN_KEY',    'ATUKAv_[oMMM.f.A.H(Cya;QJ9=gV-:,^6(&R3%![kZHua,u5td|ynh3e.gL|CDr' );
define( 'NONCE_KEY',        't/^e!QtZ#SZ5*sH+==mu3?eq8{_r+7;eO2~,o&v-M,g<e6N<QB1wt{UN*ssob<RA' );
define( 'AUTH_SALT',        'cS;F3~pYk =2zD^;JO7NtSLvi|e$uV#T(?LGPxoznde~bmsI6s`8/:y9,nlo|,i4' );
define( 'SECURE_AUTH_SALT', '.&JDp6EH#7>Z?/l$77hoWi%{)/Fm08kfW@{B@f<^4kt@ESz$SfRf[`qoVOHr4>G#' );
define( 'LOGGED_IN_SALT',   '-0a-7g%EI%OI-})hO<Ru|ubp/3rXm2YDk$}rn$tt~=Q>W.m/6!]ii^y/[c~&~/Bt' );
define( 'NONCE_SALT',       ';OnKw<=diXLI6fInm|N|Cm/jn-FAYMA=i)dc*#Bx/4zLC{<6 K=.F^wU5 R_)KuJ' );

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
