<?php
include_once('../sql_connect.php');
session_start();
$dept_id = $_SESSION['department_id'];
$data = '';
$data .= '<option value="" selected disabled>Options</option>';

$query = mysqli_query($con,"SELECT documents.tracking_number,documents.document_id, documents.document_name
							FROM `documents_history` 
							INNER JOIN documents ON documents_history.document_id = documents.document_id WHERE dochist_type = 2 and department_id = $dept_id and dochist_active = 1");
$row = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)){
$data .= '<option value = "'.$row['document_id'].'"> '.$row["document_name"].'&nbsp;'.$row["tracking_number"].' </option>';
}
echo $data;


?>