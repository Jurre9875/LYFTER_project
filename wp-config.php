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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'g3]HC;$o?+:ByV^W2<U_vsg:YuWaJo&FASBAi<+M|d<IN,W=)cl7PfeNnYSD>mNZ' );
define( 'SECURE_AUTH_KEY',   'k=s$2902:3v4c{WOU!$tee*Y`ccsIX;.cCL(2Z]J^bj{8 f{zmkDNV`Of^+X>F&w' );
define( 'LOGGED_IN_KEY',     '(zLZBh7nq>x scGz9uq`J-FR>.Xn1ZMsTy}WuU0&t=PJ]&+hB!i2tJDZopOiY:vg' );
define( 'NONCE_KEY',         '^~g25hVMaC}_)~$>~x)yevpVkz Vl3g[Pceg]tX+t(E Zc #SQQ>H;^S|BJ}SnGj' );
define( 'AUTH_SALT',         'T_;Q)^<{x`|4*oV,AcgRh?T:PW5)VfpL=P~AGjv2C=6VCRKJ&c%HT3L2ax0+k_0v' );
define( 'SECURE_AUTH_SALT',  '#d{worQ}=nn=d|?c,BW?y5eca4~xb!t5i/9>4narc4ytJu9`Ra];,b#TqD$aGAK{' );
define( 'LOGGED_IN_SALT',    '>A)qCVo)15S?!Yp2`7_>$r_`)Ms{z<y7]- /Ua-50IP%`+{|!>C>jP.:doo$`IyX' );
define( 'NONCE_SALT',        '3UEan3agrL1$QX}vz`xpbYzU{T#5n[J/iL]y2D7?6;aQ8};c:[m{{U#V&IWs-YZq' );
define( 'WP_CACHE_KEY_SALT', 'R5!3fCm0RxMnm9QM8;#iQIEKY4)hoJLtfo]Y@-vFyy~{,ki%^_7TWpD%4D-M;J2!' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
define( 'WP_ENV', 'development' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
