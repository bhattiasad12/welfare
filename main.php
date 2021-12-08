<?php

require_once('config.php');
require_once('functions.php');

$screen = $_GET['screen'];


print_r($SCREENINFO);

$layout = $SCREENINFO[$screen];

require_once("layout/$layout");


?>