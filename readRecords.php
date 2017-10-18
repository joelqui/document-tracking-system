<?php
//MARJORIE CRAVE WA NAMINAW NGA IBUTANG ANG DEPT NAME
//fetch.php
include('sql_connect.php');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM users 
  WHERE first_name LIKE '%".$search."%'
  OR middle_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR username LIKE '%".$search."%' 
  OR usertype LIKE '%".$search."%'
 
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
      <th>User_id</th>
      <th>Firstname</th>
     <th>Middlename</th>
     <th>Lastname</th>
     <th>Username</th>
     <th>Usertype</th>
      <th>Delete</th>
      <th>Update</th>
      <th>View</th>
       
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td>'.$row["user_id"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["middle_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["username"].'</td>
   
    <td>'.$row["usertype"].'</td>
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
