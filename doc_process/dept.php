<?php
	//Hello again again
	include_once('../sql_connect.php');
	$sql = mysqli_query($con,'SELECT * FROM `departments`');
	$rows = mysqli_num_rows($sql);
	while ($rows = mysqli_fetch_assoc($sql)){
	?>
	<option value="<?php echo $rows['department_id'] ?>"><?php echo $rows["department_name"]; ?></option>
	<?php
	}
?>