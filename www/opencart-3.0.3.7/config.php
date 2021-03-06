<?php
// HTTP
define('HTTP_SERVER', 'http://localhost:8181/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost:8181/');

// DIR
define('DIR_APPLICATION', '/var/www/catalog/');
define('DIR_SYSTEM', '/var/www/system/');
define('DIR_IMAGE', '/var/www/image/');
define('DIR_STORAGE', '/var/storage/');
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
define('DB_HOSTNAME', 'db');
define('DB_USERNAME', 'myuser');
define('DB_PASSWORD', 'secret');
define('DB_DATABASE', 'shaverma');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');