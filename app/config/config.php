<?php

//DB Params Dev Env
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','123456');
// define('DB_NAME','shareposts');

//DB Params Prod Env
define('DB_URL',parse_url(getenv("JAWSDB_URL")));
define('DB_HOST',DB_URL["host"]);
define('DB_USER',DB_URL["user"]);
define('DB_PASS',DB_URL["pass"]);
define('DB_NAME',substr(DB_URL["path"],1));


// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'https://post-it-harris.herokuapp.com');
// Site Name
define('SITENAME', 'Post-It');
//App Version
define('APPVERSION','1.0.0');