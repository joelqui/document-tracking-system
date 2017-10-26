<?php
include_once('../sql_connect.php');

$document_id = $_POST['docuID'];

$sql = "UPDATE `documents` SET `status`= 2 WHERE `document_id` = '$document_id'";

if ($con->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
?>