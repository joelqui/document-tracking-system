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
                        <li ><a href="#" class=""><span class="fa fa-wrench"> </span> Under Construction</a></li>
                        <li><a href="tracking_document.php"><span class="fa fa-file"></span> Track Documents</span></a></li>
                        <li class="active"><a href="adddocu.php"><span class="fa fa-file"></span> Add Documents</span></a></li>
                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">   
                            <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
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
			<div class="row">
				<div class="col-sm-2 col-sm-10">
					<a href="adddocu.php" class="btn btn-default" role="button"> Back</a>
			     </div>
			</div>
			     		 <br>
					<div class="well">

						<form class="form-horizontal" method="post"  action="tcpdf/gen/aw.php">
							<div class="form-group">
							<?php
										require_once ("sql_connect.php");
										$sql="SELECT COUNT(*) as number
										FROM documents
										WHERE CURDATE() = DATE(datetime_received)";
										$result=mysqli_query($con,$sql);

										// Associative array
										$row=mysqli_fetch_assoc($result);
										$number = $row["number"];
										$today = date("ymd");
										$date = $today;
											$final = sprintf("%'.03d\n",$number);
											$tracking = "$date"."$final";

										?>

						    			<label class="control-label col-sm-2">Document Tracking No.:</label>
						    			<div class="col-sm-10"> 
											
											<p class="lead"><?php 
											
											echo $tracking;
											?>
											</p>
										</div>
										</div>
									  	<div class="form-horizontal" >
										  	<div class="form-group">
										    	<label class="control-label col-sm-2">Date & Time Received:</label>
										    	<div class="col-sm-10">
										    	<?php 
										    	$query = 'SELECT * FROM documents where document_id = (select max(document_id) from documents)';
										    	$kick = mysqli_query($con,$query);
										    	$res=mysqli_query($con,$query);

												// Associative array
												$row1=mysqli_fetch_assoc($res);	


										    	?>        
										        	<p class="lead"><?php echo $row1["datetime_received"]; ?></p>
										      	</div>
									  		</div>
									  		<div class="form-group">
										    	<label class="control-label col-sm-2">Submitted By:</label>
										    	<div class="col-sm-10">          
										        	<p class="lead"><?php echo $row1["submitted_by"]; ?> </p>
										      	</div>
									  		</div>
									  	</div>
									  	<div class="form-group">        
									      	<div class="col-sm-offset-2 col-sm-10">
									        	<button type="submit" name="generate_pdf" class="btn btn-default">
												<span class="fa fa-print" aria-hidden="true"></span>&nbsp;&nbsp;Print 
        										</button>
									        		
									      	</div>
									     </div>

									     <?php

										// Free result set
										mysqli_free_result($result);

										mysqli_close($con);
										?>
										
						</form>
					</div>
					

		</div>
	</div>
</div>
</div>
</body>
</html>
