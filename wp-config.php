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
define( 'DB_NAME', 'baum_prueba' );

/** MySQL database username */
define( 'DB_USER', 'baum_prueba' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UinlYn3xbKe.([RU' );

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
define( 'AUTH_KEY',         'y6eu;[LCU#IO1bgRV,5$Q{{ip9.3LN?tH6iDcZJ4o:jo6I}-_s?>E~GBw_YA oj7' );
define( 'SECURE_AUTH_KEY',  '8#/eI|$R<Y6(b^1T|d+P]41D5seX!?kR`K!zSFjB!]|^~vhnhpl/6:y=G^}4@Hm4' );
define( 'LOGGED_IN_KEY',    'EL9)3-I3`KsPS9([xMaU{3-7ap59VcnWd?fs%[!FQ/w&:XfhYzbgIUefi6j6gsDV' );
define( 'NONCE_KEY',        'Zf]ln{iJ(LfXO&.!]K^FjTOQ4sw9(;U{W/]syKzx`/M sf^@l[3A1?jR>bBtD&kI' );
define( 'AUTH_SALT',        'uD=UoW1m_vUy~5#4k0or@`6*w{b8oC,S~%fpd0mWv`<sP$.B;]5#zQ`W_JeIO7y@' );
define( 'SECURE_AUTH_SALT', 'eo7Osel F)YsH-Sj/U)H&gv4EqJWohk41V0S[zKDp_G3B0n87-@1oO|d(72SW1_*' );
define( 'LOGGED_IN_SALT',   '!g#LqfNG<L;{&-E.54=GEj[WqTmf[ qBPR?&,JvvNca%OVmegsc+Z[Z}o(n#)9P7' );
define( 'NONCE_SALT',       'E03Y?d?G]o?]{bdQiQGTF+pl6zP,%VaUpBQdE2JjU83kl$q/~jC{HvJa>8&Kj{W)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bp_';

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
