<?php
@session_start();

$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";



$dbname = 'corona_database';
$db = mysqli_connect($servername, $username, $password,$dbname);

?>