<?php
// HTTP
define('HTTP_SERVER', 'http://musicalhub.lk/');

// HTTPS
define('HTTPS_SERVER', 'https://musicalhub.lk/');

// DIR
define('DIR_APPLICATION', '/var/www/html/musicalhub/catalog/');
define('DIR_SYSTEM', '/var/www/html/musicalhub/system/');
define('DIR_IMAGE', '/var/www/html/musicalhub/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'kandy-music-hub-live.cvua82wkgjbm.ap-southeast-1.rds.amazonaws.com');
define('DB_USERNAME', 'kandy_mhub_user');
define('DB_PASSWORD', 'as26bxj89la34');
define('DB_DATABASE', 'kandy_mhub_live_db');
define('DB_PORT', '3307');
define('DB_PREFIX', 'oc_');