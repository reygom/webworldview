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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'reygom_worldview' );

/** MySQL database username */
define( 'DB_USER', 'reygom_worldview' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Worldview2019+' );

/** MySQL hostname */
define( 'DB_HOST', '67.210.244.162' );

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
define( 'AUTH_KEY',         'GNl<IGD+Kij:p Y- G*|C|h>6z,+rJZ*) YgvKd>Ee<f$3.0pXpu`}i_IB/~=@_g' );
define( 'SECURE_AUTH_KEY',  'E*_o;.iC<=V7.zY/Tt}n7dZsYAick!fB!%.sU}e0 GHhu{knswMd/>@3[w|_=Zm/' );
define( 'LOGGED_IN_KEY',    '*W],kgq[##rWuk|zz1Ja}}%l+r-j^qH1Vl-TLEsnnG1RgKRh2Es/[I;wS)f*?_bz' );
define( 'NONCE_KEY',        '.,?FGdz@ wLq)wpTUGCLr06}{IpMlzlP}QOBRK:GBm5fOq5Rt>Flvy{I?/^>ZaFg' );
define( 'AUTH_SALT',        'PnbwZ^=b]z+t#on+`$Q{X4ON,b<iWuIfSw[1U|Z>I0-5u}0_|J+Mx#nR]AL2x,#}' );
define( 'SECURE_AUTH_SALT', 'rSYkg%pzfrC/~K )X by9Q;<ka{R4%H+*sBJP/vAikpV/4Ey](SnRz<nJL7hnYC3' );
define( 'LOGGED_IN_SALT',   'x#9#UQ/^H%8gb@-=M4s_Rp0KpQQsbcy2<Zt-2lNR8Aye]R)oLGS/,X(awBY&5blQ' );
define( 'NONCE_SALT',       '(=,Ru&3r9Jcq^<l8=HGV`2f30,X=6)fU~dM]mYL6! _L<O.Q_JFM[r3F9Cc>),tr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wv_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
