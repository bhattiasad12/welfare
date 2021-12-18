<?php

require_once("../config.php");
require_once("../functions.php");


if ($_REQUEST['name']) {
  $name = $_REQUEST['name'];
  $sql = "SELECT * FROM ajax WHERE `name` LIKE '%$name%';";
  LogMsg('ajax name : ' . $_REQUEST['name']);
  LogMsg('ajax query : ' . $sql);
  $result = GetData($sql);
}

$arr = array();
$arr['code'] = '0';
$arr['message'] = 'success';
$arr['data'] = $result;

print_r(json_encode($arr));
