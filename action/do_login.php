<?php

	
	require_once("../config.php");
	require_once("../functions.php");

	LogMsg(" --- here in do login ----");
	//		sleep(2);
	//die(print_r($_POST));
	if(isset($_POST['email']) && $_POST['password']){
		// session_start();


		$email = $_POST['email'];
		$password = md5($_POST['password']);

		LogMsg(" --- EMAIL :: $email , PASSWORD :: $password ----");
		//	sleep(2);
		//$sql = "select * from users  "
		$result = login($email,$password);

		LogMsg(" ---login function return ----");
		//	sleep(2);
		//print_r($result);
		//die($result);
		$url = WEBSITE_URL."login.php";
		if(empty($result))
			header("Location: $url");

		//die();
		if(!empty($result))
		{
			//$row = mysqli_fetch_array($rs);

			//print_r($result);

			$_SESSION['user_id'] = $result['user_id'];
			$_SESSION['user_name'] = $result['name'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['user_type'] = $result['user_type'];
			$_SESSION['phone'] = $result['phone'];

			//sleep(2);
			                        


			LogMsg(" USER Successfully login --- ".$result['user_id']);
			$url = WEBSITE_URL."dashboard.php";
			header("Location: $url");
		//	header("Location: login.php");

		}
		

	}
	else{
			$url = WEBSITE_URL."login.php";
			header("Location: $url");
		


	}


	


?>