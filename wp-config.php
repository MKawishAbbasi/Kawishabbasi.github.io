<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'Mkawishabbasi' );

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
define( 'AUTH_KEY',         'ZNs9hOA(:R=]hm|}(pkom@diGjoc{F(G!Y7TUBpN)fn) N}`mYTz),Bd&GiL>5Y2' );
define( 'SECURE_AUTH_KEY',  'kEv@c2hV,*Y}`%#3Q[#D3,8B4A?m!-&/A]?>l XPYMV|:|lb,()+un8z0JY(;B76' );
define( 'LOGGED_IN_KEY',    'rWlD`f*D3u32KboZOlJc!.~3kmM##/,2%(*9i9y-a7_T8r+&k0-JWS2lKb;H3(l(' );
define( 'NONCE_KEY',        '7yg#Sr^lCR4uyTSeNba=?1h_1F4YpP|E)y:/.+r8Hh$= $0fgX`ucnHOh_yo4$;{' );
define( 'AUTH_SALT',        '!GtFlBNK^atu#t5~@q)Mz-({3{)}A1ciSx=.?n4sY_wY&Q^8Ea:L#|_*W}o-qns(' );
define( 'SECURE_AUTH_SALT', '-I=&LBI:OuIzKE,pF6l_eDwNS?`_E)vj4T9_--2w3XETMUMwMZo`U/{B5)OuGB`6' );
define( 'LOGGED_IN_SALT',   '8i[zZW,ArEpr0Y9ei); Ss`)4K+}f~Tw#D`f;i*p4A*=[ME:jWZ?5$ G!RP0-zey' );
define( 'NONCE_SALT',       '/ZRjD-w&7}Vds{B0cJtC?5}Yq<b8eCDjr:PDme_ON*E:^lJGR#vbmMlll:9D+$!C' );

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
