<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wellykai');

/** MySQL database username */
define('DB_USER', 'wellykai_user');

/** MySQL database password */
define('DB_PASSWORD', '1l1k3f00d');

/** MySQL hostname */
define('DB_HOST', 'mysql.mikepenhall.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '8X_ eu0Z*R4}05^0K8{uYX[)8m6/vt9-{ye.y*er-Y.Q[YbhO:<!eBXGyp Cvf,=');
define('SECURE_AUTH_KEY',  'gakaVQJB0j>r+xIQ/MKZ#DS__tyA1K^dI.jdeiENH[e+`7[V&J#ZT9 E<`]F%L<k');
define('LOGGED_IN_KEY',    '{-ksA#|sk;kFI)t>X<bKBG5Khy^Y;u;a7qN^Cg)6TLs*O!bwl+S5RB(e@;5R:Ym ');
define('NONCE_KEY',        '@q+ucLsH*Yb]*,X][CLq@@)cywi -ZFqtXnF*{+5u:|IF|xtIDth:r$u6-;XByw]');
define('AUTH_SALT',        'ximwPtw iT;/m*]Qmes#q@Rg3oK9Ne_@ZoM!,Zr|}GoN8?jac(&]4i,NFN)ffg+7');
define('SECURE_AUTH_SALT', 'G7_g,]At#62s:ob8|+:!]NOH|NCsD:R=`t_>kF=VA]^7s@H*2|,/*(}N]1CAxLeF');
define('LOGGED_IN_SALT',   'Zo!m=>Q-.+7B JAtb|,Ie=lC)@XF|/Q#*AP0RO2HS-$KknLgbxbW(s8I_,7jiejz');
define('NONCE_SALT',       '`K=E~@4#P+i-DXTO]O-v~]xet&v56sP1+xKYF$/V%q?2dkzIn-+P+_>+P+FQ+eMR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wk_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
