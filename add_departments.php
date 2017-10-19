
<?php

include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
  
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/usertype.js"></script>

</head>

<body>
<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>        
        <a class="navbar-brand" href="#">Document Tracking System</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li><a href="statistic.php" class=""><span class="fa fa-bar-chart"> </span> Statistics</a></a></li>
                         <li><a href="#"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        <li><a href="adddocu.php"><span class="fa fa-file"></span> Add Documents</span></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                      <li   id="usertype" data-organ= "usertype" <?php echo $_SESSION['usertype'];?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="m_user" ><a href="view_users.php">Manage User</a></li>
                                <li id="m_department"><a href="view_departments.php">Manage Departments</a></li>
                                <li id="receiver"><a href="#">View as Receiver</a></li>
                                <li id="department"><a href="doc_process/department-views.php">View as Department</a></li>
                               <!-- <li id="change_pass"><a href="change_pass.php">Change Password</a></li>-->
                                <li class=""><a href="logout.php"><span  class="fa fa-sign-out"></span>Logout </a></li>
                            </ul>
                        </li>
                                   
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

</div>
<br><br>

<div class="container">
<br><br>
<!--FOR MENU TAB-->
  <div class="col-sm-3">
      <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary"> Menu</a>
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-pills nav-stacked well">  
             <li><a href="registration.php">Add Users</a></li>
              <li><a href="view_users.php">View Users</a></li>
        
              <li class="active"><a href="#" data-toggle="tab">Add Departments</a></li>
            </ul>
        </div>

            <div class="container">
                <div class="row ">
                <div class="col-md-4  col-sm-2 col-sm-offset-1 ">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                        <strong><center> <font color="red"><b>Add Departments</b></font> </strong>  
                          </div>
                            <div class="panel-body">
                                <form role="form">
                                      <br/>
                                        
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" name="department_name" value="" required="" placeholder="Enter Department Name" />
                                        </div>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-code"  ></i></i></span>
                                            <input type="text" class="form-control" name="department_code" value="" required="" placeholder="Enter Department Code" />
                                        </div>
                                  
                                   <button type="submit" name="submit" value="submit" class="btn btn-success ">Add </button>
                                 <div class="pull-right">
                               View  <a href="view_departments.php" >Departments</a>
                                   </div>
                                    </form>
                            </div>                
                        </div>
                    </div> 
                </div>
            </div>

</body>
</html>

<?php
 require_once ("sql_connect.php");
if (isset($_GET['submit'])) 
{
 
  $department_name= mysql_real_escape_string($_GET['department_name']); // removes backslashes
  $department_code=stripslashes($_GET['department_code']);
 
  
    //check if the username has been userduplicate
   $query = "SELECT * FROM departments WHERE department_code  = '". $department_code ."'"; 
  $userduplicate = mysqli_query($con,$query);
  if (mysqli_num_rows($userduplicate) > 0) 
    {
      echo "<script type = 'text/javascript'>alert('Department Code already exist!')</script> " ;

    }

  else
    {

    $sql ="INSERT INTO `departments`(`department_id`, `department_name`, `department_code`)
    VALUES (null,'$department_name','$department_code')";
  if (mysqli_query($con, $sql))
      {
        echo "<script type = 'text/javascript'>alert('Department successfully created!!!')</script>"  ;
        
      }
     else
      {
        echo "<script type = 'text/javascript'>alert('Failed')</script>"  ;
      }

      $con->close();


    }
}

?>