<?php 


require_once('config.php');

$query = "SHOW DATABASES;";

$rs = mysqli_query($con,$query);


$count = mysqli_num_rows($rs);

echo "<pre>";
for($i=0;$i<$count;$i++){

	$row = mysqli_fetch_array($rs);
	print_r($row);

}


$query = "use pos;";
$rs = mysqli_query($con,$query);

$query = "SHOW TABLES;";
$rs = mysqli_query($con,$query);



$count = mysqli_num_rows($rs);

echo "<pre>";
for($i=0;$i<$count;$i++){

	$row = mysqli_fetch_array($rs);
	print_r($row);

}


//require_once('config.php');
//include('config.php');
//include('config.php');
//phpinfo();

$colorArr = array("red","blue","pink","red","blue","pink","red","blue","pink","red","blue","pink");
$bgcolorArr = array("orange","green","red","orange","green","red","orange","green","red","orange","green","red");
$textArr = array("hi","hello","hi","hello","hi","hello","hi","hello","hi","hello","hi","hello");

for($i=0;$i<10;$i++){

	$color = $colorArr[$i];
	$bgcolor = $bgcolorArr[$i];
	$text = $textArr[$i];

	echo $bgcolor;
	require_once('sample.php');
}

?>