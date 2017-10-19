<?php

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/usertype.js"></script>

</head>
<body>
<!--navigation start-->
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
                        <li class="active"><a href="#" class=""><span class="fa fa-bar-chart"> </span> Statistics</a></a></li>
                        <li><a href="tracking_document.php"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        <li><a href="adddocu.php"><span class="fa fa-file"></span> Add Documents</span></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">   
                 <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" data-dept="<?php echo $_SESSION['department_id'];?>" data-user="<?php echo $_SESSION['user_id']; ?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li id="m_user" ><a href="view_users.php">Manage User</a></li>
                                <li id="m_department"><a href="view_departments.php">Manage Departments</a></li>
                               <!-- <li id="v_receiver"><a href="receiversview.php">View as Receiver</a></li>-->
                                <li id="v_department"><a href="department-views.php">View as Department</a></li>
                                <li id="change_pass"><a href="change_pass.php">Change Password</a></li>
                                <li class=""><a href="logout.php"><span  class="fa fa-sign-out"></span>Logout </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
</div><!--navigation end!!!-->
  
<br><br>
<br>
<br><br>

<div class="container" style="width:850px;">
	<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-sm-12">
  <h2><b>STATISTICS</b></h2><hr>
       </div>   
  <table class="table table-bordered table-hover">
    <thead>
      <tr class="danger">
        <th>DEPARTMENTS</th>
        <th>ON QUEUE</th>
        <th>PROCESSED</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>RECORDS</td>
        <td>Travel Order</td>
        <td>done</td>
      </tr>
      <tr>
        <td>FINANCE</td>
        <td>Memo</td>
        <td>done</td>
      </tr>
      <tr>
        <td>ADMIN</td>
        <td>MOA</td>
        <td>done</td>
      </tr>
       <tr>
        <td>SDS</td>
        <td>Love Letter</td>
        <td>done</td>
      </tr>
       <tr>
        <td>ICT UNIT</td>
        <td>Insurance</td>
        <td>done</td>
      </tr>
    </tbody>
  </table>


</div>
</div>
</div>
</body>
</html>