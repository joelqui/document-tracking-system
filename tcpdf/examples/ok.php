<?php




require_once('tcpdf_include.php');
require_once ('connect_db.php');
require_once ('save.php');



// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// add a page	
$resolution= array(210, 297);	
// set margins	
$pdf->SetAutoPageBreak(false, 0);	$pdf->setCellMargins(0, 0, 0, 0);	
$pdf->setCellPaddings(0, 0, 0, 0);		
// remove default header/footer	
$pdf->setPrintHeader(false);	
$pdf->setPrintFooter(false);		
// get data from users table
//Set default monospaced font
$pdf->SetDefaultMonospacedFont('Arial');

//Add a page
$pdf->AddPage();

//Database parameter
$host = "localhost";
$username = "root";
$password = "";
$db_name = "document_tracking_system";



//connection to database
$conn = mysqli_connect($host, $username, $password, $db_name);
    $conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
  {
  die("Connection error: " . mysqli_connect_error());
  }
//execute the SQL query and return records
$result = mysqli_query($conn, 'SELECT * FROM document where document_id = (select max(document_id) from document)');

//Print query result
$tbl = '<table width="600px" border="1px">';

while($row = mysqli_fetch_array($result)) {
    $tracking = $row["tracking_number"];
    $row1 = $row["datetime_received"];
    $submitted_by = $row["submitted_by"];

    $tbl .= '<tr><td>' . $tracking . '</td><td>' . $row1 . '</td><td>' . $submitted_by . '<br></td><t/r>';
    }

$tbl .= '</table>';

//Print query result
$pdf->WriteHTML($tbl, true, false, false, false, '');

//Close and output PDF document
$pdf->Output('pdftest.pdf', 'I');

?>
