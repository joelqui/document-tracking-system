<?php  
 if(isset($_POST["department_id"]))  
 {  
      $output = '';  
      require('sql_connect.php');
      $query = "SELECT * FROM departments WHERE department_id = '".$_POST["department_id"]."'";  
      $result = mysqli_query($con, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-hover table-bordered ">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
              <tr>  
                     <td width="30%"><label>Department ID</label></td>  
                     <td width="70%">'.$row["department_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Firstname</label></td>  
                     <td width="70%">'.$row["department_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Department Code</label></td>  
                     <td width="70%">'.$row["department_code"].'</td>  
                </tr>   
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>