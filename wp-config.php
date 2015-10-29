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
define('DB_NAME', 'sddb0040061580');

/** MySQL database username */
define('DB_USER', 'sd_dba_MTkxMTQz');

/** MySQL database password */
define('DB_PASSWORD', 'iti123456');

/** MySQL hostname */
define('DB_HOST', 'sddb0040061580.cgidb');

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
define('AUTH_KEY',         'zsq^l^|!TMX]4-j,)yf]RFy+|#HY-Zy5|B-@#QG`FNq$5mu*z2O-MX|CP<FW= f4');
define('SECURE_AUTH_KEY',  '9H|ERG|8Mal:H]GH5YQ%/k-:)%plj~e[({,ANG<bp[X!g1<WDiyiee;x9*RJZKy%');
define('LOGGED_IN_KEY',    'Z2{P4nd,.JTx>X/t#+k ~-T@dU`5Gy-c*lw?6y=hUEzk/KJ]yk+^2WRWWcPx4=n4');
define('NONCE_KEY',        'K@yK=JL=vlQb>hPAa|ucYtv_30!Wf2c2f&i}A(/ F$tpSw6^s#YOWKHq>jQiRVB=');
define('AUTH_SALT',        '5P]z9<.:WfRt1]5] XA!Fb]Uh(?A[ Et+t1& Qq!5)I|@ZZEp8?}Q+i=!#SN.@Fp');
define('SECURE_AUTH_SALT', '=$]F^rVl!|KiP+O jh>BQhU5c`bQPu~=X#},Vd^a_ 6f`gZN{Yc&:w,)!{&qn:Nj');
define('LOGGED_IN_SALT',   '0s7x;Di}2Nwg;q/<~)%/f| lf_[d(6e:inU=a<r;BN4|l8s(4!;Jc*5A,+6xV_{U');
define('NONCE_SALT',       '?@7_I hM&+Y0PV/:3O;<<9I3]DI5L# sPdY l+5?Tk|2:@<J@Xk/-!N+n0374UAm');

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
