<?php

	//require_once('config.php');


function login($email , $password){


		$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);



		$sql = "select * from users where email='$email' and password='$password' and status='1'";

		//echo $sql;
		$rs = mysqli_query($con,$sql);
		$count = mysqli_num_rows($rs);

		$row = mysqli_fetch_array($rs);


		return $row;


}

function getTreeControl($user_id){

		//echo "here...";
		$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);



		$sql = "SELECT treecontrol.* FROM user_groups , groups , menu_rights , treecontrol
			WHERE 
			user_id = '$user_id'
			AND groups.id = user_groups.group_id 
			AND menu_rights.group_id = user_groups.group_id 
			 
			AND treecontrol.id = menu_rights.menu_id;";


		//echo $sql;
		//die();
		$rs = mysqli_query($con,$sql);
		$count = mysqli_num_rows($rs);


		$result = array();
		for($i=0;$i<$count;$i++){

			$result[] = mysqli_fetch_array($rs);
		}



		

		//print_r($result);
		return $result;
}

function GetData($sql){

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


		$rs = mysqli_query($con,$sql);
		$count = mysqli_num_rows($rs);


		$result = array();
		for($i=0;$i<$count;$i++){

			$result[] = mysqli_fetch_array($rs);
		}



		

		//print_r($result);
		return $result;

}




?>