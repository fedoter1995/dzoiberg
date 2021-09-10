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
define( 'DB_NAME', 'dzoiberg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'InZZtD/_QsO,B#h;^lVLwShr;yO/7]}KWT4uY}|[m$zEJnvV5&;wH`w j~s@_6{0' );
define( 'SECURE_AUTH_KEY',  '^cPw$9_of)cnLvRYxA)sr) q*O(ISB9Ac, O.%R?9hR#f4W1!ehp;]B!E5,>_vVy' );
define( 'LOGGED_IN_KEY',    'J]}h4i3Mx4O4,gTZ/z<ynrQ9icjfA;{REbiVyAfSwn_!y=3!&z7?fdT, l2;]VFC' );
define( 'NONCE_KEY',        '!jyOd!k}<4%}Pl/4$^dG9dmH@#+0qK7~fwpTz<A>%Gwy3M,uq2D$+F-J;@856S5 ' );
define( 'AUTH_SALT',        '-y/XpG#5o7LGNq;`%bL 3(d02q]g4%uj-7z(n)zOWeYM(|u@u`dM}y+Zxl}n)=C}' );
define( 'SECURE_AUTH_SALT', 'W]0sOUh8xJ0)x`LapxL3JkI%L;@&)235=Pxl)mhx}6.WX%hnA}kBF4Ig6mFaR6Jz' );
define( 'LOGGED_IN_SALT',   'hi5/PKhhGry,ztF;F~By_>=mxLPIUK>U=R34R9$7Rt.Rl^!]iM^^*AWGQpyI[L%z' );
define( 'NONCE_SALT',       'z/7192kUsZ-$ZnCYft8qy@}6S.#08JgaI|n}AvXXC4I02GT#xPPj.M[&u]$37>jf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dz_';

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
