<?php
define('CURRENCY', '$');
define('WEB_URL', 'https://makazy.netlify.app/');
define('ROOT_PATH', 'https://makazy.netlify.app/');


define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ams_mb');
$link = mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD) or die(mysql_error());mysql_select_db(DB_DATABASE, $link) or die(mysql_error());?>