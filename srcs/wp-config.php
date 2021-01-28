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
define( 'DB_USER', 'egor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'egor' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'MrFx%TK|y2)ye)Q@>oEab|tF4kA|T4H^Kj48o3 }~9wR6|?v5]jK*#@|1;l8r#_B');
define('SECURE_AUTH_KEY',  ';+Lq3%~#7RR|Bpyl=n:.7m]c*91+;bkp,CLk<t6t5S>wz3jVo%U@[&~lv33J|wS|');
define('LOGGED_IN_KEY',    'TMhj-Y]r9=xiL2]io|YIwZ8]`u)?wCx;@-yBh!ub`e?iZ;X{,}K8fYf|t|+4PceF');
define('NONCE_KEY',        'JE^v{++5327K/52`1n_t.iRPO?]]hc-o@Dys+dPDW%1xfvO3_V<<FsQZ_>4HE+/N');
define('AUTH_SALT',        'Cy(tU=qtuVzGgO1QJRy}uWZp`[0+qNC|^(=|L#2fu6|kOuxjo.=)a>li1S!tVGm~');
define('SECURE_AUTH_SALT', 'YhJTn|u<;Zl<8(s)juqq+Vx<&sku)c<BuIw#tx|=F.d=:eA2ZC672]-Ah7F=DBq9');
define('LOGGED_IN_SALT',   '8XlJ R_MqZAdT sK(2@a#eCFz$3 mzn4S-mS)bL-#4Y$kp89*WecZKKZD]E7eyge');
define('NONCE_SALT',       'r^KD]D2l8b,ZDAWX[mJw4q=im!-j-{#R2 M/=+[nrHtT,tp0Bg||$Tk~de=Z<K|}');

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
