<?php 
session_start();
session_destroy();

unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['user_type']);

//print_r($_SESSION);
header("Location: index.php");


?>