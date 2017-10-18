<?php
require_once ("sql_connect.php");

if(isset($_GET['submit'])){
	$id = $_GET['user_id'];
	$user= $_GET['username'];
	$pass= $_GET['password'];
	

	$query="UPDATE `users` SET `username`='$user',`password`='$pass'  WHERE `user_id`='$id'";
	$result= mysqli_query($con,$query);
	if ($result){

			echo "<script type = 'text/javascript'>alert('Updated!')</script> " ;
			echo "<script> windows: location='tryme.php'</script>";



	}
	else
	{

		echo "<script type = 'text/javascript'>alert('failed')</script> " ;
		echo "<script> windows: location='tryme.php'</script>";

	}
}

?>