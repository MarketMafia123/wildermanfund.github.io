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
define( 'DB_NAME', 'iosys' );

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
define( 'AUTH_KEY',         'H&V%n]<#,wM:WR_ui}r?yVHFr}SEW@qyrd5E-`%a.^%ZKTVry^h6z{4;}Jp%.h5-' );
define( 'SECURE_AUTH_KEY',  'rngRuw~}D37Ee7+GcEJ=;X](jg}Ia&~`;i6@z`S^(]+8!0.:J.Io2O;5}?7g~O4C' );
define( 'LOGGED_IN_KEY',    '0Z-wvX>i_]n-?!,Bpj<%(D`aO#8- Z$eT8)Vwp_Rd7C7G]aU_5aKQ )QH@sg,[=;' );
define( 'NONCE_KEY',        '%R3e kli[GEw>jP|0GR3-dlbko0@>_mmN=SSZW)a<gd[g5kqWOw{/.Keg-@+3vA$' );
define( 'AUTH_SALT',        'NAs[B?g{|V`hh~yCZ^<-4Z2J}+ELfoKr!nP587S}s#s0RTSiVG5/t?%H5[SpkNcn' );
define( 'SECURE_AUTH_SALT', 'H ?tuh-Ue9?Rdm`cre6Q}}uc+A#,BOJx<+d)vu$RIB=J>0caM&bu4rr{:-C|Ws<q' );
define( 'LOGGED_IN_SALT',   '_5X[{%&2;btnEab~Hi)WGs|Qj-/,r| -Qnmb[ig.$6/=Lep*gickoXQ+>k*ql.;`' );
define( 'NONCE_SALT',       '5*0 a>sx`x7#94fJ)uqE~24|) +.PFE*<}o!(#7S2<8vo:GVL<5-W:qFLS1nL~xw' );

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
