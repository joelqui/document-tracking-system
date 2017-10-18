<?php
// include Database connection file
require_once ("sql_connect.php");

    // get values
    $status=0;
    $id = $_POST['department_id'];
    $department_name = $_POST['department_name'];
    $department_code = $_POST['department_code'];

    // Update User details
    $query = "UPDATE departments SET department_name = '$department_name', department_code = '$department_code' WHERE department_id = '$id'";

    if (mysqli_query($con, $query)) {
    $status++;   
}
  echo $status;
mysqli_close($con);
?>