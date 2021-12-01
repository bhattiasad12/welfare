<?php
session_start();

define("WEBSITE_NAME","Test Website");
define("WEBSITE_URL","http://welfare.uhfsolutions.com/");
define("DOCUMENT_ROOT","C:/xampp/htdocs/welfare_uhf/");
define("DB_NAME","welfare");
define("DB_USER","root");
define("DB_HOST","localhost");
define("DB_PASS","");

define("LOG_PATH",DOCUMENT_ROOT."logfile.txt");
define("QUERY_LOG_PATH","queryfile.txt");


define("USER_TYPE_ADMIN","1");
define("USER_TYPE_EMPLOYEE","2");
define("USER_TYPE_APPLICANT","4");
define("USER_TYPE_DONOR","8");

define("STATUS_ACTIVE","1");

?>