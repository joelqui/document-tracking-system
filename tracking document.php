<?php
session_start();
if (!isset($_SESSION['username'])){
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script scr="js/jquery-3.2.1.min.js"></script>
<script scr="js/bootsrap.js"></script>

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
 
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user']; ?> <span class="caret"></span></a>
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