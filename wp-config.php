<?php
define( 'WP_CACHE', false ); 
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
define('DB_NAME', "websit19_jawapenaga");
/** MySQL database username */
define('DB_USER', "websit19_JwaPenaga");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024!");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
trim(('wp-salt.php'));
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('WPLANG', '');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );
define( 'DUPLICATOR_AUTH_KEY', '/qLh);ha_Z$92ZVNigBK5&h[qJ7/DKmu$BE*)}(gT#$N*0}da?GgDM:@Q}^Zn@;4' );
define( 'AUTH_KEY', 'wziCEoj9RbYjofnqeQ03wp6DDNGe8Ljx3eCsvhXV2QIVBx5Y76cgbyPdu3ao67Q9' );
define( 'SECURE_AUTH_KEY', 'YemqeyrudB9W61S3HspFUSQaGiNDyH2CIF8pBMVfQTJjQrW3AL8rI8LPqwKLMpTJ' );
define( 'LOGGED_IN_KEY', 'QP19nmrozUzx59H4Rf6e9AJM1vcYxm517WGYJNM4T7WEUtMgpgSgFWj1RSvGj68C' );
define( 'NONCE_KEY', '1WtRWVtnXMHT8Khr0BT7cxLHXj4VGEsNrMKNtNgPe3hj2UfqGvPfRB6v9BMFCFf7' );
define( 'AUTH_SALT', 'n0hTSIyKnAJ03BYNyIajTvdpNvNM8GFsYiTj6egMiWTNVJcX0fhmWeoDzUz4NxVQ' );
define( 'SECURE_AUTH_SALT', '67nBgQF45ExCeW54V9bP02JIRJHmXptS16tUwVF0mz6DPdoKjfsh0cnERq9GI4F4' );
define( 'LOGGED_IN_SALT', '0W6YmJRRWm2vVa1CrwCx3fdLrsSQ190vtQDjUnTCuJ6A5fX9MbwiF6ayepP5Nb8p' );
define( 'NONCE_SALT', 'EG10mGYvXKDUd04sfDYs0BEzCJtiPSRGJg2i6JL99dSmoe6P62F76qa9PjKzUiQD' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');