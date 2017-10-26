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
    <script src="js/track_doc.js"></script> 

<style type="text/css">
    
    #errmsg
{
    font-family: Cooper Black;
color: red;
}
</style>

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
                        <li class="active"><a href="#"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">   
                 <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" data-dept="<?php echo $_SESSION['department_id'];?>" data-user="<?php echo $_SESSION['user_id']; ?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="add_doc"><a href="adddocu.php">Add Documents</a></li>
                               <li id="m_user" ><a href="view_users.php">Manage User</a></li>
                                <li id="m_department"><a href="view_departments.php">Manage Departments</a></li>
                               <li id="v_receiver"><a href="receiversview.php">View as Receiver</a></li>
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

</div>
<!-- ================nav end!!============================================================== -->    
<br><br><br><br><br><br>
<div class="container" style="width:850px;">
    <div class="panel panel-default">
        <div class="panel-body">
            <label>Track Your Document</label>
        
        <div class="form-inline" >

        <div class="form-group">
             <input type="submit"  class="btn btn-primary btn-md" name="search" id = "btnsearch" value="search"/>

          <input type="text" class="form-control" id="tracking_input" name="valueToSearch" value="" required=""  placeholder="search tracking number..." >&nbsp;<span id="errmsg"></span>
         
        </div>
      </div>
      
           <div id="result"></div>
    </div> 


    </div> 
    </div>
    </body>
</html>
