 <?php  
 //fetch.php  
 require_once('sql_connect.php');

 
 if(isset($_POST["department_id"]))  
 {  
 	
    $query = "SELECT  `department_id`, `department_name`, `department_code` FROM  `departments` WHERE `department_id` = '".$_POST["department_id"]."'";  
     $result = mysqli_query($con, $query);  

      $row = mysqli_fetch_assoc($result); 
      echo json_encode($row); 
 }  
 else {
    echo "0 results";
}
mysqli_close($con);
?> 