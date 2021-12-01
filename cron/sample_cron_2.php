<?php 

require_once("../config.php");
require_once("../functions.php");

LogMsg("CRON JOB START");
$file = "100-contacts-2.csv";

//$fp = fopen($file,"r");

$x= 0;

	$script = $_GET['script']-1;
	$initial = $script*20;
	$limit = 20;

    $csv = array_map('str_getcsv', file($file));

  //  fclose($fp)
    echo "<pre>";
    print_r($csv);


    for($i=$script;$i<$script+$limit;$i++){


    	if($csv[$i][0] == "first_name" && $csv[$i][1] == "last_name")
			continue;
		
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

	     sleep(2);
	     
    }

LogMsg("END");
/*
while (($data = fgetcsv($fp, 1000, ",")) !== FALSE){


	echo "<pre>";
	print_r($data);
	echo "</pre>";

	if($data[0] == "first_name" && $data[1] == "last_name")
			continue;
		

	$arr = array();

	 $arr['first_name'] = $data[0];
     $arr['last_name'] = $data[1];
     $arr['company_name'] = $data[2]; 
     $arr['address'] = $data[3];
     $arr['city'] = $data[4];
     $arr['county'] = $data[5];
     $arr['state'] = $data[6];
     $arr['zip']= $data[7];
     $arr['phone1'] = $data[8];
     $arr['phone'] = $data[9];
     $arr['email'] = $data[10];
     $arr['status'] = 1;
     $arr['created_at'] = date("Y-m-d H:i:s");

     AddData("customers", $arr);
     
	if($x == 3)
		break;

	$x++;
}




*/


?>