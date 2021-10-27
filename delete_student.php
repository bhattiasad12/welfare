<?php


$user_id = $_GET['user_id'];

if($user_id == ""){

	$info['code'] = '-1';
	$info['message'] = 'User Id is Empty'; 
	$info['data'] = NULL;
	echo json_encode($info);
	exit();
}


$con = mysqli_connect("localhost","root","","course");


$query = "delete from users where id = '$user_id'";

//echo $query;

$rs = mysqli_query($con,$query);

$info['code'] = '0';
$info['message'] = 'success'; 
$info['data'] = "";
echo json_encode($info);
exit();
?>