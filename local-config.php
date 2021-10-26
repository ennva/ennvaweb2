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
define( 'DB_NAME', 'epiz_24658683_ennva' );

/** MySQL database username */
define( 'DB_USER', 'epiz_24658683' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sTQTszX6LgVd' );

/** MySQL hostname */
define( 'DB_HOST', 'sql302.epizy.com' );

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
define( 'AUTH_KEY',         'B.im+Ms(WF}CP-!3qjIa M];N jvUu1Z^w}/;:t`z^ hwsoP1i$9/&%lQ.go PuN' );
define( 'SECURE_AUTH_KEY',  '{AB|GG.qpRDhG5x?B;h2.}IQGaO7RL[L64)=ZJlxE-,#:{mhz~F#SHaoFJY|$S;D' );
define( 'LOGGED_IN_KEY',    '|9dIIGiJP+M~fc{<eok$VG]jxUC.y*;<dUoGSjTr`_^-Pm7QJrSY*KU3,Mu#`L0G' );
define( 'NONCE_KEY',        '>wxu@rmf-(;(mrz=J>TfvRq$`9U}LZ?Bg>FT=I?i_BA}vV8b0oTdG<D&D&l[IVh7' );
define( 'AUTH_SALT',        ',n2a2@3|z=N,4Q7gp^]u@_[Gw3g&hT0!79G~s>TJXS0[h*EGAGI*,&; vj/c){;i' );
define( 'SECURE_AUTH_SALT', '{B*TP@~dcKLS0caXZFsH7mRq_iEX<fT^hQk46*[yn[3+4(o}*xUBkyw!b]SJ?@s+' );
define( 'LOGGED_IN_SALT',   '9<?A!wpo|RrwQauwF.M:e{%Yc;%AZfPPkE[r,te^9V7ToBpuqZq<z2oM5xB!RmO}' );
define( 'NONCE_SALT',       'Xs/-)L@]A+i)OY]KIpua5X%|?<Iu>Z)%x=;v`JNx3$X|a+50SRCfH+F>@]GZWraW' );

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
