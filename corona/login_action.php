<?php 

include 'connection.php';
include 'header.php';

session_start();
unset($_SESSION["userId"]);
unset($_SESSION["userName"]);

echo 'You have cleaned session';
header('Refresh: 2; URL = login.php');

?>
