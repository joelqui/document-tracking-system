 <?php  
 //fetch.php  
 require_once('sql_connect.php');

 
 if(isset($_POST["user_id"]))  
 {  
 	
    $query = "SELECT  user_id,first_name, middle_name, last_name, username,password , department_id, usertype +0 AS usertype FROM  `users` WHERE user_id = '".$_POST["user_id"]."'";  
     $result = mysqli_query($con, $query);  

      $row = mysqli_fetch_assoc($result); 
      echo json_encode($row); 
 }  
 else {
    echo "0 results";
}
mysqli_close($con);
?> 