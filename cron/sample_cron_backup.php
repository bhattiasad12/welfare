<?php 

require_once("../config.php");
require_once("../functions.php");

$file = "100-contacts.csv";

$fp = fopen($file,"r");

$x= 0;


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







?>