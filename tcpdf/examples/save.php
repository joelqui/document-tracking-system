<?php
include_once ("connect_db.php");
if (isset($_GET['submit'])) 
{
	$sql="SELECT COUNT(*) as number
	FROM document
	WHERE CURDATE() = DATE(datetime_received)";
	$result=mysqli_query($conn,$sql);
	// Associative array
	$row=mysqli_fetch_assoc($result);
	$number = $row["number"];
	$new = $number + 1;
	$today = date("ymd");
	$date = $today;
	$final = sprintf("%'.03d\n",$new);
	$tracking = "$date"."$final";

	$doc_name = $_GET['document_name'];
	$tracking_number = $tracking;
	$submitted_by = $_GET['submitted_by'];

	
	
	 

			
		$sql = " INSERT INTO `document`(`document_name`, `tracking_number`, `submitted_by`, `datetime_received`) VALUES ('$doc_name' , '$tracking', '$submitted_by', CURRENT_TIMESTAMP)";
	if (mysqli_query($conn, $sql))
		 	{
		    echo "<script type = 'text/javascript'>alert('New Record Save')</script>"  ;
		    header('location: adddocumentsucc.php' );
		 
			}
		 else
			{
		    echo "<script type = 'text/javascript'>alert('Failed')</script>"  ;
			}

			$conn->close();

}
?>