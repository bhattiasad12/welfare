<?php

	
	require_once("config.php");
	require_once("functions.php");


	//die(print_r($_POST));
	if(isset($_POST['email']) && $_POST['password']){


		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$result = login($email,$password);

		//print_r($result);
		//die($result);
		if(empty($result))
			header("Location: login.php");

		//die();
		if(!empty($result))
		{
			//$row = mysqli_fetch_array($rs);

			//print_r($result);

			$_SESSION['user_id'] = $result['user_id'];
			$_SESSION['user_name'] = $result['name'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['user_type'] = $result['user_type'];



			header("Location: dashboard.php");
		}
		//	header("Location: login.php");
		

	}


	


?>