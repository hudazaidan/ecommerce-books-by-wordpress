<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', 'C:\xampp\htdocs\eco_new\wp-content\plugins\tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'AdminZaidan' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'CG,HD-A6Uvtui-xl|vO^3Hds_grZP2>[a{A,{YN#?_)^bs|0)Ts)Io?Fmy|kn*H7' );
define( 'SECURE_AUTH_KEY',  '!X2=0fLZ[Y-e7bS5ce-lXe,sNvaLMC]T%fZ!<SO]`I ,]~-(YKd7CUIB]hGdRnGy' );
define( 'LOGGED_IN_KEY',    '>.ABv b>Af f<z-{VrM]nQ(8H}SjlE]^&{?y6^S^/mgdmg+;f4Y]hzn20:>$*U*j' );
define( 'NONCE_KEY',        'ABd6b<|(km,mN:=D>/}t?NW`qsif093xKUr> -YXiTV4o:a/Z]3BZo}c9wyebod{' );
define( 'AUTH_SALT',        'yX@Oe7tydzx`bS-?1;eF 8yey[*2G-DtEQGs3cqq3o$u@r*1gwb85g:e:<?6<L$T' );
define( 'SECURE_AUTH_SALT', 'Y=&J![]2VLdF/fWmXCX~*/?$qYC(H_wPQ7.H)qRI6rNJ3p?Qrx]L>4(D3kKpq,{k' );
define( 'LOGGED_IN_SALT',   'GpA.A&|{v~G|s ,RI284P5Jy Sf%E65b_Wdz|$Src{5.#9ZJjRs srq@H+nJ}A8q' );
define( 'NONCE_SALT',       'azv^xc@jj`wJ+K7:@.^wA=tjW7??C7]4x3s|htiC-lUG4%mMfcr0@bA~t=c&Pj2I' );

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
