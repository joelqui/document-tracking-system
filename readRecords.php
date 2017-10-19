<?php

require_once ("sql_connect.php");


          
$htmlContent = '<table class="table table bordered  table-hover"><thead><tr class="danger"><th style="width:2%">Username</th>';
$htmlContent .= '<th style="width:1%" >Usertype</th>';
$htmlContent .= '<th style="width:5%" >Department name</th> <th style="width:1%">Delete</th><th style="width:1%" >Update</th>';
$htmlContent .= '<th style="width:1%" >View</th></tr></thead><tbody>';

 
$check =" SELECT users.user_id,users.username, users.usertype, departments.department_name from departments inner join users on users.department_id = departments.department_id ";

if ($result = mysqli_query($con,$check)){ 
    while ($rows = mysqli_fetch_array($result)){
      $htmlContent .= '<tr class="default"><td>';
      $htmlContent .= $rows['username'];
      $htmlContent .= '</td><td>';
      $htmlContent .= $rows['usertype'];
      $htmlContent .= '</td><td>';
      $htmlContent .= $rows['department_name'];
      $htmlContent .= '</td><td class="default">';
          
          

      $htmlContent .= '<button name="deletebtn" class = "btn btn-danger btn-xs" id="deletebtn" data-idpoop="'.$rows["user_id"].'"><span  class="fa fa-trash"></span> Delete</button>';
      
      $htmlContent .= '<td class="default"><input type="button" name="edit" value="Update" data-id="';
      $htmlContent .= $rows['user_id'];

      $htmlContent .= '" class="btn btn-info btn-xs edit_data" data-toggle="modal" data-target="#add_data_Modals"/></td><td class="default">';

      $htmlContent .= '<input type="button" name="view" value="View" data-id="';
      $htmlContent .= $rows['user_id'];
      $htmlContent .= '" class="btn btn-success btn-xs view_data" data-toggle="modal" data-target="#add_data_Modals"/></td></tr>';

      }
}

$htmlContent .= '</tbody></table>';

mysqli_free_result($result);

echo $htmlContent;

?>

