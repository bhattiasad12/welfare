<?php 

require_once("../config.php");
require_once("../functions.php");

$scriptname = $_GET['script'];
LogMsg("CRON JOB START");
$file = "100-contacts.csv";
$scriptfile = "script_start_$scriptname.txt";
$singleScriptBreak = "script_single_$scriptname.txt";

unlink($scriptfile);

if(file_exists($scriptfile))
{
	/*if(filemtime(filename)){

	}*/
	$time = filemtime($scriptfile);
	
	$filetime = new DateTime();
	$filetime->setTimestamp($time);
	$current_date = new DateTime("now");

	$diff = $current_date->diff($filetime);


	if ( $diff->i >= 30) {
	    //more than 5 minutes have passed
	    unlink($scriptfile);
	    logMsg("script file delted");
	    die();
	}
	//$date = date();
	//if($time > )
	logMsg("script already running --- ".date ("F d Y H:i:s.",$time). "-----".date("Y-m-d H:i:s"));
	die();
}

touch($scriptfile);

//$fp = fopen($file,"r");

	$x= 0;

	$script = $_GET['script']-1;
	$initial = $script*20;
	$limit = 20;

    $csv = array_map('str_getcsv', file($file));


    for($i=0;$i<count($csv);$i++){


    	if(file_exists("emergency_exit.txt")){
    			logMsg("Exit due to manual exit");
    			die();
    	}

    	if(file_exists($singleScriptBreak)){
    			logMsg("Exit due to manual exit");
    			die();
    	}
    	if($csv[$i][0] == "first_name" && $csv[$i][1] == "last_name")
			continue;

		//echo "----- here....";		
		logMsg(" $script --- IN LOOP ... $i");
		$arr = array();

		 $arr['first_name'] = $csv[$i][0];
	     $arr['last_name'] = $csv[$i][1];
	     $arr['company_name'] = $csv[$i][2]; 
	     $arr['address'] = $csv[$i][3];
	     $arr['city'] = $csv[$i][4];
	     $arr['county'] = $csv[$i][5];
	     $arr['state'] = $csv[$i][6];
	     $arr['zip']= $csv[$i][7];
	     $arr['phone1'] = $csv[$i][8];
	     $arr['phone'] = $csv[$i][9];
	     $arr['email'] = $csv[$i][10];
	     $arr['status'] = 1;
	     $arr['created_at'] = date("Y-m-d H:i:s");

	     AddData("customers", $arr);

	     sleep(5);
	     
    }

LogMsg("END");

unlink($sciptfile);

?>