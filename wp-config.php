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
define( 'AUTH_KEY',          'ivTslEQ.[DWwud5b0?|aMc2o_&06c$?Ov35(Q8R_:qI$:%/!0T &,C`T]{GVtYOp' );
define( 'SECURE_AUTH_KEY',   'C>o0v32`BR>r`R[;$mwyCuS:DWK2mitg#XGP&9!W6~z>d>drnb-GF8N-wC/lLc&g' );
define( 'LOGGED_IN_KEY',     '}tnEe9M yH:7prc?KYl816])O.|0&P/HFg)ip6#pfPVzeBeV/Th3?3RUnP[ReJg6' );
define( 'NONCE_KEY',         'm>AJuoLBp,pO2q3v5W+wU{6Fsx9#CG,0*>c/@_^POxtIg/nzOCMjkccWR*4n&VpW' );
define( 'AUTH_SALT',         '@O$LNyh.(]}7RO5L-+%^h7?lu+#Fw}59ldo>J$U?$`NpJakNI6qyegpbQg3 SB+V' );
define( 'SECURE_AUTH_SALT',  'h.Y-39a[NI<=W-q/ss4~BAu;l@KGL3=T-!||annqbaB>zrIqgM5wQGeu,ksyjSr3' );
define( 'LOGGED_IN_SALT',    '|<cQ$#{Y_kK3h45(npnzX!{Mo9JI<:`TpcsNVAllNR*{$!2xrI#hB~3vjN2P9w!W' );
define( 'NONCE_SALT',        'HV:,~Gc*(!-`TxY@/FgA=|;<d2&$5X3:gQ]ygU?qpn+/.ly[DZ?>^zWPwP*~{~-O' );
define( 'WP_CACHE_KEY_SALT', 'E?,li#}=.jB:y&IPVN|n{uvp>xHTt}+RF#SCY~<QL!S@ZQ#dfy/|6b9RH*jZu;U&' );


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
