<?php 

require_once("../config.php");
require_once("../functions.php");

echo "<pre>";
// print_r($_POST);
// print_r($_SESSION['user_id']);
   

	if (!empty($_POST['update'])) {
		// echo "update action";
		$user_id = $_SESSION['user_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
        

	
	    $result = UpdateProfileData($user_id,$name,$email,$phone);
		//  print_r($result);
		//  die($result);
		// mysqli_query($db, "users (name, email,phone) VALUES ('$name', '$email','$phone')"); 
		// $_SESSION['email'] = "email saved"; 
		// header('location: profile.php');
	}


// die();


?>