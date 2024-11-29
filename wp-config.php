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
define( 'AUTH_KEY',          ',[/SgjN0WO4u[S8U9yS|5N@TJ=9REXf/-[lg2P/mI>5IT;d<xDPYC/dMlLunDFQZ' );
define( 'SECURE_AUTH_KEY',   '%Z1O*U)zZDI%c]@u=;l6m$`<~4D/tT=N@U/-~C_Xy`lI%Gk<l[`QY4Nl{06dL_?r' );
define( 'LOGGED_IN_KEY',     'ZpEB4:&ZP0zh[uaa=q0=tF{<;u4I8/oA,VNR12n1=K-G5nc4S6Z3nrOg?=ka:|PK' );
define( 'NONCE_KEY',         '/-(L)kWc>`BTU9Q$vq@iZGpGOxX-B9=E}i0xqQDOp28{Ji2Q9-);ngT~7Ev:DA2R' );
define( 'AUTH_SALT',         '>>~7IrYfx|9o{`Be8LM0nj<awF6xw=?!y;E8rgg2u!M)V;M$D.:De>*A/ns]%%*{' );
define( 'SECURE_AUTH_SALT',  '~U2feU&-w&uks$jZ#wR,G:tMz9cj%u-A,W`fkD?fjz)Hko}0QB#i{5KZ@QgiG@2~' );
define( 'LOGGED_IN_SALT',    '**J478y#nBgNbVUjIV2+#x-1v?=3Rko+h9j-<iQ%t81`03,)<$ct3^#T!uwApbgI' );
define( 'NONCE_SALT',        'J/v~<^&c48SLK=>-|}Y6Pw~Za5to~/d{rXuSV,nLb 2?9VxC1_soZ;sH&OAngeI3' );
define( 'WP_CACHE_KEY_SALT', 'QbJ=HJiNm;K&Yp?+.(>1+1{:r:;g6u*ij~:*L4ym5,O4*o_y~R 0aF5uJ^KK=}67' );


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
