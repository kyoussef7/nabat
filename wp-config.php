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
define( 'DB_NAME', 'nabat_db' );

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
define( 'AUTH_KEY',         ')Ni-uca2~_b2REku+>1zr3ck-TX|T-@Lem]56 N4C/Urxe$h#~ZZy`dlb=8]|JHW' );
define( 'SECURE_AUTH_KEY',  'JvU#Z$B& ]=={,FH5ssjG1Um@{9AEh]E7rpp:k9b6*O{;a-yUa+Hl^BAngz`~Rs4' );
define( 'LOGGED_IN_KEY',    '7,(49`M;8 a%h6o^)t!EnfoWh:z4~*z#[1|bm(PJ2oMg-?!(jq~IW(:H!U-;8{z4' );
define( 'NONCE_KEY',        'f{m#C5ftFEtl>VCZILcC7{NxTXa:$jCq*6m/3Hs_:&zgDJKg.@~>/1Y}$ddkZ).G' );
define( 'AUTH_SALT',        '-pHS;|[$ge+Xp?~#u@5i$#pNS3#lePQDTb#T0H=B~H-D#xocLQskPL@y;:X6qw|,' );
define( 'SECURE_AUTH_SALT', 'Fg~Y+p)GM$|JP9>w;WY,6?H;KaPP+0FLkBt#7)>1I(iBja!<5RlhZ0]JT]e/GM!7' );
define( 'LOGGED_IN_SALT',   'a#Y2Rq9s!a7(i4[^eD68E,L6Xr|k+db9ceBh8q,<0TcM^=S`E$;O{x?c3W{[_*z%' );
define( 'NONCE_SALT',       ' 7Q#T_(I,|/H?@ahv|h|:N +k~pnNWNN,Xt.YAy`rFC|l5(),BB[e%t:~}a&=mUl' );

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
