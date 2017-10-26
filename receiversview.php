<?php

include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html>
<head>
    <title>Recievers View</title>
   
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/usertype.js"></script>
    <script type="text/javascript" src="js/receiver.js"></script>

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
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">   
                            <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" data-dept="<?php echo $_SESSION['department_id'];?>" data-user="<?php echo $_SESSION['user_id'];?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            	<li id="add_doc"><a href="adddocu.php">Add Documents</a></li>
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

</div>
<br><br><br>
<br><br>
</nav>
<div class="container">
  <div class="well">
  <h1>Receiver's View (Southern Leyte Division)</h1>
  
    <hr>
    
	<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">ON QUEUE</h5>
							</div>
							<div class="panel-body">					   			
								<select id="mySel"  class="selectpicker" size="20" multiple="multiple"  data-actions-box="true" style="width: 100%;">
					   				
					   			</select>
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal2"><span class="fa fa-chevron-right" aria-hidden="true"></span></button>
					</div>
					<div  class="modal fade" id="myModal2" role="dialog">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">FORWARD TO:</h4>
								</div>
								<div class="modal-body">
									<p>DEPT :</p>
									<br>
									<div class="row">
										<div class="col-sm-5">
											<select id = "dept" class="selectpicker" data-width="100%" placeholder = "Select Deparment">
												
											</select>
										</div>
									</div>
								</div>
								<div class="modal-footer">
								<button type="button" id="yup" class="btn btn-default">Ok</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								</div>
							</div>

						</div>
					</div>
					<div class="col-sm-5">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h5 class="panel-title">Forwarded</h5>
							</div>
							<div class="panel-body">
								<select  multiple="multiple" class="selectpicker" size="20" data-actions-box="true" id="mySel2" style="width: 100%;">
									
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
</div>
</body>
</html>

