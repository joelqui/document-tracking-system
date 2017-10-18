<?php  
 if(isset($_POST["user_id"]))  
 {  
      $output = '';  
      require('sql_connect.php');
      $query = "SELECT * FROM users WHERE user_id = '".$_POST["user_id"]."'";  
      $result = mysqli_query($con, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-hover table-bordered ">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
              <tr>  
                     <td width="30%"><label>User ID</label></td>  
                     <td width="70%">'.$row["user_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Firstname</label></td>  
                     <td width="70%">'.$row["first_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Middlename</label></td>  
                     <td width="70%">'.$row["middle_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Lastname</label></td>  
                     <td width="70%">'.$row["last_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Username</label></td>  
                     <td width="70%">'.$row["username"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Password</label></td>  
                     <td width="70%">'.$row["password"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Usertype</label></td>  
                     <td width="70%">'.$row["usertype"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Department ID</label></td>  
                     <td width="70%">'.$row["department_id"].'</td>  
                </tr>   
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>