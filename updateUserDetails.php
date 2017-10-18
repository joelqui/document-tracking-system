<?php
// include Database connection file
require_once ("sql_connect.php");

    // get values
    $status=0;
    $id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
     $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $department_id = $_POST['department_id'];

    // Update User details
    $query = "UPDATE users SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', username = '$username',password = '$password', usertype = '$usertype', department_id = '$department_id' WHERE user_id = '$id'";
    if (mysqli_query($con, $query)) {
    $status++;   
}
  echo $status;
mysqli_close($con);
?>