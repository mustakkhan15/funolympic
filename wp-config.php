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
define( 'DB_NAME', 'funolympic' );

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
define( 'AUTH_KEY',         '3JhYzg!(3>mELp()SH}R:FId;1Hjr13>KIou:hgVZAILg@p?tFiDabg!4^;m&9t[' );
define( 'SECURE_AUTH_KEY',  '>tI?Sk%t_$=L~c1^i]C|rU6v0z>jhR6iX&d2T;Dif:n!,c{;OrDVKQ%Ap;ic-=AV' );
define( 'LOGGED_IN_KEY',    '}iR5Ht!tq[NW1%a@#},F(8yMl5VBO9bnS{)py/g;tmJK$`kZBAc$MZv}UQ1?bm7C' );
define( 'NONCE_KEY',        '.JzdjH@(-]J7H*FDQ|yQ-kxO-o(LbtfA0y6UbD[WSo*4OJqQoheO@ZUU>kI@tkrZ' );
define( 'AUTH_SALT',        '#dqAbfkbFLn$6^5aRIlTu!w$*V2x@^xl+3d%G&@bLIm%%w5Zwge4=we@Y/N110+J' );
define( 'SECURE_AUTH_SALT', '*vB8mmhY_Wukye5u%LZ{5<OBL@hU?%:vWI<V$01NPbyV40N}sWptuPqjPd!*xT*k' );
define( 'LOGGED_IN_SALT',   'dUYdO.3t!<AV)4q!q%pZF=/w?$9P6A]U0xs7FD}vevzbks]OLvd<^.RFef%mg=o}' );
define( 'NONCE_SALT',       '$k7@^*.l|w214MK:vBx$/?)^;}8kurZ;?)~.&4<J|Or]idlRLisN8Be9!8cn~)e$' );

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
