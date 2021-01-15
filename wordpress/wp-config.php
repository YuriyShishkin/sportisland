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
define( 'DB_NAME', 'sport_island' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j%avIj,(o6L=m3$0`%y !%Z<;a3RaA?-D%$7ZnZsefEhJ6*I2:a?(CH8lI;7gS>]' );
define( 'SECURE_AUTH_KEY',  'L]zPed;dDVxm&I&5Jdcdxw1,F{S7d{G[TuVvzS-JOjeP0aItg>$lSB<mocD+EEI@' );
define( 'LOGGED_IN_KEY',    '$UbynVWq-a/NdGrc&@Fx#g2lUWKQYTN0ox[-,@&90Z}D1A&a8xLJQN8+s/6n3$U=' );
define( 'NONCE_KEY',        '69H_+*3rYsf]>5)WLw@DcA>maM<SI{|~K{o|&;Xq+tb{*|>GD^X))irA!zbnH&T[' );
define( 'AUTH_SALT',        'BQm@pX4qubv{=J577Lz$xn6fDg}cs.F}--/NhnbgHO|Uq+w%?P:[5X_|A~<F[M([' );
define( 'SECURE_AUTH_SALT', 'C!^k~KnEZpjm)]4y!XsQEr+<jw^#/+HQA0BzE*LKcDc8y`fhgcjwtXV4kt=Sya&l' );
define( 'LOGGED_IN_SALT',   '+ LT2e.<*7wWd-00$[FBR]S^gq@A@6ur!e;G2ENy0@0A45o]e4= 0NqzXoFVH@-g' );
define( 'NONCE_SALT',       '5wE4UAC8!yY+]%xnF$70 (0{J;-~qquvA%$/HA95FTlb&K+Z9>M(]4{d k$r;{yJ' );

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
