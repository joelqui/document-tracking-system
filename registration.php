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
    <script src="js/add_user.js"></script>

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
                        <li><a href="#" class=""><span class="fa fa-wrench"> </span> Under Construction</a></a></li>
                        <li><a href="#"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        <li><a href="adddocu.php"><span class="fa fa-file"></span> Add Documents</span></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        
                    <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="m_user" ><a href="view_users.php">Manage User</a></li>
                                <li id="m_department"><a href="view_departments.php">Manage Departments</a></li>
                                <li id="v_receiver"><a href="receiversview.php">View as Receiver</a></li>
                                <li id="v_department"><a href="doc_process/department-views.php">View as Department</a></li>
                                <li id="change_pass" ><a href="change_pass.php">Change Password</a></li>
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
               <li class="active"><a href="#vtab2" data-toggle="tab">Add User</a></li>
              <li><a href="view_users.php">View Users</a></li>
               <li><a href="add_departments.php">Add Departments</a></li>
            </ul>
        </div>
  <div class="container">
 
  <div class="row ">
               
                <div class="col-md-4  col-sm-2 col-sm-offset-1 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong><center>  <font color="red"><b>Add Users</b></font></strong>  
                            </div>
                            <div class="panel-body">
                               
                                
<br/>
                            <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                 <input type="text" class="form-control" id="first_name" name="first_name" required="" placeholder="Enter Firstname" autofocus>
                                  <span class="help-block"></span>
                       </div>
                      <div class="form-group input-group">
                         <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control" id="middle_name" name="middle_name" required="" placeholder="Enter Middlename">
                                  <span class="help-block"></span>
                       </div>
                      <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                  <input type="text" class="form-control"  id="last_name" name="last_name" required="" placeholder="Enter Lastname">
                                  <span class="help-block"></span>
                       </div>
                           <div class="form-group input-group">
                                   <span class="input-group-addon"><i class="fa fa-user"  ></i></span>
                                  <input type="text" class="form-control" id="username" name="username"  required="" placeholder="Enter Username">
                                  <span class="help-block"></span>
                       </div>
                       <div class="form-group input-group">
                                   <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                                              <input type="password" class="form-control" id="password"  required
                                              placeholder="Enter Password" autocomplete="off" >
                                  <span class="help-block"></span>
                       </div>
                     <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                       <select name="usertype" class="form-control" id="type">
                       <option >Select user type</option>
                       <option value="1">Admin</option>
                      <option value="2">User</option>
                     <option value="3">Receiver</option>
                    </select>
                        </div>
                      
                        <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-id-card-o"  ></i></span>
                                  
                       <select name="dept" class="form-control" id="dept" placeholder="Select Department">
      
                    </select>
                        </div>
                          
                                    <button type="submit" id="submit" value="submit" class="btn btn-md btn-primary btn-block">Submit </button>
                               
                                    
                            </div>                
                        </div>
                    </div> 
                </div>
            </div>

</body>
</html>

