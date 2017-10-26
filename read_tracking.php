<?php
//fetch.php
include('sql_connect.php');
$output = '';
 $valueToSearch=$_POST['tracking'];

  $query = "SELECT documents.document_id,documents.submitted_by, documents.tracking_number,documents.document_name, departments.department_name, users.first_name, documents_history.dochist_type,documents_history.dochist_timestamp,documents_history.dochist_remarks FROM documents_history 
  inner join documents on documents.document_id= documents_history.document_id 
  INNER JOIN departments ON departments.department_id = documents_history.department_id 
  INNER JOIN users ON users.user_id = documents_history.user_id where  tracking_number =".$valueToSearch."";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $rows=mysqli_fetch_array($result);
 $output .= '
 <hr>
    <div class="col-sm-8">
      <label>Tracking Number : '.$rows["tracking_number"].' </label><br>
    <label>Document Name &nbsp;: <u>'.$rows["document_name"].'</u></label>
  </div>
  <div class="col-sm-4">
    <label>Submitted By : '.$rows["submitted_by"].'</label><br>
  </div>
  <div class="table-responsive col-sm-12">
   <table class="table table bordered  table-hover">
    <tr class="danger">
     <th>Date/Time</th>
     <th>Status</th>
      <th>User</th>
      <th>Department name</th>
     <th>Remarks</th>
    
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '

   <tr>
    <td>'.$row["dochist_timestamp"].'</td>
    <td>'.$row["dochist_type"].'</td>
    <td>'.$row["first_name"].'</td>
     <td>'.$row["department_name"].'</td>
    <td>'.$row["dochist_remarks"].'</td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo "<br> <div class='alert alert-danger'>
    <strong>Tracking number does not exist!</strong> You must enter the exist tracking number.
  </div>";
}

?>
