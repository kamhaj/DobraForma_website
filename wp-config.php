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
define( 'DB_NAME', 'dobraforma_db' );

/** MySQL database username */
define( 'DB_USER', 'Damian092' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FY8V0s4NETixlt0A' );

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
define( 'AUTH_KEY',         '3^Bc/Y~mZK?shDZzAhWY>wOiUpq4U775lgGnI<gp2q_~+w>`z$ZR,&fc@|ZVl`44' );
define( 'SECURE_AUTH_KEY',  'mVpto_^.5Rso|w4 STB-HDJ<D^WU;U%zkrpk`@2`gh8&T`C<N&}2[0ZJ)W$?c$.Z' );
define( 'LOGGED_IN_KEY',    '0+Kz:F5yRC@hI{c%sFn<ao.z>gicQqrm6?eD|MB;4sB]sr.8>S;I=~2qAc^=HizG' );
define( 'NONCE_KEY',        'VH2H<^Gg)ZGXuRe4-TA$bDSSJoR*Ok brx[CYAAUR>03yIH[GlR04JM{cw%x>Fx ' );
define( 'AUTH_SALT',        'Z[bIrUis6JmoiO16ozlZDg3/F=3Hc#oTGUn}x)GbP!{g8+7NJe)GIS_n>jaQ=Vca' );
define( 'SECURE_AUTH_SALT', 'P6LP}vs1sFUc>$9t5/JZF%YkoYvw5]HzJH:z9Mx!bbA-N&8*&smG)BQ1_:N}_V=?' );
define( 'LOGGED_IN_SALT',   '0|xnEKwfj Bpq@/aFDiSDH2%e,dHWqRON_j$S:#/0Kt2Tsg=R$f*r0`|ysW}E/2c' );
define( 'NONCE_SALT',       '%M?9x]Kzw}f6(K=J*x{MLkHksmGa&ljR>N^QX#c4SseiVp` tI!T&[3{)FNeM4ll' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'df_';

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
