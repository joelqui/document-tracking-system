<?php
include_once('../sql_connect.php');

$document_id = $_POST['docid'];
session_start();
$dept_id = $_SESSION['department_id'];
$user_id = $_SESSION['user_id'];
$dochist_type = 1;
$dochist_not_active = 0;
$dochist_active = 1;

$sampak = "UPDATE `documents_history` SET `dochist_active`= '$dochist_not_active' WHERE `document_id` = '$document_id';";
$sampak .= "INSERT INTO `documents_history`(`document_id`, `dochist_timestamp`, `dochist_type`, `department_id`, `user_id`, `dochist_active`, `dochist_remarks`) VALUES ('$document_id',CURRENT_TIMESTAMP(),'$dochist_type','$dept_id','$user_id','$dochist_active','');";

if ($con->multi_query($sampak) === TRUE) {
    echo "New documents received!";
}
else{
	echo 'Failed' .$sampak. '<br>' .$con->error;
}
?>