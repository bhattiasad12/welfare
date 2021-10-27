<?php


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$con = mysqli_connect("localhost","root","","course");


$query = "insert into users (`name`,`email`) values ('$name','$email')";


$rs = mysqli_query($con,$query);

$user_id = mysqli_insert_id($con);

$info = $_REQUEST;
$info['user_id']  = $user_id;

echo json_encode($info);
exit();
?>