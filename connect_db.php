<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "tracking";

$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
  	

  


  

?>