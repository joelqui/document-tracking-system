<?php
include_once('../sql_connect.php');
session_start();
$dept_id = $_SESSION['department_id'];
$data = '';
$data .= '<option disabled>Select Document</option>';

$query = mysqli_query($con,"SELECT documents.tracking_number,documents.document_id, documents.document_name
							FROM `documents_history` 
							INNER JOIN documents ON documents_history.document_id = documents.document_id WHERE dochist_type = 2 and department_id = $dept_id and dochist_active = 1");
$row = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)){
$data .= '<option value = "'.$row['document_id'].'">'.$row["tracking_number"].'- '.$row["document_name"].' </option>';
}
echo $data;


?>