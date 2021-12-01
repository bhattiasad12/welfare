<?php

	require_once("../config.php");
	require_once("../functions.php");
	echo "<pre>";
	print_r($_REQUEST);
	print_r($_FILES);

	$target_dir = DOCUMENT_ROOT."uploads/".date("dMYHis").basename($_FILES['image']['name']);
	move_uploaded_file($_FILES['image']['tmp_name'], $target_dir);
	
	die();
	ini_set('display_error','On');
	
		//print_r($_REQUEST);
		if(isset($_POST['name']) && isset($_POST['pass'])){
			if($_REQUEST['pass'] == $_REQUEST['repeatPassword'])
			{
				$userInfo = $_POST;
				unset($userInfo['repeat_password']);
				$userInfo['status'] = STATUS_ACTIVE;
				
				$result = AddData("users",$userInfo);
				if($result == true)
				{
					header("Location: ../login.php");
				}
			}
			else
			{
				header("Location: ../login.php");
			}
		}
		else
			{
				header("Location: ../login.php");
			}
			
		
?>