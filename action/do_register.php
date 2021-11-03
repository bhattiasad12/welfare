<?
	require_once("../config.php");
	require_once("../functions.php");
print_r($_REQUEST);
		if(isset($_POST['userId']) && isset($_POST['pass'])){
			if($_REQUEST['pass'] == $_REQUEST['repeatPassword'])
			{
				$userInfo['userId'] = $_POST['userId'];
				$userInfo['pass'] = md5($_POST['pass']);
				$userInfo['emailAddress'] = $_POST['emailAddress'];
				$userInfo['usersType'] = $_POST['usersType'];
				$result = AddUsers($userInfo);
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