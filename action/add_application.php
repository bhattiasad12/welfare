<?php 

require_once("../config.php");
echo "<pre>";
print_r($_POST);


if($_POST['name'] == "" || $_POST['nic'] == ""){

	$_SESSION['message'] = "Name and Nic is Required";
	header("Location: ".WEBSITE_URL."addapplication.php");
}



die();


?>