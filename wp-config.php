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
define('DB_NAME', 'uniqks_technews');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#V(t&;oP[{9;xIuEcEHsUaF<:N9ez^L0Gw$QK-E cUk5qIc~lny,|q~Qeyy|e5*#');
define('SECURE_AUTH_KEY',  '|#J&kXbEs;d0LWs^o$tR$CUYjC8,Y;BzMWBjuzt)en[k_6tV{gX0yKS8x|>+)Q$y');
define('LOGGED_IN_KEY',    '|vj:LMW0I<q64(*ocZ>uj&n/b <@R}D/FQc5G_1Z{UYT]]ruyiiwNt~q!vJTm/.J');
define('NONCE_KEY',        '#c2$4n]%i^Z(*%>ZN%eUiA>J@j@^(Y?wkV&{sgR{e#<4pPhtm8PXp)zVZ`DQ%+IO');
define('AUTH_SALT',        'vv/?|g&J|1)~-^V(0. Wz@H=aSS8Dv=?ttN+){v^/j>G0W^eUe2]V@f92]w@0Cev');
define('SECURE_AUTH_SALT', 'wB$Iu o1*tY1iFcZ7UZ 5,|(s .VCDGe]9c>TBR5{b(HJ6Rhzcu6l!:/@W6rf}c4');
define('LOGGED_IN_SALT',   '.S8{5D0&PWUhPV)[i.Jt6gmb`]fmiZJtOQv{%M!_5t:ced>w|K=<ZJDx2|*lS)1g');
define('NONCE_SALT',       '+HelT 8!w+LFA63TiXw_DiMhU@Lm_.Fs]HBcO=Q#Y06|>PnZQ&_AlqVNjAJ5qd?_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
