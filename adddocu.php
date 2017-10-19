<?php

include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
    <title>Addocu</title>
   
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
                        <li><a href="tracking_document.php"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        <li class="active"><a href="adddocu.php"><span class="fa fa-file"></span> Add Documents</span></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">   
                            <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>"  class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="m_user" ><a href="view_users.php">Manage User</a></li>
                                <li id="m_department"><a href="view_departments.php">Manage Departments</a></li>
                                <li id="v_receiver"><a href="receiversview.php">View as Receiver</a></li>
                                <li id="v_department"><a href="department-views.php">View as Department</a></li>
                                <!--<li id="change_pass"><a href="change_pass.php">Change Password</a></li>-->
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

</div> <br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
                <div class="well">
                            
                            <form class="form-horizontal"  action="save.php" method="GET">
                                    <div class="form-group">
                                        <div class="col-sm-2"></div>
                                        <label class="control-label col-sm-2">Document Name:</label>
                                            <div class="col-sm-6">          
                                                <input type="text" class="form-control" id="document_name" placeholder="Document Name" name="document_name" required="">
                                            </div>
                                    </div>
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-2"></div>
                                            <label class="control-label col-sm-2">Submitted by:</label>
                                                <div class="col-sm-6">          
                                                    <input type="text" class="form-control" id="submitted_by" placeholder="Submitted by" name="submitted_by" required="">
                                                </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                                        
                                                <div class="col-sm-offset-4 col-sm-8">
                                                    
                                                    <button type="submit" class="btn btn-default" name="submit">
                                                        <span class="fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Add Document
                                                    </button>
                                                    
                                                            
                                              

                                              </div>
                                        </div>
                            
                        </form>
                            
                    
                </div>
        </div>
    </div>
</div>
</body>
</html>