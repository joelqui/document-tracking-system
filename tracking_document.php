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
                 <li  id="usertype" data-organ="<?php echo $_SESSION['usertype'];?>" id="dept1" data-poop="<?php echo $_SESSION['department_id'];?>" class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span  class="fa fa-sign-in"></span> Log-in as: <?php echo $_SESSION['username']; ?>!  <span class="caret"></span></a>
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

</div>

<!-- ================BOOTSTRAP MODAL HERE start!!============================================================== -->    
<br><br>
<br><br>

	
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<label>Track Your Document</label>
			<form class="form-inline">
				<div class="form-group">
					<input type="text" class="form-control" id="name">
					<button type="button" class="btn">Go</button>
				</div>
			</form>
			<hr>
			<div class="col-sm-8">
				<label>Tracking Number : 20170907001</label><br>
				<label>Document Name &nbsp;: <u>SALARY CLAIM OF PERSON A</u></label>
			</div>
			<div class="col-sm-4">
				<label>Submitted By : PERSON B</label><br>
			</div>
			<table class="table table-bordered">
			<thead>
				<tr>
					<th>DATE/TIME</th>
					<th>STATUS</th>
					<th>USER</th>
					<th>REMARKS</th>
				</tr>
			</thead>
			<tbody>
				<tr>		
				
					<td>09/07/17 08:00</td>
					<td>RECEIVED AT RECORDS</td>
					<td>EDALINE</td>
					<td></td>

				</tr>
				<tr>		
				
					<td>09/07/17 09:30</td>
					<td>FORWARDED TO CID</td>
					<td>EDALINE</td>
					<td></td>

				</tr>
				<tr>		
				
					<td>09/07/17 10:00</td>
					<td>RECEIVED AT CID</td>
					<td>MALOU</td>
					<td></td>

				</tr>
				<tr>		
				
					<td>09/07/17 01:08</td>
					<td>FORWARDED TO FINANCE</td>
					<td>MALOU</td>
					<td></td>

				</tr>
			</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>