<?php
include_once ("sql_connect.php");
if (isset($_GET['submit'])) 
{
	$sql="SELECT COUNT(*) as number
	FROM documents
	WHERE CURDATE() = DATE(datetime_received)";
	$result=mysqli_query($con,$sql);
	// Associative array
	$row=mysqli_fetch_assoc($result);
	$number = $row["number"];
	$new = $number + 1;
	$today = date("ymd");
	$date = $today;
	$final = sprintf("%'.03d\n",$new);
	$tracking = "$date"."$final";


	session_start();
	$user_id = $_SESSION['user_id'];
	
	$doc_name = $_GET['document_name'];
	$tracking_number = $tracking;
	$submitted_by = $_GET['submitted_by'];
	$department_id = $_SESSION['department_id'];
	
	


	$dochist_type = 1;
	$dochist_active = 1;

			
		$sql_insert = " INSERT INTO `documents`(`document_name`, `tracking_number`,`user_id`, `submitted_by`, `datetime_received`) VALUES ('$doc_name' , '$tracking','$user_id', '$submitted_by', CURRENT_TIMESTAMP);";
		$sql_insert .= "INSERT INTO `documents_history`(`document_id`, `dochist_timestamp`, `dochist_type`, `department_id`, `user_id`, `dochist_active`, `dochist_remarks`) VALUES ((SELECT MAX(document_id) from documents),CURRENT_TIMESTAMP(),'$dochist_type','$department_id','$user_id','$dochist_active','');";
	if ($con->multi_query($sql_insert) === TRUE) {
    	echo "<script type = 'text/javascript'>alert('New Record Save')</script>"  ;
		header('location: adddocumentsucc.php' );
	}
	else{
		  echo "<script type = 'text/javascript'>alert('Failed')</script>"  ;
	}
			$con->close();

}
?>