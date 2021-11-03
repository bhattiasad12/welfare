<?
	require_once("../config.php");
	require_once("../functions.php");
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