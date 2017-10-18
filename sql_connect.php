<?php
$host= "localhost";
$user = "root";
$pass = "";
$db = "tracking";

$con = new mysqli($host,$user,$pass,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>