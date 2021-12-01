<?php 

require_once("../config.php");
require_once("../functions.php");

	//echo "<pre>";
//	print_r($_POST);
//	die();

  LogMsg(" ------ Here, in ACTION  :".$_SESSION['user_id']."--, user_name:".$_SESSION['user_name']);

//  die("here..");

if($_POST['name'] != "" && $_POST['nic'] != ""){

  
  	//echo "Add Applicatin...";
  	$arr = array();
  	$arr['user_id'] = $_SESSION['user_id'];
  	$arr['applicant_name'] = $_POST['name'];
  	$arr['nic'] = $_POST['nic'];
  	$arr['mobile_number'] = $_POST['mobile_number'];
  	$arr['parent_name'] = $_POST['parent_name'];
  	$arr['additional_comments'] = $_POST['comments'];

	$application_id = AddData('applications',$arr);

	//echo $application_id;
	//die();

  $dependents = $_POST['dependent_name'];
  $dCount  = count($dependents);
  for($i = 0 ; $i< $dCount;$i++)
  {
  		$info = array();
  		
  		$info['application_id'] = $application_id;
  		$info['name'] = $_POST['dependent_name'][$i];
  		$info['age'] = $_POST['dependent_age'][$i];
  		$info['education'] = $_POST['dependent_education'][$i];
  		///$info[''] = $_POST['dependent_education'][$i];

  		///$info = $_POST;
  		AddData('application_detail',$info);

  }


  //die();
  LogMsg(" ------ Valiidation failed  userid :".$_SESSION['user_id']."--, user_name:".$_SESSION['user_name']);
	$_SESSION['message'] = "Name and Nic is Required";
	header("Location: ".WEBSITE_URL."applications.php");
}



// die();


?>