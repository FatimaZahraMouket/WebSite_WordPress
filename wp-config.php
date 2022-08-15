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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'kQHs<jwDr~Mm3^MM{:i_t/Fnk*O1Z*lK{ W9Z?R`u_Lbvh)9obVCiY~|/)2>Uj;P' );
define( 'SECURE_AUTH_KEY',  '}>0TqRTOTvT{PU$N`esa={1lQS{|VeV);ihJBPD6W m,B?qTLSL02G<C./H5CJ<[' );
define( 'LOGGED_IN_KEY',    'sA]zdm&`=?US=s*6]<^lP/;E!P3(-/!,N&LvXWEm77%e>86a{QvQl,O+cRUj :M ' );
define( 'NONCE_KEY',        'CtMB91h;ETb%v}i9blO,w>4$5@B%)aM%+l~tR>cNWICyeNi[.Z<$Wtxd*Rys{ZhT' );
define( 'AUTH_SALT',        '?,y}VGJZrF4;#ILvu2$wqiLKNqX.cru30hLij1HL|:T`aNs}I=)Rw67,[E;N(Jpt' );
define( 'SECURE_AUTH_SALT', 'XndV&+vF`&nwvO24v:f{1_BDA58I=Q6qlnAKBvOX!w#m%h!8p+}.TD9}/Eb!WY ]' );
define( 'LOGGED_IN_SALT',   '21:S4wc88S{X/W:he-rzr2`^-BY^o#q~c_!7C;cLu/LUSGNYx:$Q1]!HCr>XNsuF' );
define( 'NONCE_SALT',       '%0i_dhq9]8*yPjJ(Miw?CWu4D>>HfrFy*gxT~nAjOgl!4[L[MEpThRXGDAw`(ZjG' );

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
