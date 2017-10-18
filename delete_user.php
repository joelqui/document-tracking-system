<?php  
 include_once('sql_connect.php');
 $sql = "DELETE FROM users WHERE user_id = '".$_POST["id"]."'";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Success';  
 }  
 ?>