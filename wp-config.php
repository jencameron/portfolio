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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'H;aQ>T3(>a)62h2=IF RK]$w?kT;JTwA`:}7ELM>/YOKhLc]3+Wye3P0P]G;KYnT' );
define( 'SECURE_AUTH_KEY',  '&bszilM3B(aK5:rU=;Seu8q %&tJ`HBq`p_b>jyWC,@+&T0Q=na#@61&0904Ka}!' );
define( 'LOGGED_IN_KEY',    'gT`)Pn3>5b=<}g5LB@ <$z(@RDVi2S1f,jR9&tanv.nUv6I:,>zGoSP2Y`rCD,a6' );
define( 'NONCE_KEY',        '9Nr9A;20./!pg1[FQsIQBL)fdgZL~?Y{SvU0HkH-ct_mI,{rP*_)~qX0plNmMWq1' );
define( 'AUTH_SALT',        'b8JPzrtUq P;JG>2>lz]P<xIF_PR0$FZx+SGC_]hc||?!U)XHL_P>I$v(Lh,:]u7' );
define( 'SECURE_AUTH_SALT', 'KNp3-ma^Q=;neNb(7d<:&*M{ v=uw`}- ^&8u[5ck/g u!~<V$gBR}/!Ft3;wLEM' );
define( 'LOGGED_IN_SALT',   'gb3NM0ue(*p|~EAi%<:F}GB|>~`MM8=n+T!<]U!4GR}nDk]RU)HV7Vmqe9;?Gm&&' );
define( 'NONCE_SALT',       'IkW0g]1m?45wE#[lK*WgqOrF<@K _{|S}(s!KuhmpA~:M];|Tj*6XKm;7oN%J[$o' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
