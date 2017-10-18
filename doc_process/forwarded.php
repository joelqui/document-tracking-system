<?php
include_once('../sql_connect.php');
session_start();
$user_id = $_SESSION['user_id'];
$echo = '<option value=""disabled>Select Document</option>';
		$query = mysqli_query($con, "SELECT documents.tracking_number,documents.document_id,documents.user_id, documents.document_name
							FROM `documents_history` 
							INNER JOIN documents ON documents_history.document_id = documents.document_id WHERE `dochist_type` = 2 and `dochist_active` = 1 and documents_history.user_id = '$user_id'");
		$row = mysqli_num_rows($query);
		while ($row = mysqli_fetch_assoc($query)){
		$echo .='<option value = "'.$row['document_id'].'"> '.$row["document_name"].'&nbsp;'.$row["tracking_number"].' </option>';
		}
		echo $echo;
?>