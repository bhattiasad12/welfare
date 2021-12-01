<?php

require_once('config.php');
require_once('functions.php');


//print_r($_SESSION);

if(isset($_SESSION['user_id']) &&$_SESSION['user_id'] != "")
	header("Location:dashboard.php");

error_log(" ------ index file included ---- ");
LogMsg(" ------ index file included ---- ");

require_once('login.php');

?>