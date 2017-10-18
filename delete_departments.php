<?php  
 include_once('sql_connect.php');
 $sql = "DELETE FROM `departments` WHERE `department_id` = '".$_POST["id"]."'";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Success';  
 }  
 ?>