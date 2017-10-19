<?php
//fetch.php
include('sql_connect.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM users 
  WHERE username LIKE '%".$search."%'
  OR usertype LIKE '%".$search."%' 
  OR department_id LIKE '%".$search."%' 

 
 ";
}
else
{
 $query = "
  SELECT * FROM `users` ORDER BY user_id
 ";
}
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered  table-hover">
    <tr class="danger">
     <th>Username</th>
     <th>Usertype</th>
     <th>Department Name</th>
      <th>Delete</th>
      <th>Update</th>
      <th>View</th>
       
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   
    <td>'.$row["username"].'</td>
    <td>'.$row["usertype"].'</td>
    <td>'.$row["department_id"].'</td>
   
    <td><button name="deletebtn" class = "btn btn-danger btn-xs" id="deletebtn" data-idpoop="'.$row["user_id"].'"><span  class="fa fa-trash"></span> Delete</button></td>

      <td class="default"><input type="button" name="edit" value="Update" data-id="'.$row['user_id'].'" class="btn btn-info btn-xs edit_data" data-toggle="modal" data-target="#add_data_Modals"/></td>

            <td> <input type="button" name="view" value="View" data-id="'.$row['user_id'].'" class="btn btn-success btn-xs view_data" data-toggle="modal" data-target="#add_data_Modals"/></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'No Result Found!';
}

?>
