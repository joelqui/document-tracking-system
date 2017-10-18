<?php
 require_once ("sql_connect.php");

  $department_name= mysql_real_escape_string($_POST['department_name']); // removes backslashes
  $department_code=stripslashes($_POST['department_code']);
 
  
    //check if the username has been userduplicate
   $query = "SELECT * FROM departments WHERE department_code  = '". $department_code ."'"; 
  $userduplicate = mysqli_query($con,$query);
  if (mysqli_num_rows($userduplicate) > 0) 
    {
      echo "Department Code already exist!" ;

    }

  else
    {

    $sql ="INSERT INTO `departments`(`department_id`, `department_name`, `department_code`)
    VALUES (null,'$department_name','$department_code')";
  if (mysqli_query($con, $sql))
      {
        echo "Department successfully created!"  ;
        
      }
     else
      {
        echo "Failed"  ;
      }

      $con->close();

    }

?>