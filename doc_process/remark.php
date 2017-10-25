<?php
include_once('../sql_connect.php');

$docremark = $_POST['docremark'];
$remark = $_POST['remark'];

$sql = "UPDATE `documents_history` SET `dochist_remarks` = '$remark' WHERE `document_id` = '$docremark' and `dochist_active` = 1";

if ($con->query($sql) === TRUE) {
    echo "Remark added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>