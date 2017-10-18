
<?php
  require('sql_connect.php');
  session_start();
    // If form submitted, retrieve values into the database.
    if (isset($_POST['username'])){
    
    $username = stripslashes($_POST['username']); // removes backslashes
    $password = stripslashes($_POST['password']);

  
$query ="SELECT user_id, department_id, username, usertype +0 AS usertype
FROM  `users` WHERE username='$username' and password='$password'";
$result = mysqli_query($con,$query) or die(mysqli_error());
 
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $_SESSION['username'] = $username;
      $_SESSION['usertype'] = $row['usertype'];
       $_SESSION['department_id'] = $row['department_id'];
       $_SESSION['user_id'] = $row['user_id'];

        echo "id: " . $row["user_id"]. " - Name: " . $row["username"]. " " . $row["usertype"]. " " . $row["department_id"]. "<br>";
    
      if ($_SESSION['usertype']==1){
        header("Location: department-views.php"); // Redirect user to index.php
      }
      else if ($_SESSION['usertype']==2){
        header("Location: department-views.php");
      }
      else if($_SESSION['usertype']==3){
           header("Location: receiversview.php");     
      }
    }
} else {
    //Checking is user existing in the database or 
    echo "<script type = 'text/javascript'>alert('Username and Password did not match')</script>"  ;
     echo "<script> windows: location='login.php'</script>";
}

mysqli_close($con);
?>
<?php } ?>