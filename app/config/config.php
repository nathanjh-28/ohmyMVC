<?php

//DB Params Dev Env
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','123456');
// define('DB_NAME','shareposts');

//DB Params Prod Env
define('CLEARDB_URL',parse_url(getenv("CLEARDB_DATABASE_URL")));
define('DB_HOST',CLEARDB_URL["host"]);
define('DB_USER',CLEARDB_URL["user"]);
define('DB_PASS',CLEARDB_URL["pass"]);
define('DB_NAME',substr(CLEARDB_URL["path"],1));


// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'https://post-it-harris.herokuapp.com');
// Site Name
define('SITENAME', 'Post-It');
//App Version
define('APPVERSION','1.0.0');