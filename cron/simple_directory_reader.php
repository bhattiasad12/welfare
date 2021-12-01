<?php 

require_once("../config.php");
require_once("../functions.php");

$url = "https://yellopagespakistan.com/pak-medical-supplies---medical-equipment-in-karachi-pakistan-8310.html";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$res = curl_exec($ch);

curl_close($ch);



$res = explode("telephone",$res);
$res =  explode("</span>",$res[1]);
//print_r($res);

echo ltrim($res[0],'">');

//explode(delimiter, string)
?>