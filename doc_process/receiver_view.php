<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/receiver.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Document Tracking System</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="#"><span class="fa fa-home" aria-hidden="true"></span> Home</a></li>
			<li><a href="#"><span class="fa fa-file-text" aria-hidden="true"></span> Track Document</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">View as Receiver</a></li>
					<li><a href="#">View as Department</a></li>
					<li><a href="#">Change Password</a></li>
					<li><a href="Logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="well">
			<h1>Receiver's View (Southern Leyte Division)</h1>
		</div>
	</div>
	<div class="row">
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
</div>
</body>
</html>