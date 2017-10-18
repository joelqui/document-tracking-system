<?php
 require_once ("sql_connect.php");

 $user=stripslashes($_POST['username']);// removes backslashes
  $first_name=stripslashes($_POST['first_name']);
  $middle_name=stripslashes($_POST['middle_name']);
  $last_name=stripslashes($_POST['last_name']);
  $pass = $_POST['password'];
  $usertype = stripslashes($_POST['type']);
  $department_id=stripslashes($_POST['dept']);
  
    //check if the username has been userduplicate
   $query = "SELECT * FROM users WHERE username  = '". $user ."'"; 
  $userduplicate = mysqli_query($con,$query);
  if (mysqli_num_rows($userduplicate) > 0) 
    {
      echo "Username already exist!" ;

    }

  else
    {

    $sql ="INSERT INTO `users`(`user_id`,`first_name`,`middle_name`,`last_name`, `username`, `password`,`usertype`,`department_id`) 
    VALUES (null,'$first_name','$middle_name','$last_name','$user','$pass','$usertype','$department_id')";
  if (mysqli_query($con, $sql))
      {
        echo "User successfully created!!!"  ;
        
      }
     else
      {
        echo "Failed!"  ;
      }

      $con->close();


    }


?>