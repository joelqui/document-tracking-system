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
    <script type="text/javascript" src="js/script.js"></script>

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
                        <li ><a href="#" class=""><span class="fa fa-wrench"> </span> Under Construction</a></li>
                        <li><a href="#"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        <li><a href="adddocu.php"><span class="fa fa-file"></span> Add Documents</span></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">   
                 <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" data-dept="<?php echo $_SESSION['department_id'];?>" data-user="<?php echo $_SESSION['user_id']; ?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="m_user" ><a href="view_users.php">Manage User</a></li>
                                <li id="m_department"><a href="view_departments.php">Manage Departments</a></li>
                                <li id="v_receiver"><a href="receiversview.php">View as Receiver</a></li>
                               <li id="v_depart"><a href="#">View as Department</a></li>
                                <li><a class="btn btn-primary" href="#" data-toggle="modal" data-target=".login-register-form">
                                 Change Password
                                </a><li>
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
<!-- ================ Departments View============================================================== -->    

<br><br>
<br><br><br>

<div class="container">
  <div class="well">
    <h1>Department View</h1>
  
    <hr>
    
<div class="panel panel-default">
    <div class="panel-body">
            <div class="row">
                <div class="col-sm-3">
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h5 class="panel-title">
                            <h5><b>INCOMMING DOCUMENTS</b></h5>
                            </div>
                                <div class="panel-body">
                                    <select class="selectpicker" size="20" multiple="multiple"  data-actions-box="true" id="incoming" style="width: 100%;">
                                    

                                    </select>
                                </div>
                        </div>
                    
                </div>
                <div class="col-sm-1">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal"><span class="fa fa-chevron-right" aria-hidden="true"></span></button>

                </div>
                <div  class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog modal-md">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">CONFIRM RECEIPT</h4>
                          </div>
                          <div class="modal-body">
                            <label>Are you sure to received this documents ?</label>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" id = "accept">Confirm</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>

                      </div>
                    </div>
                
                <div class="col-sm-3">
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h5 class="panel-title">
                                <h5><b>ON QUEUE</b></h5>
                            </div>
                                <div class="panel-body">
                                        <select class="selectpicker" size="20" multiple="multiple"  data-actions-box="true" id="onqueue" style="width: 100%;">
                        
                                        </select>
                                </div>
                        </div>
                        
                    
                </div>
                <div class="col-sm-1">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal2"><span class="fa fa-chevron-right" aria-hidden="true"></span></button>
                </div>
                 <div  class="modal fade" id="myModal2" role="dialog">
                      <div class="modal-dialog modal-sm">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">FORWARD TO:</h4>
                          </div>
                          <div class="modal-body">
                            <p><b>DEPARTMENT :</b></p>
                            <br>
                                <div class="row">
                                    <div class="col-sm-5">
                                    <select id="depts" class="selectpicker" data-size="5" data-width="100%">
                                   
                                    </select>
                          </div>
                          </div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" id = "forward">Ok</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>

                      </div>
                    </div>
                
                <div class="col-sm-3">
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h5 class="panel-title">
                                <h5><b>FORWARDED</b></h5>
                            </div>
                                <div class="panel-body">
                                        <select class="selectpicker" size="20" multiple="multiple"  data-actions-box="true" id="live_forward" style="width: 100%;">
                                        
                                        </select>
                                   
                                </div>
                        </div>
                        <button class="btn btn-default btn-block">Add Remarks</button>
                    
                </div>
            </div>
       
        </div>
    </div>  
</div>
</body>
</html>

<div class="container">
    <div class="row">
                        <!-- Login / Register Modal-->
                        <div class="modal fade login-register-form" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                             <div class="panel-heading">
                                        <h4 class="panel-title">
                                 <span class="glyphicon glyphicon-th"></span>
                                         Change password</h4>
                            </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div id="login-form" class="tab-pane fade in active">
                                                <form    method="GET" action="change_pass.php">
                                                    <div class="form-group">
                                                        <label for="username">Username:</label>
                                                        <input type="text" class="form-control"  placeholder="Enter username" name="username" value ="<?php echo $fetch_user?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password:</label>
                                                        <input type="text" class="form-control"  placeholder="Enter new password" name="password" value ="<?php echo $fetch_pass?>">
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                                    </div>
                                                     <input type="hidden" name="id" value ="<?php echo  $fetch_id ?>">
                                                    <button type="submit"  name="submit" value="submit" class="btn btn-success">Submit</button>
                                                </form>
                                            </div>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<?php
 require_once ("sql_connect.php");

   $id= $_GET['user_id'];

   $fetch = "SELECT * FROM `users` WHERE `user_id` = '$id' ";
   $query = mysqli_query($con,$fetch);
   $row = mysqli_fetch_assoc($query);

   $fetch_id = $row['user_id'];  
  $fetch_user = $row['username'];
  $fetch_pass = $row['password'];

?>