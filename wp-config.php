<?php
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');

define('DB_HOST', '');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'bLJSl8FGxvq89n3y54JFwhPMPnOXJo8pAhwjUdPk');
define('SECURE_AUTH_KEY',  'qEAhWLMB35xyeO7ggBXfZ5BVqCCrSLW7fBSkF6OA');
define('LOGGED_IN_KEY',    'BUVh4KuuASpt3U3PFnocOcVC8qzIhhprILeYfQaG');
define('NONCE_KEY',        'j7ktCfQng21oYPlUjE6V9HAuat529LvQySuGEBXD');
define('AUTH_SALT',        'xWyJjgAIfla5sfaYYqEhMVSdmWOJof1FG7rJ07Jc');
define('SECURE_AUTH_SALT', '5vpV1by0BOjJc5QvDRcQEnujizreacC6qD3MXG2I');
define('LOGGED_IN_SALT',   'UCdh6Q3N31gYCqDH6QJaOa9FDJlyCyFLUsrcDQLW');
define('NONCE_SALT',       'ixeEnevqNqOWmdJbrsw6GNUcIREDg1Tfan5UJN0j');

$table_prefix  = 'wp_840acc0be6_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);
/* Allow SVG Support */
define('ALLOW_UNFILTERED_UPLOADS', true);
/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
