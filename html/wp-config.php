<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tuto');

/** MySQL database username */
define('DB_USER', 'typo3user4');

/** MySQL database password */
define('DB_PASSWORD', 'typo3password');

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
define('AUTH_KEY',         '6jK=C$-,s-c3?r?*v-U+yN--xEaihgX,7`_r4{3E^WAq;tc$BN^+d@[%*2],I-KE');
define('SECURE_AUTH_KEY',  'A>h63qekt^|B?|p@<wieA%*FCK`,fptY!eW+]hCx,$y9!|jfaN<[+D}%<c~].FEi');
define('LOGGED_IN_KEY',    '4g||kqnG3qMFJ9!J:yt`>T&5 s~[h!4ab|Q>H$.&-a[(kcQcB~#&lxC:FSA>(GtI');
define('NONCE_KEY',        'r-z9p=7p.GY8!w+/m=UAh@y-A? AP/-[)[)lsii puxxwWa;kV/)07f1+~RP7|-q');
define('AUTH_SALT',        'Pq{>9TTx>XG)9??o{dI7gLz4G^04E E|L-yK8ibc- ZCK;o]uf23F:cbUTq?eCMB');
define('SECURE_AUTH_SALT', ']4YWF6-Eb.{S6Tejr0e~H8-B+nY%}+^Mq*SOSh9a^-]6Z{z`e^]+_l*.[Z;{B|o{');
define('LOGGED_IN_SALT',   'ZS,iQ-c=.35;!Dh8A?h6{F%aj@.i:3FI2CyS9q+dT+plv7-@I7xx<]O2nW4IiAdp');
define('NONCE_SALT',       'q2,;X.5W}z5LFE=7 T&t+r=eA{|O+qYQqSl4N-[FmweN#ws@xD#[Wt08VC2k3ItS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

