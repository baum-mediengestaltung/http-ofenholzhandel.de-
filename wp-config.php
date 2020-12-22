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
define( 'DB_NAME', 'ofenholzhandel_db' );

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
define( 'AUTH_KEY',         'V{Z~F8Q$}|0^Z[&ZHr}r;N<dbHBIn@[t3=Up:f}v~]r,PPvv$oLm<t>}|bO[{iI7' );
define( 'SECURE_AUTH_KEY',  '3JN!E(67xsF,+@8+B7YwWjhE ;<3;GNl$X?HA2r8#l6vZ 4JK6}P+!z!Y@)G9ipe' );
define( 'LOGGED_IN_KEY',    'I5zoP-OCF1Mwk{R8iH[NqN3eFb#P~}WlK:.}=M542ML<JoRBZCus_kjn7{t<}g]z' );
define( 'NONCE_KEY',        'e$^(=UZ RI!2#U>l(`*&o8:y~46{WXvv.HI_9n$9 @w6=/UaM@&_qsC+&armUI3U' );
define( 'AUTH_SALT',        'lHCH+`DXDxfZ;_O7HW`t[nUW,1$IKzrE^G_;0UVBgsY#u`GED0.qxclG?oE{1v{4' );
define( 'SECURE_AUTH_SALT', 'nD?-~8a~*,K=*P-0}~I<zIh0;.]0O|p.Ci gs_;XLR%C?FViZs^-:Ob<<,b]W*Pr' );
define( 'LOGGED_IN_SALT',   '!xJgPG@-0xP?OZ ryl1/:V}?eF$;1B dW-H0,2T!t*]p*wM{(+&!(FEG@BH`p(GV' );
define( 'NONCE_SALT',       'IS3o}6YC.O~@J.T ~PG[+|7!bi*-8]oLIxR#dyJAT7xT-f<n.FiicL<<rQ`{URID' );

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
