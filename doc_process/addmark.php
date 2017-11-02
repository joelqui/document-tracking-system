<?php
include_once('../sql_connect.php');

$document_id = $_POST['docuID'];

$sql = "UPDATE `documents` SET `status`= 2 WHERE `document_id` = '$document_id';";
$sql.= "UPDATE `documents_history` SET `dochist_active`= 0 WHERE `document_id` = '$document_id' and `dochist_active` = 1 and `dochist_type` = 1;";

if ($con->multi_query($sql) === TRUE) {
    echo "Success";
}
else{
	echo 'Failed' .$sql. '<br>' .$con->error;
}
?>