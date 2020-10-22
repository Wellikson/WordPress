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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dbadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'welldarli' );

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
define( 'AUTH_KEY',         '=DhcAK9!xy=XSFL/r&@&MTKm)mK<ruF%Q`W&@op?_cuwv7yZKB;STun%&k|kEeRi' );
define( 'SECURE_AUTH_KEY',  '9;7%eFl6KB 5oR~O`;=oFI;=uP6Hk?@x0XappgJbqIaj^zB-iB$s&bxuJev[3zNY' );
define( 'LOGGED_IN_KEY',    'em..?ep%`Hx2~)$H16O=T/we.Y(UZyttfk}KS8@e%R/Q^d_P#oea/[yI{a>S.ybw' );
define( 'NONCE_KEY',        'Mq5B%bX}IvrTh+/@:(H:nW:c&Vpl~HeG?h*xBy+A}|y%m*~yB]c|#TNEL-Eu(k=n' );
define( 'AUTH_SALT',        'ay+?>^FL3{S,&Ecozw/[RMtpgb^S50Jc3z/f1iyF s|LGvO!]yY1RCm/$Xb~Fyl-' );
define( 'SECURE_AUTH_SALT', 'VivU+FSXw_QkMv0re;b0zoI>]ODG2lIE=hkJ-.f*IIO>:CEk>h!OD?qkNn+?-Dk>' );
define( 'LOGGED_IN_SALT',   '2}5Lof]LhRM<IR~`A;_~pS|dWZ9,mC$R*Ax*nZ3X$)Zk+C:v+M>r!7G,m$LUs{An' );
define( 'NONCE_SALT',       'qPL[%*-cr0DjX}xN9et=c fhrlVI59r=y*+/nGffXf$k$azH(Q8=+@^VtV zABps' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_WordPress';

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

