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

define( 'DB_NAME', "wordpress" );


/** MySQL database username */

define( 'DB_USER', "nextdev" );


/** MySQL database password */

define( 'DB_PASSWORD', "admin52" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define('AUTH_KEY',         '-HX9Y|{OcMH+B#5apTb&+y?#,Sqd5z`5>Zb+ykHv>,h,SAS4:2_=#,&EWO([Okj(');

define('SECURE_AUTH_KEY',  ',N8 f0G(N8h(|%nRI~j=QU_pE1#/,aK{IJW2@Ze|oJ<+Ga*tke}vkkj[*wF qrhV');

define('LOGGED_IN_KEY',    '`I,:T}ReScIu$!ez`mFa]5O{a#=nE@l8e!2]P,&cFn2s+oMlG+4%f9;bodXFTMAJ');

define('NONCE_KEY',        'fUJbmSKo%!Hq+u}]t4k#-mUE])00YqEG ([y$!l{@-e%DUlsYfz#$m?C>DPoa)Ab');

define('AUTH_SALT',        '<2%/uEkrOLU&4>DEV=V4q_XAfZ?`dZ+>z{}-v<[2]LcC>FHM+@V6/E|?+ bU{cWO');

define('SECURE_AUTH_SALT', '%)wcrOtD/7AES%&i$e![E>?|nl9s+[T@.|`e0.G/42T}krgjrt$BrI+ISTK)K*+_');

define('LOGGED_IN_SALT',   'C(L|--_Vn3{mW-yVKVlF%[$0~H/]Dy84ri|}r4g_eh$rXAwX.m|U@aaDsm+Cwgef');

define('NONCE_SALT',       '7p;r0g2X-yT#Y+P%VtF(.,P Q3s>5tc4~y#%^4/R7|9bq]x ?h]C%L,/HHE}`K=y');


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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');

