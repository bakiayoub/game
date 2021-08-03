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
define( 'DB_NAME', 'gametest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'E#Y$][l3n4~&Bq),yG%GCm!)mb53O*0&:-^J3%TM^e1Qw[OTBps+Bex&c&(8pB%k' );
define( 'SECURE_AUTH_KEY',  'lYCR}hQn?/ZNf<p~q Ch*#i,u9HiasK9J|$o^|yHCM#vW3WfnT:6Ee}dfQXOb{~:' );
define( 'LOGGED_IN_KEY',    '^3A:$UrD|m5F/[27g*=Mh?[>?-68bsT51dI%b(~Vh$Eb#+H>[L7U3{SJDg_G],1~' );
define( 'NONCE_KEY',        '<57(|D^`QGWH|`:1#_F&9742_&J]tDnKPCuzDtwk*Z:^ :5n |vCaNRUkTFn,*[z' );
define( 'AUTH_SALT',        'e67CM%eS[xElRA}[zVYC50{rMf.*TaH+?lrD%f}P=k UTAWfnu~$sF=AZ[2P{_qz' );
define( 'SECURE_AUTH_SALT', ',3FKSZ$9RI94f-[aMf./?^QKp5cP C1^4lhXx??~LH[_SUC;ADcwD(7b&V.{45[+' );
define( 'LOGGED_IN_SALT',   ' #=h3<:;m3aB.o-YncuZ,BuZ@T*7Hzti}d}5_=Rs]k8Y@E)^k/W24u?/OmYRu5Aj' );
define( 'NONCE_SALT',       '|C4yf)2;Hm7{~%iU4[x|Eqi/|w h&~AihVq>U>j.bU!H+XQ8zfC}?y|^>qbsQf&`' );

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
